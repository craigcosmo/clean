<template>
    <div>
        <div v-for="(reply, index) in items" :key="reply.id">
            <reply :data="reply" @deleted="remove(index)"></reply>
        </div>

        <paginator :dataSet="dataSet" @changed="fetch"></paginator>

        <new-reply :thread="thread" @created="add"></new-reply>
    </div>
</template>

<script>
    import Reply from './Reply.vue';
    import NewReply from './NewReply.vue';
    import collection from '../mixins/collection';

    export default {
        components: { Reply, NewReply },

        props: ['thread'],

        mixins: [collection],

        data() {
            return { 
                dataSet: false,
                path: '/threads/' + this.thread.channel.slug + '/' + this.thread.slug

             };
        },

        created() {
            
            this.fetch();

            
        },

        /*
        destroyed() {
            Echo.leave('App.User.' + window.App.user.id);
        },*/

        methods: {
            fetch(page) {
                axios.get(this.url(page)).then(this.refresh);
            },

            url(page = 1) {
                return `${this.path}/replies?page=${page}`;
            },

            refresh({data}) {
                this.dataSet = data;
                this.items = data.data;

                //window.scrollTo(0, 0);
            }
        }
    }

</script>
