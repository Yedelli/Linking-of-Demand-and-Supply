<?php
	include('admin_db.php');
		if (!isset($_POST['submit']))
		{
			echo "";
		}
		else
		{
			$file=$_FILES['image']['tmp_name'];
			$image = $_FILES["image"] ["name"];
			$image_name= addslashes($_FILES['image']['name']);
			$size = $_FILES["image"] ["size"];
			$error = $_FILES["image"] ["error"];

			if ($error > 0)
			{
				die("Error uploading file! Code $error.");
			}
			else
			{
				if($size > 10000000) //conditions for the file
				{
					die("Format is not allowed or file size is too big!");
				}
				else
				{
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$image=$_FILES["image"]["name"];
				    $name= $_POST['name'];
					$city= $_POST['city'];
					$contactNo= $_POST['contactNo'];
					$aadharNo= $_POST['aadharNo'];
					$gender= $_POST['gender'];
					$age= $_POST['age'];
					$Languages= $_POST['Languages'];
					//$skill= $_POST['skill'];
					//$experience= $_POST['experience'];

					mysql_query("insert into employee (name,city,contactNo,aadharNo,gender,age,Languages,image) 
						values('$name','$city','$contactNo','$aadharNo','$gender','$age','$Languages','$image')")or die(mysql_error());	
						
				}
					header('location:employee.php');
			}
		}
?>								