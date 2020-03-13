<?php get_header(); ?>
   <!--
        START: Fixed Layout

        Contains fixed page elements like slider, navigation, logo
    -->
    <div class="nk-layout">
        <!--
            Slider

            Additional Classes:
                .nk-slider-hide-titles - hide titles after slide

            Additional Classes Per Slide:
                .active - active slide on startup

            Additional Attributes:
                data-active-category - current active category
                data-autoplay - autoplay delay in milliseconds
                data-transition-speed - transition speed in milliseconds
                data-transition-effect - transition effect for slides. Available effects: fade, divide, top, left, right, bottom
                data-category-transition-speed - transition speed in milliseconds after category change
                data-category-transition-effect - transition effect for slides after category change
                data-force-reload - reload slider on ajax page request. Required values like in data-transition-effect attribute.

            Additional Attributes Per Slide:
                data-categories - list with categories
                data-background-position - position for slide image. By default "50% 50%"

            Notes:
                If you want add more then 1 category per slide, type it with | divider.
                Example: data-categories="athletics|Portraits|Nature"

                If you want to add slide in all categories, use *
                Example: data-categories="*"
        -->

           
           
           
           
           
           
           
           
       









                    <div class="nk-slider" data-active-category="Athletics" data-transition-speed="500" data-transition-effect="fade" data-category-transition-speed="500" data-category-transition-effect="top" data-autoplay="false" data-force-reload="divide">    
            <div class="nk-slider-item active" data-categories="Athletics" data-background-position="50% 20%">
                <img src="https://wp.nkdev.info/umbrella/wp-content/uploads/2016/09/slide-1-1920x1234.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 10%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 10%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 50%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 5%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 5%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 20%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
            <div class="nk-slider-item" data-categories="Athletics" data-background-position="50% 5%">
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide-9.jpg" alt="">
            </div>
        </div>  


     

  


    <!-- Bottom Right -->
    <div class="nk-layout-bottom-right">
        <!--
                START: Slider Navigation

                Additional Classes:
                    .nk-slider-nav-slim
            -->
        <div class="nk-slider-nav">
            <ul>
                <!-- Here will be inserted slider bullets -->
            </ul>
            <div>
                <div class="nk-slider-nav-prev">
                    <span class="nk-icon-arrow-up"></span>
                </div>
                <div class="nk-slider-nav-next">
                    <span class="nk-icon-arrow-down"></span>
                </div>
            </div>
        </div>
        <!-- END: Slider Navigation -->
    </div>

    <!-- Top Left -->
    <div class="nk-layout-top-left">
        <a href="./" class="nk-nav-logo">
            <img src="" alt="" width="133" data-logo-dark="">
        </a>
    </div>

    <!-- Bottom Center -->
    <div class="nk-layout-bottom-center">
        <nav class="nk-nav">
            <ul>
                <li>
                    <a href="mailto:info@umbrella.com">info@umbrella.com</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
<!-- END: Fixed Layout -->



<!--
        START: Main Page Content

        Additional Classes:
            .active
            .nk-main-lower-title - title will be visible under content text

        Additional Attributes:
            data-transition-speed - transition speed in milliseconds
            data-transition-in - top, bottom, right. Show transition type
            data-transition-out - top, bottom, right. Hide transition type

        Note:
            If you don't want to show content, just remove all content inside .nano-content and inside .nk-layout and remove .active class, but don't remove this block completely
    -->
<div class="nk-main" id="nk-main" data-transition-speed="500" data-transition-in="bottom" data-transition-out="right">
    <div class="nano">
        <div class="nano-content">
            <div class="nk-vertical-top">
                <div>

                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Right Info -->
    <div class="nk-layout">
        <div class="nk-layout-bottom-right-rotated">

        </div>
    </div>
</div>
<div class="nk-main-bg"></div>
<!-- END: Main Page Content -->

<!--
        START: Blog

        Additional Classes:
            .active

        Note:
            If you don't want to show blog, just remove all content inside and remove .active class, but don't remove this block completely
    -->
<div class="nk-blog" id="nk-blog">