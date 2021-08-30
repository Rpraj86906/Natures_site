
<!DOCTYPE html>
<html>
<head>
	
	<title>
		Share
	</title>
	<style type="text/css">
 
input[type=text], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical 
}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #FEE715FF;
  padding: 20px;
}

footer {
  text-align: center;
  padding: 2px;
  background-color: #101820FF;
  color: white;
}





</style>
</head>
<body>
	<p> <center><h2>  Uploading The GEMS  </center>


<marquee width="100%" direction="right" height="100px">
  <b> <h2>"While everyone are busy in uploading their #10yearschallenge , I'm here dreaming of my next 10 years with you...!"
</h2></b></marquee>


 <center> <img src="img\imgix-pgdaAwf6IJg-unsplash.jpg" alt="None " height='30%' width='30%' />
</center>
<br>
<br>

<?php if (isset($_GET['error'])): ?>
    <p> <?php echo $_GET['error']; ?> </p>

  <?php endif?> 





<div class="container">
	<form action="testing.php" method="post" enctype="multipart/form-data">
		<center><label for="fname"><b> Select File  </b></label>
		<input type ="file" name="my_image" value=""/>
		</center>
		<br>


<center>
		<label for="fname"><b> Upload here </b></label>
		<input type ="submit" name="submit" value="Upload"/>
</center>

</form>
</div>

</body>
<br>
<br>
<br>


  <footer>
  <p>@2021 NatureWorld. All Rights Reseved <br> <center>By R.Y.R </center><br></p>
 
</footer>
</html>




