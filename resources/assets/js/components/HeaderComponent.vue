<template>

	<header class="header">

		<div class="row align-items-end">
			<div class="col-sm-3 col-xs-12">
				<div class="header__title">
						<h2><a href="/">Abbakumova</a></h2>
				</div>
			</div>

			<div class="col-sm-9 col-xs-12">
				<nav class="header__nav row ">
						<router-link to="/about-me" class="header__nav-link col-12 col-sm-4 col-md-3">About me</router-link>
						<router-link to="/portfolio" class="header__nav-link col-12 col-sm-4 col-md-3">Portfolio</router-link>
						<router-link to="/contact" class="header__nav-link col-12 col-sm-4 col-md-3">Contact</router-link>
				</nav>
			</div>
		</div>

	</header>

</template>
