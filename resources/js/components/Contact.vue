<template>
	<div>
		<section class="contact" v-bind:style="{ height: sectionHeight + 'px' }">
			<p>
				<a href="">My email</a>
			</p>

			<p>
				<a href="" download>Download my CV</a>
			</p>
		</section>
	</div>
</template>
<script>
	export default {
		props: ['sectionHeight']
	}
</script>
<style scoped>

</style>