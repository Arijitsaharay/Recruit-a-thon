<?php
	
	include_once('connection.php');
   //form filling up data 
	if(isset($_POST['registrationbn'])){
		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $description = $_POST['description'];
		$requirement = $_POST['requirement'];
        $skill = $_POST['skill'];
        $location = $_POST['location'];
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        $apply = $_POST['apply'];
        $img1 = $_FILES['img1']['name'];
        $img2 = $_FILES['img2']['name'];
        $img3 = $_FILES['img3']['name'];

        $temp_name1=$_FILES['img1']['tmp_name'];
        $temp_name2=$_FILES['img2']['tmp_name'];
        $temp_name3=$_FILES['img3']['tmp_name'];
        
        move_uploaded_file($temp_name1, "img/form_img/$img1");
        move_uploaded_file($temp_name2, "img/form_img/$img2");
        move_uploaded_file($temp_name3, "img/form_img/$img3");

		$sql = "INSERT INTO job_table (`user_id`,`name`,`email`,`phone`,`description`,`requirement`,`skill`,`location`,`experience`,`salary`,`apply`,`img1`,`img2`,`img3`) VALUES ('".$user_id."','".$name."','".$email."','".$phone."','".$description."','".$requirement."','".$skill."','".$location."','".$experience."','".$salary."','".$apply."','".$img1."','".$img2."','".$img3."')";
		/*$r = "INSERT INTO images (`unique_id`,`image`) VALUES ('".$unique_id."','".$image."')";
*/
		if($conn->query($sql)){
			header('Location:dashboard.php');
			exit();
		}else{
			header('Location:form1.php');
			exit();
		}	
	}
    
  //STUDENT RESUME
    if(isset($_POST['studbn'])){
		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $profession = $_POST['profession'];
        $objective = $_POST['objective'];
        $education = $_POST['education'];
        $experience = $_POST['experience'];
        $skill = $_POST['skill'];
        $language = $_POST['language'];
        $links = $_POST['links'];
        $img1 = $_FILES['img1']['name'];
        $temp_name1=$_FILES['img1']['tmp_name'];
        
        move_uploaded_file($temp_name1, "img/form_img/$img1");

		$sql = "INSERT INTO stud_table (`user_id`,`name`,`address`,`email`,`phone`,`profession`,`objective`,`education`,`experience`,`skill`,`language`,`links`,`img1`) VALUES ('".$user_id."','".$name."','".$address."','".$email."','".$phone."','".$profession."','".$objective."','".$education."','".$experience."','".$skill."','".$language."','".$links."','".$img1."')";
if($conn->query($sql)){
			header('Location:dashboard.php');
			exit();
		}else{
			header('Location:form_stud.php');
			exit();
		}	
	}


   //STUDENT RESUME
    if(isset($_POST['submitbn'])){
		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $description = $_POST['description'];
		$requirement = $_POST['requirement'];
        $skill = $_POST['skill'];
        $location = $_POST['location'];
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        $apply = $_POST['apply'];
        $img1 = $_FILES['img1']['name'];
        $img2 = $_FILES['img2']['name'];
        $img3 = $_FILES['img3']['name'];

        $temp_name1=$_FILES['img1']['tmp_name'];
        $temp_name2=$_FILES['img2']['tmp_name'];
        $temp_name3=$_FILES['img3']['tmp_name'];
        
        move_uploaded_file($temp_name1, "img/form_img/$img1");
        move_uploaded_file($temp_name2, "img/form_img/$img2");
        move_uploaded_file($temp_name3, "img/form_img/$img3");

		$sql = "INSERT INTO premium_table (`user_id`,`name`,`email`,`phone`,`description`,`requirement`,`skill`,`location`,`experience`,`salary`,`apply`,`img1`,`img2`,`img3`) VALUES ('".$user_id."','".$name."','".$email."','".$phone."','".$description."','".$requirement."','".$skill."','".$location."','".$experience."','".$salary."','".$apply."','".$img1."','".$img2."','".$img3."')";

		if($conn->query($sql)){
			header('Location:dashboard.php');
			exit();
		}else{
			header('Location:form_premium.php');
			exit();
		}	
	}

    // for user registration
    if(isset($_POST['register'])){
		$username = $_POST['u_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$radio = $_POST['radio'];


		$sql = "INSERT INTO user (`u_name`,`password`,`name`,`phone`,`email`,`radio`) VALUES ('".$username."','".$password."','".$name."','".$phone."','".$email."','".$radio."')";

		if($conn->query($sql)){
			echo "<script>alert('Registered Successfully!!')</script>";
			echo "<script>location.href='dashboard.php'</script>";
			
		}else{
			echo "<script>alert('Registration Error !!')</script>";
			echo "<script>location.href='register.php'</script>";
			
			
		
		}	
	}
    
    if(isset($_POST['updatebn'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $description = $_POST['description'];
		$requirement = $_POST['requirement'];
        $skill = $_POST['skill'];
        $location = $_POST['location'];
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        $apply = $_POST['apply'];
        

        

		$sql = "UPDATE job_table SET user_id='".$user_id."', name='".$name."', email='".$email."', phone='".$phone."',description='".$description."', requirement='".$requirement."', skill='".$skill."', location='".$location."',experience='".$experience."',salary='".$salary."',apply='".$apply."'WHERE job_id='".$job_id."'";
	
		if($conn->query($sql)){
			header("Location:details.php?job_id='$job_id'");
			exit();
		}else{
			header('Location:index.php');
			exit();
		}	
	}
	
	if(isset($_GET['mode']) && $_GET['mode']=="delete"){

		$job_id = $_GET['job_id'];
	
		$sql = "DELETE FROM job_table WHERE job_id='".$job_id."'";
	
		if($conn->query($sql)){
			header('Location:index.php');
			exit();
		}
	}

	if(isset($_GET['mode']) && $_GET['mode']=="delete_premium"){

		$job_id = $_GET['job_id'];
	
		$sql = "DELETE FROM premium_table WHERE job_id='".$job_id."'";
	
		if($conn->query($sql)){
			header('Location:index.php');
			exit();
		}
	}



	?>

