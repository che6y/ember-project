<template>
	<div class="container">

		<header-component></header-component>

		<sidebar-component></sidebar-component>

		<page-component :skills="skills" :works="works"></page-component>

		<footer-component></footer-component>

	</div>
</template>

<script>
	export default {
		props: ['skills','works']
	}
</script>
