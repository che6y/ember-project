<template>
	<div>
        <section class="portfolio" v-bind:style="{ height: sectionHeight + 'px' }">
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
    props: ['works', 'sectionHeight'],
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

</style>