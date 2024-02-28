
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Book Store</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
   
      /*-------------------------------------------------------for background img--------------------*/
      .home {
        background-image: url(img/background.avif);
        background-size: cover;
        background-position: center;
        height: 100vh;
      }
      .shadow {
        background-color: rgba(14, 13, 13, 0.39);
        height: 100%;
      }
    </style>
  </head>
  <body>
    <!-----------------------------------------------------------------------------Navigation bar------------------>
   <!-- <div class="row">
    @include('bookstore.nav');
    </div>  -->
    <!---------------------------------------------------------------------------------home-------------------->
    @extends('bookstore.layout')
    @section('content')

  
    <div class="home">
      <div class="shadow">
        <div
          class="h1"
          style="
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
              serif;
            font-weight: bolder;
            text-align: center;
            padding-top: 270px;
          "
        >
          Nazari Online Bookstore
        </div>
        <div
          style="
            text-align: center;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            margin-top: 20px;
          "
        >
          <p>
            A reader lives a thousand lives before he/she dies. The man/woman
            who never reads, lives only one.<br />
            Books let you travel without moving your feet.
          </p>
        </div>
        <div
          style="height: 30px; width: 25%; margin-top: 25px; margin-left: 500px"
        >
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="text"
              placeholder="Book's name"
            />
            <button class="btn btn-dark" type="button">Search</button>
          </form>
        </div>
      </div>
    </div>
    <br /><br />
    <!-------------------------------------------------------------------------------section2----->

    <div class="container" style="margin-left: 150px">
      <div class="row" style="flex-direction: row; display: flex">
        <div
          class="col-sm-3 p-3 text-white;"
          style="
            font-size: 50px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
              'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bolder;
            color: rgb(238, 214, 186);
            background-color: #a36c05;
            height: 680px;
          "
        >
          <pre style="line-height: normal">
