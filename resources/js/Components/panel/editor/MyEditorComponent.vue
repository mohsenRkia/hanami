<template>
    <div class="form-group">
        <span class="text-danger">*</span>
        <label class="label-text">{{title}}</label>
        <QuillEditor style="height: 180px" :modules="modules" toolbar="full" v-model:content="editorContent" contentType="html"/>
    </div>
</template>

<script>
import {ref, defineComponent} from 'vue'
import constants from "@/constants.js";
import {QuillEditor} from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'
import ImageUploader from 'quill-image-uploader';

export default defineComponent({
    name: "MyEditorComponent",
    props: {
        articleId : Number,
        title: String,
        oldContent : String
    },
    components: {
        QuillEditor,
    },
    data(){
        return {
            editorContent : this.oldContent ? this.oldContent : ''
        }
    },
    watch : {
        editorContent : {
            handler(val){
                this.$emit('emit-editor-event', val)
            },
            deep: true
        },
    },
    setup: (props) => {
        const modules = {
            name: 'imageUploader',
            module: ImageUploader,
            options: {
                upload: file => {
                    return new Promise((resolve, reject) => {
                        let formData = new FormData();
                        formData.append("image", file);
                        axios.post(`/panel/image/editor/upload/${props.articleId}`,formData,constants.AXIOS_HEADER)
                            .then(res => {
                                console.log(res)
                                resolve(res.data);
                            })
                            .catch(err => {
                                reject("Upload failed");
                                console.error("Error:", err)
                            })
                    })
                }
            }
        }
        return { modules }
    }
})
</script>


<!--<template>-->
<!--    <div class="form-group">-->
<!--        <span class="text-danger">*</span>-->
<!--        <label for="description_fa"><strong>متن فارسی</strong></label>-->
<!--        <QuillEditor :modules="modules" toolbar="full"/>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--import { ref, defineComponent } from 'vue'-->
<!--import { QuillEditor } from '@vueup/vue-quill'-->
<!--import '@vueup/vue-quill/dist/vue-quill.snow.css';-->
<!--import ImageUploader from 'quill-image-uploader'-->
<!--export default {-->
<!--    name: "MyEditorComponent",-->
<!--    props: ['articleId'],-->
<!--    components: {-->
<!--        QuillEditor-->
<!--    },-->
<!--    setup : () => {-->
<!--        const modules = {-->
<!--            name: 'imageUploader',-->
<!--            module: ImageUploader,-->
<!--            option : {-->
<!--                upload : file => {-->
<!--                    return new Promise((resolve,reject) => {-->
<!--                        const formData = new FormData();-->
<!--                        formData.append("image",file);-->

<!--                        axios.post(`/panel/image/editor/upload/${this.articleId}`,formData)-->
<!--                            .then(res => {-->
<!--                                console.log(res)-->
<!--                                resolve(res.data.url);-->
<!--                            })-->
<!--                            .catch(err => {-->
<!--                                reject("Upload failed");-->
<!--                                console.error("Error:" , err)-->
<!--                            })-->
<!--                    })-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--        return {modules}-->

<!--    }-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->
