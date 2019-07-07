<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = validate($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = validate($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = validate($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = validate($_POST["gender"]);
  }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>User form</title>


</head>
<body>

<!-- Material form register -->
<div class="card col-md-5 offset-4">

    <h5 class="card-header bg-success text-white text-center py-4">
        <strong> <i class="fas fa-user"></i>Register</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-5 pt-2">

        <!-- Form -->
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                    <label for="FirstName" class="text-left">First name :</label>

                        <input type="text" id="FirstName" title="Enter your First name " name="f_name" class="form-control" required>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                    <label for="LastName">Last name :</label>

                        <input type="text" id="LastName"  name="l-name"  class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
            <label for="Email">E-mail :</label>

                <input type="email" id="Email"  name="email" class="form-control" required>
            </div>

            <!-- user name -->
             <!-- E-mail -->
             <div class="md-form mt-0">
            <label for="name">User name :</label>

                <input type="text" id="Email"  name="user_name" class="form-control" required>
            </div>

            <!-- Password -->
            <div class="md-form">
            <label for="Password">Password :</label>

                <input type="password" id="Password" name="password" class="form-control" aria-describedby="PasswordHelpBlock" required>
               
            </div>

            <!-- Phone number -->
            <div class="md-form">
            <label for="Phone">Image :</label>

                <input type="file" id="file" class="form-control" name="image" aria-describedby="PhoneHelpBlock" >
               
            </div>
             <!-- jion Date -->
                    <div class="md-form">
            <label for="Phone">Join Date :</label>

                <input type="date" id="date" class="form-control" name="j_date" aria-describedby="PhoneHelpBlock">
               
            </div>

             <!-- Position Date -->
             <div class="md-form">
            <label for="text">Position</label>

                <input type="text" id="text" class="form-control" name="position" aria-describedby="PhoneHelpBlock">
               
            </div>

           

            <!-- Sign up button -->
            <button class="btn btn-primary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign Up</button>

            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Login here</a>
            </div>

            <!-- start php    -->

            <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                $f_name = validate($_POST["f_name"]);
                $l_name = validate($_POST["l_name"]);
                $email = validate($_POST["email"]);
                $user_name = validate($_POST["user_name"]);
                $password = validate($_POST["password"]);
                $image = validate($_POST["image"]);
                $j_date =validate( $_POST["j_date"]);
                $position =validate( $_POST["position"]);
            }
            // function validate ($data){
            //         $data =trim($data);
            //         $data =str($data);
            // }

            function validate($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

            ?>
           


            <!-- Social register
            <p>or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a> -->

            <hr>

            

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>