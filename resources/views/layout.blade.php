<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Schedule Project</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link  href="{{ asset('css/layout.css')}}" rel="stylesheet" type="text/css" />

  <!-- bootstrap stype -->
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
  h1{
  background-color: #26C6DA;
  font-weight: bold;
  font-size: 48px;
  padding: 30px 30px 30px 20px;
  margin: 0;
  border: 1px solid #26C6DA;
  }
    /* Style the sidebar - fixed full height */

  .sidebar {
    height: 670px;
    width: 200px;
    background-color: #26C6DA;
    display: inline-block;
    vertical-align: top;
    filter: contrast(120%);

  }

  /* Style sidebar links */
  .sidebar a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
  }

  /* Style links on mouse-over */
  .sidebar a:hover {
    background-color: #26C6DA;
    color: #000000;
  }

  .container{
    vertical-align: top;
    display: inline-block;
  }

</style>

</head>

<body>
    <header>
        <h1>Schedule Project</h1>
    </header>
    <div class="sidebar">
        <a href="#">Building</a>
        <a href="#">Professor</a>
        <a href="#">Subject</a>
    </div>
    <div class="container">
         @yield('content')
    </div>

  <script src="{{ asset('js/app.js') }}" type="text/js"></script>

  <!-- bootstrap script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
