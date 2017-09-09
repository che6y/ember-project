<template>
	<div class="container">

		<header-component></header-component>

		<div class="row ">
			<div class="col-sm-3 d-sm-block d-none">
				<sidebar-component></sidebar-component>
			</div>

			<div class="col-sm-9 col-xs-12 main">
				<page-component :skills="skills" :works="works"></page-component>
			</div>
		</div>


		<footer-component></footer-component>

	</div>
</template>

<script>
	export default {
		props: ['skills','works']
	}
</script>
