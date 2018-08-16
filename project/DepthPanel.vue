<template>
    <div class="row mb70">
        <template v-if=this.open>
            <div class="col-12 nopad">
                <div class="gal">
                    <div class="g-inner">
                        <div class="cop bex">ORDERDJUP</div>
                        <table class="table kap table-sm table-striped kolo">
                            <tr>
                                <th class="jik"></th>
                                <th class="text-left headline14">Pris</th>
                                <th class="headline14 text-right">Antal</th>
                                <th class="text-right headline14 limitwidth hap">Kop</th>
                                <th class="headline14 limitwidth hoc" >Salj</th>
                                <th class="headline14 text-right">Pris</th>
                                <th class="headline14 text-right">Antal</th>
                                <th class="jik"></th>
                            </tr>
                            <!-- show five levels -->
                            
                            <!--<template v-for="i in count">-->
                                <tr>
                                    <template v-if=my_bids[0]>
                                        <td class="jik"></td>
                                        <td class="number5">{{my_bids[0].price}}</td>
                                        <template v-if="my_bids[0].flags==5">
                                            <td class="number5 text-right">{{my_bids[0].total_volume}} ({{my_bids[0].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_bids[0].total_volume}}</td>
                                        </template>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" v-bind:style="bidWidth0"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-else-if=my_asks[0]>
                                        <td class="jik"></td>
                                        <td class="number5"></td>
                                        <td class="number5 text-right"></td>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" style="width:0px"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-if=my_asks[0]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" v-bind:style="askWidth0"></div>
                                            </div>
                                        </td>
                                        <td class="number5 text-right">{{my_asks[0].price}}</td>
                                        <template v-if="my_asks[0].flags==5">
                                            <td class="number5 text-right">{{my_asks[0].total_volume}} ({{my_asks[0].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_asks[0].total_volume}}</td>
                                        </template>
                                        <td class="jik"></td>
                                    </template>
                                    <template v-else-if=my_bids[0]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" style="width:0px"></div>
                                            </div>
                                        </td>
                                        <td class="jik"></td>
                                    </template>
                                </tr>

                                <tr>
                                    <template v-if=my_bids[1]>
                                        <td class="jik"></td>
                                        <td class="number5">{{my_bids[1].price}}</td>
                                        <template v-if="my_bids[1].flags==5">
                                            <td class="number5 text-right">{{my_bids[1].total_volume}} ({{my_bids[1].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_bids[1].total_volume}}</td>
                                        </template>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" v-bind:style="bidWidth1"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-else-if=my_asks[1]>
                                        <td class="jik"></td>
                                        <td class="number5"></td>
                                        <td class="number5 text-right"></td>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" style="width:0px"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-if=my_asks[1]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" v-bind:style="askWidth1"></div>
                                            </div>
                                        </td>
                                        <td class="number5 text-right">{{my_asks[1].price}}</td>

                                        <template v-if="my_asks[1].flags==5">
                                            <td class="number5 text-right">{{my_asks[1].total_volume}} ({{my_asks[1].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_asks[1].total_volume}}</td>
                                        </template>
                                        
                                        <td class="jik"></td>
                                    </template>
                                    <template v-else-if=my_bids[1]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" style="width:0px"></div>
                                            </div>
                                        </td>
                                        <td class="jik"></td>
                                    </template>
                                </tr>

                                <tr>
                                    <template v-if=my_bids[2]>
                                        <td class="jik"></td>
                                        <td class="number5">{{my_bids[2].price}}</td>
                                        
                                        <template v-if="my_bids[2].flags==5">
                                            <td class="number5 text-right">{{my_bids[2].total_volume}} ({{my_bids[2].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_bids[2].total_volume}}</td>
                                        </template>
                                        
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" v-bind:style="bidWidth2"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-else-if=my_asks[2]>
                                        <td class="jik"></td>
                                        <td class="number5"></td>
                                        <td class="number5 text-right"></td>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" style="width:0px"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-if=my_asks[2]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" v-bind:style="askWidth2"></div>
                                            </div>
                                        </td>
                                        <td class="number5 text-right">{{my_asks[2].price}}</td>
                                        
                                        <template v-if="my_asks[2].flags==5">
                                            <td class="number5 text-right">{{my_asks[2].total_volume}} ({{my_asks[2].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_asks[2].total_volume}}</td>
                                        </template>
                                        
                                        <td class="jik"></td>
                                    </template>
                                    <template v-else-if=my_bids[2]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" style="width:0px"></div>
                                            </div>
                                        </td>
                                        <td class="jik"></td>
                                    </template>
                                </tr>

                                <tr>
                                    <template v-if=my_bids[3]>
                                        <td class="jik"></td>
                                        <td class="number5">{{my_bids[3].price}}</td>
                                        
                                        <template v-if="my_bids[3].flags==5">
                                            <td class="number5 text-right">{{my_bids[3].total_volume}} ({{my_bids[3].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_bids[3].total_volume}}</td>
                                        </template>
                                        
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" v-bind:style="bidWidth3"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-else-if=my_asks[3]>
                                        <td class="jik"></td>
                                        <td class="number5"></td>
                                        <td class="number5 text-right"></td>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" style="width:0px"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-if=my_asks[3]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" v-bind:style="askWidth3"></div>
                                            </div>
                                        </td>
                                        <td class="number5 text-right">{{my_asks[3].price}}</td>
                                        
                                        <template v-if="my_asks[3].flags==5">
                                            <td class="number5 text-right">{my_asks[3].total_volume}} ({{my_asks[3].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_asks[3].total_volume}}</td>
                                        </template>

                                        <td class="jik"></td>
                                    </template>
                                    <template v-else-if=my_bids[3]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" style="width:0px"></div>
                                            </div>
                                        </td>
                                        <td class="jik"></td>
                                    </template>
                                </tr>

                                <tr>
                                    
                                    <template v-if=my_bids[4]>
                                        <td class="jik"></td>
                                        <td class="number5">{{my_bids[4].price}}</td>
                                        
                                        <template v-if="my_bids[4].flags==5">
                                            <td class="number5 text-right">{my_bids[4].total_volume}} ({{my_bids[4].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_bids[4].total_volume}}</td>
                                        </template>
                                        
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" v-bind:style="bidWidth4"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-else-if=my_asks[4]>
                                        <td class="jik"></td>
                                        <td class="number5"></td>
                                        <td class="number5 text-right"></td>
                                        <td class="opi">
                                            <div class="sewer text-right">
                                                <div class="blueper" style="width:0px"></div>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-if=my_asks[4]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" v-bind:style="askWidth4"></div>
                                            </div>
                                        </td>
                                        <td class="number5 text-right">{{my_asks[4].price}}</td>
                                        
                                        <template v-if="my_asks[4].flags==5">
                                            <td class="number5 text-right">{my_asks[4].total_volume}} ({{my_asks[4].count}})</td>
                                        </template>
                                        <template v-else>
                                            <td class="number5 text-right">{{my_asks[4].total_volume}}</td>
                                        </template>

                                        <td class="jik"></td>
                                    </template>
                                    <template v-else-if=my_bids[4]>
                                        <td class="opi">
                                            <div class="perw">
                                                <div class="redper" style="width:0px"></div>
                                            </div>
                                        </td>
                                        <td class="jik"></td>
                                    </template>
                                    
                                </tr>
                            <!--</template>-->

                        </table>
                    </div>
                </div>
            </div>
        </template>
    </div>
</template>

<script>
    export default {
        props: ['open', 'bids', 'asks', 'max_volume', 'max_ask_volume', 'company_id'],

        data() {
            return {
                my_bids: this.bids,
                my_asks: this.asks,
                my_max_volume: this.max_volume,
                my_max_ask_volume: this.max_ask_volume,
                max: 0,
                count: [0,1,2,3,4]
            };
        },

        created() {
            this.reloadDepth();
            this.calcMaxVolume();
        },

        computed: {
            bidWidth0() {
                return ('width:' + (this.my_bids[0].total_volume/this.my_max_volume)*100) + 'px';
            },
            bidWidth1() {
                return ('width:' + (this.my_bids[1].total_volume/this.my_max_volume)*100) + 'px';
            },
            bidWidth2() {
                return ('width:' + (this.my_bids[2].total_volume/this.my_max_volume)*100) + 'px';
            },
            bidWidth3() {
                return ('width:' + (this.my_bids[3].total_volume/this.my_max_volume)*100) + 'px';
            },
            bidWidth4() {
                return ('width:' + (this.my_bids[4].total_volume/this.my_max_volume)*100) + 'px';
            },

            askWidth0() {
                return ('width:' + (this.my_asks[0].total_volume/this.my_max_volume)*100) + 'px';
            },
            askWidth1() {
                return ('width:' + (this.my_asks[1].total_volume/this.my_max_volume)*100) + 'px';
            },
            askWidth2() {
                return ('width:' + (this.my_asks[2].total_volume/this.my_max_volume)*100) + 'px';
            },
            askWidth3() {
                return ('width:' + (this.my_asks[3].total_volume/this.my_max_volume)*100) + 'px';
            },
            askWidth4() {
                return ('width:' + (this.my_asks[4].total_volume/this.my_max_volume)*100) + 'px';
            },

            signedIn() {
                return window.App.signedIn;
            }
        },

        methods: {
            calcMaxVolume() {
                if (this.my_max_ask_volume > this.my_max_volume) { this.my_max_volume = this.my_max_ask_volume;}
            },

            fetchDepth() {
                axios.get('/marketdata/depth/json/' + this.company_id).then(({ data })=> {
                    this.max=JSON.parse(data.max_volume);
                    if (JSON.parse(data.max_ask_volume)>this.max) {
                        this.max = JSON.parse(data.max_ask_volume);
                    }
                    this.my_max_volume = this.max;
                    this.my_bids = JSON.parse(data.bids);
                    this.my_asks = JSON.parse(data.asks);
                });
            },

            reloadDepth() {
                setInterval(() => {
                    this.fetchDepth();
                }, 15000);
            },

            selectAll: function (event) {
              setTimeout(function () {
                event.target.select()
              }, 0)
            }
        }
    }
</script>
