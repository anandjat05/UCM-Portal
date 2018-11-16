<?php
	include("inc_functions.php");
	
?>
<table>
	<caption><b>Faculty Details</b></caption>
	<?php
		while($row = $result->fetch_assoc ()){
			print("<tr>");
			foreach($row as $value){
				print ("<td>$value</td>");
			}//end foreach:
			print("</tr>");
		}//end while
	?>
</table>