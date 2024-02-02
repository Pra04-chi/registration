<?php require_once('database.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
   <link rel="stylesheet" href="styleadmis.css">

    
</head>
<body> <div  class="main">
        
        <div class="text"><b> TILAK RAJ CHADHA INSTITUTE OF MANAGEMENT AND TECHNOLOGY</b></div>
      <div class="txt"><b>(TIMT)</b></div></div>
      <div class="link"><nav >
        <a href="index.php"><span style="padding-right:20px;">HOME</span></a>|
          <a href="admision.php"><span style="padding-right:20px;">REGISTER</span></a> |
          <a href="about.html"><span style="padding-right:20px;">ABOUT US</span></a>|
          <a href="contact.html"><span style="padding-right:20px;">CONTACT US</span></a>|
          
          
        
        </nav></div>
      
<?php
    if(isset($_POST['create']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $phno=$_POST['phno'];
    $dob=$_POST['dob'];
    $fname=$_POST['fname'];
    $category=$_POST['category'];

$sql="INSERT INTO users(fullname,email,course,phno,dob,fname,category) Values('$fullname','$email','$course','$phno','$dob','$fname','$category')";
if($conn->query($sql)==true){
    echo"success data";
    }
    else{
    echo "ERROR :$sql <br> $conn->error";}
    $conn->close();
  }

?>
<div class="heading"><b>REGISTRATION FORM</b></div> 
<div class="bg">   
<div class="container"> 
    
<form action="admision.php" method="post">
       <div class="form-group">NAME:
           <input type="text" class="form-control" name="fullname" placeholder="ENTER YOUR FULL NAME" required>

       </div>
       <div class="form-group">FATHER's NAME:
           <input type="text" class="form-control" name="fname" placeholder="ENTER YOUR Father NAME" required>

       </div>
       
       <div class="form-group">EMAIL
           <input type="email" class="form-control" name="email" placeholder="ENTER YOUR EMAIL" required></div>
           <div class="form-group">Phone Number<br>
           <input type="phno" class="form-control" name="phno" placeholder="ENTER YOUR Phone Number" required>
          <div class="form-group">Date Of Birth
            <input type="date" class="form-control" name="dob" required>
          </div> 
          
           
       </div>
       <div class="form-group">COURSE<br>
           <input type="radio" id="bca"  name="course" value="BCA">
           <label for="bca">Bachelor Of Computer Application(BCA)</label><br>
           <input type="radio" id="bba"  name="course" value="BBA">
           <label for="bba">Bachelor Of Business Administration(BBA)</label><br>
           <input type="radio" id="mca"  name="course" value="MCA">
           <label for="mca">Master Of Computer Application(MCA)</label><br>
           <input type="radio" id="mba"  name="course" value="MBA">
           <label for="bca">Master Of Business Administration(BCA)</label><br>
       </div>
       <div class="form-group">
       <label for="category">Choose Your category:</label>

<select name="category" id="caste"><BR>
  <option value="Genral">GENERAL</option>
  <option value="OBC">OBC</option>
  <option value="ST/SC">ST/SC</option>
  <option value="OTHERS">OTHERS</option>
</select>
           

       </div>
       <div class="form-btn">
           <input type="submit"   name="create" value="REGISTER">
           
       </div>
       </div>
 
</form>
  </div> 
</body>
</html>