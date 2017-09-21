<template>
	<div class="outlet">
		<image-lightbox v-show="showModal" :imageSrc="imageSrc" @close="deselect">
		</image-lightbox>

		<div class="portfolio_item" v-for="item in items">
			<p><span class="tag-class">&lt;h3&gt;</span><span class="h4">{{ item.title }}</span><span class="tag-class">&lt;/h3&gt;</span></p>
			<p><span class="tag-class">&lt;p&gt;</span><span v-html="item.description"></span><span class="tag-class">&lt;/p&gt;</span></p>
			<p>
				<span class="tag-class">&lt;img src= </span><img @click="selectItem(item)" :src="/storage/+item.image" class="portfolio-img" /><span class="tag-class"> /&gt;</span>
			</p>
		</div>

	</div>
</template>

<script>

export default {
		props: ['works'],
    data() {
        return {
					showModal: false,
					items: [],
					imageSrc: '',
				}
    },
		created() {
			this.items = JSON.parse(this.works);
		},
		methods: {
			selectItem(item) {
	      this.imageSrc = '/storage/' + item.image;
	      this.showModal = true;
	    },
	    deselect() {
	    	this.selectedItem = '';
	      this.showModal = false;
	    }
		},
}
</script>
