<!-- Location -->
<style>
    #location {
        background: url("https://kavecondo.com/wp-content/uploads/2021/10/kave-avav_location-bg-scaled.jpeg") no-repeat top center;
        background-size: cover;
    }

    #location .head {
        color: #fff;
        font-size: 60px;
        border-left: 7px solid;
        border-right: 7px solid;
        width: max-content;
        padding: 0 50px;
        margin: auto;
        line-height: 70px;
    }

    #location img {
        width: 100%;
    }

    #location .nav-pills {
        width: 50%;
        justify-content: center;
        margin: 0 auto;
        display: flex;
        align-items: center;
        padding-top: 20px;
        height: 105px;
    }

    #location .nav-pills .nav-link {
        color: #fff;
        margin: 0 20px;
        font-size: 30px;
    }

    #location .nav-pills .nav-link.active {
        background-color: unset;
        border-bottom: 7px solid #119fcc;
        border-radius: 0;
    }

    #location .nav-pill2 {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: -25px;
    }

    #location #pills-tab .nav-link {
        margin: 0 2rem;
        width: 10rem;
        padding: 0;
        background: transparent;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    #location #pills-tab .nav-item .nav-link .first {
        display: block;
        width: 70%;
    }

    #location #pills-tab .nav-item .nav-link .second {
        display: none;
    }

    #location #pills-tab .nav-item.active .nav-link .first {
        display: none;
    }

    #location #pills-tab .nav-item.active .nav-link .second {
        display: block;
    }

    #pill2-tabContent a {
        color: #119fcc;
        font-size: 20px;
    }

    .tab-pane .container {
        padding-top: 40px;
        padding-bottom: 40px;
        min-height: 200px;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        #location {
            background: url("https://kavecondo.com/wp-content/uploads/2021/10/kave-avav_location-bg-scaled.jpeg") no-repeat top center;
            background-size: cover;
        }

        #location .head {
            font-size: 40px;
            border-left: 5px solid;
            border-right: 5px solid;
            padding: 0 30px;
            line-height: 50px;
        }

        #location .nav-pills .nav-link {
            margin: 0 10px;
            font-size: 18px;
            padding: 5px;
        }

        #location .nav-pill2 {
            margin-bottom: -10px;
        }

        #location .nav-pill2 .nav-link {
            margin: 0;
            width: 7rem;
            padding: 0 20px;
        }

        #pill2-tabContent a {
            font-size: 18px;
        }

        .tab-pane .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    }

    /* Mobile Size
    ============================================================================================ */
    @media (max-width: 575.98px) {
        #location {
            background: url("https://kavecondo.com/wp-content/uploads/2021/10/kave-avav_location-bg-scaled.jpeg") no-repeat top center;
            background-size: cover;
        }

        #location .head {
            font-size: 40px;
            border-left: 5px solid;
            border-right: 5px solid;
            padding: 0 30px;
            line-height: 50px;
        }

        #location #pills-tab {
            width: 100%;
        }

        #location #pills-tab .nav-link {
            margin: 0 10px;
            font-size: 18px;
            padding: 0;
            width: auto;
            margin-bottom: -20px;
        }

        #location .nav-pill2 {
            margin-bottom: -10px;
        }

        #location .nav-pill2 .nav-link {
            margin: 0;
            width: 5rem;
            padding: 0 10px;
        }

        #pill2-tabContent a {
            color: #119fcc;
            font-size: 16px;
        }

        .tab-pane .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    }
</style>
<div id="location">
  <ul class="nav nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item active">
      <a class="nav-link" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1"
         aria-selected="true">
        <img class="first" src="https://kavecondo.com/wp-content/uploads/2021/10/tab_icon1.svg" alt="tab1"/>
        <img class="second" src="https://kavecondo.com/wp-content/uploads/2021/10/tab1_active.svg" alt="tab1"/>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2"
         aria-selected="false">
        <img class="first" src="https://kavecondo.com/wp-content/uploads/2021/10/tab_icon2.svg" alt="tab2"/>
        <img class="second" src="https://kavecondo.com/wp-content/uploads/2021/10/tab2_active.svg" alt="tab2"/>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3"
         aria-selected="false">
        <img class="first" src="https://kavecondo.com/wp-content/uploads/2021/10/tab_icon3.svg" alt="tab3"/>
        <img class="second" src="https://kavecondo.com/wp-content/uploads/2021/10/tab3_active.svg" alt="tab3"/>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4"
         aria-selected="false">
        <img class="first" src="https://kavecondo.com/wp-content/uploads/2021/10/tab_icon4.svg" alt="tab4"/>
        <img class="second" src="https://kavecondo.com/wp-content/uploads/2021/10/tab4_active.svg" alt="tab4"/>
      </a>
    </li>
  </ul>
</div>
<!-- tab content -->
<div class="tab-content bg-white" id="pill2-tabContent">
  <div class="tab-pane fade in active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E1. สนามกีฬามหาวิทยาลัยธรรมศาสตร์</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E2. อาคารเรียนรวมสังคมศาสตร์ (SC)</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E3. หอสมุดป๋วย อึ๊งภากรณ์</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E4. ศูนย์การเรียนรู้กรมหลวงนราธิวาสราชนครินทร์</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E5. ศูนย์หนังสือมหาวิทยาลัยธรรมศาสตร์</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E6. อุทยานเรียนรู้ป๋วย 100 ปี</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">E7. โรงเรียนสาธิตแห่งมหาวิทยาลัยธรรมศาสตร์</a>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S1. ฟลิค ทียู</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S2. ธรรมศาสตร์ เอกซ์ตรีม พลาซ่า</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S3. ตลาดนัดอินเตอร์โซน (ตลาดกลางคืน ธรรมศาสตร์)</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S4. ตลาดไท</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S5. เทสโก้ โลตัส คลองหลวง</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S6. แม็คโคร</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S7. เซ็นทรัลรังสิต (โครงการในอนาคต)</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S8. ฟิวเจอร์พาร์ค รังสิต</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">S9. มิงเกิ้ล มอลล์</a>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">W1. อาคารโดมบริหาร</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">W2. กิติยาคาร</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">W3. ศูนย์ประชุม ธรรมศาสตร์รังสิ</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">W4. สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.)</a>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">W5. สถาบันเทคโนโลยีแห่งเอเชีย (AIT)</a>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-3">
          <a href="#">H. โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ</a>
        </div>
      </div>
    </div>
  </div>
</div>