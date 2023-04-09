<script setup>
    import { useForm } from '@inertiajs/vue3';

    const props = defineProps({
        sectionId: Number
    })

    const emits = defineEmits(["closeModal"]);

    const form = useForm({

        title: null,
        number_of_students:null,
        rating: null,
        level:null,
        image:null,
        price:null,

    })
    

    const handleUpload = (event) => {

         let image = event.target.files[0];
        form.image = image;
    }

    const submit = () => {

        form.post(route('section.addcourse',{'section_id': props.sectionId}));

    }

    const closeModal = () =>{

        emits("closeModal");

    }

</script>
<template>
    <div id="customModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      
        <div class="modal-dialog" role="document">
           
            <div class="modal-content">
                <span @click="closeModal()" class="close-model" aria-hidden="true">&times;</span>
                <form @submit.prevent class="signup-form">
                    <div class="form-group mb-2">
                        <label for="name">Title</label>
                        <input v-model="form.title" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Price</label>
                        <input  v-model="form.price" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Number of students</label>
                        <input v-model="form.number_of_students" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Star Rating</label>
                        <input v-model="form.rating" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Level</label>
                        <input v-model="form.level" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Course image</label>
                        <input type="file" @change="handleUpload($event)" class="form-control" id="inputEmail3">
                    </div>
                    <div class="form-group mb-2">
                        <button @click="submit(),getPageSections()" class="form-control btn btn-primary rounded submit px-3">Add Course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>

  #customModal{
    display:flex;
    position: fixed;
    top:3%;
    justify-content:center;
    z-index: 15000;
  }
  ::v-deep .modal-dialog{
      
       
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