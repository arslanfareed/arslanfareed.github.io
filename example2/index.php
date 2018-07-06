<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0,width=device-width"
/>
<link rel="stylesheet" type="text/css" href="index.css" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<title>Web-TechNO</title>
</head>

<body>

<script>

	function testScroll(){
	var height1 = document.getElementsByClassName("frontcover").item(0).clientHeight;
	var aboutusheight = document.getElementsByClassName("about").item(0).clientHeight;
	var myskillsheight = document.getElementsByClassName("myskill").item(0).clientHeight;
	var careerheight = document.getElementsByClassName("career").item(0).clientHeight;
	var whatidocontannerheight = document.getElementsByClassName("whatidocontanner").item(0).clientHeight;
	var portfolioheight = document.getElementsByClassName("portfolio").item(0).clientHeight;
	
	
	if(window.pageYOffset> height1-300)
	{document.getElementsByClassName("aboutdetail").item(0).classList.add("anim4");
	 document.getElementsByClassName("aboutdetail").item(0).style.opacity= 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	
    
	
	
	if(window.pageYOffset> height1)
	{document.getElementsByClassName("circlearea1").item(0).classList.add("anim1");
	 document.getElementsByClassName("circlearea1").item(0).style.left = 0+"%";
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}

    if(window.pageYOffset>height1)
	{document.getElementsByClassName("circlearea2").item(0).classList.add("anim2");
	 document.getElementsByClassName("circlearea2").item(0).style.bottom = 0+"%";
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}
				
	if(window.pageYOffset>height1)
	{document.getElementsByClassName("circlearea3").item(0).classList.add("anim3");
	 document.getElementsByClassName("circlearea3").item(0).style.right = 0+"%";
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}
		
	if(window.pageYOffset>height1+aboutusheight-200)
	{
	 document.getElementsByClassName("skill1").item(0).classList.add("anim6");
	 document.getElementsByClassName("skill1").item(0).style.opacity = 1;
	 document.getElementsByClassName("colorbar1").item(0).classList.add("anim51");
	 document.getElementsByClassName("colorbar1").item(0).style.left = -30+"px";
	 document.getElementsByClassName("skilltext").item(0).style.opacity = 1;
	 
	 
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}			
	if(window.pageYOffset>height1+aboutusheight-200)
	{
	 document.getElementsByClassName("skill2").item(0).classList.add("anim6");
	 document.getElementsByClassName("skill2").item(0).style.opacity = 1;
	 document.getElementsByClassName("colorbar2").item(0).classList.add("anim52");
	 document.getElementsByClassName("colorbar2").item(0).style.left = -90+"px";
	 document.getElementsByClassName("skilltext").item(1).style.opacity = 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}

	if(window.pageYOffset>height1+aboutusheight-200)
	{
	 document.getElementsByClassName("skill3").item(0).classList.add("anim6");
	 document.getElementsByClassName("skill3").item(0).style.opacity = 1;
	 document.getElementsByClassName("colorbar3").item(0).classList.add("anim53");
	 document.getElementsByClassName("colorbar3").item(0).style.left = -70+"px";
	 document.getElementsByClassName("skilltext").item(2).style.opacity = 1;		
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}
	
	if(window.pageYOffset>height1+aboutusheight-200)
	{
	 document.getElementsByClassName("skill4").item(0).classList.add("anim6");
	 document.getElementsByClassName("skill4").item(0).style.opacity = 1;
	 document.getElementsByClassName("colorbar4").item(0).classList.add("anim54");
	 document.getElementsByClassName("colorbar4").item(0).style.left = -120+"px";
	 document.getElementsByClassName("skilltext").item(3).style.opacity = 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}		
	
	if(window.pageYOffset>height1+aboutusheight-200)
	{
	 document.getElementsByClassName("skill5").item(0).classList.add("anim6");
	 document.getElementsByClassName("skill5").item(0).style.opacity = 1;
	 document.getElementsByClassName("colorbar5").item(0).classList.add("anim55");
	 document.getElementsByClassName("colorbar5").item(0).style.left = -50+"px";
	 document.getElementsByClassName("skilltext").item(4).style.opacity = 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}		
	if(window.pageYOffset>height1+aboutusheight-200)
	{
	 document.getElementsByClassName("skill6").item(0).classList.add("anim6");
	 document.getElementsByClassName("skill6").item(0).style.opacity = 1;
	 document.getElementsByClassName("colorbar6").item(0).classList.add("anim56");
	 document.getElementsByClassName("colorbar6").item(0).style.left = -140+"px";
	 document.getElementsByClassName("skilltext").item(5).style.opacity = 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}		



if(window.pageYOffset> height1+aboutusheight+careerheight+200)
	{document.getElementsByClassName("services_text").item(0).classList.add("anim12");
	 document.getElementsByClassName("services_text").item(0).style.opacity= 1;
	 document.getElementsByClassName("services_text").item(1).classList.add("anim12");
	 document.getElementsByClassName("services_text").item(1).style.opacity= 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}			

if(window.pageYOffset> height1+aboutusheight+careerheight+400)
	{document.getElementsByClassName("icando").item(0).classList.add("anim13");
	 document.getElementsByClassName("icando").item(0).style.left=0;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	

if(window.pageYOffset> height1+aboutusheight+careerheight+200)
	{document.getElementsByClassName("illustration").item(0).classList.add("anim14");
	 document.getElementsByClassName("illustration").item(0).style.right=0;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	



	if(window.pageYOffset> height1+aboutusheight+careerheight+whatidocontannerheight+200)
	{document.getElementsByClassName("portfolio_heading").item(0).classList.add("anim7");
	 document.getElementsByClassName("portfolio_heading").item(0).style.opacity= 1;
	 document.getElementsByClassName("portfolio_heading").item(1).classList.add("anim7");
	 document.getElementsByClassName("portfolio_heading").item(1).style.opacity= 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	
    

	if(window.pageYOffset> height1+aboutusheight+careerheight+whatidocontannerheight+400)
	{document.getElementsByClassName("some_works").item(0).classList.add("anim7");
	 document.getElementsByClassName("some_works").item(0).style.opacity= 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	
		

if(window.pageYOffset> height1+aboutusheight+careerheight+whatidocontannerheight+portfolioheight+200)
	{document.getElementsByClassName("contact_heading").item(0).classList.add("anim5");
	 document.getElementsByClassName("contact_heading").item(0).style.opacity= 1;
	 document.getElementsByClassName("contact_heading").item(1).classList.add("anim5");
	 document.getElementsByClassName("contact_heading").item(1).style.opacity= 1;
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	

if(window.pageYOffset>  height1+aboutusheight+careerheight+whatidocontannerheight+portfolioheight+400)
	{document.getElementsByClassName("left_section").item(0).classList.add("anim10");
	 document.getElementsByClassName("left_section").item(0).style.left= 0+"%";
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}	
		

if(window.pageYOffset> height1+aboutusheight+careerheight+whatidocontannerheight+portfolioheight+400)
	{document.getElementsByClassName("right_section").item(0).classList.add("anim11");
	 document.getElementsByClassName("right_section").item(0).style.right= 0+"%";
	}
	else{
		document.getElementsByClassName("slide4").item(0).classList.remove("anim");
		}			

    	


}


window.onscroll=testScroll



</script>


<header class="frontcover">
    <div class="header">
		
        <div class="logo">
        	<p class="theme-text	">Web <span class="normal-text">Techno</span></p>
        </div>
		
        <nav class="navigation">
            <div class="navigation1"><a href="#contactus"><p class="link_text">Contact Us</p></a></div>
            <div class="navigation2"><a href="#portfolio"><p class="link_text">Port Folio</p></a></div>
            <div class="navigation3"><a href="#aboutus"><p class="link_text">About Us</p></a></div>
            <div class="navigation4"><a href="index.php"><p class="link_text">Home</p></a></div>
	</nav>
        
        <div class="dropdown">
             <ul>
                 <li>
                 Menu
                    <ul>
                        <a href="index.php"><li>Home</li></a>
                        <a href="#aboutus"><li>About Us</li></a>
                        <a href="#portfolio"><li>Port Folio</li></a>
                        <a href="#contactus"><li>Contact Us</li></a>
                    </ul>
                </li>
            </ul>
		</div>

   </div>    
        
                
        
        
        <div class="web-title">
        	<p>Arslan Fareed</p>
       	</div>
        <div class="companyname">
        
        	<a href="https://www.facebook.com/" target="_blank"><div class="facebooklink"></div></a>
            <a href="https://www.rss.com/" target="_blank"><div class="rsslink"></div></a>
            <a href="https://www.linkedin.com/" target="_blank"><div class="linkedinlink"></div>
            <a href="https://plus.google.com/" target="_blank"><div class="googlelink"></div></a>
        </div>
        <div  class="circlearea">
        	<div class="circle"></div>
		</div>
</header>

<div class="contanner">
	
	<div class="about" id="aboutus">
    	<br /><br /><br /><br /><br /><br /><br />
    	<div class="aboutdetail">
        	<p class="aboutheading">About Us</p>
        	<p class="aboutheading">Prosonal Details</p>
            <p class="about_text">it is very difficult to maintain the system In such a fast growing world where technology seems to changes on each and every stage. Our Team is work hard day by day to keep our shoulder changes as tech changes. It is  our team work and effort that we hit the ground level and procede it to the edges of technology<br />
            New problem are arosing day by day as time changes, to over come such problems and matter we are continueley bringing new enovative idea so that we can over come those problem. 
            In past systems and program are able to remain and tend to remain stable for years and even for decades. But if we look around in over present it seem very difficult to make our program in such a way so that the can remain stable for just a single year. <br />
Our team is working hard and harder and will remain to work harder so that our current programs and upcoming program will have enough stability so that they can last for few year. working on to increase their live time.<br />
		Our Policy regarding quality is that work hard and harder so that quailty and stability keeps to increase as time changes. Our main focous during development is on quality and stability. We have separte depart just to ensure quality and stabiliy
</p>
        </div>
        <div class="circlewidget">
            <div class="circlearea1">
                <div class="circle1"></div>
                <div class="circle-content1">
                <p class="theme-text">Objective</p>
                    <p>To implement my skills in professional environment, which will allow me to be a leading person and enhance my abilities in the respected field</p>

                </div>
            </div>
            <div class="circlearea2">
                <div class="circle2"></div>
                <div class="circle-content2">
                    <p class="theme-text">Address</p>
                    <p>We are running our development house in portable way. Yeah Portable way. We move from place to place with our equipment. In Short we are runing our office as a mobile office</p>
                  
                </div>
            </div>
            <div class="circlearea3">
                <div class="circle3"></div>
                <div class="circle-content3">
                    <p class="theme-text">Hobbies And Interest</p>
                    <p>Having technology around us is something else and having hobbies for those technology which are around us is something else. Sound ockward, But It's TRUE. It is my hobby and Interest to play with technologies</p>
                    
                </div>
            </div>
        
        </div>    
    </div>
    
    <div class="myskill">
    	<div class="op">
    	<p class="myskill_heading">My Skills</p>
        <p class="myskill_heading">What I Am Best In</p>
    
		<div class="skillbox">
        <br />    
    	<p class="skilltext">HTML / CSS</p>
        <div class="skill1">
           
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
                <div class="bar1"></div>
                <div class="bar_space1"></div>
			              
            <div class="colorbar1"></div>    
        </div> 
        </div>
        
        <div class="skillbox">
        <br />    
    	<p class="skilltext">Java Script</p>
        <div class="skill2">
           
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
                <div class="bar2"></div>
                <div class="bar_space2"></div>
			              
            <div class="colorbar2"></div>    
        </div>
        </div>
        
		<div class="skillbox">    
        <br />
    	<p class="skilltext">PhP</p>
        <div class="skill3">
           
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
                <div class="bar3"></div>
                <div class="bar_space3"></div>
			              
            <div class="colorbar3"></div>    
        </div> 
        </div>
        
        <div class="skillbox"><br />    
    	<p class="skilltext">SQL</p>    
        <div class="skill4">
           
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
                <div class="bar4"></div>
                <div class="bar_space4"></div>
			             
            <div class="colorbar4"></div>    
        </div>
        </div>
        
        <div class="skillbox">    
        <br />
    	<p class="skilltext">MySqli</p>
        <div class="skill5">
           
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
                <div class="bar5"></div>
                <div class="bar_space5"></div>
			             
            <div class="colorbar5"></div>    
        </div>    
    	</div>
        
        <div class="skillbox">    
        <br />
    	<p class="skilltext">WordPress</p>
		<div class="skill6">
           
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
                <div class="bar6"></div>
                <div class="bar_space6"></div>
			             
            <div class="colorbar6"></div>    
        </div>    
    	</div>
       </div> 
    </div>
    
    <div class="career">
    <br />
    <br />
    <br />
    	<div class="pic-slider">


	<div class="box1">
    	<div class="boxslider1">Have completed my School Education with Majors in Computer Science under the banner of Cambridge.</div>
    	<div class="boxupper1">
        	<p>School</p>
        	<p>Primary to Secondry</p>
        </div>
        <div class="boxlower1"><p></p></div>
        
    </div>
    
    
    <div class="box2">
        <div class="boxupper2">
        	
        </div>
        <div class="boxlower2"><p>College </p>
        	<p>Higher Secondary Education</p></div>
        <div class="boxslider2">Have completed my Higher Secondary Education with Majors in Computer Engineering under the banner of Cambridge.</div>
    </div>
    
    
    <div class="box3">
    	<div class="boxslider3"><p>In The Field of Computer Science. Advancing in Web Development.</p></div>
        <div class="boxupper3">
        	<p>Higher Education</p>
        	<p></p>
        </div>
        <div class="boxlower3"></div>
    </div>
</div>

    </div>
    <div class="whatidocontanner">
    	<video class="vid" src="video/Laptop - 63.mp4" autoplay="autoplay" loop="loop"></video>
        <div class="whatido">
            <p class="services_text">Services</p>
            <p class="services_text">What Can I Do</p>    
            <div class="icando">        
                <div class="idocontanner1">
                    <div class="ido1" onclick="careerdo1()"><p>Designing Of Websites</p></div>
                    <div class="do1"><p>Designing of website means making a User Interface Design (UI Design). The design is what user sees on their screen. It is not as easy as to create some psd with photoshop. It require coding to be done to show some result. Our aim is to create a web design which will be user friendly so that user can interact with ease.</p>
                    </div>
                </div>
                
                <div class="idocontanner2">
                    <div class="ido2" onclick="careerdo2()"><p>Development Of Websites</p></div>
                    <div class="do2">
                    	<p>Development of website is the proceudre of creating program and function which execute over certain conditions. It require different approch other the design. Dynamic websites are created with this process. Content in this type of site changes as situation changes.</p>
                    </div>
                </div>
                
                <div class="idocontanner3">
                    <div class="ido3" onclick="careerdo3()"><p>Making Website Responsive</p></div>
                    <div class="do3">
                    	<p> Responsive feature are added to website so that they can fit on each screen sizes without needing to zoom it. This feature help to maintain the UI design. It Is a technique and method to make website fit on each screen with needing to zoom it. This technique is achieved by using css.</p>
                    </div>
                </div>
                
                <div class="idocontanner4">
                    <div class="ido4" onclick="careerdo4()"><p>Adding Backend DataBase</p></div>
                    <div class="do4">
                    	<p>To make the website dynamic it is necessary to have database at back end. Database help to retrive data over different conditions.</p>
                    </div>
                </div>
            </div>
            <div class="illustration"></div>
        </div>
    </div>
    	
    
    <div class="portfolio" id="portfolio">
    <br /><br />
    	<p class="portfolio_heading">Port Folio</p>
        <p class="portfolio_heading">My Latest Work</p>
        
        <br /><br />
        <div class="some_works">
        	<a class="work1" href="">
            	<img src="img/Display pic.png" class="work" />
                <div class="explore_work">
                	<div class="search"></div>
                </div>
            </a>
            
          	<a class="work1" href="">
            	<img src="img/responsice pic.png" class="work" />
                <div class="explore_work">
                	<div class="search"></div>
                </div>
            </a>
           
          	<a class="work1" href="">
            	<img  src="img/AgriculturalL.jpg" class="work" />
                <div class="explore_work">
                	<div class="search"></div>
                </div>
            </a>
            
          	<a class="work1" href="">
            	<img src="img/RAATALKS.png" class="work" />
                <div class="explore_work">
                	<div class="search"></div>
                </div>
            </a>                        

          	<a class="work1" href="">
            	<img src="img/WEBTECH.jpg" class="work" />
                <div class="explore_work">
                	<div class="search"></div>
                </div>
            </a>
     	 </div>
         <div>
         	<a href="portfolio.php"><div class="view_all">View All</div></a>
    	</div>
    </div>
    <div class="contactus" id="contactus">
    	<div class="heading"> 
            <p class="contact_heading">Contact us</p>
            <p class="contact_heading">Get in Touch With Me</p>
 		</div>
        <div class="contact_detail">
        	<div class="left_section">
            	<div class="getintouch">
                	<p class="subheading_text">Get In Touch</p>
                    <p class="info_text"> Feel Free to Ask any query regarding development and designing of WebSites. My Clients are my Aim And My Aims Are My Dream </p>
                </div>
                <div class="myaddress">
                    <p class="subheading_text">My Address</p>
                    <div class="info1">
                        <div class="widget_home"></div>
                        <p class="info_text">74700, Karachi, Sindh, Pakistan</p>
                    </div>
                    
                     <div class="info1">
                        <div class="widget_call"></div>
                        <p class="info_text">(92)-312-2402132</p>
                    </div>
                    
                    <div class="info1">
                        <div class="widget_email"></div>
                        <p class="info_text">webstechnoo@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="right_section">
            	<p class="subheading_text">Send a message</p>
                <form action="email.php" method="post" >
                	
                	<input type="text" name="username" class="field" placeholder="Your Name" /><br /><br />
                    
                    <input type="text" name="email"  class="field" placeholder="Your Email" /><br /><br />
                    
                    <input type="text" name="subject"  class="field" placeholder="Subject" /><br /><br />
                    
                    <input type="text" name="comment" class="field" placeholder="Message" /> <br /><br />
                    
                    <input type="reset" class="reset" />
                    <input name="sendmessage" type="submit" class="send" />
                </form>
            </div>
        </div>       
    </div>
    <div class="footer">
    	<p class="footer_text">© 2016 Web Techno. All Rights Reserved.</p>
    </div>
</div>
<script type="text/javascript">
function careerdo1() 
{
var display = document.getElementsByClassName("do1").item(0).style.display;
if(display == "none")
{	
document.getElementsByClassName("do1").item(0).style.display = "block";
document.getElementsByClassName("do2").item(0).style.display = "none";
document.getElementsByClassName("do3").item(0).style.display = "none";
document.getElementsByClassName("do4").item(0).style.display = "none";
}
else
{
document.getElementsByClassName("do1").item(0).style.display = "none";	
}
}

function careerdo2() 
{
var display2 = document.getElementsByClassName("do2").item(0).style.display;
if(display2 == "none")
{	
document.getElementsByClassName("do1").item(0).style.display = "none";
document.getElementsByClassName("do2").item(0).style.display = "block";
document.getElementsByClassName("do3").item(0).style.display = "none";
document.getElementsByClassName("do4").item(0).style.display = "none";}
else
{
document.getElementsByClassName("do2").item(0).style.display = "none";	
}
}

function careerdo3() 
{
var display3 = document.getElementsByClassName("do3").item(0).style.display;
if(display3 == "none")
{	
document.getElementsByClassName("do1").item(0).style.display = "none";
document.getElementsByClassName("do2").item(0).style.display = "none";
document.getElementsByClassName("do3").item(0).style.display = "block";
document.getElementsByClassName("do4").item(0).style.display = "none";}
else
{
document.getElementsByClassName("do3").item(0).style.display = "none";	
}
}

function careerdo4() 
{
var display4 = document.getElementsByClassName("do4").item(0).style.display;
if(display4 == "none")
{	
document.getElementsByClassName("do1").item(0).style.display = "none";
document.getElementsByClassName("do2").item(0).style.display = "none";
document.getElementsByClassName("do3").item(0).style.display = "none";
document.getElementsByClassName("do4").item(0).style.display = "block";}
else
{
document.getElementsByClassName("do4").item(0).style.display = "none";	
}
}
</script>
</body>
</html>