<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600&display=swap" rel="stylesheet">

    <!-- CSS-->
    <link rel="stylesheet" href="css/registration_form.css">

    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="css/all.css">

    <title>Pendaftaran</title>
</head>
<body>
<!-- header -->
<div class="header">
  <img class="bg1" src="asset/kontak/header.jpg">
  <div class="isi_header">
    <div class="row">
      <div class="col">
        <img class="logo" src="asset/home/nav.png">
      </div>

      <div class="col col-4">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="menu collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item pl-2">
                  <a class="nav-link" href="index.html">Beranda</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="kontak.html">Kontak</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="galeri.html">Galeri</a>
                </li>
                <li class="nav-item dropdown pl-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tentang
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="kata_pengantar.html">Kata Pengantar</a>
                    <a class="dropdown-item" href="visi_misi.html">Visi Misi</a>
                    <a class="dropdown-item" href="nilai.html">Nilai Inti Perusahaan</a>
                    <a class="dropdown-item" href="sekilas.html">Sekilas Tentang Pelaut</a>
                  </div>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="berita.html">Berita</a>
                </li>
                <li class="nav-item pl-2 active">
                  <a class="nav-link" href="karir.html">Karir</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- akhir header -->

<!-- first row -->
<p class="line">Home > Karir > Pendaftaran</p>
<!-- akhir first row -->

<div>
  <?php 
    if (isset($_POST['create'])) {
      $nama     = $_POST['nama' ];
      $ktp      = $_POST['ktp'];
      $agama     = $_POST['agama'];
      $kebangsaan     = $_POST['kebangsaan'];
      $status     = $_POST['status'];
      $tinggi     = $_POST['tinggi'];
      $berat     = $_POST['berat'];
      $warna     = $_POST['warna'];
      $alamat     = $_POST['alamat'];
      $pendidikan     = $_POST['pendidikan'];
      $telpon     = $_POST['telpon'];
      $hp     = $_POST['hp'];
      $ayah     = $_POST['ayah'];
      $ibu     = $_POST['ibu'];
      $telponf     = $_POST['telponf'];
      $hpf     = $_POST['hpf'];
    }
  ?>
</div>

