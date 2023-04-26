<script setup>

    import { onMounted, ref } from "vue";

    let courses = ref([]);


    onMounted(() => {

        getCourses();

    })

    const getCourses = () => {

        //alert('About to get courses');
        axios.get('section/courses/3').then(response =>{
            courses.value = response.data;
            console.log(courses);
        })
        
    }

</script>

<template>
    <section class="w3l-courses py-5" id="courses">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <h5 class="sub-title text-center">Our Cooking Classes</h5>
            <h3 class="title-style text-center">Popular Courses</h3>

            <div class="row justify-content-center">
                <div v-for="(course,index) in courses" :key="course.id" class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="classes.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="images/c1.jpg" alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="classes.html" class="receipe blue">{{ course.level }}</a>
                                <a href="classes.html" class="receipe yellow ml-2">New</a>
                            </div>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>${{  course.price }}</p>
                                <ul class="rating-star">
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star-o"></span></li>
                                </ul>
                            </div>
                            <a href="classes.html" class="course-desc">{{ course.title }}
                            </a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fas fa-users"></span>
                                    <span class="meta-value"> {{ course.number_of_students}} Students enrolled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>