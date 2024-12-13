<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./assets/icon/logo.jpeg" rel="icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONCA</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href= "./style/mystyle.css">
     <!-- icon  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="background-color: #96D2D9;">
    <h1 class="h1"style="font-size: 60px;" align="center">MONITORING CUACA</h1>

<?php
        include "koneksi.php";

        $query = mysqli_query($koneksi, "SELECT * FROM  tbmonitor ORDER BY id DESC LIMIT 1");
        while ($data = mysqli_fetch_array($query)){
?>
    
    <div>
        <span style="font-size: 25px; font-weight: bold;">Waktu Terakhir Update:</span> 
        <span style="font-size: 40px;"><?php echo $data['waktu']; ?></span>
        <br>
        <span style="font-size: 25px; font-weight: bold;">Tanggal:</span> 
        <span style="font-size: 40px; "><?php echo $data['tanggal']; ?></span>
    </div>    
    <div class="row row-cols-md-3 grid gap-6">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Suhu</h5>
        <div class="nilai">
        <?php echo $data ['suhu'] ?><font size ="7">ºC</font>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">Kelembaban</h5>
        <div class="nilai">
            <?php echo $data ['kelembaban'] ?><font size ="7">%</font>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">tekanan udara</h5>
        <div class="nilai">
            <?php echo $data ['tekanan_udara'] ?><font size ="7">hPa</font>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">sea level</h5>
        <div class="nilai">
            <?php echo $data ['sea_level'] ?><font size ="7"></font>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">altitude</h5>
        <div class="nilai">
            <?php echo $data ['altitude'] ?><font size ="7"></font>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">kualitas udara</h5>
        <div class="nilai">
            <?php echo $data ['kualitas_udara'] ?><font size ="7"></font>
        </div>
      </div>
    </div>
  </div>
</div>


<h1 class="text-center">Parameter Lingkungan</h1>
<!-- Card 1: Parameter Suhu -->
<div class="card-pm text-center">
        <h2>Parameter Suhu (°C)</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang Suhu (°C)</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>≤ 0</td>
                    <td>Sangat Dingin</td>
                    <td>Potensi pembekuan</td>
                </tr>
                <tr>
                    <td>1 - 15</td>
                    <td>Dingin</td>
                    <td>Nyaman untuk sebagian orang</td>
                </tr>
                <tr>
                    <td>16 - 30</td>
                    <td>Normal</td>
                    <td>Suhu ideal</td>
                </tr>
                <tr>
                    <td>31 - 40</td>
                    <td>Hangat</td>
                    <td>Agak panas</td>
                </tr>
                <tr>
                    <td>> 40</td>
                    <td>Panas</td>
                    <td>Suhu ekstrem</td>
                </tr>
                <tr>
                    <td>> 90</td>
                    <td>Sangat Panas</td>
                    <td>Berbahaya</td>
                </tr>
            </tbody>
        </table>
</div>

    <!-- Card 2: Parameter Kelembaban -->
<div class="card-pm text-center">
        <h2 class>Parameter Kelembaban (%)</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang Kelembaban (%)</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>≤ 30</td>
                    <td>Kering</td>
                    <td>Udara kering, rentan dehidrasi</td>
                </tr>
                <tr>
                    <td>31 - 60</td>
                    <td>Normal</td>
                    <td>Kelembaban ideal</td>
                </tr>
                <tr>
                    <td>61 - 80</td>
                    <td>Lembap</td>
                    <td>Mulai terasa lengket</td>
                </tr>
                <tr>
                    <td>> 80</td>
                    <td>Sangat Lembap</td>
                    <td>Udara pengap</td>
                </tr>
            </tbody>
        </table>
</div>

    <!-- Card 3: Parameter Tekanan Udara -->
<div class="card-pm text-center">
        <h2>Parameter Tekanan Udara (hPa)</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang Tekanan (hPa)</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>< 950</td>
                    <td>Rendah</td>
                    <td>Potensi badai atau cuaca buruk</td>
                </tr>
                <tr>
                    <td>950 - 1015</td>
                    <td>Normal</td>
                    <td>Tekanan udara biasa</td>
                </tr>
                <tr>
                    <td>> 1015</td>
                    <td>Tinggi</td>
                    <td>Potensi cuaca cerah</td>
                </tr>
            </tbody>
        </table>
</div>
<?php } ?>

<!-- Card 4: Parameter Sea level -->
<div class="card-pm text-center">
    <h2>Parameter Sea Level (hPa)</h2>
    <table>
        <thead>
            <tr>
                <th>Rentang Tekanan (hPa)</th>
                <th>Kategori</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>< 300</td>
                <td>Zona Ekstrem</td>
                <td>Ketinggian lebih dari 9.000 m</td>
            </tr>
            <tr>
                <td>300 - 499</td>
                <td>Zona Sangat Tinggi</td>
                <td>Ketinggian sekitar 5.000 - 9.000 m</td>
            </tr>
            <tr>
                <td>500 - 699</td>
                <td>Zona Tinggi</td>
                <td>Ketinggian sekitar 3.000 - 5.000 m</td>
            </tr>
            <tr>
                <td>700 - 899</td>
                <td>Zona Sedang</td>
                <td>Ketinggian sekitar 1.000 - 3.000 m</td>
            </tr>
            <tr>
                <td>900 - 1013</td>
                <td>Zona Rendah</td>
                <td>Ketinggian sekitar 0 - 1.000 m</td>
            </tr>
            <tr>
                <td>> 1013</td>
                <td>Permukaan Laut</td>
                <td>Tekanan standar atmosfer di ketinggian 0 m</td>
            </tr>
        </tbody>
    </table>
</div>


<!-- card 5: Paramter altitude -->
<div class="card-pm text-center">
    <h2>Parameter Altitude (Meter)</h2>
    <table>
        <thead>
            <tr>
                <th>Rentang Ketinggian (Meter)</th>
                <th>Kategori</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0 - 300</td>
                <td>Rendah</td>
                <td>Dataran rendah, nyaman</td>
            </tr>
            <tr>
                <td>301 - 1500</td>
                <td>Moderate</td>
                <td>Ketinggian menengah, mulai sejuk</td>
            </tr>
            <tr>
                <td>1501 - 3000</td>
                <td>Tinggi</td>
                <td>Udara mulai tipis</td>
            </tr>
            <tr>
                <td>3001 - 5000</td>
                <td>Sangat Tinggi</td>
                <td>Risiko hipoksia (kekurangan oksigen)</td>
            </tr>
            <tr>
                <td>> 5000</td>
                <td>Ekstrem</td>
                <td>Kondisi sulit untuk bertahan hidup</td>
            </tr>
        </tbody>
    </table>
</div>


<div class="container">
      <p>Kembali ke Halaman <a href="./index.html"> Sebelumnya</a></p>
</div>
</body>
</html>