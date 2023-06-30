<template>
    <div class="row mt-2">
        <div class="col-12">
            <span class="text-danger">*</span>
            <label class="label-text">تاریخ رفت</label>
        </div>
        <div class="col-2">
            <div class="form-group">
                <select v-model="start_date_year" class="form-control select2" id="start_date_year" name="area_id">
                    <option value="0">انتخاب کنید</option>
                    <option v-for="year in detail.years" :value="year">
                        {{ year }}
                    </option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <select v-model="start_date_month" class="form-control select2" id="start_date_month" name="area_id">
                    <option value="0">ماه</option>
                    <option v-for="month in detail.months" :value="month.id">
                        {{ month.name }}
                    </option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <select v-model="start_date_day" class="form-control select2" id="start_date_day" name="area_id">
                    <option value="0">روز</option>
                    <option v-for="day in detail.days" :value="day">
                        {{ month }}
                    </option>
                </select>
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
import constants from "@/constants.js";

export default {
    name: "TourInfoComponent",
    props: ['agegroups', 'articleId'],
    data() {
        return {
            detail:
                {
                    years: constants.YEARS,
                    months: constants.MONTH,
                    days: constants.DAYS,
                    year : 0,
                    month: 0,
                    day: 0
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
