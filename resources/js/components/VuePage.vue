<template>
	<div class="single-page-container">
		<about-me :skills="skills" :sectionHeight="sectionHeight"></about-me>

		<portfolio :works="works" :sectionHeight="sectionHeight"></portfolio>

		<contact :sectionHeight="sectionHeight"></contact>
	</div>
</template>
<script>
	export default {
		props: ['skills', 'works'],
		data() {
			return {
				sectionHeight: window.innerHeight
			}
		},
		methods: {
			handleResize () {
				this.sectionHeight = window.innerHeight;
			},
			handleScroll () {
				// if ( window.scrollY > (this.sectionHeight /2 ) && window.scrollY < (this.sectionHeight + this.sectionHeight / 2
				// ) ) {
				// 	window.scrollTo(0, this.sectionHeight + 1);
				// } else if (window.scrollY >= (this.sectionHeight + this.sectionHeight / 2 )){
				// 	window.scrollTo(0, this.sectionHeight * 2 + 1);
				// } else {
				// 	window.scrollTo(0, 0);
				// }
			}
		},
		created () {
			window.addEventListener('resize', this.handleResize);
			window.addEventListener('scroll', this.handleScroll);
		},
		destroyed () {
			window.removeEventListener('resize', this.handleResize);
			window.removeEventListener('scroll', this.handleScroll);
		}
	}
</script>
