<template>
    
    <div class="df mb24 gon">
        <div class="t1">
            <div class="maos">
                <div class="a14r">Antal:</div>
                <input class="cuk soli" type="number" name="shares" v-model.number="my_shares" v-on:focus="selectAll" >
                <input class="cuk soli" type="hidden" v-model.number="id" name="id" readonly>
            </div>
        </div>
        <div class="t2">
            <div class="maos">
                <div class="a14r">Kurs:</div>
                <input class="cuk"  type="number" name="price" v-model.number="price" readonly>
            </div>  
        </div>
        <div class="t3">
             <div class="maos">
                <div class="a14r">Totalt Belopp:</div>
                <input class="cuk" type="text" name="amount" v-model="amount" v-bind:value="{ amount }" readonly>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['issue', 'shares'],

        data() {
            return {
                price: this.issue.issue_price,
                id: this.issue.id,
                my_shares: this.shares
            };
        },

        computed: {
            amount: function () {
              return (this.price  * 
                this.my_shares).toLocaleString('sv-SE')
            }
        },
        
        methods: {
            selectAll: function (event) {
              // Workaround for Safari bug
              // http://stackoverflow.com/questions/1269722/selecting-text-on-focus-using-jquery-not-working-in-safari-and-chrome
              setTimeout(function () {
                event.target.select()
              }, 0)
            }
        }
    }
</script>
