<template>
	<div class="container">

		<header class="header">
			<nav class="header__nav row align-items-end">
				<a
					v-for="tab in tabs"
					v-bind:key="tab"
					v-bind:class="['header__nav-link', { active: currentTab === tab }]"
					v-on:click="currentTab = tab"
				>{{ tab }}</a>
			</nav>
			<div class="header__title">
				<h2><a href="/">Site Name</a></h2>
			</div>
		</header>

		<component
				v-bind:is="currentTabComponent"
				class="tab"
				:skills="skills"
				:works="works"
		></component>

		<footer class="footer"></footer>

	</div>
</template>
<script>
	export default {
		props: ['skills','works'],
		data() {
			return {
				currentTab: 'About',
				tabs: ['About', 'Portfolio', 'Contact']
			}

		},
		computed: {
			currentTabComponent: function () {
				return 'tab-' + this.currentTab.toLowerCase()
			}
		}

	}
</script>
