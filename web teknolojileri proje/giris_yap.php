<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="proje.css">
    <title>ana_sayfa</title>
  </head>
  <body>
      
  <!----------menulerimin basladığı konum !!!!!!! ----------->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Oğuz Alp Çepni</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="indeks.htm">Hakkımda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="ozgecmisim.htm">Ozgecmisim</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="sehrim.html">Sehirim</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mirasımız.html">mirasımız</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="ilgialanlarim.html">ilgi_alanlarım</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İletisim</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="giris_yap.php">Giris_yap</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<br><br><br>

           



<!----------menulerin bittiği konum !!!!!!! ----------->

<main>
  <div class ="container">
      <form action="giris_yap_kontrol.php" method="post">
        <div class="mb-3">
          <label for="Email1" class="form-label">Email addresinizi giriniz</label>
          <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">email adresinizi kimseyle paylaşmayacağız.</div>
        </div>
        <div class="mb-3">
          <label for="Password1" class="form-label">şifrenizi giriniz</label>
          <input type="password" class="form-control" id="Password1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">giriş</button>
      </form>
  </div>
</main>

























    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>