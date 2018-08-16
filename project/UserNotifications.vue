<template>

    <div class="pilo-box ko-green ">
        <div class="pilo-box-text pr">
            <div class="soc ">
                <span>{{length}}</span>
            </div>
            <h4 class="text-center">NYA HÄNDELSER</h4>
            <div><hr class="line5"></div> 
            <div v-for="notification in notifications">
                <div class="df teon">
                    <div class="amai"><img :src="notification.data.creator_avatar"></div>
                    <div class="sakai">
                        <a :href="notification.data.link" v-text="notification.data.message" @click="markAsRead(notification)"></a>
                        <div>{{notification.created_at}}</div>   
                    </div>
                </div>
            </div>

        </div>
        <div><hr class="line5"></div> 
        <div class="text-center"><a href="/shc/my-notifications">Se alla nya händelser</a></div>
    </div>

</template>

<script>
    export default {
        data() {
            return { notifications: false,
                     length:0 }
        },

        created() {
            axios.get('/profiles/' + window.App.user.name + '/notifications')
                .then(response => {
                    this.length = response.data.length;
                    this.notifications = response.data.slice(0,5)
                });
        },

        methods: {
            markAsRead(notification) {
                axios.delete('/profiles/' + window.App.user.name + '/notifications/' + notification.id)
            }
        }
    }
</script>
