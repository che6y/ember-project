<template>
	<div data-y-offset="{ offset }" id="section-contact-me">
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
		props: ['sectionHeight'],
		data() {
			return {
				offset: null
			}
		},
		mounted() {
			var d = document.getElementById('section-contact-me');
			this.offset = d.offsetTop;
		},
	}
</script>
<style scoped>

</style>