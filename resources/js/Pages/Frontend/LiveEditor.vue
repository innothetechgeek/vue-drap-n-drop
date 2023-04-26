<template>
   <div id="editor">
   
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="sub-title text-center">Latest News</h5>
            <h3 class="title-style text-center">Our Fresh Blog Posts</h3>
            <div class="row inner-sec-w3ls justify-content-center">
                <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
                    <div class="card img">
                        <div class="card-body img">
                            <a href="#blog" class="d-block">
                                <img src="/images/blog1.jpg" alt="" class="img-fluid radius-image">
                            </a>
                            <div class="blog-des">
                                <ul class="admin-post mb-3">
                                    <li>
                                        <a href="#admin"><span class="fas fa-user"></span> by Admin</a>
                                    </li>
                                    <li>
                                        <a href="#recipes"><span class="fas fa-tags"></span> Recipes</a>
                                    </li>
                                    <li>
                                        <a href="#comments"><span class="fas fa-comments"></span> 3</a>
                                    </li>
                                </ul>
                                <h5 class="card-title mb-3"><a href="#blog">
                                        The Importance Of Food Elements & Tips for Cooking </a></h5>
                                <p>Excepteur sint occaecat cupidatat non, sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
                    <div class="card img">
                        <div class="card-body img">
                            <a href="#blog" class="d-block">
                                <img src="images/blog2.jpg" alt="" class="img-fluid radius-image">
                            </a>
                            <div class="blog-des">
                                <ul class="admin-post mb-3">
                                    <li>
                                        <a href="#admin"><span class="fas fa-user"></span> by Admin</a>
                                    </li>
                                    <li>
                                        <a href="#classes"><span class="fas fa-tags"></span> Classes</a>
                                    </li>
                                    <li>
                                        <a href="#comments"><span class="fas fa-comments"></span> 4</a>
                                    </li>
                                </ul>
                                <h5 class="card-title mb-3"><a href="#blog">
                                        How To Cook Turkey On Natural Gas Grills</a>
                                </h5>
                                <p>Excepteur sint occaecat cupidatat non, sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
                    <div class="card img">
                        <div class="card-body img">
                            <a href="#blog" class="d-block">
                                <img src="images/blog3.jpg" alt="" class="img-fluid radius-image">
                            </a>
                            <div class="blog-des">
                                <ul class="admin-post mb-3">
                                    <li>
                                        <a href="#admin"><span class="fas fa-user"></span> by Admin</a>
                                    </li>
                                    <li>
                                        <a href="#coach"><span class="fas fa-tags"></span> Coach</a>
                                    </li>
                                    <li>
                                        <a href="#comments"><span class="fas fa-comments"></span> 6</a>
                                    </li>
                                </ul>
                                <h5 class="card-title mb-3"><a href="#blog">Chef Olive explains the
                                        role of best cooking tips</a></h5>
                                <p>Excepteur sint occaecat cupidatat non, sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
  </div>
</template>


<style scoped>
    /* Let's highlight canvas boundaries */
    #gjs {
    border: 3px solid #444;
    }

    /* Reset some default styling */
    .gjs-cv-canvas {
    top: 0;
    width: 100%;
    height: 100%;
    }
    ::v-deep:h1{
        color:green;
    }
</style>


<script setup>

    import 'grapesjs/dist/css/grapes.min.css';
    import grapesjs from 'grapesjs';

    import '../../../css/style.css';

    import { onMounted, ref } from "vue";

    let section_content = '<p> hello world </p>';

    onMounted(() => {

        let styles = document.getElementsByTagName('head')[0].innerHTML;

        //do work
        // const LandingPage = {
        //      html: section_content,
        // };
        // // ...
        let editor = grapesjs.init({
    
        container: '#editor',
        // If set to true, then the content within the wrapper element overrides the following config,
        fromElement: true,
        // The `components` accepts HTML string or a JSON of components
        // Here, at first, we check and use components if are already defined, otherwise
        // the HTML string gonna be used
       // components: LandingPage.html,
        allowCss:false,

        storageManager: {
            autoload: false,
            storeHtml: 1,
        },
       

    });

    const iframe = document.getElementsByTagName("iframe")[0];

const doc = iframe.contentWindow.document.head;

doc.innerHTML = styles;

});

    

</script>