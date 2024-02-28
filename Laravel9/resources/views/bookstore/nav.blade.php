<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      /*------------------------for icons------------------------------------------*/
      .fa {
        padding: 5px;
        font-size: 20px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        margin: 5px 8px;
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
      /*---------------------------------------------for menu hover-------------------------------*/
      .test {
        transition: 0.4s;
      }
      .test:hover {
        transition: 0.4s;
        background-color: rgba(161, 168, 172, 0.7);
      }
    </style>
</head>
<body>
    <!-------------------------------------------------------------------------------navigation----------------->
<div class="container-fluid">
    <nav
      class="navbar navbar-expand-sm fixed-top"
      style="background-color: #312f2c; "
    >
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"> -->
        <img
          src="img/logo.png"
          alt="Logo"
          style="width: 45px; height: 50px; margin-left: 15px"
        />

        <div>
          <span
            style="
              padding-left: 5px;
              font-weight: bolder;
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
              color: white;
              font-size: 25px;
            "
            >Nazari Online Bookstore
          </span>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mynavbar"
            style="background-color: antiquewhite"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div
          class="collapse navbar-collapse  "
          id="mynavbar"
          style="padding-left: 130px"
        >
          <ul
            class="navbar-nav me-auto gap-3"
            style="
              font-weight: bolder;
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
              color: white;
              font-size: 20px;
              padding-top: 2px;
            "
          >
            <li class="nav-item test">
              <a class="nav-link" href="/home" style="color: white">Home</a>
            </li>
            <li class="nav-item test">
              <a class="nav-link" href="/about" style="color: white"
                >About</a
              >
            </li>
            <li class="nav-item test dropdown">
              <a
                class="nav-link dropdown-toggle"
                role="button"
                data-bs-toggle="dropdown"
                href=""
                style="color: white"
                >Services</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/services">Service 1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/service2">Service 2</a>
                </li>
              </ul>
            </li>
            <li class="nav-item test dropdown">
              <a class="nav-link  dropdown-toggle"  data-bs-toggle="dropdown" href="" style="color: white"
                >Admin page</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/account">Accounts</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/feedback">Feedbacks</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/order">Orders</a>
                </li>
              </ul>
            </li>
          </ul>
         <a href="/services" class="btn"
         style="
            color: white;
            background:black;
            border: 1px solid white;
            border-radius: 5px;
            padding-left: 20px;
            padding-right:20px;
            padding-top:0;
            padding-bottom:0;
            font-size: 18px;
         "
         >Order Now</a>
         <a href="/Sign_in" class="btn " style="
            color: white;
            background:black;
            border: 1px solid white;
            border-radius: 5px;
            padding-left: 20px;
            padding-right:20px;
            padding-top:0;
            padding-bottom:0;
            font-size: 18px;
            margin-left: 2%;
         ">Log in</a>
        </div>
      </div>
    </nav>
    </div>
</body>
</html>