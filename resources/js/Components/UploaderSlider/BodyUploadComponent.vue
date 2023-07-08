<template>
    <div>
        <h3 class="card-title">افزودن {{ componentTitle }}</h3>
        <!-- /.card-header -->
        <div class="card-header bg-transparent">
            <template v-if="componentType == 'image'">
                <ShowUploadedImageComponent
                    :image="image"
                    @on-remove-image="removeImage"
                />
            </template>
        </div>
        <div class="card-body" style="display: block;">
            <form @submit.prevent="handleUploading">
                <div class="mailbox-attachment-info">
                    <label class="col-10">
                        <input type="file" hidden ref="imageChoosing" @change="imageChanged($event)">
                        <a v-show="!uploading" class="mailbox-attachment-name"><i class="fa fa-camera"></i> انتخاب
                            {{ componentTitle }}</a>
                        <a v-show="uploading" class="mailbox-attachment-name"><i class="fa fa-spinner"></i>در حال آپلود</a>
                        <div v-if="fileChoosed[0]">{{ fileChoosed[0].name }}</div>
                        <span v-show="uploading" class="mailbox-attachment-size">
                                            <div class="progress progress-sm active">
                                                <div class="progress-bar bg-success progress-bar-striped"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100" :style="{width: progress}">
                                                    <span class="sr-only">{{ progress }}</span>
                                                </div>
                                            </div>
                                        </span>
                    </label>
                    <button type="submit" class="btn btn-default btn-sm float-left col-2"><i
                        class="fa fa-cloud-upload"></i></button>
                </div>
            </form>
            <UploadSucceededComponent
                :uploaded-message="successfullUpload"
            />
            <UploadErrorsComponent
                :errors="errors"
            />
        </div>

    </div>
</template>

<script>
import UploadSucceededComponent from "@/components/Uploader/SubComponents/UploadSucceededComponent.vue";
import UploadErrorsComponent from "@/components/Uploader/SubComponents/UploadErrorsComponent.vue";
import ShowUploadedImageComponent from "@/components/Uploader/SubComponents/image/ShowUploadedImageComponent.vue";
import ShowUploadedVideoComponent from "@/components/Uploader/SubComponents/Video/ShowUploadedVideoComponent.vue";

export default {
    name: "BodyUploadComponent",
    components: {ShowUploadedVideoComponent, ShowUploadedImageComponent, UploadErrorsComponent, UploadSucceededComponent},
    props: ['componentTitle', 'componentType', 'oldImage', 'mediaableId'],
    data: function () {
        return {
            module : 'slider',
            model : 'slider',
            type : 'image',
            fileChoosed: [],
            uploading: false,
            progress: 0,
            successfullUpload: '',
            errors:[],
            image: this.oldImage ? this.oldImage : null,
            mediaUploaded: [],
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    methods: {
        //Image Uploader
        handleUploading: function () {
            this.uploading = true;
            let formData = new FormData();
            formData.append('file', this.fileChoosed[0]);
            axios.post(`/panel/uploader/images/upload/${this.module}/${this.model}/${this.type}/${this.mediaableId}`, formData, {
                onUploadProgress: e => {
                    if (e.lengthComputable) {
                        this.progress = Math.round((e.loaded / e.total) * 100) + '%';
                    }
                },
                headers: {
                    'content-type': 'multipart/form-data',
                    'X-CSRF-TOKEN': this.csrf,
                }
            }).then((res) => {
                this.errors = [];
                this.mediaUploaded.push(res.data)
                this.gettingListOfImages(this.mediaableId)
                this.uploading = false;
                this.fileChoosed = []
                this.successfullUpload = 'آپلود شد'
                setTimeout(() => {
                    this.successfullUpload = ''
                }, 3000)
            }).catch(err => {
                this.successfullUpload = ''
                this.errors = [];
                this.uploading = false;
                this.errors.push(err.response.data.errors)
            })
        },
        //Getting List Of Images
        gettingListOfImages: function () {
            this.image = ''
            axios.get(`/panel/uploader/images/initiate/${this.module}/${this.model}/${this.type}/${this.mediaableId}`)
                .then(res => {
                    this.image = res.data
                })

            this.$forceUpdate()
        },
        removeImage(e) {
            e.preventDefault()
            axios.post(`/panel/uploader/images/delete/${this.module}/${this.model}/${this.type}/${this.mediaableId}`)
                .then(() => {
                    this.image = ''
                    this.fileChoosed = []
                })
            this.$forceUpdate()
        },
        imageChanged: function (event) {
            this.fileChoosed = event.target.files;
        },
    },
    watch: {
        mediaUploaded: {
            handler(val) {
                this.$emit('image-event', val)
            },
            deep: true
        },
    }
}
</script>

<style scoped>

</style>
