<template>
    <div v-if="count === ''">
        <img src="/images/spinner.gif" alt="" height="20">
    </div>
    <div v-else>
        <div class="adf a21b">{{ count }}</div>
    </div>
</template>

<script>
    export default {
        props: ['id', 'status'],

        data() {
            return {
                count: ''
            };
        },

        created() {
            this.reload();
        },

        methods: {
            fetchInvestments() {
                axios.get('/invest/json/' + this.id).then(({ data })=> {
                    this.count = data.investment_count;
                });
            },

            reload() {
                if (this.status == 3) {
                    this.fetchInvestments();
                    setInterval(() => {
                        this.fetchInvestments();
                    }, 3000);
                } else {
                    this.fetchInvestments();
                } 
            }
        }
    }
</script>
