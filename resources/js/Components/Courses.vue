<template>
        <table class="styled-table">
        <thead>
            <tr>
                <th>Tile</th>
                <th>Price</th>
                <th>Enrollments</th>
                <th>Rating</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(course,index) in courses" :key="course.id">
                <td>{{ course.title }}</td>
                <td>${{ course.price }}</td>
                <td>{{ course.number_of_students }}</td>
                <td>{{ course.rating }}</td>
                <td>{{ course.level }}</td>
                <td>
                    <font-awesome-icon icon="fa-solid fa-trash" />&nbsp;&nbsp;
                    <font-awesome-icon icon="fa-solid fa-pencil" />
                </td>
            </tr>
            <!-- and so on... -->
        </tbody>
    </table>
    <AddCourseModal :sectionId="props.sectionId" v-if="showAddCourseForm" />
    <button @click="AddCourse" class="btn btn-primary">Add Course</button>

</template>

<script setup>

    import AddCourseModal from '@/Components/Modals/AddCourse.vue';
    import { onMounted, ref } from "vue";

    let showAddCourseForm = ref(false);
    let courses = ref([]);

    const props = defineProps({
        sectionId: Number,
    })

    const AddCourse = () =>{
         showAddCourseForm.value = true;
    }

    const getCourses = () => {
        //alert('About to get courses');
        axios.get('section/courses/'+props.sectionId).then(response =>{
            courses.value = response.data;
            console.log(courses);
        })
    }

    onMounted(() => {

        setTimeout(()=>{ 
        getCourses(), 5000 })

    })
    

</script>

<style scoped>

.fa-trash{
    color:#FF6C60;
}
.fa-pencil{
    color: #8B5C7E;
}
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #F0BCB4;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}



</style>