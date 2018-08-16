<template>
    <div class="strom">
        <div class="row">
            <div class="col-md-5 col-12">
                <div class="a24m30">Betalning</div>
                <div class="df namo">
                    <div class="ami a14b50">TECKNINGSKURS:</div>
                    <div class="a19b">{{this.issue.issue_price}}  {{this.issue.issue_currency}}</div>
                </div>
                <div class="df namo">
                    <div class="ami a14b50">ANTAL AKTIER:</div>
                    <div class="a19b">{{this.shares}} aktier</div>
                </div>
                <div class="df namo" v-show="show">
                    <div class="ami a14b50">PRESENTKORT:</div>
                    <div class="a19b">{{ gift_card_value }} {{this.issue.issue_currency}}</div>
                </div>
                <div class="df namo">
                    <div class="ami a14b50">TOTALT BELOPP:</div>
                    <div class="a19b" v-text="amount"></div>
                </div>
                <template v-if=invoice_confirmed>
                    <div class="a24m30 mt20">Faktura kostar {{billogram_cost}}kr, fakturaadress:</div>
                    <div class="df namo">
                        <template v-if=my_invest_as_company>
                            <div class="ami a14b50">{{user.company_name}}</div>
                            <div class="ami a14b50">C/O {{user.name}}</div>
                        </template>
                        <template v-else>
                            <div class="ami a14b50">{{user.name}}</div>
                        </template>
                    </div>
                    <div class="df namo">
                        <div class="ami a14b50">{{user.address}}</div>
                    </div>
                    <div class="df namo">
                        <div class="ami a14b50">{{user.zipcode}} {{user.postarea}}</div>
                    </div>
                    <div class="df namo">
                        <div class="ami a14b50">{{user.country}}</div>
                    </div>
                </template>
                <template v-if=no_invoice_address>
                    <div class="a24m30 mt20">Fullständing address saknas</div>
                    <div class="df namo">
                        <div class="ami a14b50">För att betala med faktura måste fullständig address fyllas i. Fyll i addressen i <a href="/profile">profile</a></div>
                    </div>
                </template>
            </div>
            <div class="col-md-7 col-12 coolpad">
                <div class="df mb22">
                    <div class="flex1 limbo">
                        <div class="a12b">Presentkortskod</div>
                        <div>
                            <input class="mimo" type="text" v-model="gift_card_code" name="gift_card_code">
                        </div>
                    </div>
                    <div class="flex1">
                        <div class="blank-hide a12b">a</div>
                        <button type="submit" @click="getGiftCardValue" class="anbtn rag2-input">ANVÄND</button>
                    </div>
                </div>
                <hr class="line3 mb22">
                <template v-if="!show_all_methods">
                    <div class="santi ">
                        
                        <button v-show="!invoice_confirmed" @click="showAll" type="submit" class="vinbtn rag2-input avac flex1 mr24">ANDRA BETALNINGSALTERNATIV</button>
                       
                        <form method="POST" class="avac flex1" action="/invest/payment/swish">
                            <input type="hidden" name="_token" :value="csrf" readonly>
                            <input type="hidden" name="company" :value="my_invest_as_company" readonly>
                            <input type="hidden" name="shares" :value="nbr_shares" readonly>
                            <input type="hidden" name="id" :value="id" readonly>
                            <input type="hidden" name="gift_card_id" :value="gift_card_id" readonly>
                            <button v-show="!invoice_confirmed" type="submit" class="vinbtn-swish rag2-input" onclick="this.disabled=true;this.form.submit();">SWISH</button>
                        </form>
                    </div>
                </template>
                <template v-else>
                    <div class="santi ">
                        <form method="POST" class="avac flex1 mr24" action="/invest/payment/dibs">
                            <input type="hidden" name="_token" :value="csrf" readonly>
                            <input type="hidden" name="company" :value="my_invest_as_company" readonly>
                            <input type="hidden" name="shares" :value="nbr_shares" readonly>
                            <input type="hidden" name="id" :value="id" readonly>
                            <input type="hidden" name="gift_card_id" :value="gift_card_id" readonly>
                            <button v-show="!invoice_confirmed" type="submit" class="vinbtn rag2-input" onclick="this.disabled=true;this.form.submit();">MASTERCARD/VISA-KORT</button>
                        </form>
                        <form method="POST" class="avac flex1" action="/invest/payment/swish">
                            <input type="hidden" name="_token" :value="csrf" readonly>
                            <input type="hidden" name="company" :value="my_invest_as_company" readonly>
                            <input type="hidden" name="shares" :value="nbr_shares" readonly>
                            <input type="hidden" name="id" :value="id" readonly>
                            <input type="hidden" name="gift_card_id" :value="gift_card_id" readonly>
                            <button v-show="!invoice_confirmed" type="submit" class="vinbtn rag2-input" onclick="this.disabled=true;this.form.submit();">SWISH</button>
                        </form>
                    </div>
                    <div class="mb22 hidden-md-down"></div>
                    <div class="santi">
                        <form method="POST" class="avac flex1 mr24" action="/invest/payment/trustly">
                            <input type="hidden" name="_token" :value="csrf" readonly>
                            <input type="hidden" name="company" :value="my_invest_as_company" readonly>
                            <input type="hidden" name="shares" :value="nbr_shares" readonly>
                            <input type="hidden" name="id" :value="id" readonly>
                            <input type="hidden" name="gift_card_id" :value="gift_card_id" readonly>
                            <button v-show="!invoice_confirmed" type="submit" class="vinbtn rag2-input" onclick="this.disabled=true;this.form.submit();">INTERNETBANK</button>
                            <div class="vinbtn rag2-input mb20" @click="cancelConfirmInvoice" v-show="invoice_confirmed">AVBRYT</div>
                        </form>
                        <form method="POST" class="avac flex1" action="/invest/payment/billogram">
                            <input type="hidden" name="_token" :value="csrf" readonly>
                            <input type="hidden" name="company" :value="my_invest_as_company" readonly>
                            <input type="hidden" name="shares" :value="nbr_shares" readonly>
                            <input type="hidden" name="id" :value="id" readonly>
                            <input type="hidden" name="gift_card_id" :value="gift_card_id" readonly>
                            <div class="vinbtn rag2-input" @click="showConfirmInvoice" v-show="!invoice_confirmed">FAKTURA</div>
                            <button type="submit" class="vinbtn rag2-input" v-show="invoice_confirmed" onclick="this.disabled=true;this.form.submit();">BEKR&Auml;FTA</button>
                        </form>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['issue', 'invest_as_company', 'shares', 'user', 'billogram_cost', 'swish_highlight_amount'],

        data() {
            return {
                id: this.issue.id,
                my_invest_as_company: this.invest_as_company,
                nbr_shares: this.shares,
                total_amount: this.shares * this.issue.issue_price + ' ' + this.issue.issue_currency,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                gift_card_id: 0,
                gift_card_value: 0,
                gift_card_code: '',
                show: false,
                invoice_confirmed: false,
                no_invoice_address: false,
                showAllPressed: false
            };
        },

        computed: {
            amount: function () {
              return (
                (this.issue.issue_price  * 
                this.shares) - this.gift_card_value ).toFixed(0) + ' ' + this.issue.issue_currency
            },
            show_all_methods: function () {
              let show_all = (((this.issue.issue_price  * 
                this.shares) <= this.swish_highlight_amount) ? false : true)
              if (this.showAllPressed) {
                return this.showAllPressed;
              } else {
                return (show_all)
              }
            },
            gift_card_value_text: function () {
              return 
                (this.gift_card_value)
            }
        },

        methods: {
            getGiftCardValue() {
                if (this.gift_card_code.length > 0) {
                    axios.get('/invest/gift_card/json/' + this.gift_card_code).then(({ data })=> {
                        if (data.value > (this.issue.issue_price  * 
                this.shares)) {
                            this.show = false;
                                show_error('Presentkortets belopp, ' + data.value + ', får inte vara samma som eller överstiga total beloppet på ' +  this.amount);
                        } else {
                            this.gift_card_value = data.value;
                            this.gift_card_id = data.id;
                            if (data.error == '') {
                                this.show = true;
                            } else {
                                this.show = false;
                                show_error(data.error);
                            }
                        }
                    }).catch(error => {
                            this.show = false;
                            show_error(error.response.data);
                    });
                }
            },
            showConfirmInvoice() {
                
                if ((this.user.zipcode == null) || (this.user.address == null) || (this.user.postarea == null) || (this.user.country == null)) {
                    this.no_invoice_address = true;
                    this.invoice_confirmed = false;
                } else {
                    this.invoice_confirmed = true;
                    this.no_invoice_address = false;
                }
            },
            cancelConfirmInvoice() {
                this.invoice_confirmed = false;
            },
            showAll() {
                this.showAllPressed = true;
            }
        }
    }
</script>
