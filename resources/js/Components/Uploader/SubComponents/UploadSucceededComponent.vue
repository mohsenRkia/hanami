<template>
    <div v-show="uploadedMessage" class="alert alert-success alert-dismissible mt-2">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ uploadedMessage }}
    </div>
</template>

<script>
export default {
    name: "UploadSucceededComponent",
    props: ['uploadedMessage']
}
</script>
