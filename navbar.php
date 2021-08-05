<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lembaga Sertifikasi Profesi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row bg-primary text-center">
      <div class="mt-2 mb-2">
        <a href="#"><i class="fab fa-youtube text-light"></i></a>
        <a href="#"><i class="fab fa-twitter text-light"></i></a>
        <a href="#"><i class="fab fa-facebook text-light"> </i></a>
        <a href="#"><i class="fab fa-instagram text-light"></i></a>
        <a href="#"><i class="blok text-light">BNSP-LSP-1565-ID</i></a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <img src="assets/img/icon.png" alt="logo" style="width: 3rem">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item <?php if($page == "Home") echo "class='active'";?>">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item <?php if($page == "Profil") echo "class='active'";?>">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <li class="nav-item <?php if($page == "Galeri") echo "class='active'";?>">
            <a class="nav-link" href="galleries.php">Galeri</a>
          </li>
          <li class="nav-item <?php if($page == "jadwal") echo "class='active'";?>">
            <a class="nav-link" href="jadwal.php">Jadwal</a>
          </li>
          <li class="nav-item <?php if($page == "Visi") echo "class='active'";?>">
            <a class="nav-link" href="visi.php">Visi & Misi</a>
          </li>
        </ul>
        <form class="d-flex">
          <a href="login.html" class="btn btn-outline-success" type="submit">Login</a>
        </form>
      </div>
    </div>
  </nav>

  
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>