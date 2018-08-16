<template>
    <div>
        <div v-if="signedIn">
            <div>
                <textarea name="body"
                          id="body"
                          class="r-text mb20 hide"
                          style="margin-top:20px"
                          placeholder="Kommentera"
                          rows="5"
                          required
                          v-model="body"></textarea>

                <wysiwyg :created="created" v-model="body" id="body" name="body" placeholder="DITT MEDDELANDE"></wysiwyg>
            </div>

            <button type="submit"
                    class="black-frame am14b120 for-btn"
                    @click="addReply">PUBLICERA</button>
        </div>

        <p class="text-center kitkit tqrl" v-else>
            Logga in för att diskutera.
        </p>
    </div>
</template>

<script>
    import 'jquery.caret';
    /*import 'at.js';*/

    export default {
        props: ['thread'],

        data() {
            return {
                created: false,
                body: '',
                path: '/threads/' + this.thread.channel.slug + '/' + this.thread.slug
            };
        },

        computed: {
            signedIn() {
                return window.App.signedIn;
            }
        },

       /* mounted() {
            $('#body').atwho({
                at: "@",
                delay: 750,
                callbacks: {
                    remoteFilter: function(query, callback) {
                        $.getJSON("/api/users", {name: query}, function(usernames) {
                            callback(usernames)
                        });
                    }
                }
            });
        },*/

        methods: {
            addReply() {
                this.created = false
                axios.post(this.path + '/replies', { body: this.body })
                    .catch(error => {
                        flash(error.response.data, 'danger');
                    })
                    .then(({data}) => {
                        this.body = '';

                        flash('Ditt svar var publicerats.');

                        this.$emit('created', data);
                        this.created = true
                    });
            }
        }
    }
</script>
