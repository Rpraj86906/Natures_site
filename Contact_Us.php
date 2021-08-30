

<!DOCTYPE html>
<html>
<head>
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

 <p> <center><h2> Hope You See You Again !! </center>

  <marquee width="100%" direction="right" height="100px">
  <b> <h2>Please Get In Touch and Our Expert Support Team Answers to Your All Questions !!!
</h2></b></marquee>

<div class="container">
  <form action="userinfo.php" method="post">

    <label for="fname"><b>First Name</b></label>
    <input type="text" id="fname" name="user" placeholder="Your name">

    <label for="lname"><b>Email ID </b></label>
    <input type="text" id="lname" name="email" placeholder="Your Email id ">

    <label for="city"><b>City</b> </label>
    <input type="text" id="lname" name="city" placeholder="Your City  ">

   

    <label for="subject"><b>Subject</b></label>
    <textarea id="subject" name="subject" placeholder="Write something here..." style="height:170px"></textarea>

    <input type="submit" value="Submit">

  </form>

</div>

<br>


  <footer>
  <p>@2021 NatureWorld. All Rights Reseved <br> <center>By R.Y.R </center><br></p>
 
</footer>

</html