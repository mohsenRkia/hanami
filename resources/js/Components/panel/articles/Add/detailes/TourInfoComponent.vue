<template>
    <div class="row mt-2">
        <div class="row col-6">
            <div class="col-12">
                <span class="text-danger">*</span>
                <label class="label-text">تاریخ رفت</label>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.start_year" class="form-control select2" id="start_date_year" name="area_id">
                        <option value="0">سال</option>
                        <option v-for="year in detail.years" :value="year">
                            {{ year }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.start_month" class="form-control select2" id="start_date_month" name="area_id">
                        <option value="0">ماه</option>
                        <option v-for="month in detail.months" :value="month.id">
                            {{ month.title }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.start_day" class="form-control select2" id="start_date_day" name="area_id">
                        <option value="0">روز</option>
                        <option v-for="day in detail.days" :value="day">
                            {{ day }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row col-6">
            <div class="col-12">
                <span class="text-danger">*</span>
                <label class="label-text">تاریخ برگشت</label>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.end_year" class="form-control select2" id="start_date_year" name="area_id">
                        <option value="0">سال</option>
                        <option v-for="year in detail.years" :value="year">
                            {{ year }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.end_month" class="form-control select2" id="start_date_month" name="area_id">
                        <option value="0">ماه</option>
                        <option v-for="month in detail.months" :value="month.id">
                            {{ month.title }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.end_day" class="form-control select2" id="start_date_day" name="area_id">
                        <option value="0">روز</option>
                        <option v-for="day in detail.days" :value="day">
                            {{ day }}
                        </option>
                    </select>
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
                    start_year : 0,
                    start_month: 0,
                    start_day: 0,
                    end_year : 0,
                    end_month: 0,
                    end_day: 0,
                    start_date : '',
                    end_date : ''
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
                this.detail.start_date = [this.detail.start_year,this.detail.start_month,this.detail.start_day].join('/')
                this.detail.end_date = [this.detail.end_year,this.detail.end_month,this.detail.end_day].join('/')
                this.$emit('tour-info-inputs', val)

            },
            deep: true
        },
    }
}
</script>

<style scoped>

</style>
