<?php $page_ident = get_field('page_identities', get_the_ID()); ?>
<style type="text/css">
    h2.section-title span.title {
        color: <?=$page_ident['main_color']?>;
        border-left: 4px solid <?=$page_ident['main_color']?>;
        border-right: 4px solid <?=$page_ident['main_color']?>;
    }
</style>

<?php
include "partials/_hero-banner.php";
include "partials/_register-box.php";
include "partials/_project-concept.php";
if (get_the_ID() === 29543 || get_the_ID() === 30359) {
  include "partials/_project-details2.php";
} else {
  include "partials/_project-details.php";
}
include "partials/_facility.php";
include "partials/_floor-plan.php";
include "partials/_video.php";
include "partials/_gallery.php";
include "partials/_project-progress.php";
include "partials/_location.php";