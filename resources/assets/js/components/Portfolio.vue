<template>
	<div class="outlet">
		<div class="portfolio_item" v-for="item in items">
			<p><span class="tag-class">&lt;h3&gt;</span><span class="h3">{{ item.title }}</span><span class="tag-class">&lt;/h3&gt;</span></p>
			<p><span class="tag-class">&lt;p&gt;</span>{{ item.description }}<span class="tag-class">&lt;/p&gt;</span></p>
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
