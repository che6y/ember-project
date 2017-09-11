<template>
	<div class="outlet">
		<div v-if="item.email !== null ">
			<p><span class="tag-class">&lt;a href="mailto:email"&gt;</span><a :href="'mailto:'+item.email">My email</a><span class="tag-class">&lt;/a&gt;</span></p>
			<br />
		</div>

		<div v-if="item.github !== null ">
			<p><span class="tag-class">&lt;a href="github-account"&gt;</span><a :href="item.github">My github</a><span class="tag-class">&lt;/a&gt;</span></p>
			<br />
		</div>

		<p><span class="tag-class">&lt;a href="cv.pdf" download&gt;</span><a href="" download>Download my CV</a><span class="tag-class">&lt;/a&gt;</span></p>

		<br />

		<div v-if="item.codewars !== null ">
			<p><span class="tag-class">&lt;p&gt;</span>Codewars account:<span class="tag-class">&lt;/p&gt;</span></p>
			<p><span class="tag-class">&lt;img src=</span><img :src="item.codewars" alt="code-wars-badge"><span class="tag-class"> alt="code-wars-badge"&gt;</span></p>
		</div>

	</div>
</template>

<script>
export default {
		props: ['contact'],
    data() {
        return {
					item: {}
				}
    },
		created() {
			this.item = JSON.parse(this.contact)
		}
}
</script>
