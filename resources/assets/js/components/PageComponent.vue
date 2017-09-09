<template>
	<div>
			<router-view :skills="skills" :works="works"></router-view>
	</div>
</template>
<script>
	export default {
		props: ['skills','works']
	}
</script>
