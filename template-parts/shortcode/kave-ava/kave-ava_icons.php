<script>
  $(function () {
    if ($(window).width() < 520) {
      $('#other_facilities_tabs').addClass('collapse');
      $('#other_facilities_tabs .nav-item .nav-link').bind('show.bs.tab', function (e) {
        $('#mob_toggle').html(($(this).html()));
        $('#other_facilities_tabs').collapse('hide');
        $('#mob_toggle').on('click touch', function (e) {
          e.preventdefault();
        })
      });
    }
  });
</script>
<style>
    #other_facilities_contents {
        width: 65%;
        margin: 0 auto;
    }

    #other_facilities_tabs {
        width: 50%;
        margin: 0 auto 20px;
    }

    #other_facilities_tabs .nav-item {
        opacity: 1;
        width: calc(100% / 3 - 10px);
        text-align: center;
        margin: 5px;
    }

    #other_facilities_tabs .nav-item .nav-link {
        color: #6B6B6B;
        font-size: 24px;
        border-radius: 30px;
        padding: 9px 5px 5px;
        background-color: #fff;
        line-height: 1;
        cursor: pointer;
        box-shadow: 0 0 15px white;
        border-bottom: 5px solid transparent;
        font-weight: 100;
    }

    #other_facilities_tabs .nav-item.active .nav-link {
        color: #FFF;
        box-shadow: 0 0 15px #119FCC;
        background-color: #119FCC;
    }

    #other_facilities_contents .tab-pane {
        padding: 0 15px;
    }

    #other_facilities_contents .fac_item {
        text-align: center;
        margin-bottom: 20px;
    }

    #other_facilities_contents .fac_item img {
        width: 80px;
        margin-bottom: 10px;
    }

    #other_facilities_contents .fac_item p {
        color: #fff;
        font-weight: 400;
        font-size: 15px;
        text-transform: uppercase
    }

    #other_facilities_contents .row.no-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #other_facilities_contents .row.no-grid.to-left {
        justify-content: left;
    }

    #other_facilities_contents .row.no-grid .fac_item {
        padding: 0 10px;
        margin: 0 15px 15px;
    }

    #mob_toggle {
        background-color: #fff;
        border: none;
        font-size: 22px;
        padding: 5px 50px 5px 10px;
        margin-left: 15px;
        border-radius: 10px;
        text-align: left;
        position: relative;
        margin-bottom: 25px;
        color: #109fcc;
    }

    #mob_toggle::after {
        content: '';
        position: absolute;
        width: 15px;
        height: 10px;
        top: 40%;
        right: 15px;
        transform: rotate(180deg);
        background: transparent url('https://kavecondo.com/wp-content/uploads/2022/02/ava-fac_arrow.png') center/contain no-repeat;
    }

    .floor-label {
        font-size: 24px;
        color: #fff;
    }

    @media (min-width: 769px) {
        #other_facilities_tabs .nav-item .nav-link:hover {
            box-shadow: 0 0 15px #119FCC;
            color: #fff;
            background-color: #119FCC;
        }
    }

    /*Tablet*/
    @media (max-width: 820px) {
        #other_facilities_tabs {
            width: 80%;
        }

        #other_facilities_tabs .nav-item {
            width: calc(100% / 3);
            margin: 0;
        }

        #other_facilities_tabs .nav-item .nav-link {
            font-size: 18px;
            margin: 5px;
            box-shadow: none;
        }

        #other_facilities_contents {
            width: auto;
        }

        #other_facilities_contents .fac_item img {
            width: 80px;
        }

        #other_facilities_contents .fac_item p {
            font-size: 18px;
        }
    }

    @media (max-width: 520px) {
        #other_facilities_tabs {
            position: absolute;
            width: 220px;
            z-index: 3;
            background: #ffffff;
            left: 50%;
            margin-left: -110px;
            border-radius: 0 0 10px 10px;
            padding: 0;
            top: 35px;
        }

        #other_facilities_tabs .nav-item.active .nav-link {
            color: #119FCC;
            border-bottom: 1px solid #46a6a9;
            box-shadow: none;
            font-weight: normal;
            background-color: #fff;
        }

        #other_facilities_tabs .nav-item {
            width: 100%;
        }

        #other_facilities_tabs .nav-item .nav-link {
            font-size: 20px;
            color: #555;
            border-bottom: 1px solid;
            padding: 5px;
            border-radius: 0;
        }

        #other_facilities_tabs .nav-item .nav-link {
            border-bottom: 1px solid #46a6a9;
        }

        #other_facilities_tabs .nav-item:first-child .nav-link {
            padding-top: 10px;
        }

        #other_facilities_tabs .nav-item:last-child .nav-link {
            border-bottom: none;
        }

        #other_facilities_contents .row.no-grid {
            text-align: center;
        }

        #other_facilities_contents .row.no-grid .fac_item {
            padding: 0;
            margin: 0 10px;
            width: 25%;
            display: inline-block;
        }

        #other_facilities_contents .fac_item p {
            font-size: 12px;
        }

        #mob_toggle {
            width: 220px;
            margin: 0 auto 15px;
            padding: 5px 15px;
            outline: transparent;
            z-index: 10;
        }

        .floor-label {
            width: auto;
            margin: 0 0 10px;
        }
    }
