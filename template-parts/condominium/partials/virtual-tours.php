<?php $vr_tours = get_field('vr_links', get_the_ID()); ?>
<style>
    #virtualTour .inner .section-title:before {
        border-top-color: #c5c5c5;
    }
    #virtualTour .vr-pane {
        background-color: #fff;
    }
    .vr-pane iframe {
        width: 100%;
        min-height: 500px;
    }
    #virtualTour .inner {
        background-color: #fff;
        padding-top: 20px;
        padding-bottom: 40px;
    }
    #virtualTour .slick-list, .slick-track {
        height: 100%;
    }
    #virtualTour .slick-arrow {
        width: 36px;
        height: 50px;
        z-index: 2;
    }
    #virtualTour .slick-arrow.slick-prev {
        left: -60px;
    }
    #virtualTour .slick-arrow.slick-prev::before {
        content: '\f053';
        font-size: 50px;
        font-family: 'FontAwesome', sans-serif;
        color: #3e3e3e;
    }
    #virtualTour .slick-arrow.slick-next {
        right: -60px;
    }
    #virtualTour .slick-arrow.slick-next::before {
        content: '\f054';
        font-size: 50px;
        font-family: 'FontAwesome', sans-serif;
        color: #3e3e3e;
    }

    @media screen and (max-width: 1024px) {
        #virtualTour .section-title {
            margin-bottom: 25px;
        }
        .vr-pane iframe {
            min-height: 400px;
        }
    }
    @media screen and (max-width: 520px) {
        #virtualTour .slick-arrow.slick-prev {
            left: 30px;
            bottom: -90px;
            top: auto;
        }
        #virtualTour .slick-arrow.slick-next {
            right: 30px;
            bottom: -90px;
            top: auto;
        }
        #virtualTour .inner {
            padding-bottom: 0;
        }
        #virtualTour .inner > div {
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 100px;
        }
    }
</style>
<script>
  $(function (e) {
    $('.vr-slides').slick({
      slidesToShow: 1,
    });
  });
</script>
<section id="virtualTour">
  <div class="container">
    <div class="inner row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <h2 class="section-title text-center">Room Tour</h2>
        <div class="vr-pane">
        <?php if (count($vr_tours) > 1) : ?>
          <div class="vr-slides">
          <?php foreach ($vr_tours as $vr) : ?>
            <div class="slide">
              <iframe src="<?php echo $vr['url']; ?>" frameborder="0"></iframe>
            </div>
          <?php endforeach; ?>
        </div>
        <?php else: ?>
          <iframe src="<?php echo $vr_tours[0]['url']; ?>" frameborder="0"></iframe>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
