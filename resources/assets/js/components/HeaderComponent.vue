<template>

	<header class="header">

		<div class="row align-items-end">
			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="header__title">
						<h2><a href="/">Abbakumova</a></h2>
				</div>
			</div>

			<div class="col-lg-9 col-md-8 col-sm-12">
				<nav class="header__nav row">
						<router-link to="/about-me" class="header__nav-link col-sm-4 col-md-4 col-lg-3">About me</router-link>
						<router-link to="/portfolio" class="header__nav-link col-sm-4 col-md-4 col-lg-3">Portfolio</router-link>
						<router-link to="/contact" class="header__nav-link col-sm-4 col-md-4 col-lg-3">Contact</router-link>
				</nav>
			</div>
		</div>

	</header>

</template>
