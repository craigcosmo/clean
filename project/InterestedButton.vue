<template>
	<div>
        <template v-if="lang == 'en'">
	       <div class="main-box-btn butcopy1" v-on:click="showPanel()">SUBMIT INTEREST</div>
        </template>
        <template v-else>
           <div class="main-box-btn butcopy1" v-on:click="showPanel()">ANM&Auml;L INTRESSE</div>
        </template>
    </div>
</template>

<script>
    export default {
    	props: ['hubspot_form_id', 'lang'],

    	data() {
            return {
                show_hs: false
            }
        },
        methods: {
            showPanel() {
                // show_error('Anmäl intresse', this.hubspot_form_id);
                
               	show_form('Anmäl intresse', this.hubspot_form_id);
                $('html, body').animate({ scrollTop: 0 }, 200)
            },
        }
    };
</script>
