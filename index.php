<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <?php
            include "layouts/navigasi.php"
        ?>
        <div class="container mt-3 content">
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="images/pertamina.jpg" height="250px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Beasiswa Pertamina</h5>
                        <p class="card-text">Beasiswa Pertamina adalah program PT Pertamina (Persero) yang mendukung mahasiswa berprestasi dengan keterbatasan finansial melalui bantuan pendidikan dan pelatihan, untuk menciptakan generasi muda yang kompeten dan berkontribusi pada pembangunan nasional.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="daftar.php" class="btn btn-success text-white">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/kipk.png" height="250px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Beasiswa KIPK</h5>
                        <p class="card-text">Beasiswa KIP-K adalah program pemerintah yang memberikan bantuan biaya pendidikan dan biaya hidup kepada mahasiswa dari keluarga kurang mampu, untuk meningkatkan akses dan kesempatan pendidikan tinggi bagi semua lapisan masyarakat.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="daftar.php" class="btn btn-success text-white">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/bidikmisi.png" height="250px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Beasiswa Bidikmisi</h5>
                        <p class="card-text">Beasiswa Bidikmisi adalah program pemerintah yang memberikan bantuan biaya pendidikan dan biaya hidup kepada mahasiswa berprestasi dari keluarga kurang mampu, untuk memastikan mereka dapat menyelesaikan pendidikan tinggi tanpa kendala finansial.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="daftar.php" class="btn btn-success text-white">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "layouts/footer.php";
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>