<template>
    <a @click="deleteItem"
       class="theme-btn theme-btn-small border-danger bg-danger text-white delete_article_ajax" data-toggle="tooltip" data-placement="top" title="حذف">
        <i class="la la-times"></i>
    </a>
</template>

<script>
export default {
    name: "DeleteComponent",
    props: ['itemId','postType','postModule'],
    methods: {
        deleteItem() {
            this.$swal.fire({
                title: 'حذف می کنید ؟',
                text: "امکان بازگشت وجود ندارد!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#f00125',
                confirmButtonText: 'بله، حذف شود.',
                cancelButtonText: 'لغو'
            }).then((result) => {
                if (result.isConfirmed) {
                    if (this.postModule === undefined){
                        axios.delete(`/panel/${this.postType}/${this.itemId}`)
                            .then((res) => {
                                    if (res.data == true){
                                        this.$swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'آیتم با موفقیت حذف شد.',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        setTimeout(() => {
                                            location.reload()
                                        },2000)
                                    }
                                }
                            )
                    }else {
                        axios.delete(`/panel/${this.postModule}/${this.postType}/${this.itemId}`)
                            .then((res) => {
                                    if (res.data == true){
                                        this.$swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'آیتم با موفقیت حذف شد.',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        setTimeout(() => {
                                            location.reload()
                                        },2000)
                                    }
                                }
                            )
                    }
                }
            })
        }
    }
}
</script>

<style>

</style>
