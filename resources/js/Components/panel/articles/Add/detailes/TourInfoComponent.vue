<template>
    <div class="row">
        <div class="col-12">
            <div class="input-box">
                <span class="text-danger">*</span>
                <label class="label-text">عنوان</label>
                <div class="form-group">
                    <span class="la la-pencil form-icon"></span>
                    <input class="form-control" type="text" v-model="detail.name"
                           placeholder="عنوان موضوع">
                </div>
            </div>
        </div>
        <!-- end col-lg-4 -->
<!--        <div class="col-12">-->
<!--            <div class="input-box">-->
<!--                <MyEditorComponent-->
<!--                    title="توضیحات مطلب"-->
<!--                    :article-id="articleId"-->
<!--                    @emit-editor-event="onChangedDescriptionEn"-->
<!--                />-->
<!--            </div>-->
<!--        </div>&lt;!&ndash; end col-lg-4 &ndash;&gt;-->
    </div>
</template>

<script>
export default {
    name: "TourInfoComponent",
    props: ['agegroups', 'articleId'],
    data() {
        return {
            detail:
                {

                }
        }
    },
    methods: {
        // onChangedDetail(value) {
        //     this.bookData.agegroup_id = JSON.parse(JSON.stringify(value))
        // },
    },
    watch: {
        detail: {
            handler(val) {
                this.$emit('tour-info-inputs', val)
            },
            deep: true
        },
    }
}
</script>

<style scoped>

</style>
