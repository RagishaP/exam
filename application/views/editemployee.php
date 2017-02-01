<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
</head>
<body>

	<?php
foreach ($data as $key => $value) {

$id=$value['id'] ;
$n= $value['name'] ;
$q= $value['phone'] ;
$p= $value['email'];
$gen=$value['gender'];
	}
	
	?>
</table>
<form method="post" action="index.php/InsertController/update">
<h1>Add employee</h1>

	<table>
	<tr><td><input type="text" name="id" hidden="hidden" value="<?php echo $id;?>"></td></tr>
		<tr><td>Name</td><td><input type="text" name="name" id="name" placeholder="name" value="<?php echo $n;?>"></td></tr>
		<tr><td>Phone</td><td><input type="text" name="phone" id="phone" maxlength="10" placeholder="phone number" value="<?php echo $q;?>"></td></tr>
		<tr><td>Email</td><td><input type="text" name="email" id="email" placeholder="email" value="<?php echo $p;?>"></td></tr>
		<tr><td>Gender</td><td><input type="radio" name="r" value="male" id="r1">male<input type="radio" name="r" value="female" id="r2" checked="true" >female</td></tr>
		<tr><td>Hobbies</td><td><input type="checkbox" name="c[]" value="music" id="c1">Listening to music
		<input type="checkbox" name="c[]" value="reading" id="c2">reading<input type="checkbox" name="c[]" value="browsing" id="c3">browsing
		<input type="checkbox" name="c[]" value="playing" id="c4">playing</td></tr>
		<tr><td>Profile pic</td><td><input type="file" name="pic" id="pic"></td></tr>
		<tr><td>country</td>
		<td>
		<select name="country">
			<option value="India">India</option>
			<option value="US">us</option>
			<option value="china">china</option>
		</select></td></tr>
		<tr><td></td><td><input type="submit" name="btn" value="update"></td></tr>
	</table>
</form>

</body>
</html>