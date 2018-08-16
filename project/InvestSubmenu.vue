<template>

    <div class="sub-mov inve-menu imenu" :class="{'hide': !invest}">
        <ul class="">
            <li><a href="/companies/open" class="b12m100" :class="{'active' : ongoing}">ONGOING</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/companies/showcase" class="b12m100" :class="{'active' : showcase}">SHOWCASE</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/investment-structure" class="b12m100" :class="{'active' : how}">HOW TO</a></li>
        </ul>
    </div>

</template>

<script>

    export default {
        props: ['currentUrl'],

        components: {  },

        data() {
            return {
               ongoing: false,
               showcase: false,
               how:false,
               invest:false
            }
        },
        created() {
            this.detectOngoing(this.currentUrl)
            this.detectHow(this.currentUrl)
            this.detectShowcase(this.currentUrl)
            this.detectInvest(this.currentUrl)
        },
        computed: {

        },

        methods: {

            detectInvest: function(link){
                if(link.indexOf('companies/') !== -1 || link.indexOf('investment-structure') !== -1){
                    this.invest = true
                }else{
                    this.invest= false
                }
            },
            detectHow:function(link){
                if(link.indexOf('investment-structure') !== -1){
                    this.how = true
                }else{
                    this.how = false
                }
                
            },
            detectShowcase:function(link){
                if(link.indexOf('companies/showcase') !== -1){
                    this.showcase = true
                }else{
                    this.showcase = false
                }
                
            },
            detectOngoing: function(link){
              if(link.indexOf('companies/open') !== -1){
                    this.ongoing = true 
               }else{
                    this.ongoing = false
               }
            }
        }
    }
</script>
