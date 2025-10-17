<?php
$judul = "Lagu Favoritku";
$lagu = "bad - wave to earth";
$alasan = "karena melodinya adem dan bikin tenang, pas banget buat malam yang sunyi.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $judul ?> (Versi 2)</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(180deg, #d9f7f5 0%, #a9e2df 100%);
      color: #1a1a1a;
      text-align: center;
      padding-top: 100px;
    }
    h1 { color: #0b7a75; }
    p { font-size: 18px; }
    .note { color: #444; margin-top: 20px; font-style: italic; }
  </style>
</head>
<body>
  <h1><?= $judul ?> 🌿</h1>
  <p><strong>Lagu:</strong> <?= $lagu ?></p>
  <p><em>Kenapa suka?</em> <?= $alasan ?></p>
  <p class="note">🎵 “I feel so bad, but it’s okay...”</p>
</body>
</html>
