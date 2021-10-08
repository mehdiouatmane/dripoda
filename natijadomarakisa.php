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
			   <?php echo $row["datetime"]; ?>  
		       <br/>
 			
	 <?php	
 
}    
?>



 <br> <br>



<?php
$query  =  mysqli_query(      $con   ,     "  select datetime , ip , count(ip) FROM ipcliendomarakisa GROUP BY ip , datetime  "           );
foreach($query as $row)	
{		
	  ?> 
			     <?php echo $row["ip"]; ?>  
		         (<?php echo $row["count(ip)"]; ?>) 	
                 <?php echo $row["datetime"]; ?>  		  
  		 	     <br>		
	 <?php	
 
}    
?>



     