<script>
    import Replies from '../components/Replies.vue';
    import LikeButton from '../components/LikeButton.vue';

    export default {
        props: ['initialRepliesCount', 'thread', 'expand', 'count'],

        components: {Replies, LikeButton},

        data() {
            return {
                repliesCount: this.initialRepliesCount
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

        methods: {
            update() {
                $('.' + 'thread' + this.thread.id).toggleClass('hide');
            }
        }
    }
</script>
