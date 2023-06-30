<template>
    <div class="contact-form-action">
        <div class="row">
            <div class="col-8">
                <ContentComponent
                    @content-data="onChangedContent"
                    :article-id="article.id"
                    :article="article"
                ></ContentComponent>
            </div>
            <div class="col-4">
                <!--        CATEGORY        -->
                <div class="col-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label class="label-text">دسته بندی</label>
                        <select v-model="category_id" class="form-control select2" id="article_category" name="area_id">
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
        <div class="row">
            <UploadComponent :mediaable-id="article.id"/>
        </div>
        <template v-if="currentType == 'tour'">
            TOOOOUUUUR
<!--            <BookComponent @book-inputs="onChangedBook" :agegroups="articleAgegroups"-->
<!--                           :article-id="newArticleId"></BookComponent>-->
        </template>
    </div>
    <div class="col-lg-12">
        <div class="btn-box">
            <button class="theme-btn" type="submit" @click="updateArticle">ذخیره تغییرات</button>
        </div>
    </div>
    <!-- end col-lg-12 -->
</template>

<script>
import constants from "@/constants.js";
import ContentComponent from "@/Components/panel/articles/Edit/ContentEditComponent.vue";
import HEADER from "@/constants.js";
import UploadComponent from "@/components/Uploader/UploadComponent.vue";

export default {
    name: "ArticleEditComponent",
    props: ['articleTypes', 'articleCategories','article'],
    components: {
        ContentComponent,
        UploadComponent,
    },
    data() {
        return {
            childContentData: [this.article],
            currentType: this.article.type,
            childImageData: [],
            category_id: this.article.category_id,
            status: this.article.status,
        }
    },
    watch: {

    },
    methods: {
        onChangedContent(value) {
            this.childContentData = []
            this.childContentData.push(JSON.parse(JSON.stringify(value)))
        },
        updateArticle() {
            axios.put(`/panel/tours/update/${this.article.id}`, {
                type: this.currentType,
                status : this.status,
                category_id: this.category_id,
                data: this.childContentData[0],
                // book: this.childBookData[0],
            }, constants.AXIOS_HEADER).then((response) => {
                alert(response.data)
                this.$swal('ثبت شد')
                this.$swal(
                    'عالی بود!',
                    'محتوای جدید با موفقیت افزوده شد!',
                    'success'
                )
                setTimeout(() => {
                    // location.replace('/panel/tours')
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
