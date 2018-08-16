<template>
	<div>
		<div v-html="formattedString" style="display: inline;"></div> 
			<div v-show="text.length > maxChars" style="display: inline;"">
				<a :href="link" id="readmore" v-show="!isReadMore" v-on:click="triggerReadMore($event, true)">{{moreStr}}</a>
				<a :href="link" id="readmore" v-show="isReadMore" v-on:click="triggerReadMore($event, false)">{{lessStr}}</a>
			</div>
	</div>
</template>

<script>
export default {
		props: ['moreStr', 'lessStr', 'text', 'link', 'maxChars'],

		data (){
			return{
				isReadMore: false
			}
		},

		computed: {
			formattedString: function () {
				let val_container = this.text;

				if(!this.isReadMore && this.text.length > this.maxChars){
					val_container = val_container.substring(0,this.maxChars) + '...';
				}

				return(val_container);
			}
		},

		mounted() {

		},

		methods: {
			triggerReadMore(e, b){
				if(this.link == '#'){
					e.preventDefault();
				}
				if(this.lessStr !== null || this.lessStr !== '')
					this.isReadMore = b;
			}
		}
	}
</script>