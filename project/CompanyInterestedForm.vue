<template>
        <div class="hubwrap">

            <div class="b16m100 ogoer">SKICKA EN ANSÖKAN</div>

            <div id="hubForm">
                <p id="hubErrorText"></p>
            </div>
        </div>
       
</template>

<script>
    export default {
        

        created() {


        let hsScript = document.createElement('script')
        hsScript.setAttribute('src', 'https://js.hsforms.net/forms/v2.js')
        document.head.appendChild(hsScript)

            hsScript.onload = function() {
                hbspt.forms.create({ 
                    portalId: '1881322',
                    target: '#hubForm',
                    formId: '697f71e2-afdc-44bd-9d09-a087586b5bf9',
                    submitButtonClass: 'main-box-btn butcopy1',
                    cssClass:'',
                    css:'a17l bodycopy1'
                }); 
            }; 

           

           
        }
    };
</script>
