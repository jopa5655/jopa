 

<!DOCTYPE html>
<html>
<head>
	<title> Jopa Cloud, Home </title>
	<link rel="stylesheet" href="../css/cloudin.css">
</head>
<body>
<a href=""><img src="../images/jopalogo.png" class="logoslika" width="130px"></a>
	<a href="../actions/viewuploads.php" class="gallery"> View pictures</a>
<form method="POST" id="pupload" enctype="multipart/form-data" action="../actions/photos.php">
	<img src="../images/phu.jpg" class="phup" >
	<input type="file" name="photoss">
	<button type="submit" id="upload">Upload photo</button>
	
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>
</html>


