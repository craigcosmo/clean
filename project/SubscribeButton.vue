<template>
    <div :class="classes" style="display: inline-block" @click="like">Gilla (<span>{{this.count}}</span>)
    </div>
</template>

<script>
    export default {
        props: ['thread', 'subscriptions'],

        data() {
            return { 
                path: '/threads/' + this.thread.channel.slug + '/' + this.thread.slug,
                count : this.subscriptions,
                active: this.thread.isSubscribed
             };
        },

        computed: {
            classes() {
                return ['link-g:', this.active ? 'blue-text' : 'gray-text'];
            },
            signedIn() {
                return window.App.signedIn;
            }
        },

        methods: {
            like() {
                    
                if (this.signedIn) {
                    axios[
                        (this.active ? 'delete' : 'post')
                    ](this.path + '/subscriptions');
                    this.count = (this.active ? this.count-1 : this.count+1);
                    this.active = ! this.active;
                } else {
                    show_error('Logga in för att gilla eller kommentera.');
                }
            }
        }
    }
</script>
