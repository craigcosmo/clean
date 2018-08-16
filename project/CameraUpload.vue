<template>
    <input type="file" accept="image/*" id="capture" capture @change="onChange">
</template>

<script>
    export default {
        methods: {
            onChange(e) {
                if (! e.target.files.length) return;

                let file = e.target.files[0];

                let reader = new FileReader();

                reader.onerror = function(e) {
                  alert('File read fel ' + e);
                };

                reader.onabort = function(e) {
                  alert('File read cancelled');
                };


                reader.readAsDataURL(file);
                reader.onload = e => {
                    let src = e.target.result;
                    this.$emit('loaded', { src, file });
                };
            }
        }
    }
</script>
