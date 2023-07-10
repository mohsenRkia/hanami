<template>
    <template v-if="image">
        <img :src="image"  width="100">
        <button class="btn btn-transparent">
            <div class="theme-btn theme-btn border-danger bg-danger text-white delete_article_ajax">
                <i class="la la-trash" @click="clicked($event)"></i>
            </div>
        </button>
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
