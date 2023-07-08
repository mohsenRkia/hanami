<template>
    <template v-if="image">
        <button class="btn btn-transparent"><img :src="image" @click="clicked($event)" width="100"></button>
    </template>
</template>

<script>
export default {
    name: "ShowUploadedImageComponent",
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
