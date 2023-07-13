<template>
    <div class="card">
        <div class="card-header">
            آپلود فایل
        </div>
        <div class="card-body">
            <div class="row">
                <div v-show="image_type" class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        :module="module"
                        :model="model"
                        type="image"
                        component-title="تصویر"
                        @image-event="imageEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldImage"
                        :tag="tagMediable"
                    />
                </div>
                <div v-show="video_type" class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="ویدیو"
                        component-type="video"
                        @video-event="videoEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldVideo"
                        type="video"
                        :tag="tagMediable"
                    />
                </div>
                <div v-show="audio_type" class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="فایل صوتی"
                        component-type="audio"
                        @audio-event="audioEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldAudio"
                        type="audio"
                        :tag="tagMediable"
                    />
                </div>
                <div v-show="document_type" class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="فایل PDF"
                        component-type="document"
                        @document-event="documentEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldDocument"
                        type="document"
                        :tag="tagMediable"
                    />
                </div>

<!--                <div class="m2-video-uploading-part col-md-6">-->
<!--                    <VideoUploadComponent/>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</template>

<script>
import VideoUploadComponent from "@/components/Uploader/VideoUploadComponent.vue";
import BodyUploadComponent from "@/Components/Uploader/BodyUploadComponent.vue";

export default {
    name: "UploadComponent",
    components: {BodyUploadComponent, VideoUploadComponent},
    props: ['imageEvent','mediaableId','oldImage','oldVideo','videoEvent','oldAudio','audioEvent','oldDocument','documentEvent','fileTypes','module','model','tagMediable'],
    data(){
        return {
            image_type : false,
            audio_type : false,
            video_type : false,
            document_type : false,
        }
    },
    created() {
        this.checkFileTypes()
    },
    methods:{
        checkFileTypes(){
            const types = this.fileTypes.split(',')
            if (types.includes("image")) this.image_type = true
            if (types.includes("audio")) this.audio_type = true
            if (types.includes("video")) this.video_type = true
            if (types.includes("document")) this.document_type = true


        }
    }
}
</script>
