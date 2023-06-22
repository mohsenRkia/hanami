<template>
    <a @click="deleteItem"
<<<<<<< HEAD
       class="btn btn-sm btn-danger text-white delete_article_ajax">
        حذف
=======
       class="theme-btn theme-btn-small border-danger bg-danger text-white delete_article_ajax" data-toggle="tooltip" data-placement="top" title="حذف">
        <i class="la la-times"></i>
>>>>>>> majid
    </a>
</template>

<script>
export default {
    name: "DeleteComponent",
<<<<<<< HEAD
    props: ['itemId','postType'],
=======
    props: ['itemId','postType','postModule'],
>>>>>>> majid
    methods: {
        deleteItem() {
            this.$swal.fire({
                title: 'حذف می کنید ؟',
                text: "امکان بازگشت وجود ندارد!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
<<<<<<< HEAD
                cancelButtonColor: '#d33',
=======
                cancelButtonColor: '#f00125',
>>>>>>> majid
                confirmButtonText: 'بله، حذف شود.',
                cancelButtonText: 'لغو'
            }).then((result) => {
                if (result.isConfirmed) {
<<<<<<< HEAD
                    axios.delete(`/panel/${this.postType}/${this.itemId}`)
=======
                    axios.delete(`/panel/${this.postModule}/${this.postType}/${this.itemId}`)
>>>>>>> majid
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
            })
        }
    }
}
</script>

<style>

</style>
