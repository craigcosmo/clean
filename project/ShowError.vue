<template>
    <div class="error-overlay imenu" v-show="show">
        <div class="close-button" @click="hide">✕</div>
        <div class="container mtte">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt30 incopy2" v-html="body"></div>
                    <div id="hsformContainer" class="hsformContainer" v-show="show_hs">
                        <p id="errorText"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['message', 'visable'],

        data() {
            return {
                body: this.message,
                show: this.visable,
                show_hs: false
            }
        },

        created() {
            if (this.message) {
                if ((this.body.charAt(0) == '"') && (this.body.charAt(this.body.length -1) == '"')) {
                    this.body = this.body.slice(1, -1);
                }
                this.show_error();
            }

            window.events.$on(
                'show_error', data => { if (!this.visable) {this.show_error(data);}}
            );
        },

        methods: {
            show_error(data) {
                if (data) {
                    this.body = data.message;
                    if (data.hubspot_form_id) {
                        this.show_hs = true;
                        this.show_hubspot_form(data.hubspot_form_id)
                    }
                }

                this.show = true;
            },

            show_hubspot_form(id) {
                hbspt.forms.create({ 
                    portalId: '1881322',
                    target: '#hsformContainer',
                    formId: id,
                    cssClass:'',
                    css:'a17l bodycopy1 mb40 hsformContainer'
                  });

            },

            hide() {
                this.show = false;
            }
        }
    };
</script>
