<template>
    <div class="sa-wrap pushdrop mb22">
        <div class="nui">
            <div class="am16b100 text-center nui-head">SKRIV NYTT INLÄGG</div>
            <span class="nui-arrow-down a-down"></span>
            <span class="nui-arrow-up hide a-up"></span>
        </div>
        <div class="abform hide reg-publish">
            <template v-if="user_is_admin">
                <div class="frap">
                    <div class="f-m cyu" style="width:100%;" @click="toggle()">
                        <div class="am14b100 cyu"><span>{{ choosenType }}</span></div>
                        <span class="fm-arrow-down" v-bind:class="{ 'hide': menu }"></span>
                        <span class="fm-arrow-up" v-bind:class="{ 'hide': !menu }"></span>
                        <i></i>
                    </div>
                    <div class="frap-con" style="width:100%;" v-bind:class="{ 'hide': !menu }">
                        <template v-if="only_shareholder_threads">
                                <div class="am14b100 cino" @click="setType(3)">{{getType(2)}}</div>
                        </template>
                        <template v-else>
                            <div class="am14b100 cino" @click="setType(1)">{{getType(1)}}</div>
                            <template v-if="user_is_admin">
                                <div class="am14b100 cino" @click="setType(2)">{{getType(2)}}</div>
                                <div class="am14b100 cino" @click="setType(3)">{{getType(3)}}</div>
                                <div class="am14b100 cino" @click="setType(4)">{{getType(4)}}</div>
                                <div class="am14b100 cino" @click="setType(5)">{{getType(5)}}</div>
                            </template>
                        </template>
                    </div>
                </div>
            </template>
            <div>
                <input type="text" class="forin" v-model="title" id="title" name="title" placeholder="RUBRIK" required>
                <wysiwyg :created="created" v-model="body" id="body" name="body" placeholder="DITT MEDDELANDE"></wysiwyg>
                <textarea class="r-text mb20 hide" v-model="body" id="vg" name="body" placeholder="DITT MEDDELANDE" required></textarea>

                
                <template v-if="file_attached">
                        <div class="atta" v-if="file_type === 'application/pdf'">
                             <div class="atta-item">
                                <span class="atta-title a14b">{{file_name}}</span>
                                <span class="atta-cancel a14b" @click="remove_attachment">Ta bort</span>
                            </div>
                        </div>
                        <div class="atta" v-else>
                             <div class="atta">
                                <img :src="file_path" width="100%" height="100%">
                                <span class="atta-cancel a14b" @click="remove_attachment">Ta bort</span>
                            </div>
                        </div>
                </template>
                 
                <template v-if="show_link">
                    <input type="text" class="forin" v-model="thread_link" id="thread_link" name="thread_link" placeholder="LINK http://www..">
                </template>

                <div class="df vimo">
                    
                        <form method="POST" enctype="multipart/form-data" class="upform bansa">
                            <span>BIFOGA</span>
                            <file-upload name="thread_attachment" class="balka" @loaded="onLoad"></file-upload>
                        </form>
                        <div class="hidden-md-up">
                            <form method="POST" enctype="multipart/form-data" class="upform bansa">
                                <span>KAMERA</span>
                                <camera-upload name="thread_attachment" class="balka" @loaded="onLoad"></camera-upload>
                            </form>
                        </div>
                    
                        <div class="balka bansa" v-on:click="toggle_link()"><span>LÄNKA</span></div>
                    
                    <button class="black-frame am14b120 for-btn bansa" v-bind:class="{ 'disbtn': this.disabled }" @click="publish" :disabled="this.disabled">{{ this.disabled ? 'PUBLICERAR' : 'PUBLICERA' }}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import FileUpload from './FileUpload.vue';
    import CameraUpload from './CameraUpload.vue';

    export default {
        props: ['channel_id', 'user', 'user_is_admin', 'only_shareholder_threads'],
        components: { 'file-upload': FileUpload ,'camera-upload': CameraUpload},
        created()
        {
            var self = this
            window.addEventListener('click', function(e){
                if (! e.target.parentNode.classList.contains('cyu'))
                {
                    self.close()
                }
            }, false)

            window.addEventListener("trix-attachment-add", function(event) {
                var attachment;
                attachment = event.attachment;
                if (attachment.file) {
                  return self.onDragDrop(attachment);
                }
              });
        },
        data() {
            return {
                menu:false,
                created:false,
                show: false,
                show_link: false,
                title: '',
                body: '',
                disabled: false,
                type: 1,
                file_name: '',
                file_attached: 0,
                file_path: '',
                file_type: '',
                thread_link: ''
            };
        },
        computed: {
            //canUpdate() {
            //    return this.authorize(user => user.id === this.user.id);
            //},
            signedIn() {
                return window.App.signedIn;
            },
            choosenType: function () {
                if (this.only_shareholder_threads) {
                    this.type = 2;
                } 
                return this.getType(this.type);
            }
        },
        methods: {

            remove_attachment() {
                this.file_name = '';
                this.file_path = '';
                this.file_type = '';
                this.file_attached = 0;
            },
            onLoad(attachment) {
                this.file_name = attachment.file.name;
                this.file_type = attachment.file.type;
                this.persist(attachment.file);
            },
            onDragDrop(attachment) {
                let data = new FormData();

                data.append('thread_attachment', attachment.file);
                axios.post(`/api/thread/attachment`, data)
                    .then(({ data }) => {
                        var url = data
                        var href = data
                        return attachment.setAttributes({
                          url: url,
                          href: href
                        });
                    }).catch(error => {
                        /*this.body = error.response.data;*/
                        
                    });
            },
            persist(file) {
                let data = new FormData();

                data.append('thread_attachment', file);
                //this.body = this.file_type + ' ' + this.file_name + ' size ' +file.size;

                axios.post(`/api/thread/attachment`, data)
                    .then(({ data }) => {
                        this.file_path = data;
                        this.file_attached = 1;
                    }).catch(error => {
                        /*this.body = error.response.data;*/
                        
                    });
            },

            toggle() {
                this.menu = !this.menu;
            },

            toggle_link() {
                this.show_link = !this.show_link;
            },
            close(){
                this.menu =false
            },
            setType: function (type) {
                this.type = type;
            },
            getType: function (type) {
                switch(type) {
                    case 1:
                        return 'MEDDELANDE';
                        break;
                    case 2:
                        return 'DELÄGARINFORMATION';
                        break;
                    case 3:
                        return 'FINANSIELL INFORMATION';
                        break;
                    case 4:
                        return 'REKRYTERING';
                        break;
                    case 5:
                        return 'NYHETER';
                        break;
                    default:
                        return 'Unkown type';
                }
            },
            publish() {
                this.created = false
                this.disabled = true;
                if (this.title == '') {
                    show_error('Titel kan inte vara tom.');
                    this.disabled = false;
                    return;
                }
                axios.post(
                    '/threads', {
                        title: this.title,
                        body: this.body,
                        channel_id: this.channel_id,
                        type: this.type,
                        file_path: this.file_path,
                        file_name: this.file_name,
                        file_type: this.file_type,
                        thread_link: this.thread_link
                    })
                    .then(({ data }) => {
                        this.disabled = false;
                        this.title = '';
                        this.body = '';
                        this.thread_link = '';
                        this.remove_attachment();
                        window.$('.reg-publish').toggleClass('hide');
                        
                        if (data.id) {
                            this.$emit('threadCreated', data);
                            this.created = true
                        } else {
                            show_error(data.error);
                        }
                        // clear trix after submit

                        // document.getElementById("trix-form").reset();
                        // let f = document.getElementById("trix-form")
                        // let div = f.querySelector('.alba').querySelector('div').innerHTML=''

                        console.log(div)
                        // console.log('done publish')
                    })
                    .catch(error => {
                        //console.log('something here')
                        console.log(error)
                        // show_error(error.response.data);
                        this.disabled = false;
                    });
            }
        }
    }
</script>
