<script setup>

import { useForm } from "@inertiajs/vue3";
import { defineEmits } from 'vue';

const emits = defineEmits(["toggleAddSectionModal","getPageSections"]);

let data = {
    
    name: null, 
    contentType: null,   

}

//console.log(emits('getPageSections'));

const props = defineProps({
    pageId: Number,
})




const getPageSections = () => {

    setTimeout(() => {
                
    
        alert('After emit');


    }, 2000);

   

}

const submit = async() => {
    
   
   // emits("getPageSections");

   const response = await axios.post(route('page.addsection',{id:props.pageId}),data);
  

       //getPageSections();
       emits('getPageSections');
       emits("toggleAddSectionModal");
        //const locaEemits = defineEmits(["toggleAddSectionModal","getPageSections"]);
        //locaEemits("getPageSections");
        //alert('hello world');

  
}

const getSections = () => {

    

}

const toggleAddSectionModal = () => {

    emits("toggleAddSectionModal");
}
</script>
<template>
    <div id="customModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      
        <div class="modal-dialog" role="document">
           
            <div class="modal-content">
                <span @click="toggleAddSectionModal" class="close-model" aria-hidden="true">&times;</span>
                <form @submit.prevent class="signup-form">
                    <div class="form-group mb-2">
                        <label for="name">Section Title</label>
                        <input v-model="data.name" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Content Type</label>
                        <select v-model="data.contentType" class="form-control">
                            <option>Static Content</option>
                            <option>Courses</option>
                            <option>Slider</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <button @click="submit()" class="btn btn-success rounded submit px-3">Add Section</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>

  #customModal{
    display:flex;
    justify-content:center;
  }

  .btn-success{
        background-color: #ff6c60 !important;
        color:#fff  !important;
        border-color: #ff6c60  !important;
        width:100%;
        height: 52px;
  }
  ::v-deep .modal-dialog{
        position: fixed;
        top: 20%;
         max-width: 450px;
         margin: 1.75rem auto !important;
    }

    .modal-content{
        padding:20px;
    }

    .text-center {
        text-align: center !important;
    }

    h3{
        line-height: 1.5;
        font-weight: 400;
        font-family: "Poppins", Arial, sans-serif;
        font-size: 1.75rem;
    }

    .modal-header{
       border-bottom: none;
    }

    .modal-footer{
        border-top: none;
    }

    .form-control {
    height: 52px;
    background: #fff;
    color: rgba(0, 0, 0, 0.8) !important;
    font-size: 16px;
    border-radius: 5px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.modal-content .modal-body label {
    text-transform: uppercase;
    font-size: 12px;
    color: rgba(0, 0, 0, 0.3);
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
    text-transform: uppercase !important;
    font-size: 12px !important;
    color: rgba(0, 0, 0, 0.3) !important;
}
.mb-2, .my-2 {
    margin-bottom: 0.5rem !important;
}

.btn-primary {
    background: #3e64ff !important;
    border: 1px solid #3e64ff !important;
    color: #fff !important;
}

.close-model{
    float:right;
    color:#868686;
    margin-top:-10px;
}

</style>