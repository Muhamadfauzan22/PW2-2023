<?php
/* 
Task 1 
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan manfaatnya
*/

$fruits = [
  [
    'name' => 'Mangga',
    'warna' => 'Kuning',
    'stonks' => 15,
    'price' => 30000,
    'Manfaatnya' => 'Mengurangi dehidrasi dan memperlancar sirkulasi darah karena mengandung vitamin A,E, dan C',
  ],
  [
    'name' => 'Jeruk',
    'warna' => 'Oranye',
    'stonks' => 30,
    'price' => 15000,
    'Manfaatnya' => 'Sangat baik bagi tubuh dan dapat meningkatkan kebugaran karena mengandung vitamin A,B1,B2 dan C',
  ],
  [
    'name' => 'Strawberry',
    'warna' => 'merah',
    'stonks' => 20,
    'price' => 10000,
    'Manfaatnya' => 'Mengandung provitamin A, vitamin B1, B dan C,sebagai antioksigen untuk melawan zat radikal bebas',
  ],
  [
    'name' => 'Pepaya',
    'warna' => 'Oranye',
    'stonks' => 20,
    'price' => 8000,
    'Manfaatnya' => 'Menguatkan sistem imun tubuh, mencegah infeksi, pilek, flu dan meredamkan deman karena mengandung vitamin C dan A',
  ],
  [
    'name' => 'Pisang',
    'warna' => 'kuning',
    'stonks' => 40,
    'price' => 12000,
    'Manfaatnya' => 'Dapat menurunkan resiko kanker, asma, menurunkan tekanan darah, jantung dan peredaran darah',
  ],
  [
    'name' => 'Alpukat',
    'warna' => 'hijau muda',
    'stonks' => 35,
    'price' => 15000,
    'Manfaatnya' => 'Mengandung lemak sehat oleat(omega-9) vitamin A, B, B6, C, E, zat besi, kalium, serat, dan asam solfat',
  ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array data buah</title>
  <style></style>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Manfaat</th>
        </tr>
      </thead>

      <tbody>
        <?php
        /* 
        Task 2
        */


        $counter = 0;
        foreach ($fruits as $fruit) {
          echo "<tr>";
          $counter += 1;
          echo "<td>" . $counter . "</td>";
          foreach ($fruit as $detail) {
            echo "<td>" . $detail . "</td>";
          };
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>