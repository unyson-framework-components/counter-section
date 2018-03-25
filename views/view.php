<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<section class="counter-section full-width-section" style='background-image: url("<?php echo $atts['background_image']['url'] ?>"'>
    <div class="container">
        <h2 class="title"><?php echo $atts['title'] ?></h2>
        <p class="subtitle"><?php echo $atts['subtitle'] ?></p>

        <ul class="counters-wrap">
            <?php foreach ($atts['counters'] as $key => $counter) { ?>
                <li class="counter-section_item">
                    <div class="counter-value"><?php echo $counter['counter_value'] ?></div>
                    <div class="counter-text"><?php echo $counter['counter_description'] ?></div>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="overlay" style="background-color: <?php echo $atts['overlay'] ?>"></div>
</section>