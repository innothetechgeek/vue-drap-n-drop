<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import '../../css/style.css';

import { library } from '@fortawesome/fontawesome-svg-core'
import { faListCheck } from '@fortawesome/free-solid-svg-icons'
import { faEnvelope} from '@fortawesome/free-solid-svg-icons'
import { faBell } from '@fortawesome/free-solid-svg-icons'
import { faRightFromBracket } from '@fortawesome/free-solid-svg-icons'


/* add icons to the library */
library.add(faListCheck)
library.add(faEnvelope)
library.add(faBell)
library.add(faRightFromBracket);



const showingNavigationDropdown = ref(false);

</script>


<template>

        <inertia-head>
            <title>Update your profile</title>
        </inertia-head>
   <section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        Vue Page Builder
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="notification">
            <a data-toggle="dropdown" href="#" >
                <font-awesome-icon icon="fa-solid fa-list-check" />
            </a>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar"  class="notification">
            <a data-toggle="dropdown" class="" href="#">
                <font-awesome-icon icon="fa-solid fa-envelope" />
            </a>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar"  class="notification">
            <a data-toggle="dropdown" class="" href="#">

                <font-awesome-icon icon="fa-solid fa-bell" />
            </a>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle d-block" href="#">
                <img alt="" src="images/2.png"> &nbsp;
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="login.html">
                        <font-awesome-icon icon="fa-solid fa-book" /> &nbsp;
                        <span>Pages</span>
                        <span class="dcjq-icon"></span>
                    </a>
                </li>
                <li>
                    <a href="login.html">
                        <font-awesome-icon icon="fa-solid fa-right-from-bracket" /> &nbsp;
                        <span>Log out</span>
                        <span class="dcjq-icon"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
        <div class="panel panel-default">
            <slot />
        </div>
    </div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
   
</template>

<style scoped>
    .pull-right{
        float:right;
    }
    
    .notification a{
        display: flex;
        width:30px;
        justify-content: center;
        align-items: center;
        height:30px;
    }
</style>

