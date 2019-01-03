<?php
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<!--comment out form code-->

<h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table bgcolor="#808080" border="10" frame="BOX" rules="NONE" class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>

				<tr>
					<td> </br> <b>Enter Your name </b></td>
					<Td> </br> <input  type="text"  class="form-control" name="n" required/> </br></td>

				</tr>

				<tr>
					<td> </br><b>Enter Your email </b></td>
					<Td></br> <input type="email"  class="form-control" name="e" required/>  </br> </td>
				</tr>

				<tr>
					<td></br>  <b>Enter Your Password  </b> </td>
					<Td></br><input type="password"  class="form-control" name="p" required/></br></td>
				</tr>

				<tr>
					<td></br> <b>Enter Your Mobile  </b></td>
					<Td></br><input  class="form-control" type="number" name="mob" required/> </br></td>
				</tr>
</br>
				<tr>
					<td></br>  <b>Select Your Gender  </b></td>
					<Td>
						</br>
				<input type="radio" name="gen" value="m" required/>Male </br>
		<input type="radio" name="gen" value="f"/>		Female </br> </br>
					</td>
				</tr>
</br>
				<tr>
					<td></br> <b>Choose Your hobbies </b></td>
					<Td> </br>
					<input value="reading" type="checkbox" name="hob[]"/> Reading </br>
					<input value="singin" type="checkbox" name="hob[]"/> Singing</br>

					<input value="playing" type="checkbox" name="hob[]"/> Playing</br> </br>
					</td>
				</tr>


				<tr>
					<td> </br><b>Upload  Your Image </b></td>
					<Td>  </br><input class="form-control" type="file" name="img" required/></br></td>
				</tr>

				<tr>
					<td></br> <b>Enter Your DOB </b></td>
					<Td>
						</br>
					<select name="yy" required>
					<option value="">Year</option>

					                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <?php
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					<select name="mm" required>
					<option value="">Month</option>
					<?php
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>


					<select name="dd" required>
					<option value="">Date</option>
					<?php
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>
</br>
					</td>
				
				</tr>

				<tr>


<Td colspan="2" align="center">
	</br>
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/> </br></br>

					</td>

				</tr>
			</table>
		</form>
		<!--<div class="container">
  <form id="contact" action="" method="post">

    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus  class="form-control" name="n" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" class="form-control" name="e" required >
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password" tabindex="3" class="form-control" name="pass" required>
    </fieldset>
		<fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="4" class="form-control" name="mob" required>
    </fieldset>
    <fieldset>
			<input type="radio" id="Male" name="gen" value="m" required>
	        <label for="Male">Male</label><br/>
		  <input type="radio" id="Male" name="gen" value="f" required>
					<label for="Female">Female</label>

    </fieldset>


		<fieldset>
<legend>Your Hobbies</legend>
<ul class="checkbox">
  <li><input type="checkbox" name="hob[]" value="singing" /><label for="cb1">Singing</label></li>
  <li><input type="checkbox" name="hob[]"  value="dancing" /><label for="cb2">Dancing</label></li>
	<li><input type="checkbox" name="hob[]"  value="reading" /><label for="cb2">Reading</label></li>

</ul>
</fieldset>

<fieldset>
	<legend>Upload  Your Image</legend>
	<input class="form-control" type="file" name="img"  required>
	<label for="img"> Select a file to upload</label>
</fieldset>

<fieldset>
	<legend>Enter Your DOB</legend>
	<select name="yy" required>
	<option value="">Year</option>
	<?php
	for($i=1950;$i<=2016;$i++)
	{
	echo "<option>".$i."</option>";
	}
	?>

	</select>

	<select name="mm" required>
	<option value="">Month</option>
	/*<?php
	for($i=1;$i<=12;$i++)
	{
	echo "<option>".$i."</option>";
	}
	?>

	</select>


	<select name="dd" required>
	<option value="">Date</option>
	<?php
	for($i=1;$i<=31;$i++)
	{
	echo "<option>".$i."</option>";
	}
	?>

	</select>

</fieldset>






    <fieldset>
      <button name="save" type="submit" id="contact-submit" data-submit="...Sending" value="Save">Submit</button>
    </fieldset>

  </form>
</div>-->
	</body>
</html>
