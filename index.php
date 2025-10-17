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
      background: linear-gradient(180deg, #f5f5f5 0%, #e8ecf2 100%);
      color: #2d2d2d;
      text-align: center;
      padding-top: 80px;
      margin: 0;
      height: 100vh;
    }
    h1 {
      font-size: 2.2em;
      letter-spacing: 1px;
      margin-bottom: 10px;
      color: #3b3b3b;
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
    }
    .lyrics {
      margin-top: 25px;
      font-style: italic;
      color: #4f4f4f;
    }
    a {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 22px;
      color: #ffffff;
      background-color: #44667a;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }
    a:hover {
      background-color: #324c5b;
    }
    footer {
      position: absolute;
      bottom: 20px;
      width: 100%;
      font-size: 0.9em;
      color: #888;
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
</body>
</html>
