<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Accodion from '@/Components/Accodion.vue'
import { reactive, ref,onMounted,onActivated} from 'vue';
import AddNewSectionModal from '@/Components/Modals/AddSection.vue';

export default {


    data(){
        return {
           pages: [],
           activePage: 1,
           page_sections: '',
           showAddCourseForm: false,
           showAddNewSectionForm: false
        }
    },

    mounted(){
        this.getPages();
        this.getPageSections();
    },

    methods:{

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
        addNewSection(){
            alert('about to show add new section Form');
            this.showAddNewSectionForm = !this.showAddNewSectionForm;
            alert( this.showAddNewSectionForm );
        }
        
    },

    components:{
        AuthenticatedLayout,
        Head,
        Accodion,
        AddNewSectionModal,
    }
}

</script>

<template>
    <Head title="Dashboard"  />

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
                                <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group p-card-body">
                                            {{ pages.length }}
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
                            <Accodion  v-for="(section,index) in page_sections" :key="section.id" :section="section" :section_id="section.id" :contentType="section.content_type"  isActive="active"> </Accodion>
                            <div class="section-footer">
                                <button @click="addNewSection"  data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Add New Course</button>
                            </div>
                            <AddNewSectionModal v-if="showAddNewSectionForm" :pageId="activePage" @addNewSection="addNewSection"  />
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
    </AuthenticatedLayout>
</template>

<style scoped>

    .section-footer{
        display:flex;
        justify-content: flex-end;
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