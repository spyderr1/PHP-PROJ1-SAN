<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1 class="text-success text-center">Form Validation</h1>
	<div class ="col-lg-8 m-auto d-block">
		<form action="connection.php" method="post" onsubmit="return validation()" class="bg-light" name="f1">
			<div class="form-group">
				<label> Firstname: </label>
				<input type="text" name="firstName" class="form-control" id="first">
				<span id="firsts" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label> Lastname: </label>
				<input type="text" name="lastName" class="form-control" id="last">
				<span id="lasts" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label> Password: </label>
				<input type="Password" name="pass" class="form-control" id="pass">
				<span id="passwords" class="text-danger font-weight-bold"></span>
			</div>
			
			<div class="form-group">
				<label> Mobile Number: </label>
				<input type="text" name="mobile" class="form-control" id="mobileNumber">
				<span id="mobileno" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label> Email Id: </label>
				<input type="text" name="email" class="form-control" id="emails">
				<span id="emailids" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label class="radio-inline">
      				<input type="radio" name="gender" value="m" id="gender">Male
    			</label>
    			<label class="radio-inline">
      				<input type="radio" name="gender" value="f" id="gender">Female
    			</label>
    			<label class="radio-inline">
      				<input type="radio" name="gender" value="o" id="gender">others
      			</label>
                  	<span id="mfo" class="text-danger font-weight-bold"></span>
                </div>
              </div>
			
			<div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
      <span id="comments" class="text-danger font-weight-bold"></span>
    </div>
			<button type="submit" name="submit" value="submit" class="btn btn-success">Submit
			</button>
		</form>
	
</div>
</div>
<?php
/* $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $pass = $_POST['pass'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $comments = $_POST['comments']

    if(isset($_POST['f1'])) {  
    if($firstName == "" && $lastName == "" && $pass == "" && $mobile == "" && $email == "" && $gender == "" && $comments == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Firstname: " .$firstName;  
        echo "<br>";  
        echo "Lastname: " .$lastName;  
        echo "<br>";  
        echo "Password: " .$pass;  
        echo "<br>";  
        echo "Mobilenumber: " .$mobile;  
        echo "<br>";  
        echo "Email Id: " .$email;  
        echo "<br>";
        echo "Gender: " .$gender;  
        echo "<br>";
        echo "Emailid: " .$email;  
        echo "<br>";
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    } */ 
?> 
		<script type="text/javascript">
			 function validation(){
			 	var first = document.f1.firstName.value;
			 	var last = document.f1.lastName.value;
			 	var mobileNumber = document.f1.mobile.value;
			 	var emails = document.f1.email.value;
			 	var gender=document.f1.gender.value;
                var comment = document.f1.comments.value;
			 	var status = true;
			 	console.log(gender);


			 	if(first == ""){
			 		document.getElementById("firsts").innerHTML="Please Fill the firstname!!";
			 		status = false;
			 	}
			 	if(!isNaN(first)){
			 		document.getElementById("firsts").innerHTML="Only Characters are allowed!!";
			 		status = false;
			 	}
			 	if(last == ""){
			 		document.getElementById("lasts").innerHTML="Please Fill the lastname!!";
			 		status = false;
			 	}
			 	if(!isNaN(last)){
			 		document.getElementById("lasts").innerHTML="Only Characters are allowed!!";
			 		status = false;
			 	}
			 	if(pass == ""){
			 		document.getElementById("passwords").innerHTML="Please Fill the Password!!";
			 		status = false;
			 	}
			 	if(pass.length <=5 || (pass.length >20)){
			 		document.getElementById("passwords").innerHTML="Password length must be between 5 and 20";
			 		status = false;
			 	}
			 	
			 	
			 	
			 	if(mobileNumber == ""){
			 		document.getElementById("mobileno").innerHTML="Please Fill the Mobilenumber!!";
			 		status = false;
			 	}
			 	if(isNaN(mobileNumber)){
			 		document.getElementById("mobileno").innerHTML="Only numbers not Characters!!";
			 		status = false;
			 	}
			 	 
			 	 
			 	if(emails == ""){
			 		document.getElementById("emailids").innerHTML="Please Fill the Email Id!!";
			 		status = false;
			 	}
			 	if(emails.indexOf('@') <=0){
			 		document.getElementById("emailids").innerHTML="invalid Emailid!!";
			 		status = false;

			 	}
			 	if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
			 		document.getElementById("emailids").innerHTML="invalid Emailid!!";
			 		status = false;
			 	}
			 	if(!gender){
			 		document.getElementById("mfo").innerHTML="You must click male or female or others";
			 		status = false;
			 	}
			 	

			 	if(comment == ""){
			 		document.getElementById("comments").innerHTML="Please write your comments!!";
			 		status = false;
			 }
			 
			 
			 return status;
			}




		</script>

</body>
</html>