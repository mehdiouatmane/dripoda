<html lang="en"  >
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>project1</title>
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
.container0{background-color:transparent; width:100%; height:80px;      z-index:10;       display:flex; align-items:center; justify-content:center; text-align:center;      position:fixed; top:0;    }
.sticky { background-color:white;   width:100%; height:80px;      z-index:10;    display:flex; align-items:center; justify-content:center; text-align:center;          position:fixed; top:-100px;  transform: translateY(100px);  transition: transform  3s; }

   .container0 .navbar{background-color:transparent; width:100%; height:80px;  padding:2% 10% 2% 10%;   display:flex; align-items:center; justify-content:center; text-align:center; }

        .container0 .col1{background-color:transparent;   width:30%;  height:auto;   display:flex;  align-items:center;   justify-content:flex-start;   text-align:left;   }
            .container0 .col1 a { color:white; font-size: 20px;  font-weight: 600;  font-family: Stingray;     letter-spacing: 1px; }
            .sticky .col1 a  {color:black}

        .container0 .col2{background-color:transparent;  width:70%;  height:auto;   display:flex;  align-items:center;   justify-content:flex-end;   text-align:right;  }
              .container0 .col2 ul { display:flex;  grid-column-gap: 1.5rem; direction: rtl;}
              .container0 .col2 ul li  a {    background-color:transparent; padding: 0.5rem ;  color: white;  font:600 13px "cairo",sans-serif;  letter-spacing: .5px; text-decoration: none; cursor: pointer;}
              .sticky .col2 ul li a{  color:black  }
			     .container0 .col2 ul li  a.active{    background-color:#41444485; padding: 0.5rem ;     position:relative;   }
                 .sticky .col2 ul li  a.active {background-color:#5505f11c;}
                 .container0 .col2 ul li  a.active::after{  content: "";  background-color: #ffffffbf;   width:100%;  height:20%;      position: absolute;  left: 50%; bottom:-20%;      transform: translateX(-50%);   transition: transform 5s;    }                  
                 .sticky .col2 ul li  a.active::after {background-color:black;}

        .container0 .iconeopen{   background-color:transparent;  width:50%;  height:auto;   display:none;  align-items:center;   justify-content:flex-end;   text-align:right;  }
		.sticky .iconeopen { background-color:transparent;  width:50%;  height:auto;   display:none;  align-items:center;   justify-content:flex-end;   text-align:right;}
           .container0 .iconeopen .icon-bar{ color:white; font-size:30px;}
           .sticky .iconeopen .icon-bar{color:black; font-size:30px;}
		
        .container0 .navbar-collapse {background-color:transparent; width:100%; height:300px;  display:flex; align-items:center; justify-content:center; text-align:center;                   opacity:0;  visibility:hidden;     z-index:10;  transition:visibility 0.5s linear,opacity 0.5s linear;                                 position: fixed;     left:50%;      top:80px;   transform:translateX(-50%);         }
	    .sticky .navbar-collapse {  position:fixed; top:80px;   }
	    .container0 .navbarcollapsehover {visibility: visible; opacity:1; }
	     .container0 .navbar-collapse ul{ background-color:black; width:100%; height:300px; margin:0% 7% 0% 7%;}
	     .container0 .navbar-collapse ul li a{  color: white;  font:600 15px "cairo",sans-serif;  letter-spacing: .5px; line-height: 40px;  text-decoration: none; cursor: pointer; }
	     .container0 .navbar-collapse ul li a.active{    background-color:transparent; padding: 0.5rem ;     position:relative;   }
         .container0 .navbar-collapse ul li a.active::after{  content: "";  background-color: white;   width:200px;  height:2px;      position: absolute;   left: 50%; bottom:20%;      transform: translateX(-50%);   transition: transform 5s;    }                  
         .container0 .navbar-collapse ul li a:hover.active::after {  content: "";  background-color: white;   width:50px;  height:2px;      position: absolute;   left: 50%; bottom:20%;      transform: translateX(-50%);   transition: transform 5s;    }                  


@media only screen and (max-width:990px) { 
      .container0 .col1{width:80%;}

      .container0 .col2{width:50%; display:none; }
	
      .container0 .iconeopen{   width:20%;   display:block;   }         
      .sticky .iconeopen { width:20%;    display:block;  }
}


</style>


<div class="container0" dir="ltr" >

   <div class="navbar">
        <div class="col1">  
		    <a>Dripoda </a> 
	    </div>
        <div class="col2">
            <ul >
	           <li> <a href="#section1" class="active" >الرئيسية</a> </li>
		       <li> <a href="#section2">عني</a> </li>
		       <li> <a href="#section3">الخدمات</a> </li>
		       <li> <a href="#section4">اعمالي</a> </li>
		       <li> <a href="#section5">اتصل بي</a> </li>
		       <li> <a href="#section6">المتجر</a> </li>
	        </ul>
		</div>
		<div class="iconeopen">
		   <i class="icon-bar fas fa-bars"></i>
		</div>
		<div class="navbar-collapse">
            <ul>
               <li> <a href="#section1" class="active">الرئيسية</a> </li>
               <li> <a href="#section2" >عني</a> </li>
               <li> <a href="#section3" >الخدمات</a> </li>
               <li> <a href="#section4" >أعمالي</a> </li>        
               <li> <a href="#section5">اتصل بي</a> </li>
		       <li> <a href="#section6"> المتجر</a> </li>  
            </ul>
        </div>
	</div>
   

</div>



<script>

onscroll = function(){

 document.querySelectorAll(".container0").forEach(link => {  
    if(  window.scrollY>0 )  
    {   link.classList.add("sticky");     }   
	else  
	{   link.classList.remove("sticky");      }
 });

 document.querySelectorAll(".col2 ul li a").forEach(link => {  
    if(  window.scrollY >=  document.querySelector(link.hash).offsetTop   &&     window.scrollY <  document.querySelector(link.hash).offsetTop + document.querySelector(link.hash).offsetHeight )  
    {   link.classList.add("active");     }   
	else  
	{  link.classList.remove("active");      }
 });
  
 
  
  
 document.querySelectorAll(".navbar-collapse ul li a").forEach(link => {  
    if(  window.scrollY >=  document.querySelector(link.hash).offsetTop     &&     window.scrollY <  document.querySelector(link.hash).offsetTop + document.querySelector(link.hash).offsetHeight   )  
    {   link.classList.add("active");     }   
	else  
	{  link.classList.remove("active");      }
 });
  
}


$(".iconeopen").click(           function(){ $(".navbar-collapse").toggleClass("navbarcollapsehover"); }              );



$('a[href^="#"]').on('click', function(event) {  if( $( $(this).attr('href') ).length )   {      event.preventDefault();        $('html, body').animate({  scrollTop: $( $(this).attr('href') ).offset().top  }, 1000);  }  }); 




</script>































 <style>
.container1 {background-image:url(img/project1/header.jpg);  background-position:50% 0%;   background-size:cover;       width:100%; height:100vh;          display:grid; align-items:center; justify-content:center; text-align:center;  margin:0% 0% 5% 0%;  position:relative;}	
.container1:before{ content: ''; background-color:#171819d4; width:100%; height:100vh;   position:absolute;  top:0; left:0;  }

    .container1 .roww1 {background-color:transparent; width:100%; height:100vh;         display:flex; align-items:center; justify-content:center; text-align:center; }
        .container1 span{background-color:transparent; width:auto; height:auto;  display: inline-block; }
           .container1 .cd-headline.clip  b {    color:white;  font:800 50px 'cairo',sans-serif;   white-space: nowrap;       opacity: 0;    display: inline-block;         position: absolute;  left: 0;   top: 0;            }
           .container1 .cd-headline.clip b.is-visible { opacity: 1;    position: relative;     }
    .container1 .roww2 {background-color:transparent; width:100%; height:auto; display:flex; align-items:center; justify-content:center; text-align:center; }
 
    svg{fill: white;    width: 100%;    position: absolute;    bottom: 0px;    left: 0;  }   



@media only screen and (max-width:990px) { 
.container1 .cd-headline.clip  b {    font:800 45px 'cairo',sans-serif;    }          
}

@media only screen and (max-width:750px) { 
.container1 .cd-headline.clip  b {    font:800 35px 'cairo',sans-serif;    }         
}

@media only screen and (max-width:580px) { 
.container1 .cd-headline.clip  b {    font:800 30px 'cairo',sans-serif;    }         
}

@media only screen and (max-width:360px) { 
.container1 .cd-headline.clip  b {    font:800 25px 'cairo',sans-serif;    } 
svg{fill: white;    width: 100%;    position: absolute;    bottom: -4px;    left: 0;  }        
}
</style>


<div class="container1" id="section1"  >  

    <div class="roww1" > 
        <span class="cd-words-wrapper cd-headline clip">
           <b class="is-visible">مسوق إلكتروني</b>
           <b>مصمم UI / UX</b>
           <b>مكود HTML5 / CSS / Javascript</b>
	       <b>مبرمج PHP</b>
        </span> 
	</div> 
  
    <div class="roww2" > 
	     <a href="#section2" ><i  style=" cursor:pointer; position: absolute; bottom: 8vh; left: 0;  width: 100%; color:white;  font-size:40px; animation: bounce 2s infinite;  " class=" fas fa-chevron-down"></i>   </a> 
    </div>
	
	<svg x="0px" y="0px" viewBox="0 186.5 1920 113.5 "  >     	     <polygon points="-30,300 355.167,210.5 1432.5,290 1920,198.5 1920,300"></polygon>    </svg> 
  
	
</div>

  
<script src="https://asebbane.com/js/animated.headline.js"></script>



	
	






























<style>
.container2 {background-color:white; width:100%; height:auto;   }	
.container2 .row {background-color:white; width:100%; height:auto;   }	
   
   .container2 .hero{background-color:transparent;  width: 100%;  height:auto;  padding:10% 10%; display:flex; align-items:flex-start; justify-content:center; text-align:center;  flex-wrap:wrap; grid-row-gap: 2rem;  grid-column-gap: 0rem;  }     
   	    .container2  .coll1 { background-color:transparent; width:60%;  height:auto; display:grid; align-items:flex-start; justify-content:flex-start; text-align:right;}
            .container2  .content {   width: 500px; }   
	            .container2  .text1{ color:black; font: 600 30px Stingray;     letter-spacing: 1px;  }
	            .container2  .text2{ color: #666;   font: 500 13px sans-serif; text-transform: uppercase; letter-spacing: 1px;  margin-bottom: 20px; }
	            .container2  .text3{ color: #9a9a9a; font: 500 14px sans-serif;  line-height: 1.6;  word-spacing: 1px; }
	            .container2  .text4{ color: #9a9a9a; font: 500 14px sans-serif;  line-height: 1.6;  word-spacing: 1px; margin-bottom: 30px;}}
            .container2  .skills  {  width: 500px;  }
                .container2 .skill-item { margin-bottom: 40px;}
                .container2 .skill-item:last-child {    margin-bottom: 0;}         
                .container2 .skill-item  h6 {    font-size: 15px;    text-transform: uppercase;    letter-spacing: 1px;    margin-bottom: 10px;}
                .container2 .skill-item h6 span {     font-size: 15px;  margin-bottom: 0;    float: left;  }
                .container2 .skills-progress {   background:#f7f7f7; width:100%;  height: 5px;  border-radius: 10px;         position:relative;   }
                .container2 .skillbar-bar { background:#000;  width:0px;  height: 100%;  border-radius: 10px;    position: absolute;    top: 0;   right: 0;      }      
	    .container2  .coll2 { background-color:transparent; width:40%; height:auto; display:grid; align-items:flex-start; justify-content:flex-end; text-align:left;}
            .container2 .img1{width:400px; height:auto; } 


@media only screen and (max-width:1225px) { 
.container2 .hero {padding:0% 5%; } 	
}

@media only screen and (max-width:1070px) { 
  .container2 .hero{ padding:0% 2%; }
  .container2  .coll1 { width:100%; display:grid; align-items:center; justify-content:center; text-align:right; }
   .container2  .content {  width: 450px; }  
   .container2  .skills  {  width: 450px;  }
  .container2  .coll2 { width:100%; display:grid; align-items:center; justify-content:center; text-align:center;}
  .container2 .img1{width:330px; height:auto; } 
}

 @media only screen and (max-width:500px) { 
   .container2  .content {  width: 300px; }  
   .container2  .skills  {  width: 300px;  }

 }

 @media only screen and (max-width:360px) { 
   .container2  .content {  width: 300px; }  
   .container2  .skills  {  width: 300px;  }
 }
 

 @media only screen and (max-width:320px) { 
  .container2 .img1{width:320px; height:auto; } 
 }
 
 
 </style>


<div class="container2" id="section2"  >  
<div class="row" >  

    <div class="hero">
           <div class="coll1">
                <div class="content">
                    <p class="text1">Dripoda</p>
	                <p class="text2">مصمم UI / UX &amp; مكود</p>
	                <p class="text3">حاصل على شهادة من مايكروسوفت في HTML5 / CSS / JAVASCRIPT</p>
	                <p class="text4">خبرة 8 سنوات في التصميم والتكويد</p>
                </div>
    	 	    <div class="skills "  >
                    <div class="skill-item">
                        <h6> التصميم <span>95%</span></h6>
                        <div class="skills-progress "   data-value="95%"   >  <div class="skillbar-bar" ></div>       </div>
                    </div>
                    <div class="skill-item">
                        <h6> التكويد  <span>99%</span></h6>
                        <div class="skills-progress "   data-value="99%"   >  <div class="skillbar-bar" ></div>       </div>
                    </div> 	
                    <div class="skill-item">
                        <h6> البرمجة <span>50%</span></h6>
                         <div class="skills-progress "   data-value="50%"   >  <div class="skillbar-bar" ></div>       </div>
                    </div> 
                    <div class="skill-item">
                        <h6> التسويق <span>45%</span></h6>
                        <div class="skills-progress "   data-value="45%"   >  <div class="skillbar-bar" ></div>       </div>
                    </div> 			 
                </div>
            </div>
            <div class="coll2">
                 <img class="img1" src="img/project1/saidasebbane.png"/> 
            </div>
    </div>
	
</div>
</div>
  

<script> 
$(window).on('scroll', function() { 
  if ( $(window).scrollTop()+ $(window).height() > $('.skills').offset().top  ) 
  {    
     $('.skills-progress').each(function() {  
	     $(this).find('.skillbar-bar').animate({ width: $(this).attr('data-value')  }, 6000);  
	 });        
   }
});
</script>





















<style>
.se-tring1 {   position: relative; padding:0px 0px 100px  0px;  }
   .se-tring1 .left {     border-bottom: 100px solid #f7f7f7;    border-right: 30vw solid white;  position: absolute;  top: 0; left: 0;}
   .se-tring1 .right {    border-bottom: 100px solid #f7f7f7;     border-left: 70vw solid white;   position: absolute;  top: 0; right: 0;}
 
</style>
<div class="se-tring1"> 
    <span class="left"></span> 
    <span class="right"></span> 
</div>
















<style>
.container3 {background-color:#f7f7f7;      width:100%; height:auto;     display:grid; align-items:flex-start; justify-content:center; text-align:center; }	
    .container3 .roww1{ background-color:transparent;  width: 100%; height:auto; padding:3% 0% 7% 0%;    }
        .container3 .text1 {  color:black; font:800 40px 'Cairo', sans-serif;   line-height: .7;  margin-bottom: 15px;  }
        .container3 .text2{padding: 0 15px;    color:black; font:600 11px  inherit;   text-transform: uppercase;    word-spacing: 1px;    display: inline-block; position: relative;}
	         .container3 .text2:before { content:'';  background-color:#000;  width:50px; height:2px;  position:absolute;  bottom:3px;  left:-50px; }
             .container3 .text2:after  { content:'';  background-color:#000;  width:50px; height:2px;  position:absolute;  bottom:3px;  right:-50px; } 
	.container3 .roww2{  background-color:transparent;   width: 100%; height:auto;   display:flex; align-items:center; justify-content:center; text-align:center;   flex-wrap:wrap; }
        .container3 .coll{   max-width: 33.333333%;  height:auto; padding:0% 0% 0% 0%;      }
	        .container3 .coll i {    color:black; font-size:40px; }
	        .container3 .coll h6{  padding: 5px 10px;   color: black;   font:600 17px 'Cairo', sans-serif;     text-align: center;  }
	        .container3 .coll p{   padding: 5px 70px;   color: #9a9a9a; font:500 12px 'Cairo', sans-serif;  text-align: center;   line-height: 1.6; word-spacing: 1px;}
	

@media only screen and (max-width:990px) { 
        .container3 .coll{   max-width: 100%;  height:auto; padding:0% 0% 0% 0%;      }
}
</style>



<div class="container3" id="section3">  

        <div class="roww1" >  
            <p class="text1">الخدمات</p>
            <p class="text2">خدمات متنوعة</p>
        </div>
		
		<div class="roww2" >  
	        <div class="coll"> 
		        <i class="fas fa-tools"></i>
		        <h6>تصميم صفحات هبوط</h6>
		   	    <p>أقوم بتصميم صفحات هبوط جذابة ومتجاوبة مع كل الشاشات والجولات لتسويق عروض او منتجات او خدمات...</p>
		    </div>
		    <div class="coll"> 
		        <i class="fas fa-cut"></i>
		        <h6>تكويد ملفات PSD</h6>
			    <p>أقوم بتكويد ملفات PSD وتحويلها الى ملفات html بإحترافية مطلقة وكود نظيف ومنسق</p>
		    </div>
		    <div class="coll"> 
		        <i class="fas fa-pencil-alt"></i>
		        <h6>تصميم شعارات وبنرات</h6>
		    	<p>أقوم بتصميم شعارات نصية او رمزية او صورة...، كما اصمم بنارت بمختلف المقاسات للمواقع او للاعلانات على منصات التواصل الاجتماعي</p>
		    </div>
		    <div class="coll">
                <i class="fas fa-project-diagram"></i>		
		        <h6>تصميم وتكويد موقع إلكتروني</h6>
			    <p>أقوم بتصميم وتكويد مواقع أنترنت متعددة الصفحات HTML للأفراد أو الشركات... </p>
		    </div>
		    <div class="coll">
                <i class="fas fa-mobile-alt"></i>		
		        <h6>تصميم تطبيقات الهواتف</h6>
			    <p>أقوم بتصميم تطبيقات الهواتف بصيغة PSD جاهزة للتكويد الى HTML او IONIC</p>
		    </div>	
         </div> 

</div>




















<style>
.se-tring2 { position: relative;   padding:0px 0px 100px  0px;  }
   .se-tring2 .left {    border-bottom: 100px solid #fff;    border-right: 70vw solid #f7f7f7;    position:absolute; top:0; left:0;}
   .se-tring2 .right {   border-bottom: 100px solid #fff;    border-left:  30vw solid #f7f7f7;    position:absolute; top:0; right:0;}
</style>
<div class="se-tring2"> 
   <span class="left"></span> 
   <span class="right"></span> 
</div>








































<style>
.container4 {background-color:white; width:100%; height:auto;  }	
.container4 .row {background-color:white; width:100%; height:auto; padding:0% 10%; }	

        .container4 .section-head{background-color:transparent; width: 100%; height:auto;  padding:0% 0% 5% 0%; display:grid; align-items:center; justify-content:center; text-align:center; }
	       .container4 .text1{ color:black; font:800 30px 'cairo',sans-serif;}
		   .container4 .text2{    color:black; font:600 15px 'cairo',sans-serif;     display: inline-block;  position:relative;}
		      .container4 .text2:before{ content:''; background-color:black; width:50px; height:2px;  position:absolute;  bottom:8px;  left:-60px;  }
			  .container4 .text2:after{ content:''; background-color:black; width:50px; height:2px;  position:absolute;  bottom:8px;  right:-60px;  }

	    .container4 .portfolio-menu{background-color:transparent;  width: 100%; height:auto;  padding:0% 0% 5% 0%;   display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap; grid-row-gap:1rem;}
           .container4 span{background-color:none;  padding: 9px 25px;  border: 1px dashed #555;  border-radius: 30px;   box-shadow: 0px 10px 30px -4px rgb(0 0 0 / 20%);       color:none; font:800 12px 'cairo',sans-serif;    cursor: pointer;     margin: 0 5px; }		 
	       .container4 span.active {    background-color:black; color:white }

        .container4 .portfolio-item {background-color:transparent;  width: 100%; height:auto; padding:0% 0% 5% 0%;  display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap; grid-row-gap:0rem ; grid-column-gap:0rem;   }          
		    .container4 .item{width:33.333333%; padding:1% 1%;    display:flex; align-items:center; justify-content:center; text-align:center;} 
		    .container4 .item .cader{ width:300px; height:300px;  position:relative; }     
		        .container4 .item .caderamama{width:300px; height:300px; cursor:pointer;   }  
            	.container4 .item .caderkhalfa{ background-color:white;  width:290px; height:290px;   visibility: hidden;   position:absolute; top:50%; left:50%;  transform:translate(-50%,-50%);   }
		          .container4 .item .caderkhalfahover{ visibility: visible; transition:all ease-in-out .3s; }	
                .container4 .item .textt1{  color:#35424C; font:800 18px 'cairo',sans-serif;     visibility: hidden;    position:absolute;  left:50%;   top:30px;   transform: translate(-50%, 30px);    }    
                  .container4 .item .textt1hover{ visibility: visible; transform: translate(-50%, 40px);  transition:all ease-in-out .5s;}	
		        .container4 .item .textt2{color:#35424C; font:500 14px 'cairo',sans-serif; word-spacing: 1px;    visibility: hidden;         position:absolute;  left:50%; top:50px; transform:translate(-50%,50px); }   
                  .container4 .item .textt2hover{ visibility: visible;  transform: translate(-50%, 45px); transition:all ease-in-out .5s;}	
		        .container4 .item .textt3{ color:black; font:800 30px sans-serif;  cursor:pointer;    visibility: hidden;      position:absolute; bottom:5%; right:5%;      }   
		          .container4 .item .textt3hover{visibility: visible;  transition:all ease-in-out .3s; }   

@media only screen and (max-width:1160px) { 
.container4 .row { padding:0% 10%; }
  .container4 .item{width: 50%;  }     
}

@media only screen and (max-width:720px) { 
.container4 .row {padding:0% 0%; }
  .container4 span{font:800 12px 'cairo',sans-serif;    }		 
  .container4 .item{width: 100%;  }     
}



</style>

<div class="container4" id="section4">  
<div class="row">

    <div class="section-head">
	   <div class="text1"> أعمالي </div>
	   <div class="text2"> آخر اعمالي </div>
    </div>	
	
	<div class="portfolio-menu">
	   <span data-filter=".a" class="btn1 active" > صفحات الهبوط </span>
	   <span data-filter=".b" class="btn2"> تصميم وتكويد المواقع </span> 
	   <span data-filter=".c" class="btn3"> التصميم </span>
       <span data-filter=".d" class="btn4"> الكل </span>
    </div>	
			 			 
			 
	<div class="portfolio-item " >	
	    <div class="item a b  d ">
	    <div class="cader">
            <img class="caderamama" src="img/project1/project1.jpg"/>
	        <div class="caderkhalfa"> </div>
	        <div class="textt1">شارك واربح</div>
            <div class="textt2">تصميم وتكويد</div>
			<div class="textt3"> <a href="http://www.asebbane.com/integration/calories-labels/" > <i class="fas fa-external-link-alt"></i> </a>   </div> 
        </div>   
		</div> 	
	    <div class="item a b  d ">
	    <div class="cader">
            <img class="caderamama" src="img/project1/project1.jpg"/>
	        <div class="caderkhalfa"> </div>
	        <div class="textt1">شارك واربح</div>
            <div class="textt2">تصميم وتكويد</div>
			<div class="textt3"> <a href="http://www.asebbane.com/integration/calories-labels/" > <i class="fas fa-external-link-alt"></i> </a>   </div> 
        </div>   
		</div> 		
	    <div class="item a b  d ">
	    <div class="cader">
            <img class="caderamama" src="img/project1/project1.jpg"/>
	        <div class="caderkhalfa"> </div>
	        <div class="textt1">شارك واربح</div>
            <div class="textt2">تصميم وتكويد</div>
			<div class="textt3"> <a href="http://www.asebbane.com/integration/calories-labels/" > <i class="fas fa-external-link-alt"></i> </a>   </div> 
        </div>   
		</div> 	
	    <div class="item a   d ">
	    <div class="cader">
            <img class="caderamama" src="img/project1/project1.jpg"/>
	        <div class="caderkhalfa"> </div>
	        <div class="textt1">شارك واربح</div>
            <div class="textt2">تصميم وتكويد</div>
			<div class="textt3"> <a href="http://www.asebbane.com/integration/calories-labels/" > <i class="fas fa-external-link-alt"></i> </a>   </div> 
        </div>   
		</div> 	
	    <div class="item a  c d ">
	    <div class="cader">
            <img class="caderamama" src="img/project1/project1.jpg"/>
	        <div class="caderkhalfa"> </div>
	        <div class="textt1">شارك واربح</div>
            <div class="textt2">تصميم وتكويد</div>
			<div class="textt3"> <a href="http://www.asebbane.com/integration/calories-labels/" > <i class="fas fa-external-link-alt"></i> </a>   </div> 
        </div>   
		</div> 			
	    <div class="item a  c d ">
	    <div class="cader">
            <img class="caderamama" src="img/project1/project1.jpg"/>
	        <div class="caderkhalfa"> </div>
	        <div class="textt1">شارك واربح</div>
            <div class="textt2">تصميم وتكويد</div>
			<div class="textt3"> <a href="http://www.asebbane.com/integration/calories-labels/" > <i class="fas fa-external-link-alt"></i> </a>   </div> 
        </div>   
		</div> 		    		
	</div>	
	
</div>
</div>

<script src="https://asebbane.com/js/isotope.pkgd.min.js"></script>
<script>
$(window).on("load",function (){
  $('.portfolio-item ').isotope({ itemSelector:'.item' ,  isOriginLeft: false });  
  $('.portfolio-menu span').click(function(){
      $('.portfolio-item ').isotope({ filter: $(this).attr('data-filter') ,    }); 
      $(this).addClass('active').siblings().removeClass('active');     
   }); 
});


   
$('.cader').hover(function(){    
   $('.caderkhalfa', this).toggleClass('caderkhalfahover');  
   $('.textt1', this).toggleClass('textt1hover');  
   $('.textt2', this).toggleClass('textt2hover');  
   $('.textt3', this).toggleClass('textt3hover'); 
 
});
</script>


  
   













<style>
.se-tring3 {   position: relative;  padding:0px 0px 100px  0px;  }
   .se-tring3 .left {     border-bottom: 100px solid #f7f7f7;    border-right: 30vw solid white;  position: absolute;  top: 0; left: 0;}
   .se-tring3 .right {    border-bottom: 100px solid #f7f7f7;     border-left: 70vw solid white;   position: absolute;  top: 0; right: 0;} 
</style>
<div class="se-tring3"> 
  <span class="left"></span> 
  <span class="right"></span> 
</div>















   









   












<style>
.container5 {background-color:#f7f7f7; width:100%; height:auto;  }	
.container5 .row {background-color:transparent; width:100%; height:auto; padding:5% 10%; }	
   
    .container5 .section-head{width: 100%; height:auto; padding:4% 0%; display:grid; align-items:center; justify-content:center; text-align:center; }
	    .container5 .text1{ color:black; font:800 30px 'cairo',sans-serif;}
		.container5 .text2{    color:black; font:600 15px 'cairo',sans-serif;     display: inline-block;  position:relative;}
		    .container5 .text2:before{ content:''; background-color:black; width:50px; height:2px;  position:absolute;  bottom:8px;  left:-60px;  }
			 .container5 .text2:after{ content:''; background-color:black; width:50px; height:2px;  position:absolute;  bottom:8px;  right:-60px;  }

    .carousel{direction:ltr; padding:4% 0%;}
    .owl-carousel{ background-color:transparent; width:100%; height:auto; display:flex; align-items:center;  justify-content:center;  text-align:center;  margin:0% 0% 0% 0%; }           
      .owl-carousel .item {background-color:green; display: inline-block; }
         .owl-carousel .item a{ text-decoration: none; cursor:pointer;}
         .owl-carousel .item img {width: 110px; height: 110px;  } 
    .owl-carousel .owl-nav {display:block; margin:0% 0%; }                                          .owl-carousel .owl-nav .owl-prev {position:absolute; top:70%;  left:45%;}      .owl-carousel .owl-nav  button.owl-prev  {background-color:#D6D6D6;  width:30px; height:30px;    color:white; font:800 25px sans-serif;}            .owl-carousel .owl-nav  button.owl-prev:hover {background-color:#869791;  color:white;}      .owl-carousel .owl-nav  button.owl-prev:focus {outline: none;}                                                                .owl-carousel .owl-nav .owl-next {position:absolute; top:70%;  right:45%;}     .owl-carousel .owl-nav  button.owl-next  {background-color:#D6D6D6;  width:30px; height:30px;    color:white; font:800 25px sans-serif;}            .owl-carousel .owl-nav  button.owl-next:hover {background-color:#869791;  color:white;}      .owl-carousel .owl-nav  button.owl-next:focus {outline: none;}  
    .owl-carousel  .owl-dots {display:block;  margin:9% 0%;  }     .owl-carousel  .owl-dots .owl-dot{  background-color:transparent;  }      .owl-carousel  .owl-dots .owl-dot span {  background-color:#ccc;  width:9px; height:9px;  border-radius:30px;    transition:all ease-in-out .2s;}         .owl-carousel  .owl-dots .owl-dot:hover span  { background-color:black;}       .owl-carousel  .owl-dots .owl-dot.active span { background-color:black;  }            




@media only screen and (max-width:930px) {   
  .owl-carousel .owl-nav .owl-prev { left:43%;}    
   .owl-carousel .owl-nav .owl-next {right:43%;}  
   .owl-carousel  .owl-dots {margin:12% 0%;  }    
}

@media only screen and (max-width:630px) {   
	.container5 .text1{font:800 26px 'cairo',sans-serif;}
	.container5 .text2{  font:600 12px 'cairo',sans-serif; }
		.container5 .text2:before{ width:45px;  }
	    .container5 .text2:after{ width:45px;  }
   .owl-carousel .owl-nav .owl-prev { left:42%;}    
   .owl-carousel .owl-nav .owl-next { right:42%;} 
   .owl-carousel  .owl-dots {margin:12% 0%;  } 

}


@media only screen and (max-width:500px) {   
.container5 .row {padding:5% 5%; }	
  .owl-carousel .owl-nav .owl-prev {left:40%;}    
   .owl-carousel .owl-nav .owl-next {right:40%;} 
   .owl-carousel  .owl-dots {margin:12% 0%;   }   
}

@media only screen and (max-width:360px) {   
	.container5 .text1{font:800 24px 'cairo',sans-serif;}
	.container5 .text2{  font:600 11px 'cairo',sans-serif; }
		.container5 .text2:before{ width:20px; left:-35px;  }
	    .container5 .text2:after{ width:20px;  right:-35px;  } 
   .owl-carousel .item img {width: 100px; height: 100px;  } 
  .owl-carousel .owl-nav {display:none;  }   
}


@media only screen and (max-width:320px) {   
	.container5 .text2{  font:600 11px 'cairo',sans-serif; }
		.container5 .text2:before{ width:10px; left:-18px;  }
	    .container5 .text2:after{ width:10px;  right:-18px;  } 

}
</style>



<div class="container5"  id="section5">
<div class="row">


    <div class="section-head">
	   <div class="text1"> وسائل الدفع </div>
	   <div class="text2">أقبل الدفع بأي من هذه الأبناك والعملات الإلكترونية والرقمية </div>
    </div>	
	
	

    <div class="carousel">
    <div class=" owl-carousel 1 owl-theme ">
        <div class="item">
           <a ><img src="https://asebbane.com/img/bank/payonner.jpg" alt=""></a>
        </div>	 
        <div class="item">
           <a ><img src="https://asebbane.com/img/bank/cardano.jpg" alt=""></a>
        </div>	 
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/steller.jpg" alt=""></a>
        </div>
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/ripple.jpg" alt=""></a>
        </div>  
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/litcoin.jpg" alt=""></a>
        </div>	 
	    <div class="item">
           <a><img src="https://asebbane.com/img/bank/binance.jpg" alt=""></a>
        </div>		 
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/ethereum.jpg" alt=""></a>
        </div>	
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/bitcoin.jpg" alt=""></a>
        </div>	 	 
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/paysera.jpg" alt=""></a>
        </div>	 	 	 
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/skrill.jpg" alt=""></a>
        </div>			 
        <div class="item">
           <a><img src="https://asebbane.com/img/bank/payeer.jpg" alt=""></a>
        </div>	
    </div> 
	</div> 
 


 
   
</div> 
</div>



<script>
$(document).ready(function() {

var owl=$('.1');
owl.owlCarousel({
    items:8,    
	nav: true,     navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
	dots: true,
    loop:true,   
	autoplay: true, 
	autoplayTimeout: 5000,
	autoplayHoverPause:true,
	smartSpeed:550,
    responsive:{  0:{items:3, },  500:{items:3, },  630:{items:4}, 800:{ items:5}, 1000:{ items:5}, 1200:{items:8}, },
});


})
</script>













  














<style>
.container6 {background-color:white; width:100%; height:auto;  }	
.container6 .row {background-color:transparent; width:100%; height:auto;  }	
  
    .container6 .section-head{background-color:transparent;  width: 100%; height:auto;  padding:2% 5%; display:grid; align-items:center; justify-content:center; text-align:center; }
	    .container6 .text1{ color:black; font:800 30px 'cairo',sans-serif;}
		.container6 .text2{    color:black; font:600 15px 'cairo',sans-serif;     display: inline-block;  position:relative;}
		    .container6 .text2:before{ content:''; background-color:black; width:50px; height:2px;  position:absolute;  bottom:8px;  left:-60px;  }
			 .container6 .text2:after{ content:''; background-color:black; width:50px; height:2px;  position:absolute;  bottom:8px;  right:-60px;  }

    .container6 .form {background-color:transparent; width:100%; height:460px; padding:2% 5%; display:flex; align-items:center; justify-content:center; text-align:center;  flex-wrap:wrap;   }
        .container6 .inputtext{width:33.33333333%; height:auto; display:flex; align-items:center; justify-content:center; text-align:center;  }  
		   .container6 .inputtext	.input{background-color:#fafafa;  width:100%; height:40px; border: solid 1px #e3e3e3; border-radius:4px; box-shadow:none;  color:#262626; font:400 15px 'cairo',sans-serif; text-indent: 9px;  margin:0% 2%; }  
           .container6 .inputtext	.input:focus{ outline: none !important;  border:solid 1px #a2a0a0; box-shadow: none; }   
           .container6 .inputtext	.input::placeholder {color:#827f7f; font:400 15px 'cairo',sans-serif;} 
		.container6 .inputmessage{width:100%; height:auto; display:flex; align-items:center; justify-content:center; text-align:center;}
		   .container6 .inputmessage  .input{ background-color:#fafafa;  width:100%;  height:200px; max-height:200px;  border: solid 1px #e3e3e3; border-radius:4px; box-shadow:none;        color:#262626; font:400 15px 'cairo',sans-serif; text-indent: 9px;      }  
           .container6 .inputmessage  .input:focus{ outline: none !important;  border:solid 1px #a2a0a0; box-shadow: none;    }   
           .container6 .inputmessage  .input::placeholder {color:#827f7f; font:400 15px 'cairo',sans-serif;   } 
        .container6 .inputbtn{width:100%; display:flex; align-items:center; justify-content:center; text-align:center;}
		   .container6 .inputbtn .input{background-color:black; width:200px; height:40px;  border:none; border-radius:6px;  color:white; font:800 16px 'cairo',sans-serif;}




@media only screen and (max-width:633px) { 
    .container6 .text1{  font:800 26px 'cairo',sans-serif;}
		.container6 .text2{   font:600 12px 'cairo',sans-serif;   }
		    .container6 .text2:before{ width:45px;  }
			 .container6 .text2:after{ width:45px;   }
			 
    .container6 .inputtext{width:100%;  }  	
	    .container6 .inputtext	.input{ margin:0% 0%; }  
}


@media only screen and (max-width:360px) {   
	.container6 .text1{font:800 24px 'cairo',sans-serif;}
	.container6 .text2{  font:600 11px 'cairo',sans-serif; }
		.container6 .text2:before{ width:20px; left:-40px;  }
	    .container6 .text2:after{ width:20px;  right:-40px;  } 
}


@media only screen and (max-width:320px) {   
	
	.container6 .text2{  font:600 11px 'cairo',sans-serif; }
		.container6 .text2:before{ width:10px; left:-18px;  }
	    .container6 .text2:after{ width:10px;  right:-18px;  } 
}

</style>


<div class="container6" id="section6">  
<div class="row">


    <div class="section-head">
	   <div class="text1"> اتصل بي </div>
	   <div class="text2">مرحب بأي رسالة منك سواء كانت طلب او استفسار او اقتراح </div>
    </div>	
	
	 <form class="form">
	    <div class="inputtext">         <input class="input" type="text"  placeholder="الإسم *"  value=""  name=""   /> </div>
		<div class="inputtext">         <input class="input" type="email"  placeholder="البريد الإلكتروني *"  value="" name=""   /> </div>
		<div class="inputtext">         <select class="input" name="subjects" >    <option value="" disabled="" selected="">اختر موضوع الرسالة</option>  <option value="تصميم صفحات هبوط">تصميم صفحات هبوط</option> <option value="تكويد ملفات PSD">تكويد ملفات PSD</option>  <option value="تصميم شعارات وبنرات">تصميم شعارات وبنرات</option>  <option value="تحويل أموال">تحويل أموال</option>   <option value="تصميم وتكويد موقع إلكتروني">تصميم وتكويد موقع إلكتروني</option>    <option value="تصميم تطبيقات الهواتف">تصميم تطبيقات الهواتف</option>    <option value="إستفسار أو اقتراح">إستفسار أو اقتراح</option>   </select>    </div>
		<div class="inputmessage">      <textarea  class="input"  type="text" placeholder="الرسالة *"   value=""  name=""  > </textarea>     </div>
        <div class="inputbtn">          <input class="input"  type="submit"    value="إرسال الرسالة" name=""   />  </div>     
	 </form> 	
	
	
	 
</div>
</div>


















<style>
.container7 {background-color:black; width:100%; height:auto;  }	
.container7 .row {background-color:transparent; width:100%; height:auto;  }	


   .container7 .logo{width:100%; heigh:auto; padding:5% 0% 0% 0% ;  color:white; font: 600 20px Stingray;  letter-spacing: 1px;   display:flex; align-items:center; justify-content:center; text-align:center;   }
   .container7 .social { width:100%; heigh:auto; padding:2% 0% 0% 0% ; display:flex; align-items:center; justify-content:center; text-align:center;  }
	    .container7 .social img { width:80%; max-width: 100%; height: auto;       vertical-align: middle; border-style: none;  }
        .container7 .social img:hover {opacity: .7;}
	.container7  p { width:100%; heigh:auto; padding:2% 0% 5% 0% ;  color:#999;  font:800 15px 'cairo',sans-serif; text-transform: uppercase;     display:flex; align-items:center; justify-content:center; text-align:center;  }	





@media only screen and (max-width:360px) {   
	.container7  p { font:800 14px 'cairo',sans-serif;  }	

}		
</style>


<div class="container7" id="section7">  
<div class="row">

    <a class="logo"> Dripoda  </a>
	
	<div class="social">
	   <a href=""><img src="https://asebbane.com/img/asebbanestore.png"  alt=""></a>
	   <a href=""><img src="https://asebbane.com/img/khamsat.png"  alt=""></a>
	   <a href=""><img src="https://asebbane.com/img/picalica.png"  alt=""></a>
	   <a href=""><img src="https://asebbane.com/img/facebook.png" alt=""></a>
	</div>
	
	<p>  © 2018 -    <script>document.write(new Date().getFullYear());</script>   كل الحقوق محفوظة لـ    <font>Dripoda.com</font>    </p>
	
</div>
</div>



