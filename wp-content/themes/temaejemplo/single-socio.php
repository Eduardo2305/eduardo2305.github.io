<?php /* Template Name: Socio Template Post Type: socio */ // ?>

<?php get_header()?>


<?php if(have_posts()){ ?>
<?php   while(have_posts()){the_post();?>
                
                <div class="responsive-intern">
                    <div class="form-section">
                        <div>
                            <h2><?php echo get_field("nombre");?></h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab ratione autem deleniti laborum quia natus? Velit, veritatis. Illum, fugit sed repellat a, accusantium reiciendis eum, dolores perspiciatis consequuntur non fugiat.</p>
                        </div>
                        <div>
                            <img src="<?php echo get_field("logo");?>" alt="Portrait of <?php echo get_field('nombre')?>">
                        </div>
                    </div>


                </div>

<?php            } ?>
<?php  }?>
        






<?php get_footer() ?>