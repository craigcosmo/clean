<template>
    <div :class="this.class_for_div">
        <span class="ichecked" v-show="show">
            <img class="ayesha" src="/images/bchecked.png">
        </span>
        <span class="iunchecked" v-show="!show">
            <img class="ayesha" src="/images/bunchecked.png">
        </span>
        <input type="checkbox" @click="update" :name="this.name" :id="this.id_for_box" :value="this.value_for_box" :checked="this.is_checked">
    </div>
</template>

<script>
    export default {
        props: ['name', 'class_for_div', 'checked', 'id_for_box', 'value_for_box', 'up'],

        data() {
            return {
                show: (this.checked == 'checked' ? true : false),
                is_checked: this.checked
            }
        },

        methods: {
            update() {

                if (this.show) {
                    this.show = false;
                    this.is_checked = '';
                    if(this.up) {
                        this.up(0)
                    }
                } else {
                    this.show = true;
                    this.is_checked = 'checked';
                    if(this.up) {
                        this.up(1)
                    }
                }
            }
        }
    };
</script>
