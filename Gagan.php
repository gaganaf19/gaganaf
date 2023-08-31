<?php
$npm      = $_POST["npm"];
$nama     = $_POST["nama"];
$alamat   = $_POST["alamat"];
$jk       = $_POST["jk"];
$jurusan  = $_POST["jurusan"];
$angkatan = $_POST["angkatan"];

echo " <table> 
              <tr> 
                     <td>Npm</td>
                     <td>:</td> 
                     <td>$npm</td></br> 
              </tr>

              <tr> 
                     <td>Nama</td>
                     <td>:</td> 
                     <td>$nama</td></br> 
              </tr>

              <tr> 
                     <td>Alamat</td>
                     <td>:</td> 
                     <td>$alamat</td></br> 
              </tr>

              <tr> 
                     <td>Jenis Kelamin</td>
                     <td>:</td> 
                     <td>$jk</td></br> 
              </tr>

              <tr> 
                     <td>Jurusan</td>
                     <td>:</td> 
                     <td>$jurusan</td></br> 
              </tr>

              <tr> 
                     <td>Angkatan</td>
                     <td>:</td> 
                     <td>$angkatan</td></br> 
              </tr>
              
       </table>


       <style> 
       table {
              font-size : 20px;
              max-width: 200px;
              margin: 0 auto;
              padding: 100px;
              padding-top: 30px;
              padding-bottom: 50px;
              border: 6px solid cyan;
              border-radius: 10px;
              background-color: palegreen;
              font-family:  'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       </style>"
       ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Hasil Form</title>
</head>
<body>
       <style>
              body {
                     background-color: slategrey;
              }
       </style>
</body>
</html>

