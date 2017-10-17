<template>
    <div>
        <input v-model="sliderVal" type="range" min="1" max="100" step="1" @change="changeFoo" />
    </div>
</template>

<script>
    export default {
        props: ['foo'],
        data: function() {
           return {
              sliderVal: ""
           }
        },
        methods: {
            changeFoo() {
                this.$emit('changeFoo', this.sliderVal);
            }
        }
    }
</script>