<form action="registration_form.php" method="post">
  <fieldset>
    <div class="container">
    <legend class="font-weight-bold mt-3">Pendaftaran Calon ABK / Crew</legend>

    <div class="form-group">
      <label for="InputNama">Nama*</label>
      <input type="nama" name="nama" class="form-control" id="InputNama" aria-describedby="namaHelp" placeholder="John Doe">
      <small id="namaHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="InputKtp">Nomor KTP/SIM/PASPOR*</label>
      <input type="ktp" class="form-control" id="InputKtp" aria-describedby="ktpHelp" placeholder="Nomor KTP/SIM/Paspor">
      <small id="ktpHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="InputAgama">Agama*</label>
      <input type="agama" class="form-control" id="InputAgama" aria-describedby="agamaHelp" placeholder="Islam">
    </div>

      <div class="row">
        <div class="col-3">
          <label>Kebangsaan*</label>
        </div>
        <div class="col-2 form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="kebangsaan" id="wni" value="wni">
            WNI
          </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="kebangsaan" id="wna" value="wna">
            WNA
        </label>
        </div>
      </div>

      <div class="row pt-2">
        <div class="col-3">
          <label>Status Pernikahan*</label>
        </div>
        <div class="col-2 form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="nikah" value="nikah" checked="">
            Nikah
          </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="belum" value="belum">
            Belum Menikah
        </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="duda" value="duda">
            Duda
        </label>
        </div>
      </div>

    <div class="row pt-2 form-group">
      <div class="col">
        <label for="InputTinggi">Tinggi</label>
        <input type="tinggi" class="form-control" id="InputTinggi" aria-describedby="tinggiHelp" placeholder="170 Cm">
      </div>
      <div class="col">
        <label for="InputBerat">Berat</label>
        <input type="berat" class="form-control" id="InputBerat" aria-describedby="beratHelp" placeholder="60 Kg">
      </div>
    </div>

      <div class="row pt-2">
        <div class="col-3">
          <label>Warna Kulit*</label>
        </div>
        <div class="col-2 form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="kulit" id="putih" value="putih">
            Putih
          </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="kulit" id="kuning" value="kuning">
            Kuning Langsat
        </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="kulit" id="sawo" value="sawo">
            Sawo
        </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="kulit" id="hitam" value="hitam">
            Hitam
        </label>
        </div>
      </div>

    <div class="form-group pt-2">
      <label for="InputAlamat">Alamat*</label>
      <input type="alamat" class="form-control" id="InputAlamat" aria-describedby="alamatHelp" placeholder="Alamat sesuai tempat tinggal">
    </div>

      <div class="row pt-2">
        <div class="col-3">
          <label>Pendidikan Terakhir*</label>
        </div>
        <div class="col-2 form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pendidikan" id="smp" value="smp">
            SMP
          </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pendidikan" id="smk" value="smk">
            SMK
        </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pendidikan" id="diploma" value="diploma">
            Diploma
        </label>
        </div>
        <div class="col-2 form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pendidikan" id="ijazah" value="ijazah">
            Ijazah Paket
        </label>
        </div>
      </div>

    <div class="row pt-2 form-group">
      <div class="col">
        <label for="InputTelpon">Nomor Telp</label>
        <input type="telpon" class="form-control" id="InputTelpon" aria-describedby="telponHelp" placeholder="Nomor Telpon">
      </div>
      <div class="col">
        <label for="InputHp">Nomor HP</label>
        <input type="hp" class="form-control" id="InputHp" aria-describedby="hpHelp" placeholder="Nomor Handphone">
      </div>
    </div>

    <div class="row pt-2 form-group">
      <div class="col">
        <label for="InputAyah">Nama Ayah</label>
        <input type="ayah" class="form-control" id="InputAyah" aria-describedby="ayahHelp" placeholder="David">
      </div>
      <div class="col">
        <label for="InputIbu">Nama Ibu</label>
        <input type="ibu" class="form-control" id="InputIbu" aria-describedby="ibuHelp" placeholder="Seli">
      </div>
    </div>

    <div class="row pt-2 form-group">
      <div class="col">
        <label for="InputTelponf">Nomor Telpon Keluarga</label>
        <input type="telponf" class="form-control" id="InputTelponf" aria-describedby="telponfHelp" placeholder="Nomor Telpon Keluarga">
      </div>
      <div class="col">
        <label for="InputHpf">Nomor Handphone Keluarga</label>
        <input type="hpf" class="form-control" id="InputHpf" aria-describedby="hpfHelp" placeholder="Nomor Handphone Keluarga">
      </div>
    </div>

    <h3 class="font-weight-bold mt-3">Lampiran</h3>
    <div class="row mt-3">
      <div class="col form-group">
        <label for="exampleInputFile">E-KTP</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <div class="col form-group">
        <label for="exampleInputFile">KARTU KELUARGA</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <div class="col form-group">
        <label for="exampleInputFile">AKTA KELAHIRAN</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label for="exampleInputFile">IJAZAH -SMP-SMK-Diploma</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <div class="col form-group">
        <label for="exampleInputFile">SERTIFIKAT BST</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <div class="col form-group">
        <label for="exampleInputFile">BUKU LAUT</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label for="exampleInputFile">PASSPORT</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <div class="col form-group">
        <label for="exampleInputFile">SKCK</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <div class="col form-group">
        <label for="exampleInputFile">MEDICAL CHECK UP (MCU)</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label for="exampleInputFile">SERTIFIKAT TAMBAHAN</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>
    </div>

    
    <button type="submit" name="create" class="btn mt-3 btn-primary">Submit</button>
  </div>
  </fieldset>
</form>   

<!-- footer -->
<img class="bg4" src="asset/home/footer.jpg">
<nav class="navbar navbar-expand-lg navbar-dark font-weight-bold">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="nav_footer navbar-nav">
                <li class="nav-item pl-2">
                  <a class="nav-link" href="index.html">Beranda</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="kontak.html">Kontak</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="galeri.html">Galeri</a>
                </li>
                <li class="nav-item dropdown pl-2">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tentang
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Kata Pengantar</a>
                    <a class="dropdown-item" href="#">Visi Misi</a>
                    <a class="dropdown-item" href="#">Nilai Inti Perusahaan</a>
                    <a class="dropdown-item" href="#">Sekilas Tentang ABK/Crew</a>
                  </div>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item active pl-2">
                  <a class="nav-link" href="#">Karir</a>
                </li>
              </ul>
            </div>
        </nav>

<footer> 
  <img class="logo_footer" src="asset/logo/logo_footer.png">
    <p class="pt-2">© Copyright 2019 - Lima Samudera Gemilang. All Right Reserved.</p>
</footer>
<!-- akhir footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
</body>
</html>