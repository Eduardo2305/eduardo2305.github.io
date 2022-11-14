<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}

?>

<!-- Aqui conseguimos los CPT -->

<?php
$args = [
    'post_type' => array('socio'),
    'posts_per_page' => -1
];
$socios = new WP_Query($args);
?>



<div class="responsive-intern">
    <h1>Business Directory</h1>
    <div class="toggle-section">
        <div id="list"><i class="fa-solid fa-list"></i>
            <p> List</p>
        </div>
        <div id="grid"><i class="fa-solid fa-grip"></i>
            <p> Grid</p>
        </div>

    </div>
    <div class="cards grid">

        <!-- Aqui iteramos en cada post del CPT Socio -->

        <?php if ($socios->have_posts()) { ?>
            <?php while ($socios->have_posts()) {
                $socios->the_post();?>
                <section loading="lazy">
                            
                            <h2><?php echo get_field("nombre");?></h2>
                            <div><img src="<?php echo get_field("logo");?>" alt="Portrait of <?php echo get_field('nombre')?>"></div>
                            <span class="year">Since <?php echo get_field('ano')?></span>
                            <ul>
                                <li><strong>Address:</strong> <?php echo get_field('direccion')?></li>
                                <li><strong>Phone number:</strong> <?php echo get_field('telefono')?></li>
                                <li><strong>Membership Level:</strong> <?php echo get_field('nivel_de_membresia')?></li>
                            </ul>
                            <a class="btn" href="<?php echo get_field('url')?>">Website</a>
                            <a class ="more-info" href="<?php the_permalink();?>">More info</a>
                            
                </section>
            <?php } ?>
        <?php } ?>
    </div>


</div>



<?php get_footer(); ?>