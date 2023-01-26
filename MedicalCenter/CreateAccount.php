<?php include('photo_upload.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Create Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.vl {
  border-left: 2px solid green;
  height: 500px;
  position: relative;
  top: -195px;
  right: -580px;
}

.info{
  position: relative;
  right: -650px;
  top: -670px;
}
</style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Register Account</h1>
  <p>Sign Up</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
  <h3>Register Account</h3><br><br>

  <form method="post" action="CreateAccount.php" enctype="multipart/form-data">
    <div class="input-group">
      <input type="text" name ="text_name" placeholder ="Your Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="file" name="imag" id="img" onchange="ImageValidation()" 
        accept="image/png,image/jpeg,image/bmp,image/gif"><br>
      <input type="submit"  name="upload" value="submit">
  	</div>
    Sign-in <a href="bootstrap.php">Sig-In</a>

      <script type="text/javascript">
        function ImageValidation() {
            var formData = new FormData();
            var file = document.getElementById("img").files[0];
            formData.append("Filedata", file);
            
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
                alert('Please select a valid image file');
                document.getElementById("img").value = '';
                return false;
            }
            return true;   
        }
        ImageValidation()
      </script>