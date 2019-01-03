<?php
extract($_POST);
if(isset($update))
{
//dob
$dob=$yy."-".$mm."-".$dd;
//hobbies
$hob=implode(",",$hob);

$query="update user set name='$n',mobile='$mob',gender='$gen',hobbies='$hob',dob='$dob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2  style="color:#34495E" align="center"> <b>Update Your Profile </b></h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>

				<tr>
					<td> </br><b>Enter Your name </b></td>
					<Td> </br><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/> </br></td>
				</tr>
				<tr>
					<td> </br> <b>Enter Your email </b></td>
					<Td> </br><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/> </br></td>
				</tr>


				<tr>
					<td> </br> <b>Enter Your Mobile </b> </td>
					<Td></br><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/> </br></td>
				</tr>

				<tr>
					<td> </br> <b>Select Your Gender  </b> </td>
					<Td></br>
			<input type="radio" <?php if($res['gender']=="m"){echo "checked";} ?> name="gen" value="m"/>      	Male</br>
	<input type="radio" <?php if($res['gender']=="f"){echo "checked";} ?> name="gen" value="f"/>         	Female</br>
					</td>
				</tr>

				<tr>
					<td> </br> <b>Choose Your hobbies </b</td>
					<Td>
					<?php
					$arrr=explode(",",$res['hobbies']);
					?>


				<input value="reading" <?php if(in_array("reading",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>     	Reading  </br>
					<input value="singin" <?php if(in_array("singin",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>    Singing </br>
			<input value="playing" <?php if(in_array("playing",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>       Playing </br>
					</td>
				</tr>


				<tr>
					<td></br> <b>Enter Your DOB </b></td>
					<?php
					$arrr1=explode("-",$res['dob']);
					?>
					<Td>
						</br>
					<select class="form-control" style="width:100px;float:left" name="yy">
					<option value="">    Year   </option>
					<?php
					for($i=1950;$i<=2016;$i++)
					{
					?>
					<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }
					?>

					</select>

					<select class="form-control" style="width:100px;float:left" name="mm">
					<option value="">   Month  </option>
					<?php
					for($i=1;$i<=12;$i++)
					{
					?>
					<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }
					?>
					}
					?>

					</select>


					<select class="form-control" style="width:100px;float:left" name="dd">
					<option value="">  Date  </option>
					<?php
					for($i=1;$i<=31;$i++)
					{
					?>
					<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }
					?>
					}
					?>

					</select>
					</br>
					</td>
				</tr>

				<tr>


<Td colspan="2" align="center">
</br><input type="submit" class="btn btn-primary" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-primary" value="Reset"/>  </br>

					</td>

				</tr>
			</table>
		</form>
