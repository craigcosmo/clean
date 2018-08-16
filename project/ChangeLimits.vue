<template>
    <div class="col-md-6 col-12">
        <div class="sa-wrap pushdrop mb22">
            <div class="banui nui">
                <div v-if="limitsSet"><i class="circhecked"><img src="/images/circhecked.png"></i></div>
                <div v-if="!limitsSet"><i class="cirunchecked"><img src="/images/cirunchecked.png"></i></div>
                <div class="am16b100 text-center vui-head b16b100">LIMITER</div>
                <span class="tra-arrow-down a-down reg-limits"></span>
                <span class="tra-arrow-up a-up hide reg-limits"></span>
            </div>
            <div class="abform tenform hide reg-limits">
                <div class="form-ab">
                <div>
                    <div class="am14b100">MAX VÄRDE PER ORDER</div>
                    <input type="number" class="rag-input" v-model="max_order_value" name="max_order_value" id="max_order_value" min="1" step="1" placeholder="MAX VÄRDE PER ORDER" required>
                </div>
                <div>
                    <div class="am14b100">MAX OMSÄTTNING PER DAG</div>
                    <input type="number" class="rag-input" v-model="max_day_total_value" name="max_day_total_value" id="max_day_total_value" min="1" step="1" placeholder="MAX OMSÄTTNING PER DAG" required>
                </div>
                <div>
                    <div class="am14b100">VALUTA FÖR LIMITER</div>
                    <input type="text" class="rag-input" v-model="limits_currency" name="limits_currency" id="limits_currency" placeholder="VALUTA FÖR LIMITER" readonly>
                </div>
                
                <div>
                    <button type="submit" @click="update" class="main-box-btn butcopy1 uptera">SPARA</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                max_order_value: this.user.max_order_value,
                max_day_total_value: this.user.max_day_total_value,
                limits_currency: this.user.limits_currency
            };
        },

        computed: {
            limitsSet() {
                if (this.max_order_value == null){
                    return false;
                } else if (this.max_order_value > 0) {
                 return true;
                } else {
                  return false;
                }
            }
        },


        methods: {
            update() {
                if (this.max_order_value < 1) {
                    flash('Max order value less than 1' ,'danger');
                    this.max_order_value = this.user.max_order_value;
                } else if (this.max_day_total_value < 1) {
                    flash('Max day total value less than 1', 'danger');
                    this.max_day_total_value = this.user.max_day_total_value;
                } else {
                    axios.post(
                        '/my-pepins/profile/update_limits', {
                            max_order_value: this.max_order_value,
                            max_day_total_value: this.max_day_total_value
                        })
                        .catch(error => {
                            show_error(error.response.data);
                        });
                    $('.reg-limits').toggleClass('hide');
                    flash('Updated!');
                } 
            }
        }
    }
</script>
