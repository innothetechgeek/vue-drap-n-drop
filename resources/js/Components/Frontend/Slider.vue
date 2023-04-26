<template>
      <Carousel  :autoplay="3000">
            <Slide v-for="slide in 10" :key="slide">
                <div  class="carousel__item " style="background: url('images/banner1.jpg')">
                </div>
            </Slide>

            <template #addons>
                <Navigation />
                <Pagination />
            </template>
        </Carousel>
        <div class="banner-info">
            <div class="content">
                <h5>Cooking is Easy</h5>
                <h3 class="mt-2 mb-5">Passion For Cooking</h3>
                <p>Helping You To Be Chef at Your Own House</p>
                <a href="about.html" class="btn btn-style mt-4">Learn More</a>
            </div>
        </div>
</template>
<script setup>

import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'


</script>