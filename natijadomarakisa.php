<?php
$con=  mysqli_connect("remotemysql.com",     "zFLO12yis6" , "dE1lgGhUfa"       ,"zFLO12yis6" ) ;
mysqli_query($con,"SET CHARACTER SET 'utf8'");

session_start();
?>





<?php
$query  =  mysqli_query(      $con   ,       "   select  * FROM infocliendomarakisa    "           );
foreach($query as $row)	
{		
	  ?> 
	      	   <?php echo $row["ip"]; ?> 
			   <?php echo $row['name']   ?>
			   <?php echo $row['num']   ?>
			   <?php echo $row['adresse']   ?>
		       <br/>
 			
	 <?php	
 
}    
?>



 <br> <br>



<?php
$query  =  mysqli_query(      $con   ,     "  select ip , count(ip) FROM ipcliendomarakisa GROUP BY ip  "           );
foreach($query as $row)	
{		
	  ?> 
			     <?php echo $row["ip"]; ?>  
		  count  <?php echo $row["count(ip)"]; ?>  			   
  		 	     <br>		
	 <?php	
 
}    
?>



     