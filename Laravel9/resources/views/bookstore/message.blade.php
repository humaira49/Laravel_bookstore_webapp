<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      /*------------------------------------------------------------for background----------------------------------*/
      .home {
        background-image: url(img/b15.jpg);
        background-size: cover;
        background-position: center;
        height: 100vh;
      }
      .shadow {
        background-color: rgba(14, 13, 13, 0.39);
        height: 100%;
      }
      .home .shadow .container {
        height: 100px;
        width: 50%;
        font-weight: bolder;
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
              color: white;
              font-size: 25px;
              text-align:center;
              background: black;
              border:2px solid black;
              border-radius:10px;
              opacity:0.8;

      }
    </style>
  </head>
  <body>
  @include('bookstore.nav')
    <div class="home">
      <div class="shadow">
        <br /><br /><br /><br /> <br> <br> <br> <br> <br><br><br>
        <div class="container">
          <h1>You have signed in successfully!</h1>
          <h3>Now you can enjoy from 20% discount.</h3>
        </div>
        
      </div>
    </div>
  </body>
</html>
