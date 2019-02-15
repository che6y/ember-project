<template>

	<header class="header">
		<div class="header__title">
			<h2><router-link :to="{ name: 'about-me' }">Abbakumova</router-link></h2>
		</div>

		<nav class="header__nav row align-items-end">
			<router-link :to="{ name: 'about-me' }" class="header__nav-link">About me</router-link>
			<router-link :to="{ name: 'portfolio' }" class="header__nav-link">Portfolio</router-link>
			<router-link :to="{ name: 'contact' }" class="header__nav-link">Contact</router-link>
		</nav>
	</header>

</template>
