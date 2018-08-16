<template>
    <div class="col-md-6 col-12">
        <div class="sa-wrap pushdrop mb22">
            <div class="banui nui">
                <div v-if="status"><i class="circhecked"><img src="/images/circhecked.png"></i></div>
                <div v-if="!status"><i class="cirunchecked"><img src="/images/cirunchecked.png"></i></div>
                <div class="am16b100 text-center vui-head b16b100">NEWSLETTER</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                status: this.user.newsletter ,
            };
        }
    }
</script>
