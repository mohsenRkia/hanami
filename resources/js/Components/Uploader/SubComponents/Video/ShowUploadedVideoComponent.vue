<template>
    <template v-if="image">
        <button class="btn btn-transparent" @click="clicked($event)">
            <video width="100" height="100">
                <source :src="image" type="video/mp4">
                <source :src="image" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </button>
    </template>
</template>

<script>
export default {
    name: "ShowUploadedVideoComponent",
    props: ['image'],
    methods:{
        clicked (event){
            this.$emit('on-remove-image',event)
        }
    }
}
</script>

<style scoped>

</style>
