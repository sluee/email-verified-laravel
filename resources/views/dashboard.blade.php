@extends('base')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>

          <li class="nav-item ">
            {{-- <a class="nav-link" href="/logout" method="POST">logout</a> --}}
            <a class="nav-link"  href="{{ url('/logout') }}"> logout </a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
s
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="link-secondary me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>



      </div>

    </div>

  </nav>

  <div class="container">

    <h1 class="text-center mt-2">Hello, {{$currentUser->name}}</h1>

    <h2>All Registered Users</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($registeredUsers as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                </tr>
          @endforeach
        </tbody>
      </table>

</div>
@endsection
