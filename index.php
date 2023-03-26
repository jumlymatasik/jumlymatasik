<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=25ec3e9&s='.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container-1 bg-dark">
<div class="container">
<div class="row mt-3 text-center">
  <div class="col text-white">
<h1>MOVIE</h1>
</div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="8.jpeg" class="card-img-top" height="400px">
      <div class="card-body text-center bg-primary" style="height: 200px;" >
        <h5 class="card-title">DORAEMON</h5>
        <p class="card-text">Doraemon (bahasa Jepang: ドラえもん) adalah karakter fiksi dalam serial manga dan anime Jepang.</p>
        <a href="http://" class="btn bg-dark text-white">WATCH</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="7.jpg" class="card-img-top" height="400px">
      <div class="card-body text-center  bg-primary" style="height: 200px;">
        <h5 class="card-title">Goku</h5>
        <p class="card-text">Son Goku adalah karakter fiksi dan protagonis utama dari serial manga Dragon Ball yang dibuat oleh Akira Toriyama.</p>
        <a href="http://" class="btn bg-dark text-white">WATCH</a>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpg" class="card-img-top" height="400px">
      <div class="card-body text-center  bg-primary" style="height: 200px;">
        <h5 class="card-title">Avengers</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="http://" class="btn bg-dark text-white">WATCH</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body text-center  bg-primary" style="height: 200px;">
        <h5 class="card-title">Kuntilanak 2</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="http://" class="btn bg-dark text-white">WATCH</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body text-center  bg-primary" style="height: 200px;">
        <h5 class="card-title">Boboboiy</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="http://" class="btn bg-dark text-white">WATCH</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="400px">
      <div class="card-body text-center  bg-primary" style="height: 200px;">
        <h5 class="card-title">Sepongebob</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="http://" class="btn bg-dark text-white">WATCH</a>
      </div>
    </div>
  </div>
  
    </div>
    </div>
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
