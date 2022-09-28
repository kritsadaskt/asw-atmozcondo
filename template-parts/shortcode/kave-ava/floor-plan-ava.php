<?php
$upload_dir = wp_upload_dir();
$floorPlans = array(
  array(
    'title' => 'Tower A',
    'key' => 'tower-a',
    'floors' => array(
      'a-ground_floor' => 'Ground Floor',
      'a-2nd_floor' => '2nd Floor',
      'a-3rd-8th_floor' => '3rd - 8th Floor',
      'a-rooftop' => 'Rooftop',
    )
  ),
  array(
    'title' => 'Tower B',
    'key' => 'tower-b',
    'floors' => array(
      'b-ground_floor' => 'Ground Floor',
      'b-2nd_floor' => '2nd Floor',
      'b-3rd_-_7th_floor' => '3rd-7th Floor',
      'b-8th_floor' => '8th Floor',
      'b-rooftop' => 'Rooftop',
    )
  ),
  array(
    'title' => 'Tower C',
    'key' => 'tower-c',
    'floors' => array(
      'c-ground_floor' => 'Ground Floor',
      'c-2nd_-_7th_floor' => '2nd - 7th Floor',
      'c-8th_floor' => '8th Floor',
      'c-rooftop' => 'Rooftop',
    )
  ),
  array(
    'title' => 'Tower D',
    'key' => 'tower-d',
    'floors' => array(
      'd-ground_floor' => 'Ground Floor',
      'd-2nd_floor' => '2nd Floor',
      'd-3rd_floor' => '3rd Floor',
      'd-4th_-_8th_floor' => '4th - 8th Floor',
      'd-rooftop' => 'Rooftop',
    )
  ),
  array(
    'title' => 'Tower E',
    'key' => 'tower-e',
    'floors' => array(
      'e-ground_floor' => 'Ground Floor',
      'e-2nd_floor' => '2nd Floor',
      'e-3rd_floor' => '3rd Floor',
      'e-4th_-_8th_floor' => '4th - 8th Floor',
      'e-rooftop' => 'Rooftop',
    )
  )
);
?>
<style>
    @keyframes show-button {
        from {
            width: 0;
            margin-left: 0;
            display: none;
        }
        to {
            width: 180px;
            margin-left: 10px;
            display: block;
        }
    }
    @keyframes hide-button {
        from {
            width: 180px;
            margin-left: 10px;
            display: block;
        }
        to {
            width: 0;
            margin-left: 0;
            display: none;
        }
    }
    #dropdown_wrapper {
        display: flex;
        justify-content: flex-end;
    }
    #dropdown_wrapper .dropdown {
        width: 180px;
    }
    #dropdown_wrapper #floor-dropdown-wrapper.hideB {
        animation: hide-button .6s;
        visibility: hidden;
        margin-left: 0;
        width: 0;
    }
    #dropdown_wrapper #floor-dropdown-wrapper.hideB button {
        padding: 0;
    }
    #dropdown_wrapper #floor-dropdown-wrapper.show {
        animation: show-button .8s;
    }
    #dropdown_wrapper .dropdown:last-child {
        margin-left: 10px;
    }
    #dropdown_wrapper .dropdown button {
        color: #ffffff;
        background-color: #119FCC;
        border: none;
        font-size: 20px;
        padding: 0 !important;
        width: 100%;
        border-radius: 10px;
        z-index: 1001;
        position: relative;
        text-transform: uppercase;
        height: 40px;
        font-weight: 300;
    }
    #dropdown_wrapper .dropdown button::before {
        content: '';
        width: 120px !important;
        border-top: 1px solid #fff;
        position: absolute;
        bottom: 6px !important;
        left: 50% !important;
        margin-left: -60px !important;
    }
    #dropdown_wrapper .dropdown button svg {
        width: 12px;
        height: auto;
        margin-left: 7px;
    }
    #dropdown_wrapper .dropdown .dropdown-menu {
        width: 100%;
        padding: 30px 20px 10px 20px;
        margin-top: -20px;
        border-radius: 15px;
        border: none;
    }
    #dropdown_wrapper .dropdown .dropdown-menu li a {
        font-size: 22px;
        color: #757575;
        font-weight: 300;
        text-align: center;
        border-bottom: 1px solid #119FCC;
    }
    #dropdown_wrapper .dropdown .dropdown-menu li a:hover, #dropdown_wrapper .dropdown .dropdown-menu li a:focus {
        background-color: transparent;
        color: #119FCC;
    }
    #dropdown_wrapper .dropdown .dropdown-menu li:last-child a {
        border-bottom: none;
    }
    .floor-show-wrapper {
      width: 75%;
      margin: 0 auto;
    }

    @media screen and (min-width: 769px) {
        #dropdown_wrapper {
            padding-right: 60px;
        }
    }

    @media (max-width: 768px) {
        #dropdown_wrapper {
            justify-content: center;
        }
    }
    @media (max-width: 520px) {
        .floor-show-wrapper {
            width: 100%;
        }
    }
