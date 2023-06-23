 <template>
     <div class="row">
         <div class="col-lg-6 col-sm-4">
             <div class="input-box">
                 <label class="label-text">عنوان</label>
                 <div class="form-group">
                     <span class="la la-pencil form-icon"></span>
                     <input class="form-control" type="text" v-model="contentData.name"
                            placeholder="عنوان موضوع">
                 </div>
             </div>
         </div><!-- end col-lg-4 -->
     </div><!-- end row -->


<!--     <MyEditorComponent-->
<!--         title="متن انگلیسی"-->
<!--         :csrf="csrf"-->
<!--         :article-id="articleId"-->
<!--         @emit-editor-event="onChangedDescriptionEn"-->
<!--     />-->
</template>

<script>
// import MyEditorComponent from "@/components/articles/editor/MyEditorComponent.vue";
export default {

    props: ['categories','currentId','articleId'],
    name: "ContentComponent",
    components: {
        // MyEditorComponent
    },
    data () {
        return{
            contentData : {
                name : '',
            }
        }
    },
    methods:{
        onChangedName(text) {
            this.contentData.name = JSON.parse(JSON.stringify(text))
        },
    },
    watch : {
        contentData : {
            handler(val){
               this.$emit('content-data', val)
            },
            deep: true
        },
    }
}
</script>

<style>

</style>
