


<?php
if( isset($_POST['ajax']) && isset( $_POST['id']) ){
 $query = mysqli_query(   mysqli_connect("freedb.tech", "freedbtech_mehdiouatmane","mehdi2014@A" , "freedbtech_wordpresst")   ,    "SELECT * FROM tableee where id=".$_POST['id'].""    );
	foreach($query as $row)
	{
	$output = 
	"    
	<style>
		   .preview-box .iconclose{ color: #007bff; font-style: 22px; cursor: pointer;  display:flex; justify-content:flex-start;  text-align:left;  }
		   .preview-box .imgkbira {width:500px;  height:auto;   }  
		   .preview-box .title{color:black; font:800 17px 'cairo',sans-serif;        display:flex; align-items:center; justify-content:flex-start; text-align:right; margin:0% 3% 0% 3%;}
		   .preview-box .costauthorcategory{width:100%; display:flex; }
		   .preview-box .authorcategory{ width:50%; display:grid; }
		   .preview-box .author{color:#bbb1c5; font:800 11px 'cairo',sans-serif;     display:flex; align-items:center; justify-content:flex-start; text-align:right; margin:0% 3% 0% 3%;}
		   .preview-box .category{color:#aca8ad; font:800 13px 'cairo',sans-serif;   display:flex; align-items:center; justify-content:flex-start; text-align:right;  margin:0% 3% 0% 3%;}
		   .preview-box .cost{width:50%; color:#666e82; font:800 20px 'cairo',sans-serif;       display:flex; align-items:center; justify-content:flex-end; text-align:left;  margin:0% 3% 0% 3%;}

      @media (max-width: 600px){ 	 
        .preview-box .imgkbira {width:450px;  height:auto;   }
      }

      @media (max-width: 500px){ 	 
        .preview-box .imgkbira {width:350px;  height:auto;   }
      }

      @media (max-width: 360px){ 	 
       .preview-box .imgkbira {width:300px;  height:auto;   }
      }
     </style>


	<span class='iconclose fas fa-times'></span> 
	<img class='imgkbira' src='".$row["img"]."'   >
	<div class='title'>  ".$row["title"]." ".$row["subtitles"]."    </div>
    <div class='costauthorcategory'>
	    <div class='authorcategory'> 
		   <div class='author'>  ".$row["author"]."  </div>
		   <div class='category'> ".$row["category"]."   </div>
		</div>
		<div class='cost'> ".$row["prix"]."   </div>
	 </div>	
	" ;   
	echo $output;
	}	
 exit;
}
?>














<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>project2</title>
<style>
*{ padding:0; border:0; margin:0; outline: none !important;  list-style: none; }  
*, ::after, ::before {    box-sizing: border-box;}  
html , body {direction: rtl; }    
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
.container1 {background-color:transparent; width:100%; height:80px; display:flex; align-items:center; justify-content:center; text-align:center; }
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
				    .container1 .row1 .col1 .menumobileunavbar ul { margin-bottom:5%; border-top: 1px solid rgba(0, 0, 0, 0.10);  display:grid; align-items:center; justify-content:center; text-align:center;  flex-wrap:wrap; grid-row-gap:0rem; grid-column-gap:0rem;  }
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



























<style>
.container2{   background-image: url(http://asebbane.com/store/wp-content/uploads/2019/11/bg-1.jpg);  background-position: center center;    background-size: cover;  width:100%; height:400px;    display:grid; align-items:center; justify-content:center; text-align:center;   }
    .container2 .row1 {width:100%; height:auto;    display:flex; align-items:center; justify-content:center; text-align:center; }
       .container2 .row1 .text{ color:white; font:800 30px 'cairo',sans-serif;  }
    .container2 .row2 {width:100%; height:auto;  display:flex; align-items:center; justify-content:center; text-align:center; }
       .container2 .row2 .text{color:white; font:800 20px 'cairo',sans-serif;   }
    .container2 .row3 {width:100%; height:auto; display:flex; align-items:center; justify-content:center; text-align:center; }
       .container2 .row3 form  {position: relative; }
           .container2 .row3 form input { background-color:transparent;   width: 650px;  height:60px;    border:solid 1px #ccc;  border-radius:50px;       color:#d9d9d9; font:400 20px 'cairo',sans-serif; text-indent: 9px;        }
              .container2 .row3 form input:focus{ outline: none !important;  border:solid 1px #a2a0a0; box-shadow: none; }   
              .container2 .row3 form input::placeholder {color:#d9d9d9; font:400 20px 'cairo',sans-serif; text-indent: 9px;  } 
           .container2 .row3 form .search {  color:white; font-size: 22px;  height: 60px; width: 54px;        position: absolute; top: 20px; left: 0; }
    .container2 .row4 {width:100%; height:auto; display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap; grid-row-gap:0rem; grid-column-gap:2rem;}
        .container2 .row4 .btn1 {background-color:white; padding:3px 20px; border-radius:20px;   color:black; font:800 20px 'cairo',sans-serif;  cursor:pointer;                 }
           .container2 .row4 .btn1:hover { transform:scale(1.1); }
        .container2 .row4 .btn2 {background-color:transparent; padding:3px 20px; border: dotted 2px white; border-radius:20px;      color:white; font:800 20px 'cairo',sans-serif; cursor:pointer;   }
           .container2 .row4 .btn2:hover { transform:scale(1.1); }



@media only screen and (max-width:720px) { 
        .container2 .row3 form input { width: 400px;     }
}

@media only screen and (max-width:360px) { 
        .container2 .row1 .text{ font:800 25px 'cairo',sans-serif;  }
		.container2 .row2 .text{font:800 17px 'cairo',sans-serif;   }
        .container2 .row3 form input { width: 320px;    }
}
</style>

<div class="container2">
  <div class="row1">
      <div class="text">  كل ما تحتاجه لإطلاق مشروعك  </div> 
  </div>
  <div class="row2">
     <div class="text">   صفحات هبوط، قوالب ووردبريس، سكريبتات... </div> 
  </div>
  <div class="row3">
     <form method="GET" action="#">     
	    <input type="text"  placeholder="ابحث..." value="" />                
         <i class="search fas fa-search"></i> 
	 </form>
  </div>
  <div class="row4">
     <div class="btn1"> منتجاتنا </div>
	 <div class="btn2"> أعرف أكثر </div>
  </div>
</div>














 
 




<style>
.container3{background-color:white; width:100%; height:auto;  }
  .container3 .row1{width:100%;  height:auto; padding:5% 5% 1% 5%; display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  grid-row-gap:0rem; grid-column-gap:0rem;}
     .container3 .row1 .text{color:#2e3d62; font:800 30px 'cairo',sans-serif; }
  .container3 .row2{width:100%;  height:auto; padding:0% 5% 4% 5%;  display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  grid-row-gap:0rem; grid-column-gap:0rem;}
     .container3 .row2 .text{color:#666e82; font:600 1.1rem 'cairo',sans-serif; }


.row3{  background-color:transparent; max-width:1100px;  padding:10px;  margin: 30px auto;  }
   
   .singlenav{  background-color:transparent; display: flex; align-items:center; justify-content: center; text-align:center; flex-wrap: wrap; }
      .singlenav .nav{  padding:0px 10px; margin:8px 8px;  border:dashed 1px #382068; border-radius:15px;     color:rgb(13, 32, 104); font:600 16px 'cairo',sans-serif;   cursor: pointer;    transition: all 0.3s ease;}
      .singlenav .nav.active  ,  .singlenav .nav:hover{ background-color:blue; color:white;  }


   .singlecontent{ background-color:transparent; display: flex;  align-items:center; justify-content: center; text-align:center; flex-wrap: wrap; }
	.singlecontent .content{  background-color:transparent; padding:0; margin:8px;            cursor: pointer;    transition: all 0.3s ease;   animation: animate 0.4s ease;}    @keyframes animate { 0%{   transform: scale(0.5); } 100%{   transform: scale(1); }}
    .singlecontent .content.hide{  display: none; animation: animate 0.4s ease;}   @keyframes animate { 0%{   transform: scale(0.5); } 100%{   transform: scale(1); }}
      .singlecontent .content .imgsrira{  width:100px;  box-shadow: 5px 5px 20px 0px rgb(117 117 117 / 40%); border-radius: 20px;     }


       .shadow{  background: rgba(0,0,0,0.4); width:100%; height:100%;                z-index:1050; visibility:hidden; opacity:0;              display:none;             position: fixed;  left:0;  top:0;  }            
	     .showshadow{   visibility:visible; opacity: 1;       display:block;          }
       .preview-box{ background:#fff; width:auto; height:auto; padding: 10px; border-radius: 6px;   box-shadow: 0px 0px 15px rgba(0,0,0,0.2);             cursor:pointer;  z-index: 100000;                   visibility:visible; opacity:1;              display:block;             position:fixed; top:50%;  left:50%; transform:translate(-50%, -50%) scale(1);             }       


@media (max-width: 1150px){	   .container3 .row4 .item{width:16.66666666666667%;   }      }
	
@media (max-width: 768px){	 .container3 .row4 .item{width:20%;   }    }

@media (max-width: 548px){	 .container3 .row4 .item{width:25%;   }      }

@media (max-width: 600px){	 
	.container3 .row4 .item .itemfront{  width: 420px; height:auto; }
	.container3 .row4 .item .itemfront img {width:400px;  height:200px;   }
	.container3 .row4 .item .itemfront .titer{font:800 14px 'cairo',sans-serif; margin:0% 1% 0% 1%;  }
	.container3 .row4 .item .itemfront .cost{ font:800 17px 'cairo',sans-serif;     }   
}

@media (max-width: 360px){ 	 
  .container3 .row4{  padding:2% 0% 5% 0%;  }
  .container3 .row4 .item{width:33.33333333333333%;  } 
  .container3 .row4 .item .itemfront{  width: 290px; height:auto; }
  .container3 .row4 .item .itemfront img {width:270px;  height:150px;   }
  .container3 .row4 .item .itemfront .titer{font:800 12px 'cairo',sans-serif; margin:0% 1% 0% 1%;  }
  .container3 .row4 .item .itemfront .cost{ font:800 16px 'cairo',sans-serif;     }    
}
</style>



<div class="container3">

   <div class="row1">
      <div class="text">	    كل منتجاتنا    </div>  
   </div>
   
    <div class="row2">
      <div class="text">    ستجد هنا كل ما تريده لإنجاز أعمالك في أقل وقت ممكن وبأسعار تبدأ من 2$    </div>  
    </div>



<div class="row3">

   <div class="singlenav">
       <div class="nav active" data-filter="all">الكل</div>
       <div class="nav" data-filter="html">HTML</div>
       <div class="nav" data-filter="landingpage">LANDING PAGE</div>
       <div class="nav" data-filter="psd">PSD</div>
       <div class="nav" data-filter="scripts">SCRIPTS</div>
       <div class="nav" data-filter="wordpress">WORDPRESS</div>
    </div> 
  

    <div class="singlecontent">		
		<?php  
		   $result = mysqli_query(    mysqli_connect("freedb.tech", "freedbtech_mehdiouatmane","mehdi2014@A" , "freedbtech_wordpresst")            ,        " select * from tableee "      );
           foreach($result as $row)  
		   {      	  
					?> 	 
					<div class=" content <?php echo $row['filter'] ?> ">             			
						<a  class="clickimgsrira"       data-id='<?php echo $row["id"] ?>'   >  <img class="imgsrira" src="<?php echo $row["imgsrira"] ?>"   />  	   </a>					
					</div> 					 
					<?php  
		   }   
		?>	

		<div class='shadow'>
		<div class='preview-box'>
		</div>
		</div>
	
	</div>
	
</div>


  
	
</div>





<script>
document.querySelector(".singlenav").addEventListener("click", (event) =>
{
	   if(event.target.classList.contains("nav"))
	   {
			 document.querySelector(".singlenav").querySelector(".active").classList.remove("active");
			 event.target.classList.add("active");
			 document.querySelectorAll(".content").forEach((item) =>
			 {
				   if(  item.classList.contains(event.target.getAttribute("data-filter"))   ||   event.target.getAttribute("data-filter") === 'all'  )
				   {  item.classList.remove("hide");     	 item.classList.add("show");  }
				   else
				   {  	item.classList.remove("show");   item.classList.add("hide");   }
			 });
	   }
});







$(".clickimgsrira").click(function(){		
	$.ajax
	({   
	    type: 'post',    
		data: {ajax: 1,   id:$(this).data('id') },   
	    success:  function(data){   
	       $('.preview-box').html(data); 
           $('.shadow').addClass('showshadow');	   
	      }    
	  });	 
})	
 
 
$(".preview-box").hover(function(){
	$('.iconclose').click(function(){ 	
		$.ajax
		({   
	       type: 'post',    
		   data: {ajax: 1,   id:$(this).data('id') },   
	       success:  function(data){   
		      $('.preview-box').empty();
	       	  $('.shadow').removeClass('showshadow');			  
	        }    
	    });	      
	});	
});
</script>

















































<style>
.container4{background-color:#eff1f5; width:100%; height:auto;   }
  .container4 .row1{width:100%;  height:auto; padding:5% 5% 1% 5%;   display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  grid-row-gap:0rem; grid-column-gap:0rem;}
     .container4 .row1 .text{color:#2e3d62; font:800 30px 'cairo',sans-serif;  }
  .container4 .row2{width:100%;  height:auto; padding:0% 5% 4% 5%;  display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  grid-row-gap:0rem; grid-column-gap:0rem; }
     .container4 .row2 .text{color:#666e82; font:600 1.1rem 'cairo',sans-serif; }
  .container4 .row3{width:100%;  height:auto; padding:0% 5% 0% 5%;  display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  grid-row-gap:0.4rem; grid-column-gap:2rem; }
        .container4 .row3 span{ padding:0px 10px; border:dashed 1px #382068; border-radius:15px;     color:rgb(13, 32, 104); font:600 16px 'cairo',sans-serif;  cursor:pointer;}
        .container4 .row3 span.active{background-color:blue; color:white; }
  .container4 .row4{width:auto;  height:auto;  padding:2% 0% 5% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;  margin:0% 5%;   }
	 .container4 .row4 .item{background-color:transparent; width:33.33333333333333%; max-width:auto; height:auto;  padding:1%; }
	    .container4 .row4 .item  img {width:100%; max-width:auto; height:200px; border-radius:16px 16px 0px 0px;   display:flex; align-items:center; justify-content:center; text-align:center; }
        .container4 .row4 .item  .content{background-color:white; border-radius:0px 0px 16px 16px; }
		  .container4 .row4 .item  .title{color:#2e3d62; font:800 20px 'cairo',sans-serif;     display:flex; align-items:center; justify-content:flex-start; text-align:right; margin:0% 3% 0% 3%;}
		  .container4 .row4 .item  .subtitles{color:#666e82; font:600 17px 'cairo',sans-serif;   display:flex; align-items:center; justify-content:flex-start; text-align:right; margin:0% 3% 0% 3%; }
		  .container4 .row4 .item  .costandshow{display:flex; align-items:center; justify-content:space-between; margin:0% 3% 0% 3%;}
		     .container4 .row4 .item  .costandshow .prix{ color:black; font:800 20px 'cairo',sans-serif;   }
		     .container4 .row4 .item  .costandshow .menu{ font-size:20px;}


@media (max-width: 1150px){
	 .container4 .row4 .item{width:50%;    }	
}
	

@media (max-width: 640px){
	 .container4 .row4 .item{width:100%;     }	    
}
	
	
</style>


<div class="container4">

   <div class="row1">
      <div class="text">   أحدث المنتجات     </div>  
   </div>
   
    <div class="row2">
      <div class="text">   ستجد هنا أحدث منتجاتنا المصممة خصيصاً لتوفر عنك الوقت والجهد لإطلاق مشروعك بأقل الأسعار   </div>  
    </div>
	
	<div class="row3">
        <span data-filter=".a" class="active" >الكل</span> 
		<span data-filter=".b" >HTML</span> 
		<span data-filter=".c">LANDING PAGE</span> 
		<span data-filter=".d">PSD</span> 
		<span data-filter=".e">SCRIPTS</span> 
		<span data-filter=".f">WORDPRESS</span>  
    </div>
	
	
	
	
	<div class="row4" >
	     
        <?php  		 
           $result = mysqli_query(    mysqli_connect("freedb.tech", "freedbtech_mehdiouatmane" , "mehdi2014@A" , "freedbtech_wordpresst")            ,        " select * from tableee "      );
           while($row=mysqli_fetch_assoc($result)) 	 {   $id=$row['id'];     $filter=$row['filter'];    $img=$row['img'];	$imgsrira=$row['imgsrira'];  $title=$row['title']; 	  $subtitles=$row['subtitles']; 	  $description=$row['description'];	  $prix=$row['prix'];	  $tag=$row['tag'];	  $tags=$row['tags']; 	  $category=$row['category']; 	  $author=$row['author'];    	  
        ?> 		
        <div class="item <?php echo $filter ?>  " >  		
	        <a  href="project2post.php?idd=<?php echo $row['id']?>" > <img src="<?php echo $img ?>"   />  </a>	
			<div class="content">
			    <div class="title">   <?php echo $title ?>  </div>
			    <div class="subtitles">  <?php echo $subtitles ?>  </div>
			    <div class="costandshow">   
			       <div class="prix"><?php echo $prix ?>  </div> 
				   <div class="menu">	 <i class="fa fa-shopping-cart"></i>  <i class="fa fa-eye"></i>    <i class="fa fa-info-circle"></i> </div>
			    </div>	
			</div>
		</div>
        <?php 
        } 
        ?>
		
		
	</div>


	
</div>




<script src="https://asebbane.com/js/isotope.pkgd.min.js"></script>
<script>
$(window).on("load",function (){
  $('.container4 .row4').isotope(   { itemSelector:'.item' ,  isOriginLeft:false  ,  transitionDuration :'0.8s' }    );  
  $('.container4 .row3 span').click(function(){
      $('.container4 .row4').isotope({ filter: $(this).attr('data-filter') }  ); 
      $(this).addClass('active').siblings().removeClass('active');     
   });    
});
</script>


















<style>
.container5{background-color:white; width:100%; height:auto; padding:5% 0%;}

  .container5 .row1 {width:100%; height:auto; padding:0% 0% 1% 0%; display:flex; align-items:center; justify-content:center; text-align:center; }
       .container5 .row1 .text {color:#2e3d62; font:bold 30px 'cairo',sans-serif;}	   
  .container5 .row2 {width:100%; height:auto; padding:1% 0% 0% 0%; display:flex; align-items:center; justify-content:center; text-align:center; }
       .container5 .row2 .text {color:#666e82; font:400 18px'cairo',sans-serif;}	   
  .container5 .row3 {width:100%; height:auto; padding:5% 0% 5% 0%; display:flex; align-items:center; justify-content:center; text-align:center;  }
       .container5 .row3 .col {width:width:33.33333333333333%; height:auto; }	
         .container5 .row3 .col .blog{background-color:white; width:100%; height:auto; box-shadow: 0px 5px 20px 0px rgb(54 56 110 / 10%);  border-radius: 14px;   cursor:pointer; text-align:center;   }	   
	        .container5 .row3 .col .blog img{width:289px;  height:auto;}
			.container5 .row3 .col .blog .text{padding:5% 0%; color:#666e82; font:600 1.1rem 'cairo',sans-serif; }
</style>




<div class="container5">

    <div class="row1">
      <div class="text">أحدث الأخبار</div>    
    </div>
  
    <div class="row2">
        <div class="text">مقالات تساعدك في اطلاق مشروعك بالإضافة إلى آخر الأخبار وتحديثات المتجر</div>    
    </div> 
	
    <div class="row3">
	   <div class="col">
           <div class="blog">
		     <img src="img/project2/blog1.jpg"> 
			 <div class="text"> طريقة شراء منتج من المتجر </div> 
		   </div> 
       </div>		
    </div>
	
</div>
























<style>
.container6{background-color:#eff1f5; width:100%; height:auto;  padding:5% 0%; }
   .container6 .row1{background-color:transparent; width:100%;  height:auto;  display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
        .container6 .row1 .col{ background-color:transparent; width:33.33333333333333%;  height:auto; padding:2%;  }
            .container6 .row1 .service {background-color:white; width:100%;  height: auto;  padding:20px;   border-radius: 14px;  text-align:center;   }
               .container6 .row1 i{ padding: 20px; border: solid  1px #ccc; border-radius: 20px;       color: #666e82;  font-size:40px;    }
			     .container6 .row1 i:hover{  border:solid  1px  white;   }
		       .container6 .row1 .text1{color:#2b2a5a; font:800 22px 'cairo',sans-serif;  margin-bottom: 15px; }
		       .container6 .row1 .text2{color:#2b2a5a; font:400 15px 'cairo',sans-serif;  line-height: 30px;  }

@media (max-width: 767px){
	.container6 .row1 .col{ width:100%;   }  
}
	
</style>



<div class="container6">

    <div class="row1">
  
         <div class="col">
	        <div class="service">
	            <i class="fa fa-headphones"></i>
	            <div class="text1"> دعم فني 24/7 </div>
		        <div class="text2">الدعم الفني للأعمال متوفر 24/7 ونعمل على الرد على رسائل العملاء سواء عبر الموقع من خلال صفحة اتصل بنا أو وسائل التواصل الإجتماعي في أسرع وقت ممكن!  </div>
            </div>
	    </div>
		
    </div>
  
</div>


















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