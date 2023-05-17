<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Accodion from '@/Components/Accodion.vue'
import { reactive, ref,onMounted,onActivated} from 'vue';
import AddNewSectionModal from '@/Components/Modals/AddSection.vue';
import { useToast } from 'primevue/usetoast';

export default {


    data(){
        return reactive({
           pages: [],
           activePage: 1,
           page_sections: [],
           showAddCourseForm: false,
           showAddNewSectionForm: false,
           loader: null,
           toast: useToast(),
        })
    },

    mounted(){

        this.getPages();
        this.getPageSections();
        this.showLoader();
        this.hideLoader();
    },

    methods:{
        showLoader(){

            this.loader = this.$loading.show({
                    // Optional parameters
                    container: this.fullPage ? null : this.$refs.formContainer,
                    canCancel: true,
                    onCancel: this.onCancel,
                    loader: 'dots',
                    color: '#615D5D'
            });

               // simulate AJAX
          
        },
        hideLoader(){

            setTimeout(() => {
                this.loader.hide()
            }, 5000)
        },
        getPages(){

            axios.get('pages').then(response =>{
                this.pages = response.data;
              //  console.log(pages);
            })
        }, 

        getPageSections(){

            axios.get('page/sections/'+this.activePage).then(response =>{
                this.page_sections = response.data;
            })

        },
        showModal() {
            this.$refs['my-modal'].show()
        },
        addCourse(){

            this.showAddCourseForm = true;
        },
        toggleAddSectionModal(){
         
            this.showAddNewSectionForm = !this.showAddNewSectionForm;
           
        },
        showToast(message){

            this.toast.add({ severity: 'success',summary: 'Info', detail:message,life: 4000 });
        }
        
    },

    components:{
        AuthenticatedLayout,
        Head,
        Accodion,
        AddNewSectionModal        
    }
}

</script>

<template>
    <Head title="Dashboard"  />
    <ConfirmDialog id="confirm" />

    <AuthenticatedLayout :key="showAddCourseForm">
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row table-agile-info">
                        <div class="col-sm-3">
                            <div class="card page-selector">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Select a Page</h3>
                                </div>
                                <div class="card-body table-responsive">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group p-card-body">

                                            <label>Select</label>
                                                <select @change="getPageSections()" v-model="activePage" class="form-control" >
                                                    <option :value="page.id" v-for="(page,index) in pages" :key="page.id">{{ page.name }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9" >
                            <div class="card page-sections">
                                <Accodion @showToast="showToast" @getPageSections="getPageSections"  v-for="(section,index) in page_sections" :key="section.id" :section="section" :section_id="section.id" :contentType="section.content_type"  isActive="active"> </Accodion>
                                
                                <div class="section-footer">
                                    <button @click="toggleAddSectionModal"  data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Add New Section</button>
                                </div>

                                <AddNewSectionModal @showToast="showToast" @getPageSections="getPageSections" v-if="showAddNewSectionForm" :pageId="activePage" @toggleAddSectionModal="toggleAddSectionModal"  /> 

                               

                                <Toast position="bottom-left" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

    ::v-deep  .mu-plus-icon{

        color: #FCB322 !important;
        font-size: 3rem !important;
        flex: 1;
    }

   

    ::v-deep .p-button{

        background:cornflowerblue !important;
    }

    .section-footer{
        display:flex;
        justify-content: flex-end;
    }

    .btn-success{
        background-color: #ff6c60;
        color:#fff;
        border-color: #ff6c60;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: 0.25rem;
    }
    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0,0,0,.125);
        padding: 0.75rem 0.75rem;
        padding-top:1.3rem;
        position: relative;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        color: #000000 ! important;
        background-color: #ddede0 ! important;
        border-color: #ddede0 ! important;
        font-size: 20px;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        float: left;
        font-size: 1.1rem;
        font-weight: 400;
        margin: 0;
    }

    .page-sections{
        padding:20px;
    }

   

</style>