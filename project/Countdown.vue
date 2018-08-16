<template>
    <ul class="vue-countdown">
        <li>
            <p class="digit">{{ days | twoDigits }}</p>
            <p class="text">days</p>
        </li>
        <li>
            <p class="digit">{{ hours | twoDigits }}</p>
            <p class="text">hours</p>
        </li>
        <li>
            <p class="digit">{{ minutes | twoDigits }}</p>
            <p class="text">Min</p>
        </li>
        <li>
            <p class="digit">{{ seconds | twoDigits }}</p>
            <p class="text">Sec</p>
        </li>
    </ul>
</template>

<script>
import Vue from 'vue'

Vue.filter('twoDigits', (value) => {
    if ( value.toString().length <= 1 ) {
        return '0'+value.toString()
    }
    return value.toString()
})
let interval = null;

export default {
    props: ['deadline', 'stop'],
    data() {
        return {
            now: Math.trunc((new Date()).getTime() / 1000),
            date: null,
            diff: 0
        }
    },
    mounted() {
        //this.date = Math.trunc(Date.parse(this.deadline.replace(/-/g, "/")) / 1000)
        this.date = Math.trunc(this.deadline)

        interval = setInterval(() => {
            this.now = Math.trunc((new Date()).getTime() / 1000)
        }, 1000)
        this.diff = this.date - this.now;
    },
    computed: {

        seconds() {
            if(this.diff > 0){
                return Math.trunc(this.diff) % 60
            } else {
                return 0;
            }
        },

        minutes() {
            if(this.diff > 0){
                return Math.trunc(this.diff / 60) % 60
            } else {
                return 0;
            }
        },

        hours() {
            if(this.diff > 0){
                return Math.trunc(this.diff / 60 / 60) % 24
            } else {
                return 0;
            }
        },

        days() {
            if(this.diff > 0){
                return Math.trunc(this.diff / 60 / 60 / 24)
            } else {
                return 0;
            }
        }
    },
    watch: {
        now(value){
            this.diff = this.date - this.now;
            if(this.diff <= 0 || this.stop){
                this.diff = 0;
                // Remove interval
                clearInterval(interval);
            }
        }
    }
}
</script>
