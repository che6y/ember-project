<template>
	<div class="container">

		<header-component></header-component>

		<div class="row">
			<div class="col-lg-3 col-md-4 d-md-block d-none">
				<sidebar-component></sidebar-component>
			</div>

			<div class="col-lg-9 col-md-8 col-xs-12 main">
				<page-component :skills="skills" :works="works" :contact="contact"></page-component>
			</div>
		</div>

		<footer-component></footer-component>

	</div>
</template>

<script>
	export default {
		props: ['skills','works','contact']
	}
</script>
