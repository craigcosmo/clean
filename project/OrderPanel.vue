<template>
    <div class="kimtbl pr">
        <confirm :confirm-window="confirmWindow" :doing="doing" :buy="buy" :sell="sell" :close-con="closeCon" :order-volume="order_volume" :order-price="order_price" :all_or_nothing="all_or_nothing" :t_event="t_event"></confirm>
        <div>
            <template v-if="this.t_event.company.listing_market==2">
                <h2 class="text-center headline1 mb8">{{ this.t_event.company.fullname }}</h2>
            </template>
            <template v-else-if="this.t_event.company.listing_market==4">
                <h2 class="text-center headline1 mb8">{{ this.t_event.company.fullname }}</h2>
            </template>
            <template v-else>
                <h2 class="text-center headline1 mb8">{{ this.t_event.company.name }}</h2>
            </template>
            <div><hr class="line2 mb14"></div>
        </div>
        <div>
            <div class="container cfs gyt">
                <div class="row">
                    <div class="col-12 col-md-4 lipad">
                        <div class="">
                            <template v-if="this.open&&signedIn">
                                <div class="a13m">Antal (Handelspost: {{ this.t_event.company.lot_size }})</div>
                                <input class="cih soli vika" type="text" name="a" v-model.number="order_volume" v-on:focus="selectAll">
                                <div class="hidden-md-up mb14"></div>
                            </template>
                            <template v-else>
                                <div class="distext a13m">Antal</div>
                                <input class="cih soli vika disin maxw" type="text" name="a" disabled>
                                <div class="hidden-md-up mb20"></div>
                            </template>                       
                        </div>
                    </div>
                    <div class="col-12 col-md-4 lipad">
                        <div class="fisi">
                            <template v-if="this.open&&signedIn">
                                <template v-if="this.depth.flags==5">
                                    <div class="zizo">
                                        <div class="a13m">Fastställd kurs</div>
                                        <input class="cih vali vika" type="text" name="b" v-model.number="order_price" disabled>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="zizo">
                                        <div class="a13m">Kurs</div>
                                        <input class="cih vali vika" type="text" name="b" v-model.number="order_price" v-on:focus="selectAll">
                                    </div>
                                </template>
                            </template>
                            <template v-else>
                                <template v-if="this.depth.flags==5">
                                    <div class="zizo">
                                        <div class="a13m distext">Fastställd kurs</div>
                                        <input class="cih vali vika disin maxw" type="text" name="b" v-model.number="order_price" disabled>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="zizo">
                                        <div class="a13m distext">Kurs</div>
                                        <input class="cih vali vika disin maxw" type="text" name="b" placeholder="0,00 SEK" disabled>
                                    </div>
                                </template>
                            </template>
                        </div>  
                       
                        
                    </div>
                    <div class="col-12 col-md-4 lipad hidden-sm-down">
                        <div class="edo">
                            <!--<div class="blank-hide">blank</div>-->
                            <span class="tic a13m mb5">Senast betalt <div class="a29m40">{{ this.lastPrice.toLocaleString('sv-SE') }} {{ this.t_event.company.listing_currency }}</div></span>
                            <span class="tic a13m mb5">Volym förhandel <div class="a29m40">{{ this.turnover_volume_event.toLocaleString('sv-SE') }}</div></span>
                            <!--<span class="tri kmm a29m40">{{ this.lastPrice.toLocaleString('sv-SE') }} {{ this.t_event.company.listing_currency }}</span>-->
                        </div>
                        
                    </div> 
                </div>
            </div>
            
        </div>
        <div>
            <div class="container cfs gyt">
                
                <div class="row">
                    <div class="col-12 col-md-4 lipad">
                        <div class="kaos miao">
                            <template v-if="this.open&&signedIn">
                                <div class="black a13b">Summa</div>
                                <div class="stu a26b">{{amount}} {{ this.t_event.company.listing_currency }}</div>
                            </template>
                            <template v-else>
                                <div class="black a13b distext">Summa</div>
                                <div class="stu a26b disin distext">0,00 SEK</div>
                           </template>      
                        </div>
                    </div>
                    <div class="col-12 hidden-md-up">
                        <div class="maxw df kalong">
                            <div class="flex1">
                                <div class="kang">Senast betalt</div>
                                <div class="jyp a22m">{{ this.lastPrice.toLocaleString('sv-SE') }} {{ this.t_event.company.listing_currency }}</div>
                            </div>
                            <div class="flex1 ml30">
                                <div class="kang">Volym förhandel</div>
                                <div class="jyp a22m">{{ this.turnover_volume_event.toLocaleString('sv-SE') }}</div>
                            </div>
                        </div>
                        <div class="maxw df kalong mb10">
                            <div class="flex1">
                                <template v-if="signedIn">
                                    <template v-if="!this.is_euroclear">
                                        <div style="float:left; margin-right: 10px;">
                                            <div class="kang">Innehav</div>
                                            <div class="jyp a22m">{{ this.position }}</div>
                                        </div>
                                            
                                        <div>
                                        </div>
                                    </template>
                                </template>
                            </div>
                            <div class="flex1 ml30">
                                <template v-if="signedIn">
                                    <template v-if="!this.is_euroclear">
                                        <div style="float:left; margin-right: 10px;">
                                            <div class="kang">Via bolag</div>
                                            <div class="jyp a22m">{{ this.position_company }}</div>
                                        </div>
                                            
                                        <div>
                                        </div>
                                    </template>
                                </template>
                                <template v-else>
                                    <template v-if="!this.is_euroclear">
                                        <div class="mid-div nytt-section mb20 bodycopy1 tqrl">
                                            <p><span class="kitkit">Logga in för att se innehav</span></p>
                                        </div>
                                    </template>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 lipad hidden-sm-down">
                        <div class="fisi">
                            <div class="kaos olong zizo">
                                <template v-if="signedIn">
                                    <template v-if="!this.is_euroclear">
                                        <div style="float:left; margin-right: 10px;">
                                            <div class="sou a13r">Innehav</div>
                                            <div class="mit-no stu a29m40">{{ this.position }} st</div>
                                        </div>
                                        <div>
                                            <div class="sou a13r">Via bolag</div>
                                            <div class="mit-no stu a29m40">{{ this.position_company }} st</div>
                                        </div>
                                    </template>
                                </template>
                                <template v-else>
                                    <template v-if="!this.is_euroclear">
                                        <div class="nytt-section mb20 bodycopy1 tqrl">
                                            <p><span class="kitkit">Logga in för att se innehav</span></p>
                                        </div>
                                    </template>
                                </template>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-4 lipad">
                        <div class="fisi">
                            <div class="kaos olong zizo">
                                <div class="blank-hide hidden-sm-down">blank</div>
                                <label class="df aic a12r">

                                <pepins-checkbox :name="'all_or_nothing'" :id_for_box="'all_or_nothing'" :class_for_div="'check-wrap pr'" :up="aon" :value_for_box="this.all_or_nothing" :checked="(this.all_or_nothing == 1 ? 'checked' : '')"></pepins-checkbox>
                             
                                <span class="">Allt eller inget</span>
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="flex1 rona">
            <div class="container cfs gyt">
                
                <div class="row">
                    <div class="col-12 hidden-md-up"></div>
                    <div class="col-12 col-md-4 hidden-md-up">
                        <div class="saep ">
                            <label class="df aic a12r">

                                <pepins-checkbox :name="'invest_as_company'" :id_for_box="'something'" :class_for_div="'check-wrap pr'" :up="up" :value_for_box="this.invest_as_company" :checked="(this.invest_as_company == 1 ? 'checked' : '')"></pepins-checkbox>

                             
                                <span class="">Transaktion via bolag</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mb15 hidden-md-down"></div>
                    <div class="col-12 mb30 hidden-md-up"></div>
                    <div class="col-md-4 hidden-md-down lipad">
                        <div class="saep ">
                            <label class="df aic a12r">
                                <pepins-checkbox :name="'invest_as_company'" :id_for_box="'salery'" :class_for_div="'check-wrap pr'" :up="up" :value_for_box="this.invest_as_company" :checked="(this.invest_as_company == 1 ? 'checked' : '')"></pepins-checkbox>
                                <span class="">Transaktion via bolag</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 lipad">
                        <div class="text-right">
                            <template v-if="signedIn">
                                <template v-if="this.open">
                                    <button type="submit" @click="kopClick" class="neo kop-btn headline13" v-bind:class="{ 'disbtn': this.disabled }" :disabled="this.disabled">KÖP</button>
                                </template>
                                <template v-else>
                                    <div class="kop-btn neo headline13 distext">K&Ouml;P</div>
                                </template>
                           </template>                        
                        </div>
                    </div>
                    <div class="col-6 col-md-4 lipad">
                        <div class="text-right">
                            <template v-if="signedIn">
                                <template v-if="this.open">
                                    <button type="submit" @click="salClick" class="neo sal-btn headline13" v-bind:class="{ 'disbtn': this.disabled }" :disabled="this.disabled">SÄLJ</button>
                                </template>
                                <template v-else>
                                    <div class="sal-btn neo headline13 distext">S&Auml;LJ</div>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</template>

