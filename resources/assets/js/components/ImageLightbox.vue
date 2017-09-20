<template>
	<transition name="modal">
	    <div class="modal-mask" >
	      <div class="modal-wrapper" @click="$emit('close')">
	        <div class="modal-container">

	          <div class="modal-body">
							<button class="btn btn-outline-secondary modal-default-button" @click="$emit('close')">
								X
							</button>
	            <slot name="body">
	              <img :src="imageSrc">
	            </slot>
	          </div>

	        </div>
	      </div>
	    </div>
	</transition>
</template>

<script>

export default {

	props: ['imageSrc']

}
</script>
