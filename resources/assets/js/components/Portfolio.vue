<template>
	<div class="outlet">
		<div class="portfolio_item" v-for="item in items">
			<p><span class="tag-class">&lt;h3&gt;</span><span class="h4">{{ item.title }}</span><span class="tag-class">&lt;/h3&gt;</span></p>
			<p><span class="tag-class">&lt;p&gt;</span>{{ item.description }}<span class="tag-class">&lt;/p&gt;</span></p>
			<p>
				<span class="tag-class">&lt;img src= </span><img @click="showModal = true" src="/uploads/SkiingInKamchatka.png" class="portfolio-img" /><span class="tag-class"> /&gt;</span>
			</p>
			<image-lightbox v-if="showModal" @close="showModal = false" :imageSrc="imageSrc">
		    <!-- <h3 slot="header">custom header</h3> -->
		  </image-lightbox>
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
					imageSrc: '/uploads/SkiingInKamchatka.png'
				}
    },
		created() {
			this.items = JSON.parse(this.works)
		},
		methods: {
			imageClicked: function() {
				console.log('Image clicked!');
			}
		}
}
</script>
