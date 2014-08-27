<!DOCTYPE html>		
		<html>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BLUFF | FACT</title>
		<link rel="stylesheet" href="themes/CAP.min.css" />
		<link rel="stylesheet" href="themes/1.css" />
		<script src="themes/1.js"></script>
		<script src="themes/2.js"></script>
		<script src="jquery-1.4.4.min.js" type="text/javascript"></script>
		<script src="js/jquery.js"></script>
		




<body>
<?php
header('Access-Control-Allow-Orgin:*');
mysql_connect("localhost", "root", "")or die("cannot connect server ");
		mysql_select_db("dbmathmaster")or die("cannot select DB");
		
			$sql="SELECT  username, address, score from tbl_score 
			
			ORDER BY score DESC  ";	
	
	
		
		$result=mysql_query($sql);
					$str = "<table cellpadding=\"8\" border=\"0\" width=\"100%\" style = \"border-style: none; border: none;\">";
	
					
						
					$str .= "<th bgcolor='#dddd'>NAME</th>";
					$str .= "<th bgcolor='#dddd'>ADDRESS</th>";
					$str .= "<th bgcolor='#dddd'>SCORE</th>";
		
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

<body>
</html>