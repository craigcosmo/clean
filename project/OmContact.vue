<template>
    <div class="ska mail-panel hide">
        <div class="mb20 a13r text-center">Skicka gärna synpunkter och feedback direkt till oss på {{name}}</div>
        <!--<form method="POST" enctype="multipart/form-data" class="omc" action="/shc-contact">-->
            <input type="text" class="forin" id="title" v-model="title" name="title" placeholder="RUBRIK" required>
            <textarea class="forin tgg" v-model="message" placeholder="Ditt meddelande" required></textarea>
            <input type="text" class="forin" id="email2" name="email" v-model="email" placeholder="Din email" required>
            <div class="text-center mb12">
                <button class="sia" @click="send">SKICKA MEDDELANDE</button>
            </div>
            <div class="text-center a14b" @click="close">Stäng</div>
        <!--</form>-->
    </div>
</template>

<script>
    export default {
        props : ['name', 'channel_id'],

        components: {  },

        data() {
            return {
                title:'',
                message:'',
                email:''
            }
        },

        computed: {

        },

        methods: {
            send() {
                axios.post(
                    '/shc-contact', {
                        title: this.title,
                        message: this.message,
                        email: this.email,
                        channel_id: this.channel_id
                    }) .then(({ data }) => {
                        if (data) {
                            show_error(data);
                        }
                        this.close()
                    })
                    .catch(error => {
                        show_error(error.response.data);
                    });
                

                flash('Meddelandet är skickat!');
            },
            close() {
                $('.mail-panel').toggleClass('hide');
                $('.lupo').toggleClass('hide');
            }
            

        }
    }
</script>
