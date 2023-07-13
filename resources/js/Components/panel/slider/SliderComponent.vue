<template>
    <div class="py-5">
        <upload-component
            module="slider"
            model="slider"
            :mediaable-id="slider.id"
            @image-event="onChangedImage"
            :old-image="oldImage"
            file-types="image"
            tag-mediable="image"
        />
    </div>
</template>

<script>
import UploadComponent from "@/Components/Uploader/UploadComponent.vue";

export default {
    name: "SliderComponent",
    props: ['slider', 'oldImage'],
    components: {UploadComponent},
    data() {
        return {
            image: []
        }
    },
    methods: {
        onChangedImage(value) {
            this.image = []
            Array.prototype.push.apply(this.image, JSON.parse(JSON.stringify(value)))
        },
    }
}
</script>

<style scoped>

</style>