<script>
    import Confirm from './ConfirmWindow.vue';
    export default {
        props: ['t_event', 'open', 'position', 'position_company', 'price', 'depth', 'is_euroclear', 'turnover_volume_event'],

        data() {
            return {
                confirmWindow:false,
                doing:0,
                lastPrice: this.price,
                order_volume: 0,
                order_price: (this.depth.flags == 5 ? this.depth.price : 0),
                invest_as_company: 0,
                all_or_nothing: 0,
                disabled: false
            };
        },

        created() {
            this.reloadBBO();
        },
        components: { Confirm },
        computed: {
            amount: function () {
              return (
                this.order_volume  * 
                this.order_price).toLocaleString('sv-SE')
            },
            signedIn() {
                return window.App.signedIn;
            }
        },

        methods: {
            up(val) {
                this.invest_as_company = val;
            },
            aon(val) {
                this.all_or_nothing = val;
            },
            buy() {
                this.placeOrder(1);
            },
            salClick(){
                this.confirmWindow = true
                this.doing = 2
            },
            kopClick(){

                this.confirmWindow = true
                this.doing = 1
            },
            closeCon(){
                this.confirmWindow = false
            },
            sell() {
                this.placeOrder(2);
            },
            placeOrder(side) {
                this.disabled = true;
                console.log('event ' + this.t_event.id + ' vol ' + this.order_volume + ' pris ' + this.order_price + ' sida ' + side + ' company ' +this.invest_as_company + ' AoN ' + this.all_or_nothing)
                axios.post(
                    '/market/insert_order', {
                        transaction_event_id: this.t_event.id,
                        volume: this.order_volume,
                        price: this.order_price,
                        side: side,
                        order_type: 2,
                        invest_as_company: this.invest_as_company,
                        all_or_nothing: this.all_or_nothing
                    })
                    .then(({ data }) => {
                        if (data.status == 2) {
                            this.order_volume = 0;
                            this.order_price = 0;
                            show_error('Din order är nu lagd! Du är medveten om att den är bindande. Du hittar mer information om din orders status på <a href="/my-pepins">MY PEPINS</a>');
                        } else {
                            show_error(data.error);
                        }
                        this.disabled = false;
                    })
                    .catch(error => {
                        show_error(error.response.data);
                        this.disabled = false;
                    });
            },


            fetchBBO() {
                axios.get('/marketdata/bbo/json/' + this.t_event.company_id).then(({ data })=> {
                    if (typeof data.price !== 'undefined') {
                        this.lastPrice = data.price;
                    }
                });
            },

            reloadBBO() {
                setInterval(() => {
                    this.fetchBBO();
                }, 2000);
            },

            selectAll: function (event) {
              setTimeout(function () {
                event.target.select()
              }, 0)
            }
        }
    }
</script>
