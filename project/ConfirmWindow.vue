<template>
   <div class="confirm-window" :class="{ 'hide': !confirmWindow }">
      <div class="a14m mb10">
          <span>Du {{ getSide() }} nu aktier för ett totalt värde av {{amount}} SEK.</span>
          <template v-if="this.all_or_nothing">
            <span>Ordern är en allt eller inget order</span>
          </template>
          <span>Ordern är bindande och kommer innebära kostnader.</span> 
      </div>
      <div class="a14m mb40">
        <template v-if="this.t_event.company.listing_market==1">
            <div class="mb10"><span>Läs om kostnader för denna produkt <a href="https://files.pepins.com/policies/Instrumentets_Kostander_och_avgifter_Alternativa_Listan.pdf" target="_blank">här</a>.</span></div>
            <div class="mb10"><span>Läs om målgruppen för denna produkt <a href="https://files.pepins.com/policies/Instrumentets_Malgrupp_Alternativa_Listan.pdf" target="_blank">här</a>. 
            </span></div>
        </template>

        <template v-if="this.t_event.company.listing_market==2">
            <div class="mb10"><span>Läs om kostnader för denna produkt <a href="https://files.pepins.com/policies/Instrumentets_Kostander_och_avgifter_Pepins_Market.pdf" target="_blank">här</a>.</span></div>
            <div class="mb10"><span>Läs om målgruppen för denna produkt <a href="https://files.pepins.com/policies/Instrumentets_Malgrupp_Pepins_Market.pdf" target="_blank">här</a>. 
            </span></div>
        </template>
      </div>
      <div class="a14m">
          <div class="mb10">Pris: {{orderPrice.toLocaleString('sv-SE')}}</div>
          <div>Antal: {{orderVolume.toLocaleString('sv-SE')}}</div>
      </div>
      <div class="saladin">
           <button class="kyrie butcopy1 avb20" @click="closeCon">AVBRYT</button>
           <button class="kyrie butcopy1" @click="confirmbtn">SKICKA ORDERN</button>
      </div>
   </div>
</template>

<script>

    export default {
        props: ['confirmWindow', 'orderVolume', 'orderPrice', 'closeCon', 'buy', 'sell', 'doing', 'all_or_nothing', 't_event'],

        data() {
            return {
              marketValue: this.orderVolume * this.orderPrice
            }
        },
        computed: {
          amount: function () {
              return (
                this.orderVolume  * 
                this.orderPrice).toLocaleString('sv-SE')
            },
        },
        methods: {
            confirmbtn: function(){
                if (this.doing ===1) {
                    this.buy()
                    this.closeCon()
                }
                if (this.doing ===2) {
                    this.sell()
                    this.closeCon()
                }
            },
            getSide: function(){
                if (this.doing ===1) {
                    return 'KÖPER'
                }
                else if (this.doing ===2) {
                    return 'SÄLJER'
                }
                else {
                  return 'UNKNOWN SIDE'
                }
            }
        }
    }
</script>
