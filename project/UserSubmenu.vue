<template>
    <div class="sub-mov ulog-menu imenu hidden-md-down" :class="{'hide': !user}">
        <ul class="">
            <li><a href="/my-pepins" class="b12m100" :class="{'active' : my}">MY PEPINS</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/my-pepins/profile" class="b12m100" :class="{'active' : profile}">PROFILE</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/my-pepins/kyc" class="b12m100" :class="{'active': kyc}">KYC</a></li>
            <li class="issi"><span></span></li>
            <li :class="{'hide': !is_bo_user}"><a href="/backoffice" class="b12m100" :class="{'active': backoffice}">BACKOFFICE</a></li>
            <li :class="{'hide': !is_bo_user}" class="issi"><span></span></li>
            <li :class="{'hide': !is_bo_user}"><a href="/order-management" class="b12m100" :class="{'active': backoffice}">ORDER MANAGEMENENT</a></li>
            <li :class="{'hide': !is_bo_user}" class="issi"><span></span></li>
            <li><a href="" @click="logout" class="b12m100">LOG OUT</a></li>
        </ul>
    </div>

</template>

<script>

    export default {
        props: ['currentUrl', 'is_bo_user'],

        components: {  },

        data() {
            return {
               my: false,
               profile: false,
               kyc:false,
               backoffice:false,
               user:false
            }
        },
        created() {
            this.detectMy(this.currentUrl)
            this.isUser(this.currentUrl)
            this.detectKyc(this.currentUrl)
            this.detectBackoffice(this.currentUrl)
            this.detetectProfile(this.currentUrl)
        },
        computed: {

        },

        methods: {
            logout : function(e){
                e.preventDefault()
                document.getElementById('logout-form').submit()
            },
            detectMy: function(link){
                let a =/(my-pepins|my-pepins\/)$/.test(link)
                if (a) {
                    this.my = true
                }else{
                    this.my= false
                }
            },
            isUser:function(link){
                if(link.indexOf('/my-pepins') !== -1){
                    this.user = true
                }else{
                    this.user = false
                }
                
            },
            detetectProfile:function(link){
                if(link.indexOf('profile') !== -1){
                    this.profile = true
                }else{
                    this.profile = false
                }
                
            },
            detectKyc: function(link){
              if(link.indexOf('kyc') !== -1){
                    this.kyc = true 
               }else{
                    this.kyc = false
               }
            },
            detectBackoffice: function(link){
              if(link.indexOf('backoffice') !== -1){
                    this.backoffice = true 
               }else{
                    this.backoffice = false
               }
            }
        }
    }
</script>
