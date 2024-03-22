<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ABOUT</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,800;1,600;1,700&display=swap" rel="stylesheet">
</head>
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" /><link rel="stylesheet" href="css/about.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <video autoplay loop muted plays-inline class="background-video">
      <source
        src="img/v2.mp4"
        type="video/mp4" />
    </video>

    <header>
      <a href="#"
        ><img
          src="img/HEO TRANS3.png"
          alt="logo" style="height: 100px; width: 150px;"
          class="logo"
      /></a>

      <input type="checkbox" id="check" />
      <label for="check" class="icons">
        <i class="bx bx-menu" id="menu-icon"></i>
        <i class="bx bx-x" id="close-icon"></i>
      </label>

      <nav class="navbar">
        <a href="/" class="nav-item" style="--i: 0">Welcome</a>
        <a href="{{route('home')}}" class="nav-item" style="--i: 1">Home</a>
        <a href="{{route('career')}}" class="nav-item" style="--i: 2">Career</a>
        <a href="{{route('about')}}" class="nav-item" style="--i: 3">About</a>
        <a href="{{route('admission')}}" class="nav-item" style="--i: 3">Admission</a>
        <a href="{{route('contact')}}" class="nav-item" style="--i: 3">Contact</a>
      </nav>
    </header>

    <section class="content">
      <h1>HEO's World</h1>
      <a href="#" class="btn light"></a>
    </section>
  </body>
<!-- partial -->
  
</body>
</html>
