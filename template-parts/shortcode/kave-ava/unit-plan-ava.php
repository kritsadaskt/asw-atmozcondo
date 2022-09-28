<?php $upload_dir = wp_upload_dir(); ?>
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
        background-color: #3A8896;
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
        border-bottom: 1px solid #159196;
    }
    #dropdown_wrapper .dropdown .dropdown-menu li a:hover, #dropdown_wrapper .dropdown .dropdown-menu li a:focus {
        background-color: transparent;
        color: #d77c33;
    }
    #dropdown_wrapper .dropdown .dropdown-menu li:last-child a {
        border-bottom: none;
    }
    .floor-show-wrapper {
      width: 75%;
      margin: 0 auto;
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

    towerDropdown.find('a').on('click touch', function (e) {
      e.preventDefault();
      let tower = $(this).data('tower');
      towerBtn.find('span').text($(this).text());
      if (tower !== 'on-ground') {
        floorDropdownWrapper.removeClass('hideB');
        floorDropdownWrapper.addClass('show');
        switch (tower) {
          case 'tower-a':
            apply_list('a');
            break;
          case 'tower-b':
            apply_list('b');
            break;
          case 'tower-c':
            apply_list('c');
            break;
          case 'tower-d':
            apply_list('d');
            break;
          case 'tower-e':
            apply_list('e');
            break;
          default :
            console.log('tower X');
        }

      } else {
        floorDropdownWrapper.removeClass('show');
        floorDropdownWrapper.addClass('hideB');
        floorShow.attr('src','/wp-content/uploads/atmoz-bangna/floor-plan/on-ground.jpg');
        floorShowLink.attr('href','/wp-content/uploads/atmoz-bangna/floor-plan/on-ground.jpg');
      }
    });

    floorDropdown.bind('a').on('click touch', function (e) {
      e.preventDefault();
      let selected = e.target;
      //console.log($(selected).data('img'));
      floorBtn.find('span').text($(selected).text());
      floorShow.attr('src', '/wp-content'+$(selected).data('img'));
      floorShowLink.attr('href', '/wp-content'+$(selected).data('img'));
    })

    function apply_list(tower) {
      floorDropdown.empty();
      floorBtn.find('span').text('2nd Floor');
      floorShow.attr('src', '/wp-content/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+'2.jpg');
      for (i=2;i<=8;i++) {
        if (i === 2) {
          floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+'2.jpg">2nd Floor</li>');
        } else if (i === 3) {
          floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+'3.jpg">3nd Floor</li>');
        } else {
          floorDropdown.append('<li><a class="dropdown-item" href="" data-img="/uploads/atmoz-bangna/floor-plan/building-'+tower+'/'+tower.toUpperCase()+i+'.jpg">'+i+'th Floor</li>');
        }
      }
    }
  });
</script>
<section id="dropdown_wrapper">
  <div id="tower-dropdown-wrapper" class="dropdown">
    <button id="towerBtn" class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>Ground Floor</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="23.904" height="13.24" viewBox="0 0 23.904 13.24">
        <path id="Path_10" data-name="Path 10" d="M23.394.289a.986.986,0,0,0-1.4,0L11.842,10.446,1.685.289a.987.987,0,0,0-1.4,1.4L11.144,12.539a.986.986,0,0,0,1.4,0L23.394,1.685A.986.986,0,0,0,23.394.289Z" transform="matrix(1, 0.017, -0.017, 1, 0.224, 0)" fill="#fff"/>
      </svg>
    </button>
    <ul id="towerDropdown" class="dropdown-menu" aria-labelledby="towerDropdown">
      <li><a class="dropdown-item" href="#" data-tower="on-ground">Ground Floor</a></li>
      <li><a class="dropdown-item" href="#" data-tower="tower-a">Tower A</a></li>
      <li><a class="dropdown-item" href="#" data-tower="tower-b">Tower B</a></li>
      <li><a class="dropdown-item" href="#" data-tower="tower-c">Tower C</a></li>
      <li><a class="dropdown-item" href="#" data-tower="tower-d">Tower D</a></li>
      <li><a class="dropdown-item" href="#" data-tower="tower-e">Tower E</a></li>
    </ul>
  </div>
  <div id="floor-dropdown-wrapper" class="dropdown hideB">
    <button id="floorBtn" class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>Ground Floor</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="23.904" height="13.24" viewBox="0 0 23.904 13.24">
        <path id="Path_10" data-name="Path 10" d="M23.394.289a.986.986,0,0,0-1.4,0L11.842,10.446,1.685.289a.987.987,0,0,0-1.4,1.4L11.144,12.539a.986.986,0,0,0,1.4,0L23.394,1.685A.986.986,0,0,0,23.394.289Z" transform="matrix(1, 0.017, -0.017, 1, 0.224, 0)" fill="#fff"/>
      </svg>
    </button>
    <ul id="floorDropdown" class="dropdown-menu" aria-labelledby="floorDropdown"></ul>
  </div>
</section>
<section id="floor_plan_show">
  <div class="floor-show-wrapper">
    <a id="floorShowLink" href="<?php echo $upload_dir['baseurl'] . '/atmoz-bangna/floor-plan/ground-floor.jpg'; ?>" title="">
      <img id="floorShow" src="<?php echo $upload_dir['baseurl'] . '/atmoz-bangna/floor-plan/ground-floor.jpg'; ?>" alt="">
    </a>
  </div>
</section>
