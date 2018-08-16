<template>
    <div class="row mb60">
        <div class="col-md-3 col-12">
            <avatar-form :user="user"></avatar-form>
         </div>
         <div class="col-md-3 col-12">
            <input type="text" class="rag-input" v-model="address" name="address" id="address" placeholder="GATUADRESS">
        </div>
        <div class="col-md-3 col-12">
            <input type="text" class="rag-input" name="user_category" id="user_category" v-model="user_category" placeholder="KUNDKATEGORI" readonly>
        </div>
        <div class="col-md-3 col-12">
            <input type="text" class="rag-input" name="personnumber" id="personnumber" v-model="verification_national_id" placeholder="PERSONNUMMER" readonly>
        </div>
        <div class="col-md-3 col-12">
            <input type="text" class="rag-input" name="firstname" id="firstname" v-model="firstname" placeholder="FÖRNAMN">
        </div>
        <div class="col-md-3 col-12">
            <input type="text" class="rag-input" name="lastname" id="lastname" v-model="lastname" placeholder="EFTERNAMN">
        </div>
        <div class="col-md-3 col-12">
            <input class="rag-input" type="text" name="zipcode" id="zipcode" v-model="zipcode" placeholder="POSTNUMMER">
        </div>
        <div class="col-md-3 col-12">
            <input type="text" class="rag-input" name="mobile" id="mobile" v-model="mobile" placeholder="MOBILNUMMER">
        </div>
        <div class="col-md-3 col-12">
            <input class="rag-input" type="text" name="country" id="country" v-model="country" placeholder="LAND">
        </div>
        <div class="col-md-3 col-12">
            <input type="text" class="rag-input" name="postarea" id="postarea" v-model="postarea" placeholder="ORT">
        </div>
        <div class="col-md-3 col-12">
            <input class="rag-input" type="email" name="email" id="email1" v-model="email" placeholder="EMAIL" readonly>
        </div>
        <div class="col-md-3 col-12">
            <button type="submit" @click="update" class="main-box-btn butcopy1 uptera">SPARA</button>
        </div>
        <div class="col-md-3 col-12"></div>
                
    </div>
</template>

<script>
    import AvatarForm from './AvatarForm.vue';
    export default {
        props: ['user', 'mail'],

        data() {
            return {
                address: this.user.address,
                user_category: this.user.user_category,
                verification_national_id: this.user.verification_national_id,
                firstname: this.user.firstname,
                zipcode: this.user.zipcode,
                mobile: this.user.mobile,
                country: this.user.country,
                lastname: this.user.lastname,
                postarea: this.user.postarea,
                email: this.mail
            };
        },

        methods: {
            update() {
                axios.post(
                    '/my-pepins/profile', {
                        address: this.address,
                        phone: this.phone,
                        verification_national_id: this.verification_national_id,
                        firstname: this.firstname,
                        zipcode: this.zipcode,
                        mobile: this.mobile,
                        country: this.country,
                        lastname: this.lastname,
                        postarea: this.postarea,
                        email: this.email
                    })
                    .catch(error => {
                        show_error(error.response.data);
                    });

                $('#user-nick').text( this.firstname + ' ' + this.lastname);
                flash('Updated!');
            }
        }
    }
</script>
