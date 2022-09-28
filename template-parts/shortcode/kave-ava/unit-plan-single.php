<?php
$floor_units_plan = get_field('floor-unit_plan', get_the_ID());
$p_ident = get_field('page_identities', get_the_ID());
?>
<?php if ($floor_units_plan['unit_plans']) : ?>
<style>
  <?php if ($p_ident['secondary_color']) : ?>
  #unit_plan_single .dropdown .dropdown-toggle {
      background-color: <?php echo $p_ident['secondary_color']; ?>;
  }
  <?php endif; ?>
</style>
<script>
  $(function (){
    const unit_btn = $('#unit_list_dropdown');
    const unit_show = $('#unit_show');
    const unit_show_link = $('#unit_show_link');
    $('.unit-list-item').on('click touch', function (e) {
      e.preventDefault();
      unit_btn.find('.txt').text($(this).html());
      unit_show.attr('src', $(this).data('img'));
      unit_show_link.attr('href', $(this).data('img'));
    });
  });
</script>
<section id="unit_plan_single">
  <div class="container-fluid">
    <div class="row">
      <div id="dropdown_wrapper">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button"
                  id="unit_list_dropdown" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="true">
            <span class="txt"><?php echo $floor_units_plan['unit_plans'][0]['name']; ?></span>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="unit_list_dropdown">
            <?php foreach ($floor_units_plan['unit_plans'] as $plan) : ?>
              <li><a class="unit-list-item" href="#" data-img="<?php echo $plan['image']; ?>"><?php echo $plan['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="unit-show-wrapper col-md-10 col-md-offset-1">
        <a id="unit_show_link" href="<?php echo $floor_units_plan['unit_plans'][0]['image'] ?>" title="">
        <img id="unit_show" src="<?php echo $floor_units_plan['unit_plans'][0]['image'] ?>" alt="">
        </a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>