<template>
	<div class="container">
		<header-component></header-component>

		<sidebar-component></sidebar-component>

		<page-component></page-component>

		<footer-component></footer-component>

	</div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
				created() {
					axios.get('/skills').then(response => {
						console.log(response.data);
					})
				}
    }
</script>
