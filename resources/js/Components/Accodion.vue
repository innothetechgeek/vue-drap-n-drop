<template>
    <div>
        <button @click="toggleAccordion(section_id);" class="accordion" :class="{active:isActive}+' section-title'">
            {{ section.name }}
            <!-- test -->
            <font-awesome-icon icon="fa-solid fa-plus" />
        </button>
        <div :id="'panel_' + section_id"  class="panel">  

            <div class="panel-content">
                <Uploader v-if="saved.length != 0 && contentType == 'slider'"
                    :media="saved"   
                    server="sections/uploadsliderimage"
                    location="storage/sliders/1/slides"
                    class="uploader"
                />

                <Courses :sectionId="section_id" v-if="contentType == 'courses'"/>

                <StaticSectionManager v-if="contentType == 'static content'" />

            </div>
            
            <div class="panel-footer">
                <div class="right-col">

                </div>
                <div class="left-col">
                   
                    <span  @click="showConfirmationDialog(),getPageSections()" class="cursor-pointer delete-section">
                        <font-awesome-icon class="fa-trash" icon="fa-solid fa-trash" />
                        Delete section
                    </span>
                    &nbsp;&nbsp;
                    <span class="delete-section cursor-pointer"> 
                        <font-awesome-icon class="fa-times" icon="fa-solid fa-times" />
                        Deactivate section
                   </span>
                </div>
            </div>

        </div>
       
    </div>
</template>

<script>
import Uploader from "vue-media-upload";
import Courses from '@/Components/Courses.vue';
import StaticSectionManager from '@/Components/StaticSectionManager.vue';
import { useConfirm } from "primevue/useconfirm";

export default {

        components: {
            Uploader,
            Courses,
            StaticSectionManager
        },

        mounted(){
            this.getSlides(3);
        },
        
        data(){
            return {
                slides: null,
                saved: [
                  
                ],
                colapseIcon: 'plus',
                showAddCourseForm: false,
                confirm: useConfirm()
              
            }
        },
        props: ['isActive','section_id','section',"contentType"],
        emits: ['getPageSections'],
         methods:{

            toggleAccordion(section_id){
                
                var acc = document.getElementsByClassName("accordion");              
                    /* Toggle between hiding and showing the active panel */
                var panel =  document.getElementById("panel_"+section_id);

                if (panel.style.display === "block") {

                    panel.style.display = "none";

                }else {

                    panel.style.display = "block";

                }                 
                
                this.active_section_id = section_id;
                this.show_update_section_title_form = false;
                
            },

            getSlides(sectionId){

                axios.get('sections/slides/1').then(response => {
                      
                    this.saved = response.data

                }).catch(function (error) {
                    console.log('error : ', error);
                });

            },
            AddCourse(){
                this.showAddCourseForm = true;
            },

            getPageSections(){

                setTimeout(() => {
                        this.$emit('getPageSections');
                }, 2000);

            },

            deleteSection(){
                
                axios.get(route('section.delete',{id: this.section_id})).then(response => {

                }).catch(function (error) {
                    console.log('error : ', error);
                });

            },
            showConfirmationDialog(){

                this.confirm.require({
                    message: 'Are you sure you want to proceed?',
                    header: 'Confirmation',
                    accept: () => {
                        this.deleteSection();
                    },
                });

            }
        }
    }
</script>

<style scoped>

.panel-footer{
    margin-top:25px;
    border-top: 1px solid #F0BCB4;
    padding:15px;
    display:flex;
    justify-content: space-between;
}
:deep(.gallery[data-v-446c7bb4]) {
   border:none !important;
   border:none !important;
}

.p-button{
    background:red;
}

.cursor-pointer{
    cursor: pointer;
}

.fa-trash{
   color:#ff6c60;
}

.fa-times{
    color: #F0BCB4;
}

.section-footer button{

    margin-bottom:15px;

}

.mu-plusbox{
    width:150px !important;
}

::v-deep  .uploader .mu-plusbox{
    width:560px !important;
}

::v-deep  .uploader #mu-file-input{
    display: none !important;
}
.accordion {
  background-color: #ddede0 ! important;
  border-color: #ddede0 ! important;
 
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  margin-bottom:8px;
}

.accordion.active{
  background-color:#5d6368;;
  
}

.page-sections{
  padding:20px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}

.slider-images div{
  width:18%;
  margin-bottom:15px;
}

.slider-images .gallery{
   border:none !important;
}

.elements-wraper{
  border:none;
}
.slider-images{
  display: flex;
  justify-content: space-around;
  display: -webkit-box;  /* OLD - iOS 6-, Safari 3.1-6, BB7 */
  display: -ms-flexbox;  /* TWEENER - IE 10 */
  display: -webkit-flex; /* NEW - Safari 6.1+. iOS 7.1+, BB10 */
  display: flex;         /* NEW, Spec - Firefox, Chrome, Opera */
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  flex-wrap:wrap;
}

.section-title{
    font-weight: bold;
    display:flex;
    justify-content:space-between;
}

.slider-images{
    display: grid;
    grid-template-columns: auto auto auto auto;

   
}

.slider-images div img{
    width:150px;
}
</style>

