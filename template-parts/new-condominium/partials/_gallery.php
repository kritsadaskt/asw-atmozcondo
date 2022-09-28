<?php $galleries = get_field('gallery', get_the_ID()); ?>

<section id="galleries">
  <div class="container-fluid">
    <?php if ($galleries['title']) : ?>
    <div class="row">
      <div class="col-sm-12">
        <h2 class="section-title">
        <span class="title">
          <?=$galleries['title'];?>
        </span>
        </h2>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="tabs-control col-sm-12">
        <ul class="nav nav-tabs">
          <?php $i=1; ?>
          <?php foreach ($galleries['gallery'] as $item) : ?>
            <li role="presentation" class="<?=$i === 1 ? 'active' : '';?>">
              <a href="#<?=create_tab_key($item['title']);?>" role="tab"
                 aria-controls="<?=create_tab_key($item['title']);?>" data-toggle="tab"><?=$item['title'];?></a>
            </li>
            <?php $i++; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="tabs-contents col-sm-12">
        <div class="tab-content">
          <?php $i=1; ?>
          <?php foreach ($galleries['gallery'] as $item) : ?>
            <div id="<?=create_tab_key($item['title']);?>" role="tabpanel" class="tab-pane <?=$i === 1 ? 'active' : '';?>">
              <div id="gallery-<?=$i;?>" class="gallery-detail">
                <div class="inner">
                  <div id="gallery-top-<?=$i;?>" class="gallery-top">
                    <?php foreach ($item['gallery'] as $img_path) : ?>
                      <a href="<?=$img_path['url'];?>" title="">
                        <img src="<?=$img_path['url'];?>" alt="">
                      </a>
                    <?php endforeach; ?>
                  </div>
                  <div class="gallery-thumbs-wrapper col-sm-12">
                    <div class="row">
                      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                        <div id="gallery-thumbs-<?=$i;?>" class="gallery-thumbs">
                          <?php foreach ($item['gallery'] as $img_path) : ?>
                            <div class="slide" style="background-image: url(<?=$img_path['url'];?>);"></div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
