<template>
    <div class="col-md-6 col-12">
        <div class="sa-wrap pushdrop mb22">
            <div class="banui nui">
                <div v-if="companySet"><i class="circhecked"><img src="/images/circhecked.png"></i></div>
                <div v-if="!companySet"><i class="cirunchecked"><img src="/images/cirunchecked.png"></i></div>
                <div class="am16b100 text-center vui-head b16b100">REGISTRERA F&Ouml;RETAG</div>
                <span class="tra-arrow-down a-down reg-company"></span>
                <span class="tra-arrow-up hide a-up reg-company"></span>
            </div>
            <div class="abform tenform hide reg-company">
                <div class="form-ab">
                    <div>
                        <div class="am14b100">FÖRETAGSNAMN</div>
                        <input type="text" class="rag-input" v-model="company_name" name="company_name" id="company_name" placeholder="FÖRETAGSNAMN">
                    </div>
                    <div>
                        <div class="am14b100">ORGANISATIONSNUMMER</div>
                        <input type="text" class="rag-input" v-model="company_org_nbr" name="company_org_nbr" id="company_org_nbr" placeholder="ORGANISATIONSNUMMER">
                    </div>
                    <div>
                        <div class="am14b100">VERKLIGA HUVUDMÄN</div>
                        <input type="text" class="rag-input" v-model="principal" name="principal" id="principal" placeholder="VERKLIGA HUVUDMÄN">
                    </div>
                    <div>
                        <div class="am14b100">KUNDKATEGORI FÖR FÖRETAG</div>
                        <input type="text" class="rag-input" v-model="company_category" name="company_category" id="company_category" placeholder="KUNDKATEGORI FÖR FÖRETAG" readonly>
                    </div>
                    <div>
                        <p class="a17l bodycopy1">För att kunna genomföra en investering via ditt bolag
                        behöver du skicka in ditt registreringsbevis som firmatecknare samt legitimation till <a href="mailto:info@pepins.com">info@pepins.com</a></p>
                    </div>
                    <div>
                        <button type="submit" @click="update" class="main-box-btn butcopy1 uptera">SPARA</button>
                    </div>
                </div>
                <!--<div>
                                         <div class="vtnreg mb24">REGISTRERA FLER F&Ouml;RETAG</div>
                </div>-->
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                company_name: this.user.company_name,
                company_org_nbr: this.user.company_org_nbr,
                principal: this.user.company_principal,
                company_category: this.user.company_category
            };
        },

        computed: {
            companySet() {
                if (this.company_name == null){
                    return false;
                } else if (this.company_name.length > 0) {
                 return true;
                } else {
                  return false;
                }
            }
        },


        methods: {
            update() {
                
                axios.post(
                    '/my-pepins/profile/update_company_details', {
                        company_name: this.company_name,
                        company_org_nbr: this.company_org_nbr,
                        principal: this.principal
                    })
                    .catch(error => {
                        show_error(error.response.data);
                    });
                $('.reg-company').toggleClass('hide');
                flash('Updated!');
            }
        }
    }
</script>
