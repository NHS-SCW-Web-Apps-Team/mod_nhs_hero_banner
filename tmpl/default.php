<?php
defined('_JEXEC') or die;
/*
//The values available:
echo "NHS Hero banner";
echo "<br>";
echo $hero_image;
echo "<br>";
echo $alt_text;
echo "<br>";
echo $title;
echo "<br>";
echo $subtitle;
echo "<br>";
echo $color;
echo "<br>";
echo $herotype;
*/
?>

<?php if($herotype == "1") : ?>
<section class="nhsuk-hero">
    <div class="nhsuk-width-container nhsuk-hero--border">
        <div class="nhsuk-grid-row">
            <div class="nhsuk-grid-column-two-thirds">
                <div class="nhsuk-hero__wrapper">
                    <h1 class="nhsuk-u-margin-bottom-3"><?php echo $title; ?></h1>
                    <p class="nhsuk-body-l nhsuk-u-margin-bottom-0"><?php echo $subtitle; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php elseif($herotype == "2") : ?>
<section class="nhsuk-hero nhsuk-hero--image nhsuk-hero--image-description" style="background-image: url('/<?php echo $hero_image; ?>');">
    <div class="nhsuk-hero__overlay">
        <div class="nhsuk-width-container">
            <div class="nhsuk-grid-row">
                <div class="nhsuk-grid-column-two-thirds">
                    <div class="nhsuk-hero-content">
                        <h1 class="nhsuk-u-margin-bottom-3"><?php echo $title; ?></h1>
                        <p class="nhsuk-body-l nhsuk-u-margin-bottom-0"><?php echo $subtitle; ?></p>
                        <span class="nhsuk-hero__arrow" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php elseif($herotype == "3") : ?>
<section class="nhsuk-hero nhsuk-hero--image" style="background-image: url('<?php echo $hero_image; ?>');">
    <div class="nhsuk-hero__overlay">
    </div>
</section>
<?php endif; ?>