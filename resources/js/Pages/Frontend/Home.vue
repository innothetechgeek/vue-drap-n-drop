<script setup>

    import frontendLayout from '@/Layouts/FrontendLayout.vue';
    import courses from '@/Components/Frontend/Courses.vue';
    import Slider from '@/Components/Frontend/Slider.vue';

</script>
<template>

    <frontendLayout>
      
        <Slider />

        <section class="w3l-aboutblock py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="title-style">Learn how to cook from your house</h3>
                    <p class="mt-3">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
                        Mumquam eius modi tempora incidunt ut labore et.</p>
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-sm-6 grids_info">
                            <i class="fas fa-utensils"></i>
                            <div class="detail mt-sm-4 mt-3">
                                <h4>Easy Manual</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 grids_info mt-sm-0 mt-4">
                            <i class="fas fa-bread-slice"></i>
                            <div class="detail mt-sm-4 mt-3">
                                <h4> For Everyone</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5 mt-lg-0 mt-5">
                    <div class="row align-items-center">
                        <div class="col">
                            <img src="images/about1.jpg" alt="" class="img-fluid radius-image">
                        </div>
                        <div class="col">
                            <img src="images/about2.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <courses />

        <!-- why section -->
        <section class="w3l-whyblock py-5">
            <div class="pb-lg-5 pb-md-4 pb-2">
                <div class="row align-items-center m-0">
                    <div class="col-lg-6 ps-0">
                        <img src="images/about.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                        <h5 class="sub-title">Our Features</h5>
                        <h3 class="title-style mb-4">Why Choose Us?</h3>
                        <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.</p>
                        <div class="two-grids mt-5">
                            <div class="grids_info">
                                <i class="fas fa-trophy"></i>
                                <div class="detail">
                                    <h4>We Are Winners of 50 Competitions</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit.</p>
                                </div>
                            </div>
                            <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                                <i class="fas fa-user-friends"></i>
                                <div class="detail">
                                    <h4>27 Professional Chefs-Trainers</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit.</p>
                                </div>
                            </div>
                            <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                                <i class="fas fa-hourglass-half"></i>
                                <div class="detail">
                                    <h4>Guaranteed Fast Employment</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //why section -->

    </frontendLayout>
</template>

<style>
.carousel__item {
  min-height: 800px;
  width: 100%;
  background-color: var(--vc-clr-primary);
  color: var(--vc-clr-white);
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.banner-info{
    width:100%;
    min-height: 800px;
    justify-content: center;
    position: absolute;
    align-items: center;
    display: flex;
    top:12px;
}

.banner-info .content{
    text-align: center;
}
.carousel__track{
    filter: brightness(67%);
}

.carousel__slide {
  padding: 0px;
}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
}
</style>