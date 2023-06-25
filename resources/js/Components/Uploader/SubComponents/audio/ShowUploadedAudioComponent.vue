<template>
    <div v-if="file">
        <template v-for="f in file">
            <div><span>نام فایل</span> : <span>{{f.filename}}</span></div>
            <div><span>حجم فایل</span> : <span>{{f.size}}</span>
                <button @click="clicked($event,f.id)" class="btn btn-sm btn-danger text-white m-2">
                    حذف فایل
                </button>
            </div>
        </template>
    </div>
</template>

<script>
export default {
    name: "ShowUploadedAudioComponent",
    props: ['file'],
    methods:{
        clicked (event,id){
            event.preventDefault()
            this.$emit('on-remove-audio',id)
        }
    }
}
</script>

<style scoped>

</style>
