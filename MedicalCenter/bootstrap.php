<--https://destinali.com/countries-nigerians-can-visit-without-visa/-->
<?php include('photo_upload.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Example</title>
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
    <h1>Main Page</h1>
    <p>Login</p> 
  </div>
    
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Photo Login System</h3><br><br>
      
      <form method=POST action="bootstrap.php" enctype="multipart/form-data">
        <input type="text" name="text_name" placeholder="Your Name" required>
        <input type="file" name="imag" id="img" onchange="ImageValidation()" 
        accept="image/png,image/jpeg,image/bmp,image/gif"><br>
        <input type="submit"  name="upload" value="submit">
        <p>
  		Not yet a member? <a href="CreateAccount.php">Sign up</a>
  	  </p>
        <button><a href="bootstrap.php">Reset</button>
      </form>

    <select name= "passport" id="acess">
      <option value ="cambodia">cambodia</option>
      <option value ="Dominica">Dominica</option>
      <option value ="Haiti">Haiti</option>
      
      
      <option value ="Ghana">Ghana</option>
      <option value ="Guinea">Guinea</option>
      <option value ="Kenya">Kenya</option>
      <option value ="Liberia">Liberia</option>
      <option value ="Maldives">Maldives</option>
      <option value ="Mali">Mali</option>
      <option value ="Mauritania">Mauritania</option>
      <option value ="Mauritius">Mauritius</option>
      <option value ="Mozambique">Mozambique</option>
      <option value ="Niger republic">Niger republic</option>
      <option value ="Senegal">Senegal</option>
      <option value ="Seychelles">Seychelles</option>
      <option value ="Somalia">Somalia</option>
      <option value ="Tanzania">Tanzania</option>
      <option value ="Uganda">Uganda</option>
    </select>
<div class="vl"></div>



    <!--  <div class="info">
        <h3>Upload Your Photo</h3>
        <br><br>
        <form method=POST action="bootstrap.php" enctype="multipart/form-data">
        <input type="file" name="image" id="im" onchange="Imagefile()" 
        accept="images/png,images/jpeg,images/bmp,images/gif">
        <input type="submit"  name="upload">
      </form>
      </div>
-->
  <script type="text/javascript">
    function ImageValidation() {
        var formData = new FormData();
        var file = document.getElementById("img").files[0];
        formData.append("Filedata", file);
        
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif" && t != "mp4" && t != "mp3") {
            alert('Please select a valid image file or video file');
            document.getElementById("img").value = '';
            return false;
        }
        return true;   
    }
    ImageValidation()
  </script>


<!--<script type="text/javascript">
        function Imagefile() {
            var formData = new FormData();
            var file = document.getElementById("im").files[0];
            formData.append("Filedata", file);
            
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
                alert('Please select a valid image file');
                document.getElementById("im").value = '';
                return false;
            }
            return true;
        }
        Imagefile()
</script>
      -->
    </div>
  </div>
</div>
</body>
</html>