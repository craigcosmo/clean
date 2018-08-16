<template>
    <div v-if="showTread">
        <div :id="'thread-'+id" class="minbox mb22">
            <div class="redband"> 
                <i>
                    <div><b></b></div>
                </i>
                <span class="a14r">{{ ago }}</span>
                <template v-if="authorize('owns', thread) || authorize('isAdmin')">
                    <div class="azui-c">
                        <div class="tabort am14b100" @click="destroy()">TA BORT</div>
                    </div>
                    <template v-if="this.single_view">
                        <div class="azui-x">
                            <a v-bind:href="'/shc/' + this.thread.channel.slug"><div class="stang a30l">x</div></a>
                        </div>
                    </template>
                </template>
                <template v-else>
                    <template v-if="this.single_view">
                        <div class="azui-c azui-x">
                            <a v-bind:href="'/shc/' + this.thread.channel.slug"><div class="stang a30l">x</div></a>
                        </div>
                    </template>
                </template>
            </div>    
            <div class="ozbox">
                <div v-if="showPopup">
                    <div :id="'thread-'+id" class="mb20">
                        <p>Vill du verkligen ta bort detta inlägg?</p> 
                        <button class="kyrie butcopy1 avb20" @click="destroy(1)">Ja</button>
                        <button class="kyrie butcopy1 avb20" @click="destroy(0)">Nej </button>     
                    </div>
                </div>
                <div class="azui" v-if="!showPopup">
                    <div class="azui-a">
                        <img :src="thread.creator.avatar_path" class="kala">
                    </div>
                    <div class="azui-b">
                        <div>
                            <span class="a12b black">{{ thread.creator.name }}</span> | <span class="a12r">{{ thread.channel.name }}</span> | <span class="a12r">{{ getType(thread.type) }}</span>
                        </div>
                        <div class="bodycopy1">{{ thread.created_at }}</div>
                    </div>
                </div>
                <template v-if="!showPopup">
                    <a v-bind:href="this.thread_path"><p class="mb24 a24b">{{ thread.title }}</p></a>
                </template>
                <div class="ar-wrap" v-if="!showPopup">
                    
                        <template v-if="this.expand">
                            <span class="trix-content subt a14l" v-html="thread.body"></span>
                        </template>
                        <template v-else>
                            <span class="trix-content subt a14l"><read-more more-str="Se mer" :text="thread.body" link="#" less-str="Dölj" :max-chars="250"></read-more></span>
                        </template>
                    
                </div>
                <template v-if="!showPopup">
                    <template v-if="thread.file_path">
                        <div class="atta" v-if="thread.file_type === 'application/pdf'">
                            <a v-bind:href="thread.file_path" target="_blank" class="atta-title a14b" style="overflow: scroll;">{{thread.file_name}}</a>
                        </div>
                        <div class="atta" v-else>
                            <div class="atta">
                                <img :src="thread.file_path" width="100%" height="100%">
                            </div>
                        </div>
                    </template>

                    <template v-if="thread.thread_link">
                        <template v-if="thread.thread_link.includes('youtu')">
                            <iframe width="100%" :height="this.iframe_height" :src="thread.thread_link" frameborder="0" allowfullscreen></iframe>
                        </template>
                        <template v-else>
                            <a v-bind:href="thread.thread_link" target="_blank" class="atta-title a14b" style="overflow: scroll;">{{thread.thread_link}}</a>
                        </template>
                    </template>
                </template>

                <hr class="line2 lul" v-if="!showPopup">
                <div class="row"  v-if="!showPopup">
                    <div class="col-12">
                        <div class="komsec">
                            <div class="df lagis a14r">
                                <div class="link-g">
                                    <template v-if="no_comments == 0">
                                        <like-button :likes="count" :thread="thread"></like-button>
                                        <div style="display: inline-block" @click="toggle()">Kommentarer (<span>{{this.repliesCount}}</span>)</div>
                                    </template>
                                </div>
                                <template v-if="thread.type!==2">
                                    <div class="link-g flex1 text-right">
                                        <a @click="showShareBox($event)" class="jkl a14r">
                                            Dela
                                        </a>
                                    </div>
                                    <div class="df maxh">
                                        <div class="arrow-wrapper">
                                            <div class="com-arrow arrow-up" v-bind:class="{ 'hide': !menu }" @click="toggle()"></div>
                                            <div class="com-arrow arrow-down" v-bind:class="{ 'hide': menu }" @click="toggle()"></div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <div class="df" v-if="shareBoxDisplay">
                                <div class="link-g flex1">
                                    <div class="akio hidden-md-down">
                                        <a href="#" @click="twit($event)" class="t-share-btn text-center" style="margin-right: 0px"><img class="nema" src="/images/t.png"></a>
                                        <a :href="`mailto:?subject=Pepins&body=Hej, Jag tror du skulle tycka detta är intressant ${this.social}`" target="_blank" class="text-center" style="margin-right: 0px"><img class="nema" src="/images/m.png"></a>
                                        <a href="#" @click="linked($event)" class="l-share-btn text-center" style="margin-right: 0px"><img class="nema" src="/images/i.png"></a>
                                        <a target="_blank" :href="`https://www.facebook.com/sharer/sharer.php?u=${this.social}`" class="text-center" style="margin-right: 0px"><img class="nema" src="/images/f.png"></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="akio akio2 hidden-md-up" v-if="shareBoxDisplay">
                                <a href="#" @click="twit($event)" class="t-share-btn text-center" style="margin-right: 0px"><img class="nema" src="/images/t.png"></a>
                                <a :href="`mailto:?subject=Pepins&body=Hej, Jag tror du skulle tycka detta är intressant ${this.social}`" target="_blank" class="text-center" style="margin-right: 0px"><img class="nema" src="/images/m.png"></a>
                                <a href="#" @click="linked($event)" class="l-share-btn text-center" style="margin-right: 0px"><img class="nema" src="/images/i.png"></a>
                                <a target="_blank" :href="`https://www.facebook.com/sharer/sharer.php?u=${this.social}`" class="text-center" style="margin-right: 0px"><img class="nema" src="/images/f.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="no_comments == 0">
                    <div class="kom-collection" v-bind:class="{ 'hide': !menu }">
                        <replies :key="thread.id" :thread="thread" @added="repliesCount++" @removed="repliesCount--"></replies>       
                    </div>
                </template>
            </div>
            
        </div>
    </div>
    <div v-else>
        <a href="/shc">Tillbaka till Stakeholders´ Club</a>
    </div>
