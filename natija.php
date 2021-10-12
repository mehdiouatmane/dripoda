<?php
$con=  mysqli_connect("remotemysql.com",     "zFLO12yis6" , "dE1lgGhUfa"       ,"zFLO12yis6" ) ;
mysqli_query($con,"SET CHARACTER SET 'utf8'");

session_start();
?>





<?php
$query  =  mysqli_query(      $con   ,       "   select  * FROM infocliendomarakisa    "           );
foreach($query as $row)	
{		
	  ?>       #product name = <?php echo $row["product"]; ?>   <br/>
	      	   ip = <?php echo $row["ip"]; ?> <br/>
			   iplocation =<?php echo $row["iplocation"]; ?> <br/>
			   fullname = <?php echo $row['name']   ?><br/>
			   num = <?php echo $row['num']   ?><br/>
			   adresse = <?php echo $row['adresse']   ?><br/>
			   city = <?php echo $row['city']   ?><br/>
			   datetime = <?php echo $row["datetime"]; ?>  <br/><br/>
	 <?php	
 
}    
?>


<br> <br>


<?php
$query  =  mysqli_query(      $con   ,     " SELECT product , datetime ,  iplocation ,  ip  , count(ip) FROM ipcliendomarakisa GROUP BY ip , iplocation, datetime , product HAVING count(*) >= 1  "           );
foreach($query as $row)	
{
	  ?>
	             <?php echo $row["product"]; ?> 
			     <?php echo $row["ip"]; ?>  
				 <?php echo $row["iplocation"]; ?> 
                 (<?php echo $row["count(ip)"]; ?>) 				 
                 <?php echo $row["datetime"]; ?>  					 
  		 	     <br>		
	 <?php	
 
}    
?>



     