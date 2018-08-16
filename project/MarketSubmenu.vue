<template>
    <div class="sub-mov trading-menu imenu hidden-md-down" :class="{'hide': !market}">
        <ul class="">
            <li><a href="/market" class="b12m100" :class="{'active' : trade}">TRADED COMPANIES</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/market/listing" class="b12m100" :class="{'active' : listing}">LISTINGS</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/market/how-to" class="b12m100" :class="{'active' : how}">HOW TO</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/market/price-list" class="b12m100" :class="{'active' : price_list}">PRICE LIST</a></li>
            <li class="issi"><span></span></li>
            <li><a href="/market/calendar" class="b12m100" :class="{'active' : calendar}">CALENDAR</a></li>
        </ul>
    </div>

</template>

<script>

    export default {
        props: ['currentUrl'],

        components: {  },

        data() {
            return {
               trade: false,
               listing: false,
               how:false,
               market:false,
               price_list:false,
               calendar:false
            }
        },
        created() {
            this.detectTrade(this.currentUrl)
            this.detectHow(this.currentUrl)
            this.detectListing(this.currentUrl)
            this.detectMarket(this.currentUrl)
            this.detectTrading(this.currentUrl)
            this.detectCalendar(this.currentUrl)
            this.detectPriceList(this.currentUrl)
        },
        computed: {

        },

        methods: {


            detectHow:function(link){
                if(link.indexOf('/market/how-to') !== -1){
                    this.how = true
                }else{
                    this.how = false
                }
                
            },
            detectListing:function(link){
                if(link.indexOf('market/listing') !== -1){
                    this.listing = true
                }else{
                    this.listing = false
                }
                
            },
            detectPriceList:function(link){
                if(link.indexOf('market/price-list') !== -1){
                    this.price_list = true
                }else{
                    this.price_list = false
                }
                
            },
            detectCalendar:function(link){
                if(link.indexOf('market/calendar') !== -1){
                    this.calendar = true
                }else{
                    this.calendar = false
                }
                
            },
            detectMarket: function(link){
                if(link.indexOf('market') !== -1){
                    this.market = true
                }else{
                    this.market= false
                }
            },
            detectTrading: function(link){
                if(link.indexOf('trading') !== -1){
                    this.trade = true
                    this.market = true
                }else{
                    this.trade= false
                }
            },
            detectTrade: function(link){
                let a =/(market|market\/)$/.test(link)
                if (a) {
                    this.trade = true
                }else{
                    this.trade= false
                }
            }
        }
    }
</script>
