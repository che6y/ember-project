<template>
	<div class="output portfolio-output">
        <div class="sidebar">
            <ul class="sidebar__nav">
                <li
                    v-for="item in items"
                    v-bind:class="['sidebar__nav-link']"
                    v-on:click="openItem(item.id)"
                >{{ item.title }}</li>
            </ul>
        </div>
        <div class="portfolio_items">
            <portfolio-item
                v-for="item in items"
                v-bind:class="['portfolio_item', 'item-'+item.id, { active: currentTab === 'item-' + item.id }]"
                :item="item"
                v-bind:key="item.id"
            ></portfolio-item>
        </div>
	</div>
</template>

<script>
export default {
    props: ['works'],
    data() {
        return {
            currentTab: "item-6",
            items: []
        }
    },
    methods: {
        decodeData(){
            this.items =  JSON.parse(window.atob(this.works));
        },
        openItem( $id ){
            this.currentTab = 'item-' + $id;
        }
    },
    created() {
        this.decodeData();
    }
}
</script>
<style scoped>

    .output {
        padding: 0;
    }
</style>