</style>
<button id="mob_toggle" class="visible-xs btn btn-primary" type="button" data-toggle="collapse"
        data-target="#other_facilities_tabs" aria-expanded="false" aria-controls="other_facilities_tabs">
  Ground Floor
</button>
<ul class="nav nav-pills" id="other_facilities_tabs" role="tablist">
  <li class="nav-item active" role="presentation">
    <a class="nav-link" id="building_a" data-toggle="tab"
       href="#building_a_tab" role="tab" aria-controls="on_ground" aria-selected="false">Building A</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="building_b" data-toggle="tab"
       href="#building_b_tab" role="tab" aria-controls="building_a" aria-selected="true">Building B</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="building_c" data-toggle="tab"
       href="#building_c_tab" role="tab" aria-controls="building_b" aria-selected="false">Building C</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="building_d" data-toggle="tab"
       href="#building_d_tab" aria-controls="building_c" role="tab" aria-selected="false">Building D</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="building_e" data-toggle="tab"
       href="#building_e_tab" aria-controls="building_d" role="tab" aria-selected="false">Building E</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="landscape" data-toggle="tab"
       href="#landscape_tab" aria-controls="building_e" role="tab" aria-selected="false">Landscape & AVA Pod</a>
  </li>
</ul>
<?php
$upload_dir = wp_upload_dir();
$img_path = $upload_dir['baseurl'] . '/kave-ava/icons/' ?>
<div class="tab-content" id="other_facilities_contents">
  <div class="tab-pane show active" id="building_a_tab" role="tabpanel" aria-labelledby="building_a">
    <!-- Facilities Page 1 -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">G Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/ava_shops.png'; ?>" alt="">
        <p>AVA Shops</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/kave-cafe.png'; ?>" alt="">
        <p>KAVE Cafe</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/content-working.png'; ?>" alt="">
        <p>Content-Working</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/private-meeting-room.png'; ?>" alt="">
        <p>Private Meeting Room</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/reading-corner.png'; ?>" alt="">
        <p>Reading Corner</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/lobby-lounge.png'; ?>" alt="">
        <p>Lobby Lounge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/mailbox.png'; ?>" alt="">
        <p>Mailbox</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">2<sup>nd</sup> Floor</h4>
      </div>
    </div>
    <div class="row no-grid to-left">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/co-library.png'; ?>" alt="">
        <p>Co-Library</p>
      </div>
    </div>
    <!-- End of Facilities Page 1 -->
  </div>
  <div class="tab-pane fade" id="building_b_tab" role="tabpanel" aria-labelledby="building_b">
    <!-- Facilities Page 2 -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">G Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/reading-corner.png'; ?>" alt="">
        <p>Reading Corner</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/lobby-lounge.png'; ?>" alt="">
        <p>Lobby Lounge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/mailbox.png'; ?>" alt="">
        <p>Mailbox</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">Rooftop</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/asteroid-pool.png'; ?>" alt="">
        <p>Asteroid Pool</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/moon-lounge.png'; ?>" alt="">
        <p>Moon Lounge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/sky-garden.png'; ?>" alt="">
        <p>Sky Garden</p>
      </div>
    </div>
    <!-- End of Facilities Page 2 -->
  </div>
  <div class="tab-pane fade" id="building_c_tab" role="tabpanel" aria-labelledby="building_c">
    <!-- Facilities Page 3 -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">G Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/thinking-space.png'; ?>" alt="">
        <p>Thinking Space</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/reading-corner.png'; ?>" alt="">
        <p>Reading Corner</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/lobby-lounge.png'; ?>" alt="">
        <p>Lobby Lounge</p>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/mailbox.png'; ?>" alt="">
        <p>Mailbox</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/laundry.png'; ?>" alt="">
        <p>Laundry</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/food-station.png'; ?>" alt="">
        <p>Food Station</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">8<sup>th</sup> Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/co-living-space.png'; ?>" alt="">
        <p>Co-Living Space</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/mini-theater.png'; ?>" alt="">
        <p>Mini-Theater</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/yoga-studio.png'; ?>" alt="">
        <p>Yoga Studio</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">Rooftop</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/sky-deck.png'; ?>" alt="">
        <p>Sky Deck</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/sky-bar.png'; ?>" alt="">
        <p>Sky Bar</p>
      </div>
    </div>
    <!-- End of Facilities Page 3 -->
  </div>
  <div class="tab-pane fade" id="building_d_tab" role="tabpanel" aria-labelledby="building_d">
    <!-- Facilities Page 4 -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">G Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . 'e-sport.png'; ?>" alt="">
        <p>E-Sport</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/reading-corner.png'; ?>" alt="">
        <p>Reading Corner</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/the-maze.png'; ?>" alt="">
        <p>The Maze</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/lobby-lounge.png'; ?>" alt="">
        <p>Lobby Lounge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/mailbox.png'; ?>" alt="">
        <p>Mailbox</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">2<sup>nd</sup> Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/the-stage.png'; ?>" alt="">
        <p>The Stage</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/creative-lounge.png'; ?>" alt="">
        <p>Creative & Entertainment Lounge</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">3<sup>rd</sup> Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/music-studio.png'; ?>" alt="">
        <p>Music Studio</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/photo-studio.png'; ?>" alt="">
        <p>Photo Studio</p>
      </div>
    </div>
    <!-- End of Facilities Page 4 -->
  </div>
  <div class="tab-pane fade" id="building_e_tab" role="tabpanel" aria-labelledby="building_e">
    <!-- Facilities Page 5 -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">G Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/lobby-lounge.png'; ?>" alt="">
        <p>Lobby Lounge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/mailbox.png'; ?>" alt="">
        <p>Mailbox</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/laundry.png'; ?>" alt="">
        <p>Laundry</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/food-station.png'; ?>" alt="">
        <p>Food Station</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">2<sup>nd</sup> Floor</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/private-working-zone.png'; ?>" alt="">
        <p>Private Working Zone</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/brain-strom-room.png'; ?>" alt="">
        <p>Brain Storm Room</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/creative-workshop.png'; ?>" alt="">
        <p>Creative Workshop<br>and Meeting Room</p>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/study-pod.png'; ?>" alt="">
        <p>Study Pod</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/reading-corner.png'; ?>" alt="">
        <p>Reading Corner</p>
      </div>
    </div>
    <!-- End of Facilities Page 5 -->
  </div>
  <div class="tab-pane fade" id="landscape_tab" role="tabpanel" aria-labelledby="landscape">
    <!-- Facilities Page 6 -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">AVA Hill Zone</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/galaxy-pool.png'; ?>" alt="">
        <p>Galaxy Pool</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/green-terrace.png'; ?>" alt="">
        <p>Green Terrace</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/sun-lounge.png'; ?>" alt="">
        <p>Sun Lounge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/the-ava-fall.png'; ?>" alt="">
        <p>The AVA Fall</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/outdoor-working.png'; ?>" alt="">
        <p>Outdoor Working Space</p>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/step-terrace.png'; ?>" alt="">
        <p>Step Terrace</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/iconic-bridge.png'; ?>" alt="">
        <p>The Iconic Bridge</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/amphitheater.png'; ?>" alt="">
        <p>Amphitheater</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/sky-broadway.png'; ?>" alt="">
        <p>Sky Broadway</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">AVA Terrace Zone</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/private-pool.png'; ?>" alt="">
        <p>Private Pool</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/jacuzzi-pool.png'; ?>" alt="">
        <p>Jacuzzi Pool</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/poolside-terrace.png'; ?>" alt="">
        <p>Poolside Terrace</p>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/pool-bed.png'; ?>" alt="">
        <p>Pool Bed</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/the-cascade.png'; ?>" alt="">
        <p>The Cascade</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/terrace-garden.png'; ?>" alt="">
        <p>Terrace Garden</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h3 class="floor-label text-center">AVA POD</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">The Gym Pod</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/weight-studio.png'; ?>" alt="">
        <p>Weight Training Studio</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/active-cardio.png'; ?>" alt="">
        <p>Active Cardio</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h4 class="floor-label">The Chef Pod</h4>
      </div>
    </div>
    <div class="row no-grid">
      <div class="fac_item">
        <img src="<?php echo $img_path . '/cooking-studio.png'; ?>" alt="">
        <p>Cooking Studio</p>
      </div>
      <div class="fac_item">
        <img src="<?php echo $img_path . '/co-dining.png'; ?>" alt="">
        <p>Co-Dining</p>
      </div>
    </div>
    <!-- End of Facilities Page 6 -->
  </div>
</div>