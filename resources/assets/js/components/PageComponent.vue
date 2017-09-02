<template>
	<main class="main">
			<router-view :skills="skills" :works="works"></router-view>
	</main>
</template>
<script>
	export default {
		props: ['skills','works']
	}
</script>
