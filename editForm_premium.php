<!-- USER -->
<?php
session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(isset($_SESSION['uid'])){
  include_once('dbclass.php');
  $db=new db;

  $res=$db->getUserData();
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
}
else{
  header("location:login.php");
  exit;
}
?>
<?php
$user_id=$_SESSION['uid'];
?>


<?php include_once('header.php'); ?>
<?php include_once('connection.php'); ?>

<?php
  if(!isset($_GET['mode']) && $_GET['mode']!="edit" && !isset($_GET['job_id']) && empty($_GET['job_id'])){
    header('Location:index.php');
    exit();
  }
?>


<style>
* {
  box-sizing: border-box;
  
  margin: 0px;
  padding:0px;
}

input[type=text], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}
input[type=file], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

input[type=number], select, textarea {
  width: 250px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

textarea[type=textarea], select, textarea {
  width: 500px;
  height: 200px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

input[type=phone], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: rgb(195, 195, 195);
}

.form.label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form.container {
  border-radius: 0px;
  background-color: #f2f2f2;
  padding: 50px;
}

.form.col-25 {
  float: left;
  width: 25%;
  margin-top: 56px;
}

.form.col-75 {
  float: left;
  width: 75%;
  margin-top: 56px;
}

/* Clear floats after the columns */
.form.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>


<section class="form" style="margin-left: 0px; background-image: url(img/background.jpg);width: 100%; height: auto; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <br>
    <div class="container" >
        <form name="" action="allfunction1.php" method="post" enctype="multipart/form-data">
     <?php 
      $sql = "SELECT *, count(*) as usercount FROM premium_table where job_id='".$_GET['job_id']."'";
      $result = $conn->query($sql);
      ?>
   <div class="row">
    <div class="col-25">
      <label for="name"><h3 style="color: white;">Job Ads</h3></label>
      
    </div>
</div>
  <input type="hidden" name="job_id" value="<?php echo $_GET['job_id']; ?>">
      <?php
      while($row = $result->fetch_assoc()){
        if($row['usercount']<=0){
          header('Location:index.php');
          exit();
        }
        ?>
  <div class="row">
    <div class="col-25">
      <div class="col-25">
         <input type="hidden" id="user_id" name="user_id" placeholder="Id" value="<?php echo $user_id ?>" readonly="" >
      </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Company Name</label>
      <div class="col-75" text-align="left">
         <input type="text" align="left" id="name" name="name" placeholder="name" required="" value="<?php echo $row['name']; ?>">
      </div>
    </div>
  </div>
  <br>
<div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Email Id</label>
      <div class="col-75" text-align="left">
         <input type="text" align="left" id="email" name="email" placeholder="email" required="" value="<?php echo $row['email']; ?>">
      </div>
    </div>
  </div>
  <br>
<div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Phone Number</label>
      <div class="col-75" text-align="left">
         <input type="text" align="left" id="phone" name="phone" placeholder="phone" required="" value="<?php echo $row['phone']; ?>">
      </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-75">
      <label for="name" style="color: white;">Description</label>
      <div class="col-75">
         <textarea id="description" required="" type="textarea" name="description" placeholder="description" ><?php echo $row['description']; ?></textarea>
        <!--  <input type="text" name="description" value="<?php echo $row['description']; ?>"> -->
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-75">
      <label for="name" style="color: white;">Post Requirement</label>
      <div class="col-75">
         <textarea id="requirement" type="textarea" required="" name="requirement" placeholder="requirement" ><?php echo $row['requirement']; ?></textarea>
      </div>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Necessary skills</label>
      <div class="col-75">
         <textarea id="skill" type="textarea" required="" name="skill" placeholder="skill" ><?php echo $row['skill']; ?></textarea>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Location</label>
      <div class="col-75" text-align="left">
         <input type="text" align="left" id="location" name="location" placeholder="Location" required="" value="<?php echo $row['location']; ?>">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Experience</label>
      <div class="col-75" text-align="left">
         <input type="text" required="" align="left" id="experience" name="experience" placeholder="Experience" value="<?php echo $row['experience']; ?>">
      </div>
    </div>
  </div>
  <br>
  <div class="row">  
    <div class="col-25">
      <label for="name" style="color: white;">Salary</label>
      <div class="col-75" style="color: white;">
      <input type="number" required="" id="salary" name="salary" placeholder="salary" value="<?php echo $row['salary']; ?>">Lakhs/annum
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Apply Link</label>
      <div class="col-75" text-align="left">
         <input type="text" required="" align="left" id="apply" name="apply" placeholder="https://" value="<?php echo $row['apply']; ?>">
      </div>
    </div>
  </div>
  <br>
   <!--  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Company Image 1</label>
      <div class="col-75" text-align="left">
         <input type="file" align="left" id="img1" name="img1" placeholder="" value="./img/form_img/<?php echo $row['img1']; ?>">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Company Image 2</label>
      <div class="col-75" text-align="left">
         <input type="file" align="left" id="img2" name="img2" placeholder="" value="./img/form_img/<?php echo $row['img2']; ?>">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Company Image 3</label>
      <div class="col-75" text-align="left">
         <input type="file" align="left" id="img3" name="img3" placeholder="" value="./img/form_img/<?php echo $row['img3']; ?>">
      </div>
    </div>
  </div>
  <br> -->
   
 </div> 

 
 </div>
  </div>
  

  <br>
   <div class="row">
    <?php
      } 
    ?>
    <input type="submit" style="margin-left: 200px" name="updatebn_premium" value="Submit">
  </div><br><br>
  </form>
<?php include_once('footer.php'); ?>
