<template>
	<div class="sidebar">
		<div class="sidebar__nav">
			<router-link :to="{ name: 'about-me' }" class="sidebar__nav-link">About me</router-link>
			<router-link :to="{ name: 'portfolio' }" class="sidebar__nav-link">Portfolio</router-link>
			<router-link :to="{ name: 'contact' }" class="sidebar__nav-link">Contact</router-link>
		</div>
	</div>
</template>
