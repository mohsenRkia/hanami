<template>
    <div class="row">
        <div class="col-12">
            <div class="input-box">
                <span class="text-danger">*</span>
                <label class="label-text">عنوان</label>
                <div class="form-group">
                    <span class="la la-pencil form-icon"></span>
                    <input class="form-control" type="text" v-model="contentData.title"
                           placeholder="عنوان موضوع">
                </div>
            </div>
        </div>
        <!-- end col-lg-4 -->
        <div class="col-12">
            <div class="input-box">
                <MyEditorComponent
                    title="توضیحات مطلب"
                    :article-id="articleId"
                    @emit-editor-event="onChangedDescriptionEn"
                />
            </div>
        </div><!-- end col-lg-4 -->
        <div class="col-md-5"></div>
    </div>
</template>

<script>
import MyEditorComponent from "@/Components/panel/editor/MyEditorComponent.vue";

export default {

    props: ['categories', 'currentId', 'articleId'],
    name: "ContentComponent",
    components: {
        MyEditorComponent
    },
    data() {
        return {
            contentData: {
                title: '',
                description : ''
            }
        }
    },
    methods: {
        // onChangedName(text) {
        //     this.contentData.title = JSON.parse(JSON.stringify(text))
        // },
        // onChangedDescriptionEn(text) {
        //     this.contentData.description = JSON.parse(JSON.stringify(text))
        // },
    },
    watch: {
        contentData: {
            handler(val) {
                this.$emit('content-data', val)
            },
            deep: true
        },
    }
}
</script>

<style>

</style>
