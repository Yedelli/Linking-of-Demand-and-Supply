					
<?php
	include('db.php');
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
					$userid= $_POST['userid'];
				    $name= $_POST['name'];
					$city= $_POST['city'];
					$contactNo= $_POST['contactNo'];
					$aadharNo= $_POST['aadharNo'];
					$gender= $_POST['gender'];
					$age= $_POST['age'];
					$Languages= $_POST['Languages'];
					//$skill= $_POST['skill'];
					//$experience= $_POST['experience'];

					mysql_query("update employee SET name ='$name',city='$city',contactNo='$contactNo',
					aadharNo='$aadharNo',gender='$gender',age='$age',Languages='$Languages', 
					image='$image' WHERE userid = '$userid'") or die(mysql_error());	
						
				}
					header('location:employee.php');
			}
		}
?>								