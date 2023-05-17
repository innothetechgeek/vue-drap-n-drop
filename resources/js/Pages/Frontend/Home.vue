<script setup>

    import frontendLayout from '@/Layouts/FrontendLayout.vue';
    import courses from '@/Components/Frontend/Courses.vue';
    import Slider from '@/Components/Frontend/Slider.vue';
    import StaticContent from '@/Components/Frontend/StaticContent.vue';


    const props = defineProps({
        sections:Array,
        css: String
    })

    let styles = document.getElementsByTagName('head')[0].innerHTML;

  

    let css = props.sections[0].css;
    css = '<style>'+css+'</style>';
    document.getElementsByTagName('head')[0].innerHTML = css+styles;

</script>
<template>
    <frontendLayout>
      
        <div class="content-wrapper" v-for="(section,index) in sections" :key="index">

            <Slider v-if="section.content_type == 'slider'" />

            <courses v-if="section.content_type == 'slider'" />

            <StaticContent v-if="section.content_type == 'static content'"  :content="section.content"></StaticContent>
        </div>
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