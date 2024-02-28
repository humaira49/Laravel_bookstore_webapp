<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>About</title>
    <style>
      /*-----------------------------------------------------------------for background------------------------------------------*/
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
      /*-----------------------------------------------------------------for icons--------------------------------------------*/
      .fa {
        padding: 5px;

        font-size: 20px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        margin: 10px 8px;
        border-radius: 10px;
      }

      .fa:hover {
        opacity: 0.7;
      }

      .fa-facebook {
        background: #3b5998;
        color: white;
      }

      .fa-phone {
        background: #55acee;
        color: white;
      }
      .fa-instagram {
        background: #f73d3d;
        color: white;
      }
      .fa-whatsapp {
        background: #19ca22;
        color: white;
      }
    </style>
  </head>
  <body>
    <!--<div class="row">
  @include('bookstore.nav')
  </div> -->
  @extends('bookstore.layout')
  @section('content')
    
    <div class="home">
      <div class="shadow">
        <br /><br /><br /><br /><br><br>
        <!-------------------------------------------------------------------------------about------------------------------------------>
        <div
          style="
            height: 450px;
            width: 650px;
            background-color: rgb(19, 18, 18);
            border: 2px solid rgba(14, 13, 13, 0.562);
            border-radius: 5%;
            text-align: center;

            margin-left: 340px;
            opacity: 0.7;
            color: beige;
          "
        >
          <div
            class="h2"
            style="
              padding-top: 40px;
              font-family: 'Trebuchet MS', 'Lucida Sans Unicode',
                'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            "
          >
            About Me
          </div>
          <div style="display: flex; flex-direction: row">
            <p
              style="
                padding: 20px;
                padding-top: 40px;
                font-size: large;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                  serif;
              "
            >
              Hi, I am Ziaurahman Nazari. We want to make it easier for you to
              buy your favorite books and send them to your door. Also to
              promote the culture of reading among our compatriots.
              <br /><br />
              You can contact me in:
              <br />
              <a href="#" class="fa fa-phone"></a>
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-whatsapp"></a>
            </p>
            <br />
            <!---------------------------------------------image--------------------------------------------------------------->
            <img
              class="rounded"
              width="304"
              height="306"
              src="img/admin.JPG"
              alt="My Photo"
              style="padding: 5px; padding-top: 30px; padding-right: 40px"
            />
          </div>
        </div>
      </div>
    </div>
    @endsection('content')
  </body>
</html>
