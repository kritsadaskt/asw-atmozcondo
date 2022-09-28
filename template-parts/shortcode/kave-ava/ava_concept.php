<?php
$project_concept = get_field('project_concept', get_the_ID());
$concepts = $project_concept['concepts'];
?>
<style>
  #imageShow {
      padding: 0 0 0 40px;
  }
  #menuListed {
      margin: 0;
      padding: 20px 15px;
      list-style-type: none;
      border-radius: 30px;
      background-color: rgba(255, 255, 255, 0.4);
  }
  #menuListed .concept-menu {
      padding: 10px;
      text-align: center;
      color: #fff;
      font-size: 26px;
      line-height: normal;
      font-weight: 300;
      transition: all 320ms ease;
      font-family: 'db_heavent', Helvetica, sans-serif;
  }
  #menuListed .concept-menu.active {
      font-weight: 500;
      transform: scale(1.1);
  }
  #menuListed .concept-menu:hover {
      transition: all 320ms ease;
      transform: scale(1.1);
  }
  #menuListed li {
      border-bottom: 1px solid #fff;
  }
  #menuListed li:last-child {
      border-bottom: none;
  }
  #detail {
      background-color: #fff;
      border-radius: 30px;
  }
  #detail .detail-inner {
      display: flex;
      padding: 25px 30px;
      align-items: center;
  }
  #detail .detail-inner .detail-title {
      font-size: 46px;
      margin: 0;
      padding: 0 10px;
      color: #119FCC;
      margin-right: 25px;
      border-left: 5px solid #119FCC;
      flex: none;
  }
  #detail .detail-inner .detail-desc {
      font-size: 22px;
      line-height: normal;
  }
  #detail .detail-inner .detail-title p {
      margin: 0;
  }

  /* Mobile Dropdown */
  #mob_dropdown {
      margin-bottom: 15px;
  }
  #mob_dropdown #avaConceptMobListed {
      min-width: 60%;
      width: auto;
      margin: 0 auto;
      display: inherit;
      border-radius: 20px;
      border: none;
      background-color: rgba(255, 255, 255, 0.4);
      color: #fff;
      font-size: 24px;
      padding: 15px 20px;
  }
  #mob_dropdown #avaConceptMobListed span {
      border-bottom: 1px solid #fff;
  }
  #mob_dropdown #avaConceptMobListed svg {
      width: 18px;
      margin-left: 10px;
  }
  #mob_dropdown .dropdown-menu {
      width: 100%;
      border: none;
      border-radius: 15px;
      text-align: center;
      background-color: #fff;
      padding: 10px 20px;
  }
  #mob_dropdown .dropdown-menu li:not(:last-child) {
      border-bottom: 1px solid #119FCC;
  }
  #mob_dropdown .dropdown-menu li a {
      font-size: 22px;
  }

  @media screen and (max-width: 820px) {
      #imageShow {
          padding: 0 0 0 30px;
      }
      #menuListed .concept-menu {
          padding: 10px;
          font-size: 18px;
      }
      #detail {
          border-radius: 25px;
      }
      #detail .detail-inner {
          padding: 15px 0;

      }
      #detail .detail-inner .detail-title {
          font-size: 34px;
          margin-right: 15px;
      }
      #detail .detail-inner .detail-desc {
          font-size: 16px;
      }
  }

  @media screen and (max-width: 520px) {
      #imageShow {
          padding: 0;
      }
      #detail .detail-inner {
          display: block;
      }
      #detail .detail-inner .detail-title {
          margin-right: 0;
          margin-bottom: 15px;
      }
  }
</style>
<?php if(isset($concepts)) : ?>

<div id="ava_concepts" class="container-fluid">
  <div class="row">
    <div class="col-sm-4 visible-xs">
      <div id="mob_dropdown" class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="avaConceptMobListed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <span><?php echo $concepts[0]['title']; ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="23.904" height="13.24" viewBox="0 0 23.904 13.24">
            <path id="Path_10" data-name="Path 10" d="M23.394.289a.986.986,0,0,0-1.4,0L11.842,10.446,1.685.289a.987.987,0,0,0-1.4,1.4L11.144,12.539a.986.986,0,0,0,1.4,0L23.394,1.685A.986.986,0,0,0,23.394.289Z" transform="matrix(1, 0.017, -0.017, 1, 0.224, 0)" fill="#fff"/>
          </svg>
        </button>
        <ul class="dropdown-menu" aria-labelledby="avaConceptMobListed">
          <?php $countM = 0; //Start Count with index 0
                foreach ($concepts as $item): ?>
            <li><a href="#" title="" data-count="<?php echo $countM; ?>"><?php echo $item['title']; ?></a></li>
            <?php $countM++; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="col-sm-8">
      <img id="imageShow" src="<?php echo $concepts[0]['background_image']; ?>" alt="">
    </div>
    <div class="col-sm-4 hidden-xs">
      <ul id="menuListed">
      <?php $count = 0; //Start Count with index 0
            foreach ($concepts as $item): ?>
      <li class="menuItem">
        <a href="" title="" data-count="<?php echo $count;?>"
           class="concept-menu <?php echo $count === 0 ? 'active':''; ?>">
          <?php echo $item['title']; ?>
        </a>
      </li>
      <?php $count++; ?>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div class="row">
    <div id="detail" class="col-sm-12">
      <div class="detail-inner">
        <h3 class="detail-title">
          <?php echo $concepts[0]['headline']; ?>
        </h3>
        <p class="detail-desc">
          <?php echo $concepts[0]['detail']; ?>
        </p>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>

<script>
  $(function () {
    let conceptSelector = $('.concept-menu');
    const concepts = <?php echo json_encode($concepts); ?>;
    const showImg = $('#imageShow');
    const headline = $('#detail .detail-title');
    const desc = $('#detail .detail-desc');
    const mobBtn = $('#avaConceptMobListed');

    const mobDropdown = $('#mob_dropdown .dropdown-menu');
    let dropdownItem = mobDropdown.find('a');

    conceptSelector.on('click', function (e) {
      e.preventDefault();
      $(this).addClass('active');
      $(this).parent('li').siblings().find('a').removeClass('active');
      let selected = concepts[$(this).data('count')];
      setConcept(selected);
    });

    dropdownItem.on('click touch', function (e) {
      e.preventDefault();
      let selected = concepts[$(this).data('count')];
      mobBtn.find('span').text($(this).text());
      setConcept(selected);
    })

    function setConcept(data) {
      showImg.attr('src', data['background_image']);
      headline.html(data['headline']);
      desc.html(data['detail']);
    }
  });
</script>
