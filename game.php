<?php
mysql_connect("localhost", "root", "")or die("cannot connect server ");
		mysql_select_db("dbmathmaster")or die("cannot select DB");
		
			$sql="SELECT username, address, score  from tbl_score 	GROUP BY username
			ORDER BY score DESC  ";	
	
	
		
		$result=mysql_query($sql);
					$str = "<table cellpadding=\"8\" border=\"1\" width=\"100%\" style = \"border-style: none\">";
	
					
						
					$str .= "<th bgcolor='#dddd'>FIRST NAME</th>";
					$str .= "<th bgcolor='#dddd'>LAST NAME</th>";
					$str .= "<th bgcolor='#dddd'>DEPARTMENT</th>";
				
						while($rows=mysql_fetch_array($result)){
						$str .= "<tr>";	
					
					
							$str .= "<td>".$rows['username']."</td>";
							$str .= "<td>".$rows['address']."</td>";
							$str .= "<td>".$rows['score']."</td>";
				
							
						$str .= "</tr>";	
					}
					$str .= "</table>";
					echo $str;
?>