<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Service 2</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        @extends('bookstore.layout')
        @section('content')
        <div class="home">
            <div class="shadow">
                <br /><br /><br /><br /><br /><br /><br>
                <div
                    class="container bg-dark"
                    style="
                        height: 350px;
                        width: 60%;

                        border-radius: 5%;
                        display: flex;
                        flex-direction: row;
                        opacity: 0.7;
                    "
                >
                    <span>
                        <pre
                            style="
                                margin-top: 80px;
                                margin-left: -50px;
                                font-weight: bolder;
                                font-size: 35px;
                                color: azure;
                                font-family: Arial, Helvetica, sans-serif;
                                line-height: normal;
                                margin-bottom: -20px;
                            "
                        >
          We also provide 
                Delivery service!
        </pre
                        >
                        <p>
                            The books you order will be delivered to your door,
                            with low cost, only in Kabul.
                        </p>
                    </span>
                    <img
                        class="float-end"
                        src="img/Smiley-delivery-man-transparent-PNG-removebg-preview (1).png"
                        alt="PHOTO"
                        height="300px"
                        style="margin-left: -40px; margin-top: 30px"
                    />
                </div>
            </div>
        </div>
        @endsection('content')
        <style>
            p {
                line-height: normal;
                color: azure;
                font-size: 20px;
                margin-left: 30px;
            }
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
    </body>
</html>
