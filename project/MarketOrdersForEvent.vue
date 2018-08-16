<template>
    
    <div>
        <div class="vanso a18b60 text-center gr9">
            MARKNADSORDRAR
        </div>


        <table class="table kap table-sm table-striped">
            <tr>
                <th class="jik"></th>
                <th class="a13b">Aktie</th>
                <th class="a13b hidden-md-down">Order lagd</th>
                <th class="a13b hidden-md-down">Sida</th>
                <th class="a13b">Kurs</th>
                <th class="a13b">Antal</th>
                <th class="a13b">Fyllda</th>
                <th class="a13b text-right hidden-md-down">Totalt</th>
                <th class="a13b">Ändra</th>
                <th class="jik"></th>
            </tr>
            <tr v-for="order in orders">
                <td class="jik"></td>
                <td>
                   <a :href="'/trading/' + order.company.url_name">{{ order.company.name }}</a>
                </td>
                <template v-if="order.order_status == 1"> 
                    <td class="hidden-md-down">Pending add</td>
                </template>
                <template v-else-if="order.order_status == 6"> 
                    <td class="hidden-md-down">Pending modify</td>
                </template>
                <template v-else>
                   <td class="hidden-md-down">{{ order.updated_at }}</td>
                </template>
                <template v-if="order.side == 1">
                   <td class="hidden-md-down">Köp</td>
                </template>
                <template v-else>
                   <td class="hidden-md-down">Sälj</td>
                </template>
                <td>{{ order.price }} SEK</td>
                <td>{{ Math.abs(order.volume) }} st</td>
                <td>{{ Math.abs(order.filled_volume) }} st</td>
                <td class="hidden-md-down text-right">{{ order.volume * order.price }}</td>
                <td>
                    <form method="post" :action="'/market/pre_modify_order/' + order.id">
                        <input type="hidden" name="_token" :value="csrf" readonly>
                        <button class="black-frame am14b" type="submit">ÄNDRA</button>
                    </form>
                </td>
                <td class="jik"></td>
            </tr>
      
        </table>
        <div class="vanso a18b60 text-center gr9 mb65">
        </div>
    </div>

</template>

<script>
    export default {
        props: ['id'],

        data() {
            return {
                orders: '',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            };
        },
        created() {
            this.reload();
        },

        methods: {
            fetchInvestments() {
                axios.get('/market/event_orders/' + this.id).then(({ data })=> {
                    this.orders = data;
                });
            },

            reload() {
                this.fetchInvestments();
                setInterval(() => {
                        this.fetchInvestments();
                    }, 3000);
            }
        }
    }
</script>
