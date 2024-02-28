<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="row  mx-5 mt-5 container-fluid ">
    <div class="col-lg-10 ">
    <h1  class="m-4" style="text-align:center;">Feedbacks</h1>
<table class="table table-striped border table-dark table-bordered " >
  <thead class="text-bg-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Rating</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <!----------------------------------------for ID----------------------->
  @php
  $idd=1;  
  @endphp 
  <tbody>
    @foreach($messages as $message)
    <tr>
      <th scope="row">{{$idd}}</th>
      <td>{{$message['name']}}</td>
      <td>{{$message['email']}}</td>
      <td>{{$message['message']}}</td>
      <td>{{$message['rating']}}</td>
      <td>
      <button class="btn btn-danger nav-item dropdown">
              <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" href="">Update/Delete</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" onclick="return confirm('Are you sure to delete {{$message['name']}} message?')"
                   href={{"/feedbackdelete/".$message['id']}}>Delete</a>
                </li>
                <li>
                  <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal{{$message['id']}}" href="">Update</a>
                </li>
              </ul>
       </button>
 <!-- The Modal -->
 <div class="modal fade" id="myModal{{$message['id']}}" style="color:black;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h3>Edit this record:</h3>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
              ></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- form -->
              <form action="/feedbackedit" method="post" style="font-weight: bolder">
              @csrf
              <input type="hidden" name="id" value="{{$message['id']}}">
                <div class="mb-1 mt-1">
                  <label for="name">Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="name"
                    value="{{$message['name']}}"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Email:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="email"
                    value="{{$message['email']}}"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Message:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="message"
                    value="{{$message['message']}}"
                   
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Rating:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="rating"
                    value="{{$message['rating']}}"
                   
                  />
                </div>
                <button type="submit" class="btn btn-primary float-end">Edit</button>
              </form>
            </div>
        </div>
    </div>
</div>
      </td>
    </tr>
    <!-------------------------------------for id----------------->
    @php
    $idd++;
    @endphp 
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>