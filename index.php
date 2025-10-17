
<?php
$judul = "Lagu Favoritku";
$lagu = "calla - wave to earth";
$alasan = "karena lagu ini berasa kayak pelukan hangat di sore yang sunyi, pelan tapi dalam.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $judul ?></title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(180deg, #d0ebe3 0%, #b3d7e5 100%);
      color: #1f3a3d;
      text-align: center;
      padding-top: 80px;
      margin: 0;
      height: 100vh;
    }
    h1 {
      font-size: 2.2em;
      color: #174f4a;
      margin-bottom: 10px;
    }
    p {
      font-size: 1.1em;
      margin: 10px 0;
    }
    img {
      margin-top: 40px;
      border-radius: 12px;
      width: 240px;
      height: 240px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
      border: 2px solid rgba(255,255,255,0.5);
    }
    .lyrics {
      margin-top: 25px;
      font-style: italic;
      color: #2f5550;
    }
    a {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 22px;
      color: #ffffff;
      background-color: #3b7069;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }
    a:hover {
      background-color: #2e5b54;
    }
    footer {
      position: absolute;
      bottom: 20px;
      width: 100%;
      font-size: 0.9em;
      color: #4f6f6b;
    }
  </style>
</head>
<body>
  <h1><?= $judul ?> 🌊</h1>
  <p><strong>Lagu:</strong> <?= $lagu ?></p>
  <p><em>Kenapa suka?</em> <?= $alasan ?></p>
  <img src="https://share.google/images/fql099QI0kfNjqa69" alt="calla cover">
  <div class="lyrics">
    <p>“Calla, someone said that your time will be over soon.”<br>
    But, calla ... you can always grow back</p>
  </div>
  <a href="https://open.spotify.com/track/5LZ4YMkDx5hY7N9QsH4KTd?si=16a034861e154ebd" target="_blank">🎧 Dengarkan di Spotify</a>
   <footer>Inspired by "calla" — wave to earth</footer>
</body>
</html>
