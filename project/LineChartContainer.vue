<template>
	 <div class="ma">
	   <line-chart  :id="id" :styles="myStyles"/>
	 </div>
</template>

<script>
export default {
	props:['id'],
	data () {
		return {
			height: 270
		}
	},
	computed: {
		myStyles () {
			return {
				height: `${this.height}px`,
			}
		}
	}
}
</script>