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
  <!------------------------------------------------------------------database table------------------------------>
  <div class="row  mx-5 mt-5 container-fluid " >
    <div class="col-lg-10 ">
    <h1  class="m-4"style="text-align:center;">Accounts</h1>
<table class="table table-striped border table-dark table-bordered " >

  <thead class="text-bg-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">LastName</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  @php
  $idd=1;  
@endphp 
  <tbody>
    @foreach($accounts as $account)
    <tr>
      <th scope="row">{{$idd}}</th>
      <td>{{$account['name']}}</td>
      <td>{{$account['lastname']}}</td>
      <td>{{$account['username']}}</td>
      <td>{{$account['email']}}</td>
      <td>{{$account['password']}}</td>
      <td>
      <button class=" btn btn-danger nav-item dropdown">
              <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" href="" 
                >Update/Delete</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" onclick="return confirm('Are you sure to delete {{$account['name']}} record?')"
                   href={{"/accountdelete/".$account['id']}}>Delete</a>
                </li>
                <li>
                  <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal{{$account['id']}}" href="">Update</a>
                </li>
              </ul>
      </button>
 <!-- The Modal -->
 <div class="modal fade" id="myModal{{$account['id']}}" style="color:black;">
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
              <form action="/accountedit" method="post" style="font-weight: bolder">
              @csrf
              <input type="hidden" name="id" value="{{$account['id']}}">
                <div class="mb-1 mt-1">
                  <label for="name">Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="name"
                    value="{{$account['name']}}"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">LastName:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="lastname"
                    value="{{$account['lastname']}}"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Username:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="username"
                    value="{{$account['username']}}"
                   
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="email"
                    value="{{$account['email']}}"
                   
                  />
                </div>
                <div class="mb-3 mt-3">
                  <label for="name">Password</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder=""
                    name="password"
                    value="{{$account['password']}}"
                   
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