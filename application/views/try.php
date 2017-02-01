foreach ($data as $key => $value) {
echo "<tr>";
	echo "<td>".$value['id']."</td>";
echo "<td>".$value['name']."</td>";
echo "<td>".$value['phone']."</td>";
echo "<td>".$value['email']."</td>";
echo "<br>";
echo "<td>edit</td><a href="".<?php echo base_url('InsertController/') ">;
echo "<td>delete</td>";
echo "</tr>";

	}