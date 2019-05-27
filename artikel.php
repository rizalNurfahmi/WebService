
<!DOCTYPE HTML>  
<html>
<head>
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>  

<?php
// define variables and set to empty values
  require 'vendor/autoload.php';
 $collection = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->tekdev->tekdev;

if (isset($_POST['submit'])){
  $insertOneResult = $collection->insertOne([
    'penyakit' => $_POST['penyakit'],
    'deskripsi' => $_POST['deskripsi'],
    'tips' => $_POST['tips']
]);
}

?>

<h2>Artikel</h2>
<form method="post">  
  Nama Penyakit: <input type="text" name="penyakit">
  <br><br>
  Deskripsi: <textarea name="deskripsi" rows="5" cols="40"></textarea>
  <br><br>
   <br><br>
  Tips Kesehatan: <textarea name="tips" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <br><br> 
</form>

</body>
</html>
