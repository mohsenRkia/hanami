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


<!--                <div class="m2-video-uploading-part col-md-6">-->
<!--                    <VideoUploadComponent/>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</template>

<script>
import BodyUploadComponent from "@/components/UploaderSlider/BodyUploadComponent.vue";

export default {
    name: "UploadSliderComponent",
    components: {BodyUploadComponent},
    props: ['imageEvent','mediaableId','oldImage','oldVideo','videoEvent'],
}
</script>
