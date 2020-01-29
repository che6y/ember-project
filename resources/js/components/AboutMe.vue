<template>
	<div data-y-offset="{ offset }" id="section-about-me">
		<section id="about-me" class="about-me" v-bind:style="{ height: sectionHeight + 'px' }"  >
			<h4>{{ message }}</h4>
			<h4>Skills:</h4>
			<ul>
				<li v-for="item in items">{{ item.title }}</li>
			</ul>
		</section>
	</div>
</template>

<script>
    export default {
		props: ['skills', 'sectionHeight'],
        data() {
            return {
                message	: "Hello, my name is Anastasiia and I'm a web developer",
				items	: [],
				offset	: null
            }
        },
		methods: {
			decodeData(){
				this.items =  JSON.parse(window.atob(this.skills));
			}
		},
		mounted() {
			var d = document.getElementById('section-about-me');
			this.offset = d.offsetTop;
		},
        created() {
			this.decodeData();
        }
    }
</script>
<style scoped>
	li {
		text-indent: 20px;
	}
</style>