</style>
<script>
  $(function () {
    const towerDropdown = $('#towerDropdown');
    const towerBtn = $('#towerBtn');
    const floorDropdownWrapper = $('#floor-dropdown-wrapper');
    const floorBtn = $('#floorBtn');
    const floorDropdown = $('#floorDropdown');
    const floorShow = $('#floorShow');
    const floorShowLink = $('#floorShowLink');
    let floorInitSpan = floorBtn.find('.floor-init');
    const floorList = <?php echo json_encode($floorPlans); ?>;

    //init floor
    apply_list('tower-a', 0);

    towerDropdown.find('a').on('click touch', function (e) {
      e.preventDefault();
      let tower = $(this).data('tower');
      towerBtn.find('span').text($(this).text());
      if (tower !== 'ground-floor') {
        floorDropdownWrapper.removeClass('hideB');
        floorDropdownWrapper.addClass('show');
        switch (tower) {
          case 'tower-a':
            apply_list('a', 0);
            break;
          case 'tower-b':
            apply_list('b', 1);
            break;
          case 'tower-c':
            apply_list('c', 2);
            break;
          case 'tower-d':
            apply_list('d', 3);
            break;
          case 'tower-e':
            apply_list('e', 4);
            break;
          default :
            console.log('not found');
        }
      } else {
        floorDropdownWrapper.removeClass('show');
        floorDropdownWrapper.addClass('hideB');
        floorShow.attr('src','/wp-content/uploads/kave-ava/a-ground_floor.jpg');
        floorShowLink.attr('href','/wp-content/uploads/kave-ava/a-ground_floor.jpg');
      }
    });

    floorDropdown.bind('a').on('click touch', function (e) {
      e.preventDefault();
      let selected = e.target;
      //console.log($(selected).data('img'));
      floorBtn.find('span').text($(selected).text());
      floorShow.attr('src', '/wp-content'+$(selected).data('img'));
      floorShowLink.attr('href', '/wp-content'+$(selected).data('img'));
    });

    function apply_list(tower, pos) {
      //console.log(tower+', '+pos);
      let floorSelected = floorList[pos]['floors'];
      let firstFloor = Object.values(floorSelected);
      let applyFloor = Object.keys(floorSelected);
      //console.log(floorSelected);
      floorDropdown.empty();
      floorBtn.find('span').text(firstFloor[0]);
      floorShowLink.attr('href', '/wp-content/uploads/kave-ava/'+applyFloor[0]+'.jpg');
      floorShow.attr('src', '/wp-content/uploads/kave-ava/'+applyFloor[0]+'.jpg');
      //let floorSelected = Object.getOwnPropertyNames(floorList[pos]['floors']).length;
      //console.log(Object.getOwnPropertyNames(floorSelected).length);
      for (const [key, value] of Object.entries(floorSelected)) {
        //console.log(`${key}: ${value}`);
        floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/kave-ava/'+key+'.jpg">'+value+'</li>');
      }
      // for (i=2;i<=floorSelected;i++) {
      //   if (i === 2) {
      //     floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+'2.jpeg">2nd Floor</li>');
      //   } else if (i === 3) {
      //     floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+'3.jpeg">3nd Floor</li>');
      //   } else {
      //     floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+i+'.jpeg">'+i+'th Floor</li>');
      //   }
      // }
    }
  });
</script>
<section id="dropdown_wrapper">
  <div id="tower-dropdown-wrapper" class="dropdown">
    <button id="towerBtn" class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>Tower A</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="23.904" height="13.24" viewBox="0 0 23.904 13.24">
        <path id="Path_10" data-name="Path 10" d="M23.394.289a.986.986,0,0,0-1.4,0L11.842,10.446,1.685.289a.987.987,0,0,0-1.4,1.4L11.144,12.539a.986.986,0,0,0,1.4,0L23.394,1.685A.986.986,0,0,0,23.394.289Z" transform="matrix(1, 0.017, -0.017, 1, 0.224, 0)" fill="#fff"/>
      </svg>
    </button>
    <ul id="towerDropdown" class="dropdown-menu" aria-labelledby="towerDropdown">
      <?php foreach ($floorPlans as $tower) : ?>
        <li><a class="dropdown-item" href="#" data-tower="<?php echo $tower['key']; ?>"><?php echo $tower['title']; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div id="floor-dropdown-wrapper" class="dropdown">
    <button id="floorBtn" class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="floor-init">Ground Floor</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="23.904" height="13.24" viewBox="0 0 23.904 13.24">
        <path id="Path_10" data-name="Path 10" d="M23.394.289a.986.986,0,0,0-1.4,0L11.842,10.446,1.685.289a.987.987,0,0,0-1.4,1.4L11.144,12.539a.986.986,0,0,0,1.4,0L23.394,1.685A.986.986,0,0,0,23.394.289Z" transform="matrix(1, 0.017, -0.017, 1, 0.224, 0)" fill="#fff"/>
      </svg>
    </button>
    <ul id="floorDropdown" class="dropdown-menu" aria-labelledby="floorDropdown">
    </ul>
  </div>
</section>
<section id="floor_plan_show">
  <div class="floor-show-wrapper">
    <a id="floorShowLink" href="<?php echo $upload_dir['baseurl'] . '/kave-ava/a-ground_floor.jpg'; ?>" title="">
      <img id="floorShow" src="<?php echo $upload_dir['baseurl'] . '/kave-ava/a-ground_floor.jpg'; ?>" alt="">
    </a>
  </div>
</section>
