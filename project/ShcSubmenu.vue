<template>
    <div class="sub-mov shc-menu imenu " :class="{'hide': !shc}">
        <ul class="">
            <li><a href="/shc" class="b12m100" :class="{'active' : alla}">ALLA BOLAG</a></li>
            <li v-if="signedIn" class="issi"><span></span></li>
            <li v-if="signedIn"><a href="" class="b12m100 minbolag">MINA BOLAG</a></li>
            <li class="issi"><span></span></li>
            <li><a href="" class="b12m100 valbolag" :class="{'active': val}">VÄLJ BOLAG</a></li>
        </ul>
    </div>

</template>

<script>
    

    export default {
        props: ['currentUrl'],

        components: {  },

        data() {
            return {
               alla: false,
               shc: false,
               val:false,
            }
        },
        created() {
            this.detectAlla(this.currentUrl)
            this.isShc(this.currentUrl)
            this.detectVal(this.currentUrl)
        },
        computed: {
            signedIn() {
                return window.App.signedIn;
            }
        },

        methods: {
            detectAlla: function(link){
                let a =/(shc|shc\/)$/.test(link)
                if (a) {
                    this.alla = true
                }else{
                    this.alla= false
                }
            },
            isShc:function(link){
                if(link.indexOf('/shc') !== -1){
                    this.shc = true
                }else{
                    this.shc = false
                }
                
            },
            detectVal: function(link){
               let v = link.split('/shc/')
               if (v[1]) {
                    this.val = true 
               }else{
                    this.val = false
               }
            }
        }
    }
</script>
