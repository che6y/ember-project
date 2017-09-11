<template>
	<div>
			<router-view :skills="skills" :works="works" :contact="contact"></router-view>
	</div>
</template>
<script>
	export default {
		props: ['skills','works','contact']
	}
</script>
