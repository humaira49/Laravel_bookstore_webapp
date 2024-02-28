<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <!------------------------------------------------------database table----------------------------------------->
  <div class="row mt-5 mx-5 container-fluid" >
    <div class="col-lg-10 ">
    <h1  class="m-4"style="text-align:center;">Orders</h1>
<table class="table table-striped border table-dark table-bordered " >

  <thead class="text-bg-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book_Name</th>
      <th scope="col">Author_name</th>
      <th scope="col">Name_of_user</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  @php
  $idd=1;  
  @endphp 
  <tbody>
    
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{$idd}}</th>
      <td>{{$order['book_name']}}</td>
      <td>{{$order['author_name']}}</td>
      <td>{{$order['name_of_user']}}</td>
      <td>{{$order['phoneNumber']}}</td>
      <td>{{$order['address']}}</td>
      <td>
        <button class=" btn btn-danger nav-item dropdown">
              <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" href="" 
                
              >Update/Delete</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" onclick="return confirm('Are you sure to delete {{$order['book_name']}} order?')"
                   href={{"/orderdelete/".$order['id']}}>Delete</a>
                </li>
                <li>
                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#myModal{{$order['id']}}" href="" >Update</a>
                </li>
              </ul>
      </button>

         <!-- The Modal -->
      <div class="modal fade" id="myModal{{$order['id']}}" style="color:black;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h3>Edit this record</h3>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
              ></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- form -->
              <form action="/orderedit" method="post" style="font-weight: bolder">
              @csrf
              <input type="hidden" name="id" value="{{$order['id']}}">
                <div class="mb-1 mt-1">
                  <label for="name">BOOK_Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="book_name"
                    value="{{$order['book_name']}}"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Author_Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="author_name"
                    value="{{$order['author_name']}}"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Name_of_user</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="name_of_user"
                    value="{{$order['name_of_user']}}"
                   
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">PhoneNumber</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="phoneNumber"
                    value="{{$order['phoneNumber']}}"
                   
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="address"
                    value="{{$order['address']}}"
                   
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