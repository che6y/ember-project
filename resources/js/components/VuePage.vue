<template>
	<div class="container">
		<header-component></header-component>
		<sidebar-component></sidebar-component>
		<about-me :skills="skills" ></about-me>
		<footer-component></footer-component>
	</div>
</template>
<script>
	export default {
		props: ['skills','works']
	}
</script>
