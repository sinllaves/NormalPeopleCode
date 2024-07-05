<!doctype html>

<html>

	<head>
		<title>PHP Form</title>
		<meta charset="utf-8">	

		<style>
		.error {
			color: red;
		}
		</style>
	</head>
<body>

<?php
$name = $website = $position = $experience = $status = $comments = "";

// error if form post variables are empty
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"]))   {
      echo "<span class=\"error\">Error: First Name Required</span>";
  
      // Validation: name can contain only letters
    } elseif (!preg_match("/^[a-zA-Z]*$/",$_POST["name"])) {





    } elseif (empty($_POST["website"])) {
       echo"<span class=\"error\">Error: Website is Required</span>";
    }
  } else {




  // collect value of input field
  $name = val($_POST["name"]);    // we are storing what was posted from input into $name
  $website = val($_POST["website"]);
  $position = val($_POST["position"]);
  $experience = val($_POST["experience"]);
  $status = val($_POST["status"]);
  $comments = val($_POST["comments"]);
  // each form post will be validated by the function below.   
  }

function val($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}


?>

<form name="employment" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);// prevents javascript injection into the transmitted data, 
// PHP_SELF transmits its own data to it own page ?>" method="post"> 
 <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><h2>Employment Application</h2></td>
      <td></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input type="text" name="name" maxlength="50" />
	  </td>
    </tr>
    <tr>
      <td>Website</td>
      <td><input type="text" name="website" maxlength="50" /></td>
    </tr>
    <tr>
      <td>Position</td>
      <td>
	  
			  <select name="position">
			  
				<option value="Accountant">Accountant</option>
				<option value="Receptionist">Receptionist</option>
				<option value="Administrator">Administrator</option>
				<option value="Supervisor">Supervisor</option>
			  
			  </select>
			  	  
	  </td>
    </tr>
    <tr>
      <td>Experience Level</td>
      <td>
	  
			<select name="experience">
			  
				<option value="Entry Level">Entry Level</option>
				<option value="Some Experience">Some Experience</option>
				<option value="Very Experienced">Very Experienced</option>
			  
			</select>
	  
	  </td>
    </tr>
    <tr>
      <td>Employment Status</td>
      <td>
	  
	  <input type="radio" name="estatus" value="Employed" checked />Employed
	  <input type="radio" name="estatus" value="Unemployed" />Unemployed
	  <input type="radio" name="estatus" value="Student" />Student
	  
	  </td>
    </tr>
    <tr>
      <td>Additional Comments</td>
      <td>
	  
	  <textarea name="comments" cols="45" rows="5"></textarea>
	  
	  </td>
    </tr>
    <tr>
      <td></td>
      <td>
	  
	  <input type="submit" name="submit" value="Submit" />
	  <input type="reset" name="reset" value="Reset" />
	  
	  </td>
    </tr>
  </table>
</form>


<?php
echo "<h2>User Input:</h2>";
echo "Name: " . $name;
echo "<br>";
echo "Name: " . $website;
echo "<br>";
echo "Name: " . $position;
echo "<br>";
echo "Name: " . $experience;
echo "<br>";
echo "Name: " . $status;
echo "<br>";
echo "Name: " . $comments;
?>


</body>
</html>
