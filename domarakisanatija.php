<?php
$con=  mysqli_connect("remotemysql.com",     "zFLO12yis6" , "dE1lgGhUfa"       ,"zFLO12yis6" ) ;
mysqli_query($con,"SET CHARACTER SET 'utf8'");

session_start();
?>





<?php
$query  =  mysqli_query(      $con   ,       "   select  * FROM infocliendomarakisa    "           );
foreach($query as $row)	
{		
	  ?>       info clien domarakisa<br/>
	      	   <?php echo $row["ip"]; ?> <br/>
			   <?php echo $row["iplocation"]; ?> <br/>
			   <?php echo $row['name']   ?><br/>
			   <?php echo $row['num']   ?><br/>
			   <?php echo $row['adresse']   ?><br/>
			   <?php echo $row["datetime"]; ?>  <br/><br/>
	 <?php	
 
}    
?>


<br> <br>


<?php
$query  =  mysqli_query(      $con   ,     " SELECT iplocation , datetime  ,  ip  , count(ip) FROM ipcliendomarakisa GROUP BY ip , iplocation, datetime HAVING count(*) >= 1  "           );
foreach($query as $row)	
{
	  ?> 
			     <?php echo $row["ip"]; ?>  
				 <?php echo $row["iplocation"]; ?> 
                 (<?php echo $row["count(ip)"]; ?>) 				 
                 <?php echo $row["datetime"]; ?>  					 
  		 	     <br>		
	 <?php	
 
}    
?>



     