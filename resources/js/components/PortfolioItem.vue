<template>
    <div>
        <h4>{{ item.title }}</h4>
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