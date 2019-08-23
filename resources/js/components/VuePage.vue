<template>
	<div id="fullpage" class="single-page-container">

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
				sectionHeight: window.innerHeight,
				scrollPos	 : (document.body.getBoundingClientRect()).top,
				activeSection: 0
			}
		},
		methods: {
			handleResize () {
				this.sectionHeight = window.innerHeight;
			},
			handleScroll () {
				if ((document.body.getBoundingClientRect()).top > this.scrollPos){
					this.activeSection -= this.sectionHeight;
					window.scroll(0, this.activeSection);
					console.log('UP');
				} else if ((document.body.getBoundingClientRect()).top < this.scrollPos){
					console.log('DOWN');
					this.activeSection += this.sectionHeight;
					window.scroll(0, this.activeSection);
				} else {

				}

				this.scrollPos = (document.body.getBoundingClientRect()).top;
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