</template>


<script>
    import ReadMore from './ReadMore.vue';
    import Replies from '../components/Replies.vue';
    import LikeButton from '../components/LikeButton.vue';
    import moment from 'moment';

    export default {

        props: ['thread', 'expand', 'count', 'iframe_height', 'single_view', 'no_comments'],

        components: {Replies, LikeButton},

        data() {
            return {
                repliesCount: this.thread.replies_count,
                menu: this.expand,
                showTread: true,
                id: this.thread.id,
                path: '/threads/' + this.thread.channel.slug + '/' + this.thread.slug,
                thread_path: '/shc/' + this.thread.channel.slug + '/' + this.thread.slug,
                social: location.protocol + '//' + location.host + '/shc/' + this.thread.channel.slug + '/' + this.thread.slug,
                shareBoxDisplay: false,
                showPopup: false
            };
        },

        mounted: function () {
            this.$nextTick(function () {
                if (this.expand) {
                    this.update();
                } else {
                    
                }
            })
        },

        computed: {
            ago() {
                return moment(this.thread.created_at).fromNow() + '...';
            }
        },

        methods: {
            twit(event){


                event.preventDefault()
                let width  = 575,
                    height = 400,
                    left   = ($(window).width()  - width)  / 2,
                    top    = ($(window).height() - height) / 2,
                    uri = encodeURIComponent(this.social),
                    text = '',
                    url = 'https://twitter.com/share?text='+text+'&url='+uri,
                    opts = 'status=1' + ',width=' + width + ',height=' + height +',top=' + top + ',left=' + left;
                  

                window.open(url, 'twitter', opts)
    
            },
            linked(event){

                event.preventDefault();
                let width  = 575,
                    height = 400,
                    left   = ($(window).width()  - width)  / 2,
                    top    = ($(window).height() - height) / 2,
                    uri = encodeURIComponent(this.social),
                    text = '',
                    url = 'http://www.linkedin.com/shareArticle?mini=true&url='+uri,
                    opts = 'status=1' + ',width=' + width + ',height=' + height +',top=' + top + ',left=' + left;
              
                window.open(url, 'twitter', opts)
            },
            toggle() {
                this.menu= !this.menu
            },
            destroy(confirm) {   

                if (typeof confirm === 'undefined' || confirm === null) {
                     this.showPopup = !this.showPopup; 
                } else {
                    if (confirm==1) {
                        axios.delete(this.path);
                        $('thread-'+this.id).toggleClass('hide');
                        this.showTread = false;
                        this.$emit('deleted', this.id);
                        this.showPopup = false; 
                    } else {                   
                        $('thread-'+this.id).toggleClass('show');    
                        this.showPopup = false; 
                    }   
                }  
                              
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
            update() {
                $('.' + 'thread' + this.thread.id).toggleClass('hide');
            },
            showShareBox(event) {
                event.preventDefault();
                this.shareBoxDisplay = !this.shareBoxDisplay;
            }
        }
    }
</script>
