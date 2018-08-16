<template>
    <div>
        <form v-if="canUpdate" method="POST" enctype="multipart/form-data" class="upform">
            <img :src="avatar" width="200" height="200" class="mr-1">
            <span class="a14b" v-if="avatar">Ändra bild</span>
            <span class="a14b" v-else>Ladda upp bild</span>
            <image-upload name="avatar" class="mr-1" @loaded="onLoad"></image-upload>
        </form>
    </div>
</template>

<script>
    import ImageUpload from './ImageUpload.vue';

    export default {
        props: ['user'],

        components: { ImageUpload },

        data() {
            return {
                avatar: this.user.avatar_path
            };
        },

        computed: {
            canUpdate() {
                return this.authorize(user => user.id === this.user.id);
            }
        },

        methods: {
            onLoad(avatar) {
                this.avatar = avatar.src;

                this.persist(avatar.file);
            },

            persist(avatar) {
                let data = new FormData();

                data.append('avatar', avatar);

                axios.post(`/api/users/${this.user.name}/avatar`, data)
                    .then(() => flash('Avatar uploaded!'));
            }
        }
    }
</script>
