<template>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">محتوای کتاب</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="name_en"><strong>نام کتاب انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.name_en" id="name_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="name_fa"><strong>نام کتاب فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.name_fa" id="name_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="name_ar"><strong>نام کتاب عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.name_ar" id="name_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="writer_en"><strong>نام نویسنده انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.writer_en" id="writer_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="writer_fa"><strong>نام نویسنده فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.writer_fa" id="writer_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="writer_ar"><strong>نام نویسنده عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.writer_ar" id="writer_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="title_en"><strong>عنوان انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.title_en" id="title_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="title_fa"><strong>عنوان فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.title_fa" id="title_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="title_ar"><strong>عنوان عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.title_ar" id="title_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="subject_en"><strong>موضوع انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.subject_en" id="subject_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="subject_fa"><strong>موضوع فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.subject_fa" id="subject_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="subject_ar"><strong>موضوع عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.subject_ar" id="subject_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="publication"><strong>سال انتشار</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.publication" id="publication">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="turnofprint_en"><strong>دوره چاپ انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.turnofprint_en" id="turnofprint_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="turnofprint_fa"><strong>دوره چاپ فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.turnofprint_fa" id="turnofprint_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="turnofprint_ar"><strong>دوره چاپ عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.turnofprint_ar" id="turnofprint_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="description_en"><strong>متن انگلیسی</strong></label>
                        <textarea  v-model="bookData.description_en" id="description_en"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="description_fa"><strong>متن فارسی</strong></label>
                        <textarea  v-model="bookData.description_fa" id="description_fa"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="description_ar"><strong>متن عربی</strong></label>
                        <textarea  v-model="bookData.description_ar" id="description_ar"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="translator_en"><strong>مترجم انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.translator_en" id="translator_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="translator_fa"><strong>مترجم فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.translator_fa" id="translator_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="translator_ar"><strong>مترجم عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.translator_ar" id="translator_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="publisher_en"><strong>ناشر انگلیسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.publisher_en" id="publisher_en">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="publisher_fa"><strong>ناشر فارسی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.publisher_fa" id="publisher_fa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-danger">*</label>
                        <label for="publisher_ar"><strong>ناشر عربی</strong></label>
                        <input type="text" class="form-control "   v-model="bookData.publisher_ar" id="publisher_ar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <AgesGroupComponent :ages="agegroups" @agegroup-changed="onChangedAge"/>
                </div>
                <div class="col-md-4">
                    <ContactComponent @contact-changed="onChangedContact"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="basic-url">لینک آمازون</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://example.com</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" v-model="bookData.amazonlink" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="basic-url">لینک طاقچه</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://example.com</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" v-model="bookData.taghchelink" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="summary_en"><strong>چکیده انگلیسی</strong></label>
                        <textarea  v-model="bookData.summary_en" id="summary_en"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="summary_fa"><strong>چکیده فارسی</strong></label>
                        <textarea  v-model="bookData.summary_fa" id="summary_fa"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="summary_ar"><strong>چکیده عربی</strong></label>
                        <textarea  v-model="bookData.summary_ar" id="summary_ar"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
            </div>
<!--            llllllllllllllllllllllllllllllllllllllllllllllllllllllllll-->
            <div class="row">
                <div class="col-md-12">
                    <MyEditorComponent
                        title="ارزش ها (انگلیسی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedValuesEn"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="ارزش ها (فارسی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedValuesFa"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="ارزش ها (عربی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedValuesAr"
                    />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label><strong>راهنمای والدین و مربیان</strong></label>
                    <FaqComponent
                        :article-id="articleId"
                        type="book_parent_guide"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="راهنما (انگلیسی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedGuideEn"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="راهنما (فارسی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedGuideFa"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="راهنما (عربی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedGuideAr"
                    />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label><strong>مجموعه پرسشها و گفتگوها</strong></label>
                <FaqComponent
                    :article-id="articleId"
                    type="book_questions"
                    />
                </div>
<!--                <div class="col-md-12">-->
<!--                    <div class="form-group">-->
<!--                        <span class="text-danger">*</span>-->
<!--                        <label for="questions_en"><strong>پرسش های انگلیسی</strong></label>-->
<!--                        <textarea  v-model="bookData.questions_en" id="questions_en"-->
<!--                                  class="form-control"-->
<!--                        ></textarea>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="text-danger">*</span>
                        <label for="questions_fa"><strong>پرسش های فارسی</strong></label>
                        <textarea  v-model="bookData.questions_fa" id="questions_fa"
                                  class="form-control"
                        ></textarea>
                    </div>
                </div>
