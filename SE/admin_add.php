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
					
					$skills = $_POST['Skill'];
					$exp = $_POST['Experience'];
					$x = $_POST['hidden'];
					//echo $x."\n";
					
					$maxuid = "select max(userid) from employee;";
					$res = mysql_query($maxuid);
					$row = mysql_fetch_assoc($res);
					$max =  $row['max(userid)'];
					//echo $max;
					
					for($i = 0; $i <= $x; $i++)
					{
						$i1 = $_POST['Skill'][$i];
						$i2 = $_POST['Experience'][$i];
						
						$final = "Insert into skill (uid,skill,experience) values ($max,'$i1',$i2)";
						$res2 = mysql_query($final);						
						
						
					}
																
				}
					header('location:admin_employee.php');
			}
		}
?>								