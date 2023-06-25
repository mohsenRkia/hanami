<template>
    <div class="card">
        <div class="card-header">
            آپلود فایل
        </div>
        <div class="card-body">
            <div class="row">
                <div class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="تصویر"
                        component-type="image"
                        @image-event="imageEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldImage"
                    />
                </div>
                <div class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="ویدیو"
                        component-type="video"
                        @video-event="videoEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldVideo"
                    />
                </div>
                <div class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="فایل صوتی"
                        component-type="audio"
                        @audio-event="audioEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldAudio"
                    />
                </div>
                <div class="m2-video-uploading-part col-md-6">
                    <BodyUploadComponent
                        component-title="فایل PDF"
                        component-type="document"
                        @document-event="documentEvent"
                        :mediaable-id="mediaableId"
                        :old-image="oldDocument"
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
import BodyUploadComponent from "@/components/Uploader/BodyUploadComponent.vue";

export default {
    name: "UploadComponent",
    components: {BodyUploadComponent, VideoUploadComponent},
    props: ['imageEvent','mediaableId','oldImage','oldVideo','videoEvent','oldAudio','audioEvent','oldDocument','documentEvent'],
}
</script>
