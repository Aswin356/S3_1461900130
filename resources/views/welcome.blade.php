<!doctype html>
<html lang="en">
  <head>
    <title>1461900130</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">jenis buku</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($rakbukus as $rakbuku)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{$rakbuku->jenis}}</td>
            <td>
                <a href="{{url('edit',$rakbuku->id)}}"><span class="badge bg-warning text-light">Edit</span></a>
                <a href="{{url('delete',$rakbuku->id)}}"><span class="badge bg-danger  text-light">Delete</span></a>
                <a href="{{url('/create')}}"><span class="badge bg-primary  text-light">create</span></a>
            </td>
        </tr>
        @endforeach
  </tbody>
</table>
   
  </body>
</html>