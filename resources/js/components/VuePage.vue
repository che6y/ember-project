<template>
	<div class="container">

		<about-me :skills="skills"></about-me>

		<portfolio :works="works"></portfolio>

		<contact></contact>

	</div>
</template>
<script>
	export default {
		props: ['skills','works'],

	}
</script>
