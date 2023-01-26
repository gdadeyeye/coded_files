<?php
session_start();
	 
//$errors = array(); 
  // Create database connection
  $errors = array(); 
  $db = mysqli_connect("localhost", "root", "", "image_upload");

      
   
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])){
  	// Get image name
  	$image = $_FILES['imag']['name'];
	  
  	// Get text
  $yourname = mysqli_real_escape_string($db, $_POST['text_name']);
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM image WHERE filename ='$yourname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user){ // if user exists
    if ($user['filename'] === $yourname){
      array_push($errors, "Username already exists");
    }

    //if ($user['email'] === $email) {
    //  array_push($errors, "email already exists");
    //}
  }
 
  
$query = "INSERT INTO image (filename) 
			VALUES('$yourname')";
mysqli_query($db, $query);
$_SESSION['filename'] = $yourname;
$_SESSION['success'] = "You are now Registered, login into account";
//header('location: index.php');
  }

// LOGIN THE USER

//if (count($errors) == 0) {
 // $query = "SELECT * FROM image WHERE filename = '$yourname'";
 // $results = mysqli_query($db, $query);
  //if (mysqli_num_rows($results) == 1) {
   // $_SESSION['filename'] = $yourname;
   // $_SESSION['success'] = "You are now logged in"; 
   // header('location: Medical.html');
 // }
//}

// If upload button is clicked ... 
if (isset($_POST['upload'])){ 
  
  $filename = $_FILES["imag"]["name"]; 
  $tempname = $_FILES["imag"]["tmp_name"];     
      $folder = "images/".$filename;

// Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)){ 
      echo "Image uploaded successfully"; 
  }else{ 
     echo "Failed to upload image"; 
} 
} 












  


  



    