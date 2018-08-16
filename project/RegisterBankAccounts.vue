<template>
    <div class="col-md-6 col-12">
        <div class="sa-wrap pushdrop mb22">
            <div class="banui nui">
                <div v-if="companySet"><i class="circhecked"><img src="/images/circhecked.png"></i></div>
                <div v-if="!companySet"><i class="cirunchecked"><img src="/images/cirunchecked.png"></i></div>
                <div class="am16b100 text-center vui-head">BANKUPPGIFTER</div>
                <span class="tra-arrow-down reg-bank a-down"></span>
                <span class="tra-arrow-up hide reg-bank a-up"></span>
            </div>
            <div class="abform tenform hide reg-bank">
                <div class="form-ab">
                <div>
                    <div class="am14b100">BANK (FÖR KONTO)</div>
                    <input type="text" class="rag-input" v-model="bank_for_cash_acount" name="bank_for_cash_acount" id="bank_for_cash_acount" placeholder="BANK (FÖR KONTO)">
                </div>
                <div>
                    <div class="am14b100">KONTONUMMER (INK CLEARING)</div>
                    <input type="text" class="rag-input" v-model="bank_cash_account_nbr" name="bank_cash_account_nbr" id="bank_cash_account_nbr" placeholder="KONTONUMMER (INK CLEARING)">
                </div>
                <div>
                    <div class="am14b100">BANK (DEPÅ/VP-KONTO)</div>
                    <input type="text" class="rag-input" v-model="bank_for_account" name="bank_for_account" id="bank_for_account" placeholder="BANK (DEPÅ/VP-KONTO)">
                </div>
                <div>
                    <div class="am14b100">DEPÅ/VP-KONTONUMMER (EJ ISK/KF)</div>
                    <input type="text" class="rag-input" v-model="bank_account_nbr" name="bank_account_nbr" id="bank_account_nbr" placeholder="DEPÅ/VP-KONTONUMMER">
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
                bank_for_cash_acount: this.user.bank_for_cash_acount,
                bank_cash_account_nbr: this.user.bank_cash_account_nbr,
                bank_for_account: this.user.bank_for_account,
                bank_account_nbr: this.user.bank_account_nbr
            };
        },

        computed: {
            companySet() {
                if (this.bank_for_cash_acount == null){
                    return false;
                }
                if (this.bank_for_cash_acount.length > 0) {
                 return true;
                } else {
                  return false;
                }
            }
        },


        methods: {
            update() {
                
                axios.post(
                    '/my-pepins/profile/update_bank_details', {
                        bank_for_cash_acount: this.bank_for_cash_acount,
                        bank_cash_account_nbr: this.bank_cash_account_nbr,
                        bank_for_account: this.bank_for_account,
                        bank_account_nbr: this.bank_account_nbr
                    })
                    .catch(error => {
                        show_error(error.response.data);
                    });
                $('.reg-bank').toggleClass('hide');
                flash('Updated!');
            }
        }
    }
</script>
