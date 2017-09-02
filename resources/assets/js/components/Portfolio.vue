<template>
	<div class="outlet">
		<div class="portfolio_item" v-for="item in items">
			<p>{{ item.title }}</p>
			<p>{{ item.description }}</p>
		</div>
	</div>
</template>

<script>
export default {
		props: ['works'],
    data() {
        return {
					items: []
				}
    },
		created() {
			// axios.get('/works').then(response => {
			// 	this.works = response.data;
			// });
			this.items = JSON.parse(this.works)
		}
}
</script>
