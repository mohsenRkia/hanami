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
            <div class="col-md-12">
                <upload-component
                    :module="module"
                    :model="model"
                    :mediaable-id="article.id"
                    @image-event="onChangedImage"
                    :old-image="oldImage"
                    file-types="image"
                    :tag-mediable="tagMediable"
                />
            </div>
        </div>
        <template v-if="currentType === 'tour'">
            <TourInfoEditComponent
                @tour-info-inputs="onChangedTourInfo"
                :article-type-movings = "articleTypeMovings"
                :article-id="article.id"
                :tour-info = "tourInfo"
            ></TourInfoEditComponent>
            <KeyValueComponent
                subject="خدمات تور"
                :article-id = "article.id"
                route="tours/otherDetails"
                :old-fa-keys="oldFaKeys"
                />
            <TourDestinationsComponent
                subject="مقاصد"
                :cities="cities"
                route = "tours/tourDestinations"
                :old-fa-keys="oldDestinationsKeys"
                :article-id = "article.id"
                />
            <TourPlansComponent
                subject="برنامه سفر تور"
                :type-movings="articleTypeMovings"
                route = "tours/tourPlans"
                :old-fa-keys="oldPlansKeys"
                :article-id = "article.id"
                />
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
import UploadComponent from "@/components/Uploader/UploadComponent.vue";
import TourInfoEditComponent from "@/Components/panel/articles/Edit/detailes/TourInfoEditComponent.vue";
import KeyValueComponent from "@/Components/panel/key/KeyValueComponent.vue";
import TourDestinationsComponent from "@/Components/panel/articles/TourDestinations/TourDestinationsComponent.vue";
import TourPlansComponent from "@/Components/panel/articles/TourPlans/TourPlans.vue";

export default {
    name: "ArticleEditComponent",
    props: ['articleType','articleTypes', 'articleCategories','article','articleTypeMovings',
        'module','model','oldImage','tagMediable','oldFaKeys','cities','oldDestinationsKeys','oldPlansKeys'],
    components: {
        TourPlansComponent,
        TourDestinationsComponent,
        KeyValueComponent,
        TourInfoEditComponent,
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
            tourInfo : this.article.tour_main_detail ? [
                {
                    start_year:this.article.tour_main_detail.start_day[0],
                    start_month:this.article.tour_main_detail.start_day[1],
                    start_day:this.article.tour_main_detail.start_day[2],
                    end_year:this.article.tour_main_detail.end_day[0],
                    end_month:this.article.tour_main_detail.end_day[1],
                    end_day:this.article.tour_main_detail.end_day[2],
                    selectedTypeMoving:this.article.tour_main_detail.type_moving_id,
                    tour_period:this.article.tour_main_detail.tour_period

                }
            ] : []
        }
    },
    watch: {

    },
    methods: {
        onChangedImage(value) {
            this.childImageData = []
            Array.prototype.push.apply(this.childImageData, JSON.parse(JSON.stringify(value)))
        },
        onChangedContent(value) {
            this.childContentData = []
            this.childContentData.push(JSON.parse(JSON.stringify(value)))
        },
        onChangedTourInfo(value) {
            this.tourInfo = []
            this.tourInfo.push(JSON.parse(JSON.stringify(value)))
        },
        updateArticle() {
            axios.put(`/panel/${this.articleType}/update/${this.article.id}`, {
                type: this.currentType,
                status : this.status,
                category_id: this.category_id,
                data: this.childContentData[0],
                tour_info : this.tourInfo[0]
                // book: this.childBookData[0],
            }, constants.AXIOS_HEADER).then((response) => {
                console.log(response.data)
                this.$swal('ثبت شد')
                this.$swal(
                    'عالی بود!',
                    'محتوای جدید با موفقیت افزوده شد!',
                    'success'
                )
                setTimeout(() => {
                    if (this.articleType == 'tours') {
                        location.replace(`/panel/tours`)
                    } else {
                        location.replace(`/panel/article/articles`)
                    }
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
