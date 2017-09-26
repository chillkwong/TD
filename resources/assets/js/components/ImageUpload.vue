<template>
	<div class="image">
		<image-preview :preview="value" @close="$emit('input', null)" v-if="value"></image-preview>
		<div class="image__upload" v-else>
			<input type="file" accept="images/*" @change="upload">
		</div>
	</div>
</template>

<script type="text/javascript">
	import ImagePreview from './ImagePreview.vue'
	export default {
		components: {
			ImagePreview
		},
		props: {
			value: {
			
				default: null
			}
		},
		methods: {
			upload(e){
				const file = e.target.files
				if (file && file.length > 0) {
					this.$emit('input', file[0])
				}
			}
		}
	}
</script>