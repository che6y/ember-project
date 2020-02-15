<template>
	<div class="container">

		<div class="nav">
			<ul>
				<li
					v-for="tab in tabs"
					v-bind:key="tab"
					v-bind:class="['nav-item', { active: currentTab === tab }]"
					v-on:click="currentTab = tab"
				>
					{{ tab }}
				</li>
			</ul>

		</div>

		<div class="main">
			<component v-bind:is="currentTabComponent" class="tab" :works="works" :skills="skills"></component>
		</div>


	</div>
</template>
<script>
	export default {
		props: ['skills', 'works'],
		data() {
			return {
				currentTab		: "About me",
				tabs			: ["About me", "Portfolio", "Contact"]
			}
		},
		computed: {
			currentTabComponent: function() {
				return this.currentTab.toLowerCase().replace(' ', '-');
			}
		},
	}
</script>
<style scoped>
	.container {
		position: relative;
	}
	.nav {
		position: fixed;
		height: 60px;
		width: 100%;
		padding: 10px;
	}
	.nav ul {
		list-style: none;
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform:    translate(-50%, -50%);
		-ms-transform:     translate(-50%, -50%);
		-o-transform:      translate(-50%, -50%);
		transform:         translate(-50%, -50%);

	}
	.nav ul li {
		float: left;
		padding: 5px 7px;
		text-transform: uppercase;
		cursor: pointer;
	}
	.main {
		padding: 75px 10% 25px;
	}
	@media screen and (max-width: 360px) {
		.nav ul {
			width: 100%;

		}
	}
</style>
