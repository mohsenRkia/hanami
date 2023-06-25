<template>
    <div class="contact-form-action">
        <div class="row">
            <div class="col-8">
                <ContentComponent
                    @content-data="onChangedContent"
                    :categories={articleCategories}
                    :article-id="newArticleId"
                ></ContentComponent>
            </div>
            <div class="col-4">
                <!--        CATEGORY        -->
                <div class="col-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label class="label-text">دسته بندی</label>
                        <select v-model="category_id" class="form-control select2" id="article_category" name="area_id">
                            <option value="0">انتخاب کنید</option>
                            <option v-for="category in articleCategories" :value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <!--        TYPE        -->
                <div class="col-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label class="label-text">نوع پست</label>
                        <select v-model="currentType" class="form-control select2" id="article_type" name="area_id">
                            <option value="notype">انتخاب کنید</option>
                            <option v-for="type in articleTypes" :value="type.slug">
                                {{ type.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <!--        STATUS        -->
                <div class="col-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label class="label-text">وضعیت پست</label>
                        <select v-model="status" class="form-control select2" id="article_status" name="area_id">
                            <option :value="null">انتخاب کنید</option>
                            <option value="1">
                                منتشر شود
                            </option>
                            <option value="0">
                                پیش نویس
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="newArticleId > 0" class="row">
            <UploadComponent v-show="newArticleId != null" :mediaable-id="newArticleId"/>
        </div>
        <template v-if="currentType == 'tour'">
            TOOOOUUUUR
<!--            <BookComponent @book-inputs="onChangedBook" :agegroups="articleAgegroups"-->
<!--                           :article-id="newArticleId"></BookComponent>-->
        </template>
    </div>
    <div class="col-lg-12">
        <div class="btn-box">
            <button class="theme-btn" type="submit" @click="storeArticle">ذخیره تغییرات</button>
        </div>
    </div>
    <!-- end col-lg-12 -->
</template>

<script>
import constants from "@/constants.js";
import ContentComponent from "@/Components/panel/articles/Add/ContentComponent.vue";
import HEADER from "@/constants.js";
import UploadComponent from "@/components/Uploader/UploadComponent.vue";

export default {
    name: "ArticleComponent",
    props: ['articleTypes', 'articleCategories'],
    components: {
        ContentComponent,
        UploadComponent,
    },
    data() {
        return {
            newArticleId: null,
            childContentData: [],
            currentType: 'notype',
            childImageData: [],
            category_id: 0,
            status: null,
        }
    },
    watch: {
        childContentData: {
            handler: function () {
                this.quickStore();
            },
            deep: true
        },
        category_id: {
            handler: function () {
                this.quickStore();
            },
            deep: true
        },
        currentType: {
            handler: function () {
                this.quickStore();
            },
            deep: true
        }
    },
    methods: {
        onChangedContent(value) {
            this.childContentData = []
            this.childContentData.push(JSON.parse(JSON.stringify(value)))
        },
        quickStore() {
            if (this.newArticleId == null) {
                this.newArticleId = 0
                axios.post('/panel/tours/quick/store', {
                    type: this.currentType,
                    category_id: this.category_id,
                    data: this.childContentData[0],
                }, constants.AXIOS_HEADER).then((response) => {
                    this.newArticleId = response.data.id
                }).catch((e) => {
                    this.$swal({
                        icon: 'error',
                        title: 'اخطار...',
                        text: e.response.data.message,
                    })
                })
            }
        },
        storeArticle() {
            axios.put(`/panel/tours/update/${this.newArticleId}`, {
                type: this.currentType,
                category_id: this.category_id,
                data: this.childContentData[0],
                // book: this.childBookData[0],
            }, constants.AXIOS_HEADER).then((response) => {
                this.$swal('ثبت شد')
                this.$swal(
                    'عالی بود!',
                    'محتوای جدید با موفقیت افزوده شد!',
                    'success'
                )
                setTimeout(() => {
                    location.replace('/panel/tours')
                }, 2000)
            }).catch((e) => {
                this.$swal({
                    icon: 'error',
                    title: 'اخطار...',
                    text: e.response.data.message,
                })
            })
        }
    }
}
</script>

<style scoped>

</style>
