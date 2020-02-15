<template>
	<div>
        <section id="portfolio" class="portfolio">
            <portfolio-item
                    v-for="item in items"
                    class="portfolio-item"
                    :item="item"
                    v-bind:key="item.id"
            ></portfolio-item>
        </section>
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
    methods: {
        decodeData(){
            this.items =  JSON.parse(window.atob(this.works));
        },
    },
    created() {
        this.decodeData();
    }
}
</script>
<style scoped>
    section:before {
        display: block;
        content: "";
        height: 75px;
        margin: -75px 0 0;
    }
</style>