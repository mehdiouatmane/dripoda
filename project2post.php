<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>project2</title>
<style>
*{ border:0; margin:0; outline: none !important; list-style-type:none; }  
*, ::after, ::before {    box-sizing: border-box;}  
html , body {direction: rtl; background: rgb(239, 241, 245); }    
@font-face {   font-family: 'Stingray';   font-style: normal;     font-weight: 400;    src: local('Stingray'), url('https://fonts.cdnfonts.com/s/22150/Stingray.woff') format('woff');} 
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
.container1 {background-color:white; width:100%; height:80px; display:flex; align-items:center; justify-content:center; text-align:center; }
   .container1 .row1{ background-color:white; width:100%; height:80px; display:flex; align-items:center; justify-content:center; text-align:center;  flex-wrap:wrap; grid-row-gap:0rem;  grid-column-gap:0rem;  margin:0% 6%; }
   
		.container1 .row1 .col1 { width:50%; display:none; align-items:center; justify-content:flex-start; text-align:center; }
		   .container1 .row1 .col1  .iconeopen{ cursor:pointer; }
		   .container1 .row1 .col1  .iconeopen i{ font-size:40px; }	
                .container1 .row1 .col1 .menumobilebackground {   background-color: black;	width:100%;  height:100%;                z-index: 9999;  visibility:hidden;  opacity:0;              position: fixed;     left:0%;      top:0%;     transition:visibility 1s linear 1s , opacity 1s linear 1s;        }       
                 .container1 .row1 .col1 .menumobilebackgroundhover{ visibility:visible; opacity:1; transition:visibility 0.5s linear 0.5s , opacity 0.5s linear 0.5s }
			    .container1 .row1 .col1 .menumobileunavbar {background-color: white;  width:300px; max-width: 100%; height:100vh;  position:fixed; top:0;  right:-300px;   transition:right 0.5s linear 0.5s;   } 
                 .container1 .row1 .col1 .menumobileunavbarhover{right:0px;  transition:right 1s linear 1s;  }
                    .container1 .row1 .col1 .menumobileunavbar .iconeclose{color:black; font-size:25px; cursor:pointer;  position:absolute; top:0; right:3%; }
					.container1 .row1 .col1 .menumobileunavbar .text1  {color:blue; font:800 30px 'Stingray'; padding:7% 0%;}
				    .container1 .row1 .col1 .menumobileunavbar ul { padding:0;  margin-bottom:5%; border-top: 1px solid rgba(0, 0, 0, 0.10);  display:grid; align-items:center; justify-content:center; text-align:center;  flex-wrap:wrap; grid-row-gap:0rem; grid-column-gap:0rem;  }
					.container1 .row1 .col1 .menumobileunavbar ul li {width:300px; padding:5% 4%; color:black; font:800 14px 'cairo',sans-serif;  border-bottom:solid 2px rgba(0, 0, 0, 0.10);    display:flex; align-items:center; justify-content:flex-end; text-align:center; }
					.container1 .row1 .col1 .menumobileunavbar ul li:hover {color:blue; }
                    .container1 .row1 .col1 .menumobileunavbar .addtocart{color:black; font-size:15px;  background-color:transparent; padding:8px 40px;   border:solid 1px transparent; border-radius:50px;  }
					.container1 .row1 .col1 .menumobileunavbar .addtocart:hover{ color:white; font-size:15px; background-color:blue; padding:8px 40px; border:solid 1px blue;  border-radius:50px; }
					.container1 .row1 .col1 .menumobileunavbar .addtocart i{color:,black; font-size:20px;}
					.container1 .row1 .col1 .menumobileunavbar .addtocart i:hover{color:white; font-size:20px;}
					
        .container1 .row1 .col2 { width:10%; display:flex; align-items:center; justify-content:flex-start; text-align:center;}
		   .container1 .row1 .col2 .text1 { color:blue; font:800 30px 'Stingray';}

	    .container1 .row1 .col3 { width:80%;  display:flex; align-items:center; justify-content:center; text-align:center;}
		    .container1 .row1 .col3  ul { display:flex; align-items:center; justify-content:center; text-align:center;  flex-wrap:wrap;  grid-row-gap:0rem; grid-column-gap:2rem;}
              .container1 .row1 .col3  ul li{ color:black; font:800 15px 'cairo',sans-serif;  cursor:pointer;}
			  .container1 .row1 .col3  ul li:hover{ color:blue;}

		.container1 .row1 .col4 { width:10%;  display:flex; align-items:center; justify-content:flex-end; text-align:center;}
		   .container1 .row1 .col4  a{ cursor:pointer; background-color:transparent; padding:3px 15px;   border:solid 1px transparent; border-radius:50px;  }
		   .container1 .row1 .col4  a:hover{ background-color:blue; padding:3px 15px; border:solid 1px blue;  border-radius:50px; }
		   .container1 .row1 .col4  a i{ font-size:20px; }		   
		       .container1 .row1 .col4 .menucart {   background: #fff;	width: 300px;padding: 10px 0;  box-shadow: 5px 5px 20px 0px rgb(117 117 117 / 40%);   border-radius:6px;              z-index: 9999;  visibility: hidden;  opacity: 0;              position: absolute;   top:0px;	left:0;    transform: translateY(90px);         }
               .container1 .row1 .col4 .menucarthover { visibility: visible;  opacity: 1;             transform: translateY(70px);   transition: opacity .4s, transform .5s;	}
	

@media only screen and (max-width:1170px) { 
		.container1 .row1 .col1 { width:50%; display:flex; justify-content:flex-start;  }
	    .container1 .row1 .col2 { width:50%; display:flex; justify-content:flex-end; }
		.container1 .row1 .col3 {  display:none;}
		.container1 .row1 .col4 {  display:none;}
}

</style>

<div class="container1">
  <div class="row1">
  
		
     	<div class="col1">
	     <a class="iconeopen">  <i class="fas fa-bars"></i> </a> 
		    <div class="menumobilebackground">
		    <div class="menumobileunavbar">
			    <i class="iconeclose fas fa-times"></i> 
                <div class="text1"> Dripoda </div>  
                <ul> <li>الرئيسة</li>  <li>معلومات عنا</li>  <li>المدونة</li>  <li>أسئلة وأجوبة</li>  <li>اتصل بنا</li>  <li>تسجيل الدخول</li> </ul>
				<a class="addtocart"> <i class="fa fa-cart-plus"></i>  0 </a>	
            </div>				 
		    </div>	
        </div>
		
        <div class="col2">
            <div class="text1"> Dripoda </div>     
        </div>
	
	
	    <div class="col3">
	       <ul> <li>الرئيسة</li>  <li>معلومات عنا</li>  <li>المدونة</li>  <li>أسئلة وأجوبة</li>  <li>اتصل بنا</li>  <li>تسجيل الدخول</li> </ul>
        </div>
		
	    <div class="col4">
	        <a> <i class="fa fa-cart-plus"></i>  0 </a>	
             	<div class="menucart">
		        	<i class="fa fa-shopping-cart"></i> 	
		        	<h5>ليس لديك أي شيء بالسلة.</h5> 		    
		        </div>	
        </div>
	
  </div>
</div>



<script>
$(".container1 .row1 .col4  a").hover(    function(){ $(".container1 .row1 .col4 .menucart ").toggleClass("menucarthover"); }    );
$(".container1 .row1 .col1 .iconeopen").click(function(){    $(".container1 .row1 .col1 .menumobilebackground").addClass("menumobilebackgroundhover");    $(".container1 .row1 .col1 .menumobileunavbar").addClass("menumobileunavbarhover");        });
$(".container1 .row1 .col1 .menumobileunavbar .iconeclose").click(function(){   $(".container1 .row1 .col1 .menumobilebackground").removeClass("menumobilebackgroundhover");     $(".container1 .row1 .col1 .menumobileunavbar").removeClass("menumobileunavbarhover");   });
</script>





























































<?php
	    
if(       $_GET["idd"]     )
{    
    $query  = mysqli_query(   mysqli_connect("localhost","root","root","fedex")    ,   " select * from tablee WHERE id=".$_GET['idd']."    "  );
    foreach($query as $row)	
    {	
       $id=$row['id'];       $img=$row['img'];	  $title=$row['title']; 	  $subtitles=$row['subtitles']; 	  $description=$row['description'];	  $prix=$row['prix'];	  $tag=$row['tag'];	  $tags=$row['tags']; 	  $category=$row['category']; 	  $author=$row['author'];    	  
    }
}       
?>



<style>
.container2{background-color:transparent; width:100%; height:auto; padding:5% 5%;}
   .container2 .row{background-color:transparent; width:100%; height:auto; display:flex;  grid-column-gap:2rem;}


        .container2 .row .col1{background-color:transparent;  width:70%; height:auto;  } 
		.container2 .row .col1 .content{background-color:transparent;  height:auto; margin:0% 0%; padding:0% 0%;  border-radius:5px; }
		
			.container2 .row .col1 img{width:100%; max-width:auto; height:auto; border-radius:5px;}	

			.container2 .row .col1 .widget-price{display:none; justify-content:center; text-align:center; grid-row-gap:1rem; margin:5% 0%;}
        	    .container2 .row .col1 .text1{color:black; font:800 2rem 'cairo',sans-serif;     }
		        .container2 .row .col1 .btn1{background:#004aea; width: 100%; padding: 10px 60px; border:solid 1px #ccc; border-radius:20px;  color: #fff; font:400 20px 'cairo';      cursor: pointer;     }
                .container2 .row .col1 .btn2 {background:#004aea; width: 100%; padding: 10px 60px; border:solid 1px #ccc; border-radius:20px;  color: #fff; font:400 20px 'cairo';     cursor: pointer;     }            
			    .container2 .row .col1 .download-rating {} 
				   .container2 .row .col1 .download-rating span {color:#666e82; font:bold 20px 'cairo'; }
				   .container2 .row .col1 .download-rating .star i {color:yellow; font-size:20px; }
			    .container2 .row .col1 .comment  {}
				    .container2 .row .col1 .comment i { color:#666e82;  font-size:30px; }
  				    .container2 .row .col1 .comment span { color:#666e82;  font:bold 30px 'cairo'; }
			   		   
			.container2 .row .col1 .singlenav { background-color:transparent; display:flex; margin:5% 0% 0% 0%;}
		       .container2 .row .col1 .singlenav span {background-color:white; padding:10px 20px; border:solid 1px #0000000d;   color:black; font:800 20px 'cairo',sans-serif;  cursor:pointer; }
	           .container2 .row .col1 .singlenav span.active{background-color:blue; color:white;}
			.container2 .row .col1 .singlecontent {background-color:white; display:flex;  padding:4% 3%; }
			   .container2 .row .col1 .singlecontent .item { display: none;  }
	           .container2 .row .col1 .singlecontent .item.active { display: block; }
			        .container2 .row .col1 .singlecontent .item .text1{margin:0px 0px 0px 0px;  color:#666e82; font:400 17px 'cairo',sans-serif;   }
				    .container2 .row .col1 .singlecontent .item .text2{margin:20px 0px 0px 0px;   color:#666e82; font:800 17px 'cairo',sans-serif;   }
				    .container2 .row .col1 .singlecontent .item ul{   padding:0px 20px 0px 0px;   margin:10px 0px 0px 0px;       line-height: 30px;    }
                         .container2 .row .col1 .singlecontent .item ul li{ color:#666e82; font:600 1.1rem 'cairo',sans-serif;    list-style-type: disc;    }
                    .container2 .row .col1 .singlecontent .item .btnn1{background:#004aea;  padding: 10px 50px; margin:10px 0px 0px 0px;    border:solid 1px #ccc;  border-radius:20px;  color:#fff; font:400 18px 'cairo';   cursor: pointer;        }
            			   
			.container2 .row .col1 .related-items{background-color:white; padding:2% 2% ;  margin:5% 0%; }
			   .container2 .row .col1 .related-items .text1{color:black; font:600 30px 'cairo'; text-indent:1rem; text-align:right; margin:0% 0% 2% 0%;}
			   .container2 .row .col1 .related-items .roww{background-color:transparent; width:100%; padding:0; margin:0;   display:flex; justify-content:flex-start; flex-wrap:wrap;  }
			      .container2 .row .col1 .related-items .roww .coll{ background-color:transparent; width: 33.333333%; padding:15px 15px; }
                  .container2 .row .col1 .related-items .roww .coll .item{background-color:white; text-align:RIGHT; }
				      .container2 .row .col1 .related-items .roww .coll .item img{width:100%; max-width:auto;  }
				      .container2 .row .col1 .related-items .roww .coll .item .text2{ color:#2e3d62; font:600 18px 'cairo'; line-height: 2rem; }
					  .container2 .row .col1 .related-items .roww .coll .item .text3{color:#666; font:600 14px 'cairo';}

				  
				  
				  
		.container2 .row .col2 {background-color:transparent; width:30%; height:auto;   }
		.container2 .row .col2 .sidebar{background-color:white;  height:auto; margin:0% 0%; padding:2% 2%;  border-radius:5px; }
		
		    .container2 .row .col2 .widget-price{display:grid; justify-content:center; text-align:center; grid-row-gap:1rem;}
        	    .container2 .row .col2 .text1{color:black; font:800 25px 'cairo',sans-serif;     }
		        .container2 .row .col2 .btn1{background:#004aea; width: 100%; padding: 10px 60px; border:solid 1px #ccc; border-radius:20px;  color: #fff; font:400 20px 'cairo';      cursor: pointer;     }
                .container2 .row .col2 .btn2 {background:#004aea; width: 100%; padding: 10px 60px; border:solid 1px #ccc; border-radius:20px;  color: #fff; font:400 20px 'cairo';     cursor: pointer;     }            			  				
				.container2 .row .col2 .comments{display:grid; justify-content:center;} 
				    .container2 .row .col2 .comments i {color: rgb(228, 235, 255) !important; }
                    .container2 .row .col2 .comments span { color:rgb(0, 74, 234);  font:bold 42px 'cairo'; }
			   
			.container2 .row .col2 .widget-product-information{display:grid;  justify-content:center; text-align:center; margin:30px 0px 0px 0px}
			    .container2 .row .col2 .widget-product-information .text1 {color:#2e3d62; font:800 25px 'cairo';}
				.container2 .row .col2 .widget-product-information table { color:#666e82; font:400 15px 'cairo';  border-collapse:collapse;   }
                   .container2 .row .col2 .widget-product-information table tr,  table td {border-bottom: 1px solid #eff1f5; padding: 10px 15px; }

			.container2 .row .col2 .widget-tags{ display:grid;  justify-content:center; text-align:center; margin:30px 0px 0px 0px}
			    .container2 .row .col2 .widget-tags .text1 {color:#2e3d62; font:800 25px 'cairo';}
				.container2 .row .col2 .widget-tags  ul{background-color:transparent; width:100%; padding:4%; margin: 0;   display:flex; justify-content:center; flex-wrap:wrap; }
				   .container2 .row .col2 .widget-tags  li{ padding:2%; }  
				   .container2 .row .col2 .widget-tags  li a{ background-color:rgb(228, 235, 255);  padding: 3px 15px; border-radius: 20px;      color:#666e82; font:800 15px 'cairo'; cursor:pointer; }  
                   .container2 .row .col2 .widget-tags  li a:hover{background-color:#004aea; color:white;  transition: 0.3s; }






@media only screen and (max-width:1200px) { 
	.container2 .row .col2 .btn1{padding: 10px 60px; font:400 15px 'cairo';       }
    .container2 .row .col2 .btn2 { padding: 10px 60px;  font:400 15px 'cairo';     }            
}


@media only screen and (max-width:1020px) { 
	.container2 .row .col2 .btn1{  padding: 10px 40px;  font:400 15px 'cairo';       }
    .container2 .row .col2 .btn2 { padding: 10px 40px;  font:400 15px 'cairo';     }            
}

@media only screen and (max-width:869px) { 
.container2 .row .col2 .text1{font:800 25px 'cairo',sans-serif;     }
	.container2 .row .col2 .btn1{  padding: 10px 20px;  font:400 15px 'cairo';       }
    .container2 .row .col2 .btn2 { padding: 10px 20px;  font:400 15px 'cairo';     } 
.container2 .row .col2 .widget-product-information .text1 {font:800 20px 'cairo';}
.container2 .row .col2 .widget-tags .text1 {font:800 20px 'cairo';}	
}

@media only screen and (max-width:776px) { 
    .container2 .row{width:100%; display:grid;  }
        .container2 .row .col1{ width:100%;  } 
	    .container2 .row .col2 {width:100%;    }		
    .container2 .row .col1 .related-items .roww{width:100%;  display:grid; flex-wrap:wrap;  }
		.container2 .row .col1 .related-items .roww .coll{ width:100%;  }    	
.container2 .row .col1 .widget-price{ display:grid;}
}

@media only screen and (max-width:360px) { 
.container2 .row .col1 .singlenav { margin:5% 0% 5% 0%;}
   .container2 .row .col1 .singlenav span {font:800 14px 'cairo',sans-serif;  cursor:pointer; }
.container2 .row .col1 .singlecontent .item ul{    padding:0px 20px 0px 0px;     }
   
                   
  
}
</style>






<div class="container2">
    <div class="row">
	  
	    <div class="col1">	
		<div class="content">	
		
		    <img src="<?php echo $img ?>">  	

			<div class="widget-price">
		        <div class="text1"><?php echo $prix ?></div>
			    <form method="post">  <input  type="submit"   value="$6.00 – قم بالشراء"  name=""  id=""  class="btn1" />   </form>
			    <a class="btn2"> <i class="fa fa-eye"></i> المعاينة المباشرة</a>
                <div class="download-rating">
				    <span>تقييم المنتج</span>
				    <div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i>  <i class="fa fa-star"></i>  <i class="fa fa-star"></i>  <i class="fa fa-star"></i></div>
				</div>
				<div class="comment">
				   <i class="fa fa-fw fa-2x fa-shopping-cart"></i>   <span>1</span>   <i class="fa fa-fw fa-2x fa-comments" ></i> <span>0</span>
				</div>						
			</div>
			
			
		    <div class="singlenav tab">  
		      <span class="span active" onclick="openCity(event, 'a') " >تفاصيل المنتج</span>  
			  <span class="span"        onclick="openCity(event, 'b')" >التعليقات</span> 
			  <span class="span"        onclick="openCity(event, 'c')" >الدعم</span> 
			</div>
	        <div class="singlecontent">
				<div class="item active" id="a" > 
                    <?php echo  $description  ?>
					<form method="post">  <input  type="submit"   value="$6.00 – قم بالشراء"  name=""  id=""  class="btnn1" />   </form>
					
				</div>
				<div class="item" id="b" > 
				22
		        </div>
			    <div class="item" id="c" > 
				33
		        </div>	
		    </div>	
						
						
			<div class="related-items">
			   <div class="text1">منتجات قد تعجبك</div>
			   <div class="roww">
			        <div class="coll">  
					<div class="item">
				           <img src="img/project2/product1zoom.jpg"/>
					        <div class="text2">سيراتي الذاتية</div>
					       <div class="text3">صفحة هبوط html لسيرتك الذاتية الإلكترونية</div>
					</div>
				    </div>
			        <div class="coll">  
					<div class="item">
				           <img src="img/project2/product1zoom.jpg"/>
					       <div class="text2">سيراتي الذاتية</div>
					       <div class="text3">صفحة هبوط html لسيرتك الذاتية الإلكترونية</div>
					</div>
				    </div>
			        <div class="coll">  
					<div class="item">
				           <img src="img/project2/product1zoom.jpg"/>
					       <div class="text2">سيراتي الذاتية</div>
					       <div class="text3">صفحة هبوط html لسيرتك الذاتية الإلكترونية</div>
					</div>
				    </div>	
				</div>
			</div>
			

		</div>
		</div>
		
		
		
		
		<div class="col2">
		<div class="sidebar">
		
		    <div class="widget-price">
		        <div class="text1"><?php echo  $prix ?> </div>
			    <form method="post">  <input  type="submit"   value="$6.00 – قم بالشراء"  name=""  id=""  class="btn1" />   </form>
			    <a class="btn2"> <i class="fa fa-eye"></i> المعاينة المباشرة</a>
				<div class="comments"> 
				   <i class="fa fa-fw fa-2x fa-comments" ></i>
                   <span>0</span> 				   
				</div>           
			</div>
			
			<div class="widget-product-information">
			    <h2 class="text1">معلومات المنتج</h2>
				<table>  <tbody>
                      <tr> <td>اخر تحديث:</td>     <td>نوفمبر 28, 2019</td>  </tr>
					  <tr> <td>تاريخ الصدور:</td>  <td>نوفمبر 28, 2019</td>  </tr>
					  <tr> <td>الإصدار:</td>        <td>2.0.0</td>            </tr>
					  <tr> <td>حجم الملف:</td>     <td>700Ko</td>            </tr>
                </tbody> </table>			
			</div>
			
			<div class="widget-tags">
			     <div class="text1">الكلمات المفتاحية</div>
				 <ul> <?php echo  $tags ?>   </ul>
			</div>
			
	    </div>
		</div>
		
		 
		 
	</div>
</div>



<script>
function openCity(evt, cityName) {
 
  for (i = 0; i < document.getElementsByClassName("item").length; i++) 
  {    document.getElementsByClassName("item")[i].style.display = "none";  }
  
  for (i = 0; i < document.getElementsByClassName("span").length; i++) 
  {   document.getElementsByClassName("span")[i].className = document.getElementsByClassName("span")[i].className.replace(" active", "");}
  
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  
}
</script>

































































<style>
.container7{background-color:white; width:100%; height:auto;  padding:2% 5%; }
  .container7 .row1{background-color:transparent; width:100%; max-width:auto; height:auto; display:flex;  flex-wrap: wrap;   }
        .container7 .row1 .col1{ background-color:transparent;  width:25%;  height:auto;  text-align:right;  padding:14px 15px; }
		    .container7 .row1 .col1 .text1 { color:blue; font:800 30px 'Stingray';}
		    .container7 .row1 .col1 .text {color:rgb(66, 66, 66);  font:400 19px 'cairo',sans-serif; margin-top: 20px;   } 
	    .container7 .row1 .col2{ background-color:transparent;  width:25%;  height:auto;  text-align:right;  padding:5px 15px; }
	        .container7 .row1 .col2 .text {color:#2e3d62; font:800 22px 'cairo',sans-serif; margin-bottom:25px;}
			.container7 .row1 .col2 ul{margin: 0;padding: 0;}  
			   .container7 .row1 .col2 ul li{color:#666e82; font:600 18px 'cairo',sans-serif; line-height: 32px; }
	    .container7 .row1 .col3{ background-color:transparent;  width:25%;  height:auto;  text-align:right;  padding:5px 15px;}
	        .container7 .row1 .col3 .text {color:#2e3d62; font:800 22px 'cairo',sans-serif; margin-bottom:25px;}
			.container7 .row1 .col3 ul{ margin: 0;padding: 0;}    
			   .container7 .row1 .col3 ul li{color:#666e82; font:600 18px 'cairo',sans-serif; line-height: 32px; }
	    .container7 .row1 .col4{ background-color:transparent;  width:25%;  height:auto;  text-align:center;  padding:14px 15px; }
		    .container7 .row1 .col4 .socialmedia i { color:#666e82;   margin: 0 20px;  }
		    .container7 .row1 .col4  img{ margin-top: 20px; width:50px; height:auto;  }

@media (max-width: 800px){
	.container7 .row1 .col1{width:50%;} 
	.container7 .row1 .col2{width:50%;} 
	.container7 .row1 .col3{width:50%;} 
    .container7 .row1 .col4{width:50%;} 
}

@media (max-width: 360px){
	.container7 .row1 .col1{width:100%;} 
	.container7 .row1 .col2{width:100%;} 
	.container7 .row1 .col3{width:100%;} 
    .container7 .row1 .col4{width:100%;} 
}
</style>


<div class="container7">

   <div class="row1">
        <div class="col1">
		   <div class="text1"> Dripoda </div> 
           <div class="text">متجر لبيع القوالب والمنتجات الرقمية</div>		  
        </div>
		<div class="col2">
		    <div class="text"> التصنيفات </div> 
			<ul>  <li>HTML</li> <li>Landing page</li>  <li>PSD</li>  <li>Scripts</li>  <li>WordPress</li>  </ul>
        </div>
		<div class="col3">
		    <div class="text"> صفحات تهمك  </div> 
		   	<ul>  <li>أسئلة وأجوبة</li> <li>الأحكام والشروط</li>  <li>الأحكام والشروط</li>  <li>اتصل بنا</li>   </ul>
        </div>	
		<div class="col4">
		   <div class="socialmedia">   <i class="fab fa-instagram"></i>  <i class="fab fa-twitter"></i>   <i class="fab fa-facebook-f"></i>   </div>
		   <img src="img/project2/paypal.png"/>   
        </div>
   </div>
    
</div>

















<style>
.footer-copyright{background-color:rgb(37, 37, 40); width:100%; height:auto; padding: 20px 0;  text-align: center;}
  .footer-copyright .text{color:#c8c8cc; font:400 20px 'cairo',sans-serif;}

@media (max-width: 600px){
   .footer-copyright .text{font:400 15px 'cairo',sans-serif;}
}
</style>

<div class="footer-copyright">
	     <div class="text">Copyright © 2019 Dripoda All Rights Reserved</div>
</div>









<style>
.backtotop { color: #004aea;  cursor:pointer;  display:none; position: fixed; bottom: 30px;  right: 30px;}
</style>

<i  id="backtotop" class="backtotop fa fa-fw fa-3x fa-arrow-circle-up" ></i>

<script>
	$(window).on('scroll', function () {

		if ($(this).scrollTop() >= 700) 
		{	$('#backtotop').fadeIn(500);} 
		else 
		{$('#backtotop').fadeOut(500);}

	});




	$('#backtotop').click( function(){  	   $('body,html').animate({  scrollTop: 0 }, 500);       });
</script>