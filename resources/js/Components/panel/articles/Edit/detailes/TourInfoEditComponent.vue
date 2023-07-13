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
                        <option v-for="year in data.years" :value="year">
                            {{ year }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.start_month" class="form-control select2" id="start_date_month" name="area_id">
                        <option value="0">ماه</option>
                        <option v-for="month in data.months" :value="month.id">
                            {{ month.title }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.start_day" class="form-control select2" id="start_date_day" name="area_id">
                        <option value="0">روز</option>
                        <option v-for="day in data.days" :value="day">
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
                        <option v-for="year in data.years" :value="year">
                            {{ year }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.end_month" class="form-control select2" id="start_date_month" name="area_id">
                        <option value="0">ماه</option>
                        <option v-for="month in data.months" :value="month.id">
                            {{ month.title }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <select v-model="detail.end_day" class="form-control select2" id="start_date_day" name="area_id">
                        <option value="0">روز</option>
                        <option v-for="day in data.days" :value="day">
                            {{ day }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="col-md-4 col-12">
                <div class="input-box">
                    <span class="text-danger">*</span>
                    <label class="label-text">مدت تور</label>
                    <div class="form-group">
                        <span class="la la-pencil form-icon"></span>
                        <input class="form-control" type="text" v-model="detail.tour_period" placeholder="تعداد روز">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <span class="text-danger">*</span>
                <label class="label-text">نوع سفر</label>
                <div class="form-group">
                    <select v-model="detail.selectedTypeMoving" class="form-control select2" id="selected-type-moving" name="area_id">
                        <option value="0">انتخاب</option>
                        <option v-for="type in articleTypeMovings" :value="type.id">
                            {{ type.name_fa }}
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
    name: "TourInfoEditComponent",
    props: ['articleId','articleTypeMovings','tourInfo'],
    data() {
        return {
            data : {
                years: constants.YEARS,
                months: constants.MONTH,
                days: constants.DAYS
            },
            detail:
                {
                    start_year: this.tourInfo[0].start_year,
                    start_month: this.tourInfo[0].start_month,
                    start_day: this.tourInfo[0].start_day,
                    end_year: this.tourInfo[0].end_year,
                    end_month: this.tourInfo[0].end_month,
                    end_day: this.tourInfo[0].end_day,
                    selectedTypeMoving : this.tourInfo[0].selectedTypeMoving,
                    tour_period : this.tourInfo[0].tour_period,
                }
        }
    },
    methods: {
        setDateInputs(){
            this.detail.start_year = this.tourInfo.start_day.year
            this.detail.start_month = this.tourInfo.start_day.month
            this.detail.start_day = this.tourInfo.start_day.day

            this.detail.end_year = this.tourInfo.end_day.year
            this.detail.end_month = this.tourInfo.end_day.month
            this.detail.end_day = this.tourInfo.end_day.day
        }
        // onChangedDetail(value) {
        //     this.bookData.agegroup_id = JSON.parse(JSON.stringify(value))
        // },
    },
    created() {
        // this.setDateInputs();
    },
    watch: {
        detail: {
            handler(val) {
                this.$emit('tour-info-inputs', val)
            },
            deep: true
        }
        // data:{
        //     handler(val) {
        //         this.detail.start_date = [this.data.start_year,this.data.start_month,this.data.start_day].join('/')
        //         this.detail.end_date = [this.data.end_year,this.data.end_month,this.data.end_day].join('/')
        //     },
        //     deep: true
        // }
    }
}
</script>

<style scoped>

</style>
