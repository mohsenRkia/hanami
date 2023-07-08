<template>
    <div class="py-5">
        <UploadSliderComponent
            :mediaable-id="slider.id"
            @image-event="onChangedImage"
            :old-image="oldImage"
        />
    </div>
</template>

<script>
import UploadSliderComponent from "@/Components/UploaderSlider/UploadSliderComponent.vue";

export default {
    name: "SliderComponent",
    props: ['slider','oldImage'],
    components: {UploadSliderComponent},
    data(){
        return {
            image: []
        }
    },
    methods:{
        onChangedImage(value) {
            this.image = []
            Array.prototype.push.apply(this.image, JSON.parse(JSON.stringify(value)))
        },
    }
}
</script>

<style scoped>

</style>
