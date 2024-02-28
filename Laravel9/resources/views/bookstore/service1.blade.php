<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      /*----------------------------------------------------------header-------------------------------------*/
      .header {
        height: 60px;
        width: 100%;

        border: 3px solid black;
        background-color: rgb(94, 45, 5);
        margin-top:4.8%;
      }
      .header p {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
          sans-serif;
        text-align: right;
        padding-right: 30px;
        font-size: 30px;
        color: rgb(223, 158, 121);
      }
      /*-------------------------------------------------------------------------body-----------------------------*/
      .section {
        height: 700px;
        width: 100%;
        background-color: rgb(51, 24, 2);
      }
      .section1 {
        display: flex;
        flex-direction: row;
      }
      .section2 {
        display: flex;
        flex-direction: row;
      }
      /*-------------------------------------------------------------------------------------footer---------------------------------*/
      .footer {
        height: 60px;
        width: 100%;

        border: 2px solid rgb(0, 0, 0);
        background-color: rgb(77, 37, 5);
        display: flex;
        flex-direction: row;
      }
      .footer p {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
          sans-serif;
        text-align: right;
        padding-right: 30px;
        font-size: 25px;
        color: rgb(223, 158, 121);
        margin-left: 100px;
      }
      .footer .button1 {
        float: right;
        margin-left: 500px;
        border: 2px solid black;
      }
      h3 {
        font-weight: bold;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
      }
    </style>
  </head>
  <body>
    @include('bookstore.nav')
   
    <!--------------------------------------------------------------------------------------header-------------------------------->
    
    <div class="header">
      <p>تقسیم بندی انواع کتاب هایی که ما برای شما تهیه میکنیم</p>
    </div>
    <!-----------------------------------------------------------------------------------------body-------------------------------->
    <div class="section">
      <!------line 1------>
      <div class="section1 p-3">
        <!------------------------------------------------ Carousel 1--------------------------------------------------------------- -->
        <div
          id="demo"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-----data-bs-ride="carousel" ------autoplay off-->
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="3"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="4"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="5"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/b6.jpg"
                alt="Los Angeles"
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی داستانی</h3>
              </div>
            </div>
            <!--------------------image 1-------------------------->
            <div class="carousel-item">
              <img
                src="img/Dastani1.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <!--<div class="carousel-caption">
                <h4 style="font-size: 20px">کتاب خانه نیمه شب</h4>
              </div>-->
            </div>
            <!-------------------image 2------------------------->
            <div class="carousel-item">
              <img
                src="img/Dastani.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <!--<div class="carousel-caption">
                <h4>سم هستم، بفرمایید</h4>
              </div>-->
            </div>
            <!--------------------------image 3------------------>
            <div class="carousel-item">
              <img
                src="img/Dastani3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <!--   <div class="carousel-caption">
                <h4>سال ها تنهایی</h4>
              </div> -->
            </div>
            <!-------------------------image 4------------>
            <div class="carousel-item">
              <img
                src="img/Dastani2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <!--<div class="carousel-caption">
                <h4>دختر پرتقالی</h4>
              </div> -->
            </div>

            <!-------------------------image 5------------>
            <div class="carousel-item">
              <img
                src="img/Dastani4.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <!--
            <div class="carousel-caption">
              <h4>چهار گرد قلا گشتم</h4>
            </div> -->
            </div>
          </div>
          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

        <!----------------------------------------------- Carousel 2--------------------------------------------------->
        <div
          id="demo2"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo2"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo2"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo2"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo2"
              data-bs-slide-to="3"
            ></button>
            <button
              type="button"
              data-bs-target="#demo2"
              data-bs-slide-to="4"
            ></button>
            <button
              type="button"
              data-bs-target="#demo2"
              data-bs-slide-to="5"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/B10.jpg"
                alt="Los Angeles"
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h5>کتاب هایی روانشناسی</h5>
              </div>
            </div>
            <!---------------------------image 1--------------------->
            <div class="carousel-item">
              <img
                src="img/rawan1.jpg"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!--------------------------------image 2----------------->
            <div class="carousel-item">
              <img
                src="img/rawan2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!-----------------------------image 3----------------------->
            <div class="carousel-item">
              <img
                src="img/rawan3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!--------------------------------image 4--------------------->
            <div class="carousel-item">
              <img
                src="img/rawan4.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!--------------------------------image 5--------------------->
            <div class="carousel-item">
              <img
                src="img/rawan5.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo2"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo2"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

        <!-------------------------------Carousel 3 ------------------------------------------------------------------>
        <div
          id="demo3"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo3"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo3"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo3"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo3"
              data-bs-slide-to="3"
            ></button>
            <button
              type="button"
              data-bs-target="#demo3"
              data-bs-slide-to="4"
            ></button>
            <button
              type="button"
              data-bs-target="#demo3"
              data-bs-slide-to="5"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/b5.jpg"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی اسلامی</h3>
              </div>
            </div>
            <!-----------------------------image 1------------------------------->
            <div class="carousel-item">
              <img
                src="img/islamic1.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!-------------------------------image 2-------------------------->
            <div class="carousel-item">
              <img
                src="img/islamic2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!-------------------------------image 3------------------------->
            <div class="carousel-item">
              <img
                src="img/islamic3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!-------------------------------image 4------------------------->
            <div class="carousel-item">
              <img
                src="img/islamic4.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!-------------------------------image 5------------------------->
            <div class="carousel-item">
              <img
                src="img/islamic5.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo3"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo3"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <!--============================================================================= Carousel 4==================================-->
        <div
          id="demo4"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo4"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo4"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo4"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo4"
              data-bs-slide-to="3"
            ></button>
            <button
              type="button"
              data-bs-target="#demo4"
              data-bs-slide-to="4"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/b15.jpg"
                alt="Los Angeles"
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی فلسفی</h3>
              </div>
            </div>
            <!----------------------------image 1------------------------>
            <div class="carousel-item">
              <img
                src="img/falsafa1.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!----------------------------image 2------------------------>
            <div class="carousel-item">
              <img
                src="img/falsafa2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!----------------------------image 3------------------------>
            <div class="carousel-item">
              <img
                src="img/falsafa3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <!----------------------------------image 4---------------------->
            <div class="carousel-item">
              <img
                src="img/falsafa4.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo4"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo4"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
      <div class="section2 p-3 py-1">
        <!------------------------------------------------------------------------------------line 2--------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------- Carousel 5----------------------------------------->
        <div
          id="demo5"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo5"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo5"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo5"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo5"
              data-bs-slide-to="3"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/B3.webp"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی تاریخی</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="img/tarekhi1.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/tarekhi2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/tarekhi3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo5"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo5"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

        <!--------------------------------------------------------------- Carousel 6--------------------------------------------------------->
        <div
          id="demo6"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo6"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo6"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo6"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo6"
              data-bs-slide-to="3"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/b2.jpg"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی زبان</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="img/zaban1.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/zaban2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/zaban3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo6"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo6"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <!----------------------------------------------------------------------- Carousel 7------------------------------------------------>
        <div
          id="demo7"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo7"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo7"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo7"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo7"
              data-bs-slide-to="3"
            ></button>
            <button
              type="button"
              data-bs-target="#demo7"
              data-bs-slide-to="4"
            ></button>
            <button
              type="button"
              data-bs-target="#demo7"
              data-bs-slide-to="5"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/b18.avif"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی انگلیسی</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="img/english1.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/english2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/english3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/english4.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/english5.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo7"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo7"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <!------------------------------------------------------------- Carousel 8---------------------------------------------------------->
        <div
          id="demo8"
          class="carousel slide pt-4"
          style="width: 20%; margin-left: 60px"
        >
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo8"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo8"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo8"
              data-bs-slide-to="2"
            ></button>
            <button
              type="button"
              data-bs-target="#demo8"
              data-bs-slide-to="3"
            ></button>
            <button
              type="button"
              data-bs-target="#demo8"
              data-bs-slide-to="4"
            ></button>
            <button
              type="button"
              data-bs-target="#demo8"
              data-bs-slide-to="5"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/b17.avif"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
              <div class="carousel-caption">
                <h3>کتاب هایی مالی</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="img/maali1.JPG"
                alt="Chicago"
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/maali2.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/maali3.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/maali4.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/maali5.JPG"
                alt=""
                class="d-block"
                style="width: 100%; height: 270px"
              />
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#demo8"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#demo8"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
    <!-------------------------------------------------------------------------------------footer------------------------------------------->
    <div class="footer p-2">
      <button
        type="button"
        class="btn btn-outline-dark button1"
        data-bs-toggle="modal"
        data-bs-target="#myModal"
        style="color: rgb(223, 158, 121); font-weight: bolder"
      >
        Order Now
      </button>

      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h3>Taking your Order</h3>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
              ></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- form -->
              <form action="/ordering" method="post" style="font-weight: bolder">
              @csrf
                <div class="mb-1 mt-1">
                  <label for="name">Book's Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter Book's name"
                    name="book_name"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Book's Author Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter Author's name"
                    name="author_name"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Your Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter Your Name"
                    name="name_of_user"
                  />
                </div>
                <div class="mb-3">
                  <label for="number">Phone Number:</label>
                  <input
                    type="number"
                    class="form-control"
                    id="number"
                    placeholder="Enter your number"
                    name="phoneNumber"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="address">Your Address:</label>
                  <input
                    type="address"
                    class="form-control"
                    id="address"
                    placeholder="Enter address"
                    name="address"
                  />
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <span>
        <p>برای سفارش دادن کتابی که میخواهید، اینجا کلیک کنید</p>
      </span>
    </div>
  
  </body>
</html>
