<template>
	<div class="outlet">
		<image-lightbox v-show="showModal" :imageSrc="imageSrc" @close="deselect">
		</image-lightbox>

		<div class="portfolio_item" v-for="item in items">
			<p><span class="tag-class">&lt;h3&gt;</span><span class="h4">{{ item.title }}</span><span class="tag-class">&lt;/h3&gt;</span></p>
			<p><span class="tag-class">&lt;p&gt;</span><span v-html="item.description"></span><span class="tag-class">&lt;/p&gt;</span></p>
			<div v-if="item.image">
				<span class="tag-class">&lt;img src= </span><!-- <img @click="selectItem(item)" :src="/storage/+item.image" class="portfolio-img" /> --><div @click="selectItem(item)" class="portfolio-img" v-bind:style="{ 'background-image': 'url(/storage/'+item.image+')', 'background-size': 'cover', 'background-repeat':'no-repeat', 'background-position':'top center'}"></div><span class="tag-class"> /&gt;</span>
			</div>
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
				$('body').css('overflow', 'hidden');
	    },
	    deselect() {
	    	this.selectedItem = '';
	      this.showModal = false;
				$('body').css('overflow', 'auto');
	    }
		},
}

</script>
