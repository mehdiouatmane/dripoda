<?php
$db =mysqli_connect("freedb.tech", "freedbtech_mehdiouatmane","mehdi2014@A" , "freedbtech_wordpresst");
mysqli_query($db,"SET CHARACTER SET 'utf8'");
?>
<html lang="en" >
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>test</title>
<style>
*{ padding:0; border:0; margin:0; outline: none !important;  list-style: none; }  
*, ::after, ::before {    box-sizing: border-box;}  
html , body { }    
@font-face {   font-family: 'Stingray';   font-style: normal;   font-weight: 400;   src: local('Stingray'), url('https://fonts.cdnfonts.com/s/22150/Stingray.woff') format('woff');} 
</style>
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800">
<link rel="stylesheet" href="http://fonts.cdnfonts.com/css/font">  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link rel="stylesheet" href="https://wowjs.uk/css/libs/animate.css"> 
<script type="text/javascript"  src="https://wowjs.uk/dist/wow.min.js"></script>
<script> new WOW().init(); </script>





<style>
	   .singlecontent{ background-color:transparent;  padding:0%;  margin:0% 8%;  display: flex;  align-items:center; justify-content: center; text-align:center;  flex-wrap:wrap;}
			.singlecontent .content{  background-color:transparent;   padding:0; margin:8px;            cursor: pointer;    transition: all 0.3s ease;   animation: animate 0.4s ease;}    @keyframes animate { 0%{   transform: scale(0.5); } 100%{   transform: scale(1); }}
			.singlecontent .content.hide{  display: none; animation: animate 0.4s ease;}   @keyframes animate { 0%{   transform: scale(0.5); } 100%{   transform: scale(1); }}
			 .singlecontent .items {background-color:white; width:300px; height:auto; border-radius:16px; }
  			  .singlecontent .posimg { overflow:hidden; border-radius:16px 16px 0px 0px;  display:flex; align-items:center; justify-content:center; text-align:center; }
			   .singlecontent img {width:auto; max-width: 100%;  height:auto; }  .container4 .singlecontent img:hover{transform:scale(1.04); transition:transform 1s ease-in-out 0s;}
				 .singlecontent .lesinfo{text-align:right; padding:3%;  }
					 .singlecontent .lesinfo  .title{color:#2e3d62; font:800 20px 'cairo',sans-serif;    }
					.singlecontent .lesinfo .subtitles{ color:#666e82; font:600 15px 'cairo',sans-serif; }
					.singlecontent .lesinfo .costandshow{ padding:5% 0 0 0; display:flex; align-items:center; justify-content:space-between; }
						.singlecontent .lesinfo .prix{ color:black; font:800 20px 'cairo',sans-serif;   }
						 .singlecontent .lesinfo .menu{ font-size:20px;}
</style>








<div class="singlecontent">	
	<?php
	if(  isset( $_GET['b'] )          )   
	{	
	     $search = $_GET['a'] ;
		 $query = mysqli_query( $db , " SELECT * FROM tableee WHERE     title LIKE '%$search%' OR  subtitles LIKE '%$search%'   " );	
		 if  ($search !=""   ) 
         {
			    if(mysqli_num_rows($query)>0  ) 
			    {
					 while($row=mysqli_fetch_assoc($query))
					 {
					    ?>
						<div class="content  " >  	
						<div class="items">							
							<div class="posimg"> <a  href="project2post.php?idd=<?php echo $row['id']?>" > <img src="<?php echo $row["img"] ?>"   />  </a>	</div>
							<div class="lesinfo">
								 <div class="title">   <?php echo $row['title'] ?>  </div>
								 <div class="subtitles">  <?php echo  $row['subtitles'] ?>  </div>
								 <div class="costandshow">   
									 <div class="prix"><?php echo $row["prix"] ?>  </div> 
									 <div class="menu">	 <i class="fa fa-shopping-cart"></i>  <i class="fa fa-eye"></i>    <i class="fa fa-info-circle"></i> </div>
							</div>	
							</div>
						</div>
						</div>				
					    <?php
					  }	 
				}
                else    
                { 
						 echo "aucun result";    
				}
	        }
			else    
            { 
				echo "aucun result";    
			}
								
								
	}
	?>
</div>	