<!--                <div class="col-md-12">-->
<!--                    <div class="form-group">-->
<!--                        <span class="text-danger">*</span>-->
<!--                        <label for="questions_ar"><strong>پرسش های عربی</strong></label>-->
<!--                        <textarea  v-model="bookData.questions_ar" id="questions_ar"-->
<!--                                  class="form-control"-->
<!--                        ></textarea>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <MyEditorComponent
                        title="کاردستی (انگلیسی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedManualworkEn"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="کاردستی (فارسی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedManualworkFa"
                    />
                </div>
                <div class="col-md-12">
                    <MyEditorComponent
                        title="کاردستی (عربی)"
                        :csrf="csrf"
                        :article-id="articleId"
                        @emit-editor-event="onChangedManualworkAr"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AgesGroupComponent from "@/components/subcomponents/AgesGroupComponent.vue";
import ContactComponent from "@/components/subcomponents/ContactComponent.vue";
import MyEditorComponent from "@/components/articles/editor/MyEditorComponent.vue";
import FaqComponent from "@/components/articles/faq/FaqComponent.vue";
export default {
    name: "BookComponent",
    components: {FaqComponent, MyEditorComponent, ContactComponent, AgesGroupComponent},
    props : ['agegroups','articleId'],
    data () {
        return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            bookData :
                {
                name_en : '' ,
                name_fa : '' ,
                name_ar : '' ,
                writer_en : '' ,
                writer_fa : '' ,
                writer_ar : '' ,
                title_en : '' ,
                title_fa : '' ,
                title_ar : '' ,
                subject_en : '' ,
                subject_fa : '' ,
                subject_ar : '' ,
                publication : '' ,
                turnofprint_en : '' ,
                turnofprint_fa : '' ,
                turnofprint_ar : '' ,
                description_en : '' ,
                description_fa : '' ,
                description_ar : '' ,
                translator_en : '' ,
                translator_fa : '' ,
                translator_ar : '' ,
                publisher_en : '' ,
                publisher_fa : '' ,
                publisher_ar : '' ,
                agegroup_id : 0,
                contact_id: 0,
                amazonlink : '' ,
                taghchelink : '' ,
                summary_en : '' ,
                summary_fa : '' ,
                summary_ar : '' ,
                values_en : '' ,
                values_fa : '' ,
                values_ar : '' ,
                guide_en : '' ,
                guide_fa : '' ,
                guide_ar : '' ,
                questions_en : '' ,
                questions_fa : '' ,
                questions_ar : '' ,
                manualwork_en : '' ,
                manualwork_fa : '' ,
                manualwork_ar : '' ,
            }
        }
    },
    methods : {
        onChangedAge(value) {
            this.bookData.agegroup_id = JSON.parse(JSON.stringify(value))
        },
        onChangedContact(value) {
            this.bookData.contact_id = JSON.parse(JSON.stringify(value))
        },
        onChangedValuesEn(text) {
            this.bookData.values_en = JSON.parse(JSON.stringify(text))
        },
        onChangedValuesFa(text) {
            this.bookData.values_fa = JSON.parse(JSON.stringify(text))
        },
        onChangedValuesAr(text) {
            this.bookData.values_ar = JSON.parse(JSON.stringify(text))
        },
        onChangedGuideEn(text) {
            this.bookData.guide_en = JSON.parse(JSON.stringify(text))
        },
        onChangedGuideFa(text) {
            this.bookData.guide_fa = JSON.parse(JSON.stringify(text))
        },
        onChangedGuideAr(text) {
            this.bookData.guide_ar = JSON.parse(JSON.stringify(text))
        },
        onChangedManualworkEn(text) {
            this.bookData.manualwork_en = JSON.parse(JSON.stringify(text))
        },
        onChangedManualworkFa(text) {
            this.bookData.manualwork_fa = JSON.parse(JSON.stringify(text))
        },
        onChangedManualworkAr(text) {
            this.bookData.manualwork_ar = JSON.parse(JSON.stringify(text))
        },
    },
    watch : {
        bookData : {
            handler(val){
                this.$emit('book-inputs', val)
            },
            deep: true
        },
    }
}
</script>

<style scoped>

</style>
