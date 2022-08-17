<?php
$sliders = explode(',', ot_get_option('sliders'));
$mobile_sliders = explode(',', ot_get_option('mobile_sliders'));
?>

<!-- slider -->
<section class="slider-block">
    <!-- <img src="https://via.placeholder.com/1440x550" alt=""> -->
    <?php foreach ($sliders as $slider) { ?>
        <div class="slide-item">
            <img src="<?php echo wp_get_attachment_url($slider) ?>" alt="Slider 1">
        </div>
    <?php } ?>
</section>

<!-- mobile slider -->
<section class="mobile-slider-block">
    <?php foreach ($mobile_sliders as $mobile_slider) { ?>
        <div class="slide-item">
            <img src="<?php echo wp_get_attachment_url($mobile_slider) ?>" alt="Mobile Slider 1">
        </div>
    <?php } ?>
</section>