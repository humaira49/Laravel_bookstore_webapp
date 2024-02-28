<!---------------------------------------------------------------navigation------------------>
<div class="row">
    @include('bookstore.nav')
    </div>
   <!-------------------------------------------------------------content------------------------->
    @yield('content')
     <!------------------------------------------------------------footer-------------------------------> 
    <div class="footer1 d-flex gap-4" >
        <div>
    <p style="">Want to share your feedback with us?</p>
    </div>
   
    <div>
      <!-------------------------------------------------------------feedback--------------------------->
        <button data-bs-toggle="modal"
        data-bs-target="#myModal">Feedback</button>
         <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h3>Your feedback:</h3>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
              ></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- form -->
              <form action="/message" method="post" style="font-weight: bolder">
              @csrf
                <div class="mb-1 mt-1">
                  <label for="name">Your name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter your name"
                    name="name"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Your Email:</label>
                  <input
                    type="email"
                    class="form-control"
                    id="name"
                    placeholder="Enter your email"
                    name="email"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Your Message:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter Your message"
                    name="message"
                   
                  />
                </div>
                <!----------------------------rating------------------------->
                <div class="mb-3 mt-3">
                  <label for="rating">Rate our website:</label>
               <div class="star-rating">
               <label for="star1"></label>
               <input type="radio" name="rating" id="star1" value="1">
               <label for="star2"></label>
               <input type="radio" name="rating" id="star2" value="2">
               <label for="star3"></label>
               <input type="radio" name="rating" id="star3" value="3">
               <label for="star4"></label>
               <input type="radio" name="rating" id="star4" value="4">
               <label for="star5"></label>
                <input type="radio" name="rating" id="star5" value="5">
               </div>
                </div>
               <!-- <div class="rating">
      <p>Rating:</p>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9734;</span>
    </div> -->
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
  </div>
  <div class="" style="padding-left: 30%;">
    <span
            style="
              font-weight: bolder;
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
              color: white;
              font-size: 20px;
              padding-top: 2px;
            "
            >Contact us:
          </span>
          <a href="#" class="fa fa-phone"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-whatsapp"></a>
    </div>
    </div>
    <style>
        .footer1{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
            background-color: #201f1d;
            font-weight:bolder;
            font-size:20px; 
            color:white;
            padding-left: 5%;
            padding-top: 8px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
        }
        button{
            background-color: black;
            color: white;
            border: 2px solid white;
            border-radius: 5px;
            padding-left: 20px;
            padding-right:20px;
            padding-top:0;
            padding-bottom:0;

        }
        .modal{

            color:black;
        }
        .star-rating input[type="radio"]{
          display:none;
        }
        .star-rating label {
          font-size:30px;
          padding:5px;
          cursor:pointer;
        }
        .star-rating label:before{
          content:"\2605";
          color:#FFD700;
         
        }
        .star-rating input[type="radio"]:checked~label:before{
        content:"\2605";
        color:black;

        }
       /* .rating {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .star {
      color: gold;
    } */
    </style>

    <script>
      //for rating
      const ratingInputs = document.querySelectorAll('input[name='rating']');
      const ratingDisplay = document.querySelector('.star-rating');
      ratingInputs.forEach(input=>{
        input.addEventListener('click', ()=>{
          ratingDisplay.classList.remove('reted-1', 'rated-2', 'rated-3', 'rated-4', 'rated-5');
          ratingDisplay.classList.add('rated-${input.value}');
        });
      });
    </script>
    
</body>
</html>