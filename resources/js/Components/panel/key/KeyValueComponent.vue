<template>
    <div class="col-12">
        <hr>
        <div class="col-12">
            <label class="label-text">{{subject}}</label>
        </div>
        <div class="tab-pane" id="tab_2">
            <div class="form-group row" v-for="(input,k) in fa_keys" :key="k">
                <template v-if="oldFaKeys">
                    <div class="col-5">
                        <input type="text" class="form-control" v-model="input.key" :placeholder="'کلید ' + (k+1)">
                    </div>
                    <span class="col-2">
                  <button class="btn btn-outline-dark" @click="remove(k)"
                          v-show="k || ( !k && fa_keys.length > 1)"><i class="la la-minus"></i></button>
                <button class="btn btn-info m-1" @click="add(k)"
                        v-show="k == fa_keys.length-1"><i class="la la-plus"></i></button>
                   </span>
                </template>
                <template v-else>
                    <div class="col-5">
                        <input type="text" class="form-control" v-model="input.key" :placeholder="'کلید ' + (k+1)">
                    </div>
                    <span class="col-2">
                  <button class="btn btn-outline-dark" @click="remove(k)"
                          v-show="k || ( !k && fa_keys.length > 1)"><i class="la la-minus"></i></button>
                <button class="btn btn-info m-1" @click="add(k)"
                        v-show="k == fa_keys.length-1"><i class="la la-plus"></i></button>
                   </span>
                </template>
            </div>
            <div class="col-3">
                <button v-show="!loadingKey" @click="addfa_keys()" type="button"
                        class="btn btn-sm btn-outline-success mb-2">
                    ثبت کلید ها
                </button>
                <span v-show="loadingKey" class="btn btn-block btn-outline-info">در حال ذخیره</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "KeyValueComponent",
    props: ['articleId', 'oldFaKeys','subject','route'],
    data() {
        return {
            fa_keys: (this.oldFaKeys && this.oldFaKeys.length > 0) ? this.oldFaKeys : [{key: ''}],
            loadingKey: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    methods: {
        add: function () {
            this.fa_keys.push(
                {
                    key: ''
                }
            )
        },
        remove: function (index) {
            this.fa_keys.splice(index, 1)
        },
        addfa_keys: function () {
            this.loadingKey = true
            axios
                .post(`/panel/${this.route}/update/` + this.articleId, {
                    title: this.fa_keys,
                }, {
                    headers: {
                        'X-CSRF-TOKEN': this.csrf
                    }
                })
                .then(response => {
                    this.loadingKey = false
                    console.log(response.data)
                })
                .catch(error => {
                    this.loadingKey = false
                })
        },
    }

}
</script>

<style>

</style>
