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
      background-color: #5b1f1b; /* maroon earthy tone */
      color: #f3dcd0; /* soft beige text */
      text-align: center;
      padding-top: 80px;
      margin: 0;
      height: 100vh;
    }
    h1 {
      font-size: 2.2em;
      letter-spacing: 1px;
      margin-bottom: 10px;
    }
    p {
      font-size: 1.2em;
      margin: 10px 0;
    }
    img {
      margin-top: 40px;
      border-radius: 12px;
      width: 220px;
      height: 220px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.4);
    }
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      color: #f3dcd0;
      border: 1px solid #f3dcd0;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }
    a:hover {
      background-color: #f3dcd0;
      color: #5b1f1b;
    }
    .lyrics {
      margin-top: 30px;
      font-style: italic;
      color: #f7e8e0;
    }
  </style>
</head>
<body>
  <h1><?= $judul ?> 🌊</h1>
  <p><strong>Lagu:</strong> <?= $lagu ?></p>
  <p><em>Kenapa suka?</em> <?= $alasan ?></p>
  <img src="https://i.scdn.co/image/ab67616d0000b2734b6d715274ab89c5e4a7a5a2" alt="calla cover">
  <div class="lyrics">
    <p>“Hope this moment is not a daydream<br>
    Calla, someone said that your time will be over soon...”</p>
  </div>
  <a href="https://open.spotify.com/track/5LZ4YMkDx5hY7N9QsH4KTd?si=16a034861e154ebd" target="_blank">🎧 Dengarkan di Spotify</a>
</body>
</html>
