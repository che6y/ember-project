<template>
	<div class="outlet">
		<p v-html="message"></p>
		<br>
		&lt;h3&gt;<span class="h3">Skills</span>&lt;/h3&gt;
		<ul>
			&lt;ul&gt;
			<li v-for="skill in skills">{{ ''+'&lt;li&gt;' + skill.title + '&lt;/li&gt;' }}</li>
			&lt;/ul&gt;
		</ul>
	</div>
</template>

<script>
export default {
    data() {
        return {
					message: "<p>Hello, my name is Anastasiia <br /> and I'm a frontend developer</p>",
					skills: []
				}
    },
		created() {
			axios.get('/skills').then(response => {
				this.skills = response.data;
			});
		}
}
</script>
