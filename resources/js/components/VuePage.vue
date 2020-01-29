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
				initialPos	 : window.pageYOffset || document.documentElement.scrollTop,
				activeSection: 0,
				sections	 : ['about-me','portfolio','contact'],
				sectionChanged: false
			}
		},
		methods: {
			handleResize () {
				this.sectionHeight = window.innerHeight;
			},
			handleScroll () {
				// this.scrollFunc();

				console.log(this.activeSection);
				let scrollPos = window.pageYOffset || document.documentElement.scrollTop;

				let currentSection = document.getElementById(this.sections[this.activeSection]);
				let curSecPosition = currentSection.offsetTop;


				if ( this.initialPos > scrollPos ) {
					console.log('up');
					if ( scrollPos < (curSecPosition + this.sectionHeight*0.6 ) && !this.sectionChanged){
						console.log('next section');
						this.activeSection -= 1;
						this.sectionChanged = true;
						let currentSection = document.getElementById(this.sections[this.activeSection]);
						this.scrollFunc( currentSection.offsetTop );

					}

				} else {
					console.log('down', );
					if ( scrollPos > (curSecPosition + this.sectionHeight*0.3 ) && !this.sectionChanged){
						console.log('next section');
						this.activeSection += 1;
						this.sectionChanged = true;
						let currentSection = document.getElementById(this.sections[this.activeSection]);
						this.scrollFunc( currentSection.offsetTop );

					}

				}


				this.initialPos = window.pageYOffset || document.documentElement.scrollTop;
			},
			scrollFunc ( curSecPosition ) {
				window.scroll({
					top: curSecPosition,
					left: 0,
					behaviour: 'smooth'
				});
				this.sectionChanged = false;
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
