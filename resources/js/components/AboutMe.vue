<template>
	<div class="outlet">
		<div><span class="tag-class">&lt;h3&gt;</span><span class="h4">{{ message }}</span><span class="tag-class">&lt;/h3&gt;</span>
		</div>
		<br>
		<div><span class="tag-class">&lt;h3&gt;</span><span class="h4">Skills</span><span class="tag-class">&lt;/h3&gt;</span></div>
		<ul>
			<span class="tag-class">&lt;ul&gt;</span>
			<li v-for="item in items"><span class="tag-class">&lt;li&gt;</span>{{ item.title }}<span
					class="tag-class">&lt;/li&gt;</span></li>
			<span class="tag-class">&lt;/ul&gt;</span>
		</ul>
	</div>

</template>

<script>
    export default {
		props: ['skills','works'],
        data() {
            return {
                message: "Hello, my name is Anastasiia and I'm a web developer",
				items: []
            }
        },
		methods: {
			decodeData(){
				this.items =  JSON.parse(window.atob(this.skills));
			}
		},
        created() {
			this.decodeData();
        }
    }
</script>
