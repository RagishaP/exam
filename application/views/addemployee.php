<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
</head>
<body>
<form method="post" action="index.php/InsertController/insert">
<h1>Add employee</h1>
	<table>
		<tr><td>Name</td><td><input type="text" name="name" id="name" placeholder="name"></td></tr>
		<tr><td>Phone</td><td><input type="text" name="phone" id="phone" maxlength="10" placeholder="phone number"></td></tr>
		<tr><td>Email</td><td><input type="text" name="email" id="email" placeholder="email"></td></tr>
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
		<tr><td></td><td><input type="submit" name="btn" value="Save"></td></tr>
	</table>
</form>
<table border="2">
	<tr><th>slno</th><th>name</th><th>phone</th><th>email</th><th>action</th></tr>
	<?php 
// if(isset($data))
// {
// 	print_r($data);
// }
	
foreach ($data as $key => $value) {
?>

<tr>
<td><?php echo $value['id'] ?></td>
<td><?php echo $value['name'] ?></td>
<td><?php echo $value['phone'] ?></td>
<td><?php echo $value['email'] ?></td>
<td><a href="<?php echo site_url('Welcome/edit');?>?id=<?php echo $value['id'];?>"><?php echo "edit";?></a></td>
<td><a href="<?php echo site_url('InsertController/delete');?>?id=<?php echo $value['id'];?>"><?php echo "delete";?></a></td>
</tr>

<?php
	}
	
	?>
</table>
</body>
</html>