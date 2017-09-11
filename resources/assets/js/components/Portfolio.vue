<template>
	<div class="outlet">
		<div class="portfolio_item" v-for="item in items">
			<p><span class="tag-class">&lt;h3&gt;</span><span class="h4">{{ item.title }}</span><span class="tag-class">&lt;/h3&gt;</span></p>
			<p><span class="tag-class">&lt;p&gt;</span>{{ item.description }}<span class="tag-class">&lt;/p&gt;</span></p>
			<p>
				<lightbox :images="images"></lightbox>
				<!-- <span class="tag-class">&lt;img src= </span><img src="/uploads/SkiingInKamchatka.png" class="portfolio-img" /><span class="tag-class"> /&gt;</span> -->
			</p>
		</div>
	</div>
</template>

<script>
import Lightbox from 'vue-image-lightbox';

export default {
		props: ['works'],
		components: {
	    Lightbox,
	  },
    data() {
        return {
					items: [],
					images: [
						  {
						    thumb: 'http://127.0.0.1:8000/uploads/SkiingInKamchatka1.png',
						    src: 'http://127.0.0.1:8000/uploads/SkiingInKamchatka.png',
						    caption: 'Caption',
						  }
					]
				}
    },
		created() {
			this.items = JSON.parse(this.works)
		}
}
</script>
