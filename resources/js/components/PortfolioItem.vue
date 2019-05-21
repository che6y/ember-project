<template>
    <div>
        <p>
            <span class="h4">{{ item.title }}</span>
        </p>
        <p>
            {{ item.description }}
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