<template>
    <div class="contact-form-action">

        <ContentComponent @content-data="onChangedContent"
                          :categories={articleCategories} :article-id="newArticleId"></ContentComponent>
<!--        <UploadComponent v-show="newArticleId != null" :mediaable-id="newArticleId"/>-->
<!--        <template v-if="currentType == 'book'">-->
<!--            <BookComponent @book-inputs="onChangedBook" :agegroups="articleAgegroups" :article-id="newArticleId"></BookComponent>-->
<!--        </template>-->
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-danger">*</label>
                <label for="area_id"><strong>دسته بندی ها</strong></label>
                <select v-model="category_id" type="text" class="form-control select2" id="area_id" name="area_id">
                    <option value="0">انتخاب کنید</option>
                    <option value="1">
                        آسیا
                    </option>
                </select>
            </div>
        </div>
    </div>
<!--    <div class="card-footer">-->
<!--        <div class="row">-->
<!--            <div class="col-md-8">-->
<!--                <div class="form-group">-->
<!--                    <label for="name"><strong>نوع محتوا</strong></label>-->
<!--                    <select class="form-control select2" id="name" v-model="currentType">-->
<!--                        <option value="notype">بدون تایپ</option>-->
<!--                        <option v-for="type in articleTypes" :value="type.slug">-->
<!--                            {{ type.name }}-->
<!--                        </option>-->
<!--                    </select>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
    <div class="col-lg-12">
        <div class="btn-box">
            <button class="theme-btn" type="submit" @click="storeArticle">ذخیره تغییرات</button>
        </div>
    </div>
    <!-- end col-lg-12 -->
</template>

<script>
import ContentComponent from "@/Components/panel/articles/Add/ContentComponent.vue";
// import UploadComponent from "@/components/Uploader/UploadComponent.vue";

export default {
    name: "ArticleComponent",
    props: ['articleTypes', 'articleCategories', 'pageType'],
    components: {
        ContentComponent,
        // UploadComponent,
    },
    data() {
        return {
            newArticleId: null,
            childContentData: [],
            currentType: 'notype',
            childImageData: [],
            category_id : 0,
        }
    },
    watch: {
        childContentData: {
            handler: function () {
                this.quickStore();
            },
            deep: true
        }
    },
    methods : {
        onChangedContent(value) {
            this.childContentData = []
            this.childContentData.push(JSON.parse(JSON.stringify(value)))
        },
        quickStore() {
            if (this.newArticleId == null){
                this.newArticleId = 0
                axios.post('/panel/tours/quick/store', {
                    type: this.currentType,
                    category_id : this.category_id,
                    data: this.childContentData[0],
                },{
                    headers : {
                        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }).then((response) => {
                    this.newArticleId = response.data.id
                    this.$forceUpdate()
                }).catch((e) => {
                    this.$swal({
                        icon: 'error',
                        title: 'اخطار...',
                        text: e.response.data.message,
                    })
                })
            }
        },
        // storeArticle() {
        //     axios.put(`/panel/articles/${this.newArticleId}`, {
        //         type: this.currentType,
        //         data: this.childContentData[0],
        //         book: this.childBookData[0],
        //         speech: this.childSpeechData[0],
        //         film: this.childFilmData[0],
        //         tags: this.selectedTag,
        //         csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //     }).then((response) => {
        //         this.$swal('ثبت شد')
        //         this.$swal(
        //             'عالی بود!',
        //             'محتوای جدید با موفقیت افزوده شد!',
        //             'success'
        //         )
        //         setTimeout(() => {
        //             location.replace('/panel/articles')
        //         }, 2000)
        //     }).catch((e) => {
        //         this.$swal({
        //             icon: 'error',
        //             title: 'اخطار...',
        //             text: e.response.data.message,
        //         })
        //     })
        // }
    }
}
</script>

<style scoped>

</style>
