<template>
    <div>
        <h3 class="card-title">افزودن تصویر</h3>
        <!-- /.card-header -->
        <div class="card-header bg-transparent">
            <template v-if="image">
                <button class="btn btn-transparent"><img :src="image" @click="removeImage($event)" width="100"></button>
            </template>
        </div>
        <div class="card-body" style="display: block;">
            <form @submit.prevent="handleUploading()">
                <div class="mailbox-attachment-info">
                    <label class="col-10">
                        <input type="file" hidden ref="imageChoosing" @change="imageChanged">
                        <a v-show="!uploading" class="mailbox-attachment-name"><i class="fa fa-camera"></i> انتخاب تصویر</a>
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
            <div v-for="(error,i) in errors[0]" class="alert alert-danger alert-dismissible mt-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                <p v-for="e in error">
                    <a>{{ e }}</a>
                </p>
            </div>
            <div v-show="successfullUpload" class="alert alert-success alert-dismissible mt-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ successfullUpload }}
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</template>

<script>
export default {
    name: "ImageUploadComponentC",
    props: ['oldImage', 'articleId'],
    data: function () {
        return {
            progress: 0,
            errors: [],
            uploading: false,
            fileChoosed: [],
            successfullUpload: '',
            image: this.oldImage ? this.oldImage : null,
            mediaUploaded: [],
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    methods: {
        //Image Uploader
        //Getting List Of Images
        gettingListOfImages: function () {
            this.image = ''
            axios.get('/panel/images/initiate/' + this.articleId)
                .then(res => {
                    this.image = res.data
                })

            this.$forceUpdate()
        },
        removeImage(e) {
            e.preventDefault()
            axios.post('/panel/images/delete/' + this.articleId)
                .then(() => {
                this.image = ''
                    console.log('image trashed')
            })
            this.$forceUpdate()
        },
        handleUploading: function () {
            this.uploading = true;
            let formData = new FormData();
            formData.append('file', this.fileChoosed[0]);
            axios.post('/panel/images/upload/' + this.articleId, formData, {
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
                this.gettingListOfImages(this.articleId)
                this.uploading = false;
                this.fileChoosed = []
                this.successfullUpload = 'آپلود شد'
                setTimeout(() => {
                    this.successfullUpload = ''
                }, 3000)
            })
                .catch(err => {
                    this.successfullUpload = ''
                    this.errors = [];
                    this.uploading = false;
                    this.errors.push(err.response.data.errors);
                })
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
