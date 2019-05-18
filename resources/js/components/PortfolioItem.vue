<template>
    <div>
        <p>
            <span class="tag-class">&lt;h3&gt;</span>
            <span class="h4">{{ item.title }}</span>
            <span class="tag-class">&lt;/h3&gt;</span>
        </p>
        <p>
            <span class="tag-class">&lt;p&gt;</span>
            {{ item.description }}
            <span class="tag-class">&lt;/p&gt;</span>
        </p>
    </div>

</template>

<script>
    export default {
        props:['item'],
        name: "PortfolioItem"
    }
</script>

<style scoped>

</style>