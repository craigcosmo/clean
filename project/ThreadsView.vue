<template>
    <div>
        <template v-if="this.channel.id>1&&this.channel.slug!='mine'&&this.channel.slug!='my-notifications'">
            <template v-if="signedIn">
                <template v-if="this.channel.only_shareholder_threads">
                    <template v-if="user_is_admin">
                        <create-thread :user_is_admin="user_is_admin" :channel_id="channel.id" :only_shareholder_threads="channel.only_shareholder_threads" @threadCreated="addThread"></create-thread>
                    </template>
                </template>
                <template v-else>
                    <create-thread :user_is_admin="user_is_admin" :channel_id="channel.id" :only_shareholder_threads="channel.only_shareholder_threads" @threadCreated="addThread"></create-thread>
                </template>
            </template>
            <template v-else>
                <div class="nytt-section mb20 bodycopy1 tqrl">
                    <p><span class="kitkit">Logga in för att göra inlägg</span></p>
                </div>
            </template>  
        </template>  
       
       <template v-if="this.channel.only_shareholder_threads == 0">
            <div class="hui mb22">
                <div class="aku heli" style="width:100%;" v-on:click="toggle()">
                    <div class="am14b100 heli"><span>{{ choosenType }}</span></div>
                    <span class="hui-arrow-down" v-bind:class="{ 'hide': menu }"></span>
                    <span class="hui-arrow-up" v-bind:class="{ 'hide': !menu }"></span>
                    <i></i>
                </div>
                <div class="hui-con" style="width:100%;" v-bind:class="{ 'hide': !menu }">
                    <div class="am14b100" @click="setType(0)">{{getType(0)}}</div>
                    <div class="am14b100" @click="setType(1)">{{getType(1)}}</div>
                    <div class="am14b100" @click="setType(2)">{{getType(2)}}</div>
                    <div class="am14b100" @click="setType(3)">{{getType(3)}}</div>
                    <div class="am14b100" @click="setType(4)">{{getType(4)}}</div>
                    <div class="am14b100" @click="setType(5)">{{getType(5)}}</div>
                </div>
            </div>
        </template> 
        <div v-if="allitem">
            <div v-for="(thread, index) in items">
                <thread-view :key="thread.id" v-if="thread != null" :thread="thread" :expand="expand" :count="thread.likesCount" :iframe_height="'273'" :single_view="0" :no_comments="channel.no_comments" @deleted="remove(index)"></thread-view>
            </div>

        </div>

        <paginator :dataSet="dataSet" @changed="fetch"></paginator>
    </div>
</template>

<script>
    import ThreadView from './ThreadView.vue';
    import CreateThread from './CreateThread.vue';
    import collection from '../mixins/collection';

    export default {
        components: { ThreadView, CreateThread },

        props: ['expand', 'channel', 'user', 'user_is_admin'],

        mixins: [collection],

        data() {
            return { 
                menu:false,
                dataSet: false,
                type: 0,
                path: '/threads/' + this.channel.slug,
                allitem:false
             };
        },

        created() {
            this.fetch();

            var self = this
            window.addEventListener('click', function(e){
                if (! e.target.parentNode.classList.contains('heli'))
                {
                    self.close()
                }
            }, false)
        },

        computed: {
            signedIn() {
                return window.App.signedIn;
            },
            choosenType: function () {
               return this.getType(this.type);
           }
        },

       /* destroyed() {
            Echo.leave('App.User.' + window.App.user.id);
        },*/

        methods: {
        
            fetch(page) {
                const currentPage = this.url(page);
                axios.get(currentPage).then(this.refresh);

            },

            getFilterPage(type){
                // let ul = new URLSearchParams(this.path)
                
                if (this.path.indexOf('type') == -1) {
                    this.path = this.path + '?type=' + type 
                }else{

                    let a = this.path
                    let  o1 = a.split('type=')[0]
                    let  o2 = a.split('type=')[1].substr(1)
                    
                    o2 = type + o2
                    this.path =  o1 +'type='+ o2
                }

                if (type === 0 ) {
                    this.path = this.path.replace('type=0','')
                }
                // alert(this.path)
               

                axios.get(this.path).then(this.refresh)
            },
            url(page) {
                if (! page) {
                    let query = location.search.match(/page=(\d+)/);

                    page = query ? query[1] : 1;
                }

                // return `${this.path}`;
                return `${this.path}?page=${page}`;
            },

            refresh({data}) {
                // console.log('time')
                this.dataSet = data;
                this.items = data.data;
                // console.log('item',this.items)
                //this.unfiltered_items = JSON.parse(JSON.stringify(this.items));
                for (var key in this.items) {
                    this.unfiltered_items.push(this.items[key]);
                }
                
                // check if object is not empty
                if (Object.keys(this.items).length) {
                    this.allitem=true
                }else{
                    this.allitem=false
                }
                //window.scrollTo(0, 450);
            }, 
            toggle() {

                this.menu= !this.menu

            },
            close(){
                this.menu =false
            },
            setType: function (type) {
                switch(type) {
                    case 0:
                        this.filterZero();
                        break;
                    case 1:
                        this.filterOne();
                        break;
                    case 2:
                        this.filterTwo();
                        break;
                    case 3:
                        this.filterThree();
                        break;
                    case 4:
                        this.filterFour();
                        break;
                    case 5:
                        this.filterFive();
                        break;
                    default:
                        return 'Unkown type';
                }
                this.type = type;
                this.getFilterPage(type)
            },
            getType: function (type) {
                switch(type) {
                    case 0:
                        return 'ALL INFORMATION';
                        break;
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
            }
        }
    }

</script>
