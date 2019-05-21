<template>
	<div class="output">
		<h4>{{ message }}</h4>
		<h4>Skills:</h4>
		<ul>
			<li v-for="item in items">{{ item.title }}</li>
		</ul>
	</div>

</template>

<script>
    export default {
		props: ['skills','works'],
        data() {
            return {
                message: "Hello, my name is Anastasiia and I'm a web developer",
				items: []
            }
        },
		methods: {
			decodeData(){
				this.items =  JSON.parse(window.atob(this.skills));
			}
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