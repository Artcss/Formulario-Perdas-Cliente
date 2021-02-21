<?php include_once"conexão.php";?>
<html>
<body>
<?php 

$materialarray = $_POST["material"];
$codigoarray = $_POST["codigo"];
$quantidadearray= $_POST["quantidade"];

for ($i = 0; $i < count($codigoarray); $i++) {
   $material   = $materialarray[$i];
   $codigo     = $codigoarray[$i];
   $quantidade = $quantidadearray[$i];

   if ($quantidade > 0) {
       $sql = "INSERT INTO tblavitaperdas (material,codigo,quantidade) VALUES 
           ('$material','$codigo','$quantidade')";
 
   
   if (mysqli_query($conn, $sql)) {
	   
	echo "<script>alert('Salvei seus dados !'); window.location = '../inicioperdas.php';</script>";
	
	
	}else{
	 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
	}
  
	
	}
}

mysqli_close($conn);
?>
</body>
</html>