MOST 
  POPULAR</pre
          >
          <hr />
          <div style="padding-bottom: 100px">
            <img
              src="img/open-book.png"
              alt=""
              style="
                height: 250px;
                width: 300px;
                position: absolute;
                padding-right: 70px;
                padding-left: 5px;
                float: left;
              "
            />
          </div>
          <br />
          <p style="font-size: 25px; text-align: right">
            برگ های کتاب به منزله بال هایی هستند که روح ما را به عالم نور و
            روشنایی پرواز میدهند. هر چه بیشتر کتاب بخوانید، بیشتر از زندگی حقیقی
            برخوردار خواهید شد
          </p>
        </div>
        <!-------------------------------------------------------------------------------------------------cards------------->
        <div
          class="col-sm-8 p-3 text-white;"
          style="
            border: 5px solid #a36c05;
            border-radius: 5px;
            border-left: none;
            background-color: whitesmoke;
          "
        >
          <div
            class="container mt-1 gap-5"
            style="display: flex; flex-direction: row"
          >
            <!---------card 1---------->
            <div
              class="card"
              style="
                width: 180px;
                border: 2px solid #a36c05;
                border-radius: 5px;
                margin-left: 25px;
              "
            >
              <img
                class="card-img-top"
                src="img/Melat e eshq.JPG"
                style="width: 100%; height: 170px"
              />
              <div class="card-body" style="line-height: 6px">
                <h4
                  class="card-title"
                  style="
                    text-align: right;
                    color: #050505;
                    font-weight: bold;
                    padding-top: 0;
                    font-size: 25px;
                  "
                >
                  ملت عشق
                </h4>
                <p
                  class="card-text"
                  style="
                    text-align: right;
                    font-size: large;
                    color: #a36c05;
                    font-weight: bold;
                  "
                >
                  الیف شافاک
                </p>
                <a
                  href="#"
                  class="btn mt-1"
                  style="background-color: #db981a; width: 80px; color: white"
                  >Buy</a
                >
              </div>
            </div>
            <!---------------------card 2------------->
            <span>
              <div
                class="card"
                style="
                  width: 180px;
                  border: 2px solid #a36c05;
                  border-radius: 5px;
                "
              >
                <img
                  class="card-img-top"
                  src="img/Hakan1.JPG"
                  style="width: 100%; height: 170px"
                />
                <div class="card-body" style="line-height: 6px">
                  <h4
                    class="card-title"
                    style="
                      text-align: right;
                      color: #050505;
                      font-weight: bold;
                      padding-top: 0;
                      font-size: 17px;
                    "
                  >
                    هیچ ملاقاتی تصادفی نیست
                  </h4>
                  <p
                    class="card-text"
                    style="
                      text-align: right;
                      font-size: medium;
                      color: #a36c05;
                      font-weight: bold;
                    "
                  >
                    هاکان منگوچ
                  </p>
                  <a
                    href="#"
                    class="btn"
                    style="background-color: #db981a; width: 80px; color: white"
                    >Buy</a
                  >
                </div>
              </div>
            </span>
            <!--------------------------card 3-------------->

            <span>
              <div
                class="card"
                style="
                  width: 180px;
                  border: 2px solid #a36c05;
                  border-radius: 5px;
                "
              >
                <img
                  class="card-img-top"
                  src="img/Kemya gar.JPG"
                  style="width: 100%; height: 170px"
                />
                <div class="card-body" style="line-height: 6px">
                  <h4
                    class="card-title"
                    style="
                      text-align: right;
                      color: #050505;
                      font-weight: bold;
                      padding-top: 0;
                      font-size: 27px;
                    "
                  >
                    کیمیاگر
                  </h4>
                  <p
                    class="card-text"
                    style="
                      text-align: right;
                      font-size: large;
                      color: #a36c05;
                      font-weight: bold;
                    "
                  >
                    پائولو کوئلیو
                  </p>
                  <a
                    href="#"
                    class="btn mt-1"
                    style="background-color: #db981a; width: 80px; color: white"
                    >Buy</a
                  >
                </div>
              </div>
            </span>
          </div>
          <!---------------------------------------------------------------------line2 --------------------->
          <div
            class="container mt-4 gap-5"
            style="display: flex; flex-direction: row"
          >
            <!-----------------------------card 4 ---------------------------->
            <div
              class="card"
              style="
                width: 180px;
                border: 2px solid #a36c05;
                border-radius: 5px;
                margin-left: 25px;
              "
            >
              <img
                class="card-img-top"
                src="img/Hakan2.JPG"
                style="width: 100%; height: 170px"
              />
              <div class="card-body" style="line-height: 6px">
                <h4
                  class="card-title"
                  style="
                    text-align: right;
                    color: #050505;
                    font-weight: bold;
                    padding-top: 0;
                    font-size: 20px;
                  "
                >
                  همسفر زندگی
                </h4>
                <p
                  class="card-text"
                  style="
                    text-align: right;
                    font-size: medium;
                    color: #a36c05;
                    font-weight: bold;
                  "
                >
                  هاکان منگوچ
                </p>
                <a
                  href="#"
                  class="btn"
                  style="background-color: #db981a; width: 80px; color: white"
                  >Buy</a
                >
              </div>
            </div>
            <!---------------------------------------------------------card 5-------------->
            <span>
              <div
                class="card"
                style="
                  width: 180px;
                  border: 2px solid #a36c05;
                  border-radius: 5px;
                  margin-left: 5px;
                "
              >
                <img
                  class="img/card-img-top"
                  src="img/qudrat.JPG"
                  style="width: 100%; height: 170px"
                />
                <div class="card-body" style="line-height: 6px">
                  <h4
                    class="card-title"
                    style="
                      text-align: right;
                      color: #050505;
                      font-weight: bold;
                      padding-top: 0;
                      font-size: 17.3px;
                    "
                  >
                    قدرت ذهن ناخودآگاه
                  </h4>
                  <p
                    class="card-text"
                    style="
                      text-align: right;
                      font-size: medium;
                      color: #a36c05;
                      font-weight: bold;
                    "
                  >
                    ژوزف مورفی
                  </p>
                  <a
                    href="#"
                    class="btn"
                    style="background-color: #db981a; width: 80px; color: white"
                    >Buy</a
                  >
                </div>
              </div>
            </span>
            <!-------------------------------------------------------------card 6-------------->
            <span>
              <div
                class="card"
                style="
                  width: 180px;
                  border: 2px solid #a36c05;
                  border-radius: 5px;
                  margin-left: 0px;
                "
              >
                <img
                  class="card-img-top"
                  src="img/fanaa.JPG"
                  style="width: 100%; height: 170px"
                />
                <div class="card-body" style="line-height: 6px">
                  <h4
                    class="card-title"
                    style="
                      text-align: right;
                      color: #050505;
                      font-weight: bold;
                      padding-top: 0;
                      font-size: 17.3px;
                    "
                  >
                    خودت را به فنا نده
                  </h4>
                  <p
                    class="card-text"
                    style="
                      text-align: right;
                      font-size: medium;
                      color: #a36c05;
                      font-weight: bold;
                    "
                  >
                    گری جان بیشاپ
                  </p>
                  <a
                    href="#"
                    class="btn"
                    style="background-color: #db981a; width: 80px; color: white"
                    >Buy</a
                  >
                </div>
              </div>
            </span>
            <!-------cards finished--------->
          </div>
          <!--line 2 finished-->
        </div>
      </div>
    </div>
    <!--section 2 finished-->

    <br /><br />
    <!-------------------------------------------------------------------Log in-------------------------------------------------------->
    <div
      class="shadow-lg"
      style="
        height: 60px;
        width: 1050px;
        background-color: #a36c05;
        border-radius: 5px;
        margin-left: 150px;
      "
    >
      <div class="footer gap-5" style="padding: 12px">
        <p
          style="
            display: inline;
            font-weight: bolder;
            font-size: 25px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
              sans-serif;
            color: aliceblue;
            text-align: right;
            letter-spacing: 2px;
          "
        >
          اگر میخواهید تا از ۱۰٪ تخفیف بهره مند شوید، پس در اینجا ساین ان شوید
        </p>
        <span
          ><button
            class="btn"
            style="
              float: left;
              margin-right: 50px;
              margin-left: 50px;
              width: 120px;
              color: aliceblue;
              background-color: #88420a;
              border: 2px solid white;
              border-radius: 5px;
            "
          >
            <a
              href="/Sign_in"
              style="text-decoration: none; color: antiquewhite"
              >SIGN UP</a
            >
          </button></span
        >
      </div>
    </div>
    <br /><br />
   @endsection('content')
  </body>
</html>
