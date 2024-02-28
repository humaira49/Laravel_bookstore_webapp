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
        height: 480px;
        width: 500px;
      }
    </style>
  </head>
  <body>
    @extends('bookstore.layout')
    @section('content')
    <div class="home">
      <div class="shadow">
        <br /><br /><br /><br /> <br>
        <div class="container">
          <!----------------------------------------------------------------------form----------------------------------------------->
          <form
            class="form-control"
            action="/signin"
            method="post"
            style="
              color: white;
              border: 2px solid white;
              border-radius: 5%;
              background-color: rgb(78, 38, 6);
              opacity: 0.7;
            "
          >
          @csrf
            <div
              class="container mt-3 w3-border w3-padding w3-round"
              style="font-weight: bolder"
            >
              <!-------------------name---------------->
            
              <div class="mb-3 mt-3" style="margin-right: 60px">
                <label for="name" class="form-label">Name:</label>
                <input
                  type="name"
                  class="form-control"
                  id="name"
                  placeholder="Enter name"
                  name="name"
                  required
                />
              </div>
              <!----------------------lastname------------>
              <div style="margin-right: 60px">
                <label for="name" class="form-label">Lastname:</label>
                <input
                  type="name"
                  class="form-control"
                  id="name"
                  placeholder="Enter Lastname"
                  name="lastname"
                  required
                />
              </div>
              <!--------------------------------------username--------------------->
              <div style="margin-right: 60px">
                <label
                  for="username"
                  class="form-label mt-3"
                  style="margin-right: 60px"
                  >Username:</label
                >
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Username"
                    name="username"
                  />
                </div>
              </div>
              <!-----------email----------------->
              <div class="mb-1 mt-3" style="margin-right: 60px">
                <label for="email" class="form-label">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  style="margin-top: 2px"
                  id="email"
                  placeholder="Enter email"
                  name="email"
                />
              </div>
              <!-------------pwd------------------->
              <div class="mb-3 mt-3" style="margin-right: 60px">
                <label for="pwd" class="form-label">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  style="margin-top: 5px"
                  id="pwd"
                  placeholder="Enter password"
                  name="password"
                />
              </div>
              <!--button-->
              <button
                type="submit"
                class="btn"
                style="
                  float: right;
                  border: 2px solid white;
                  color: beige;
                  padding-right: 10px;
                  margin-right: 80px;
                  background-color: rgb(100, 51, 10);
                "
              >
                Submit
              </button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
    @endsection('content')
  </body>
</html>
