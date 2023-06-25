<template>
    <div v-for="(error,i) in errors[0]" class="alert alert-danger alert-dismissible mt-2">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
        <p v-for="e in error">
            <a>{{ e }}</a>
        </p>
    </div>
</template>

<script>
export default {
    name: "UploadErrorsComponent",
    props: ['errors']
}
</script>

<style scoped>

</style>
