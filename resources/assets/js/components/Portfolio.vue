<template>
	<div class="outlet">
		<div class="portfolio_item" v-for="work in works">
			<p>{{ work.title }}</p>
			<p>{{ work.description }}</p>
		</div>
	</div>
</template>

<script>
export default {
    data() {
        return {
					works: []
				}
    },
		created() {
			axios.get('/works').then(response => {
				this.works = response.data;
			});
		}
}
</script>
