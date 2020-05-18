<?php    
include "../connection.php";
    
    
$sql = "select * from corona_case";    
$result = mysqli_query($conn,$sql);    
?>    
<html> 
   <head>     
		<style>
		body {
  background-image: url("/coronaran/images/1.jpg");
  background-color: Red;
  height: 500px;
  background-position: 1008*97;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
th {
  background-color: black;
  color: white;
}

tr:nth-child(even) {background-color: white;}
tr:nth-child(odd) {background-color: White;}

		</style>		
</head>   
    <body style="background-color:powderblue;">    
		<link href = "rmod1.css" type = "text/css" rel = "stylesheet" />  
	
			<p1 style="float:right;" color="white"><a href="../index.html"> Back to homepage</a></p1>
				
		<h1><center>Day to Day records</center></h1>
		
		<table width = "98%" border = "4" cellspacing = "0" cellpadding = "0">    
            <tr>    
              <th>Date</th>    
                <th>Periyar</th>    
                <th>Arapalayam</th>    
                <th>Matuthavani</th>    
                <th>Koripalayam</th>    
                <th>Therkuvasal</th>    
				<th>Thiruparankunram</th>
				<th>New Cases</th> 
				<th>New Death</th> 
				<th>New recovery</th>  
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td> 
					<?php echo $row->c_date;?>  
				</td>  
				<td>  
					<?php echo $row->periyar;?>  
				</td>  
				<td>  
					<?php echo $row->arapalayam;?>  
				</td>  
				<td>  
					<?php echo $row->matuthavani;?>  
				</td>  
				<td>  
					<?php echo $row->koripalayam;?>  
				</td>  
				<td>  
					<?php echo $row->therkuvasal;?>  
				</td>  
				<td>  
					<?php echo $row->thiruparankunram;?>  
				</td>  
				<td> 
					<?php echo $row->new_cases;?>  
				</td>  
				<td> 
					<?php echo $row->new_recovery;?>  
				</td>  
				<td> 
					<?php echo $row->new_dead;?>  
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>