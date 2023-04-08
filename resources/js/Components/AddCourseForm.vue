<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    sectionId: Number
})


const form = useForm({

    title: null,
    number_of_students:null,
    rating: null,
    level:null,
    image:null,
    price:null,

})

const handleUpload = (event) => {

    image = event.target.files[0];
    form.image = image;
}

const submit = () => {

    form.post(route('section.addcourse',{id: props.sectionId}));

}

</script>
<template>
    <form @submit.prevent>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Course Title</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" v-model="form.title" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Price</label>
            <div class="col-sm-5">
            <input type="text" v-model="form.price" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Number of students</label>
            <div class="col-sm-5">
            <input type="text" v-model="form.number_of_students" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Star Rating</label>
            <div class="col-sm-5">
            <input type="text" v-model="form.rating" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Level</label>
            <div class="col-sm-5">
            <input type="text" v-model="form.level" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Course image</label>
            <div class="col-sm-5">
              <input type="file" @change="handleUpload()" class="form-control" id="inputEmail3">
            </div>
        </div>
        <button @click="submit" class="btn btn-primary">Add Course</button>
    </form>
  
</template>

<style scoped>

    form{
        margin-top:25px;
    }

</style>