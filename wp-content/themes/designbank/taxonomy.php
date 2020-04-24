<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package design_bank
 */

// Exit if accessed directly.
get_header();
?>
<div id="sport_section">
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
        

            <!-- <form class="mb-5 mt-5 ">
            <div class="row">
                <div class="col">
                <label for="inputEmail4"> Select Sport</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Sport 1</option>
                    <option>Sport 2</option>
                    <option>Sport 3</option>
                    <option>Sport 4</option>
                    <option>Sport 5</option>
                    </select>
                </div>
                <div class="col">
                <label for="inputEmail4">Select Design Type</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Design Type 1</option>
                    <option>Design Type 2</option>
                    <option>Design Type 3</option>
                    <option>Design Type 4</option>
                    <option>Design Type 5</option>
                    </select>
                </div>
                <div class="col">
                
                <button type="submit" class="btn btn-warning btn-block mt-4">Filter Design</button>
                </div>
            </div>
            </form> -->
                <!-- <h1>
                    <?php echo substr(get_the_archive_title(), strpos(get_the_archive_title(), ': ') + 1); ?>
                </h1> -->
                <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <ul class="list-inline sport_tag">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'loop-templates/content', 'sport_design' ); ?>
                    <?php endwhile; ?>
                </ul>
                <?php else : ?>
                <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <!-- The pagination component -->
                <?php design_bank_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); 