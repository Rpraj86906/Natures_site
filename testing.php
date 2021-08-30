<?php

if(isset($_POST['submit']))
{
   
    include "db_conn.php";    
    
	$img_name= $_FILES['my_image'] ['name'];
	$img_type= $_FILES['my_image'] ['type'];
	$img_size= $_FILES['my_image'] ['size'];
	$img_tem_Loc= $_FILES['my_image'] ['tmp_name'];
	$img_store=  "uploads/".$img_name;
	
    if ($error == 0)
 		{
  				if($img_size > 5025000)
 				 {
						$em =" Sorry Your File is Too Large ! ";
 						 header("Location: Index.php");

  				 }else
 				 {
  					  $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
  					  $img_ex_lc = strtolower($img_ex);

   						 $allowed_exs = array("jpg", "jpeg", "png");

   						 if(in_array($img_ex_lc, $allowed_exs))
  							  {
      							$new_img_name = uniqid("IMG",true).'.'.$img_ex_lc;

     							 $img_upload_path = "uploads/".$new_img_name;
     							 move_uploaded_file($img_tmp_Loc, $img_store);



      							$sql = "INSERT INTO  images (image_url) VALUES ('$new_img_name')";

      							mysqli_query($conn, $sql);
     							header("Location: Share.php");



   							 }else
   					 				{
   					 					
      									  $em =" You Cannot Upload this Type !! ";
 										 header("Location: index.php");
   									 }
    
 				 }

		}else
			{
				
				  $em =" Unknown error Occurred ! ";
 					 header("Location: index.php");
			}

}else
{
	echo " no";
}



?>