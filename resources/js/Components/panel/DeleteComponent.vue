<template>
    <a @click="deleteItem"
       class="btn btn-sm btn-danger text-white delete_article_ajax">
        حذف
    </a>
</template>

<script>
export default {
    name: "DeleteComponent",
    props: ['itemId','postType'],
    methods: {
        deleteItem() {
            this.$swal.fire({
                title: 'حذف می کنید ؟',
                text: "امکان بازگشت وجود ندارد!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله، حذف شود.',
                cancelButtonText: 'لغو'
            }).then((result) => {
                if (result.isConfirmed) {
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
                }
            })
        }
    }
}
</script>

<style>

</style>
