<template>
    <div v-if="file">
        <div><span>نام فایل</span> : <span>{{file.filename}}</span></div>
        <div><span>حجم فایل</span> : <span>{{file.size}}</span>
            <button @click="clicked($event)" class="btn btn-sm btn-danger text-white m-2">
                حذف فایل
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShowUploadedDocumentComponent",
    props: ['file'],
    methods:{
        clicked (event){
            this.$emit('on-remove-document',event)
        }
    }
}
</script>

<style scoped>

</style>
