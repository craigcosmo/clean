<template>
	<div>
		<input id="trix" type="hidden" :name="name" :value="value">
		<form id="trix-form">
			<trix-editor class="alba r-text mb20" ref="trix" input="trix" :placeholder="placeholder"></trix-editor>
		</form>
		
	</div>
</template>

<script>
	import Trix from 'trix';

	export default {
		props: ['name', 'value', 'created', 'placeholder', 'shouldClear'],

		mounted() {
			// console.log('mounting')
			// clear textbox at begining
			this.$refs.trix.value = '';
			this.$refs.trix.addEventListener('trix-change', e => {
				this.$emit('input', e.target.innerHTML);
			});

			// clear textbox after submited
			this.$watch('created', (f) => {
				if (f) {
					this.$refs.trix.value = '';
				}
			});

			Trix.config.attachments.preview.caption = {
			   name: false,
			   size: false
			};
			Trix.config.attachments.file.caption = {
			   size: false
			};
			


		}



	}
</script>