<!DOCTYPE html>


<?php
$log="false";
$admin="false";
if(isset($_COOKIE["username"]))
{
    $log= "true";
    echo 'Hello  '.$_COOKIE['firstname'].'';
    echo '<br/>';           
}

if(isset($_COOKIE["admin_name"]))
{
    $admin= "true";
    echo 'Hello, my master '.$_COOKIE['firstname'].'';
    echo '<br/>';           
}



?>






<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.6.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>  
  		<script type="text/javascript" src="js/Questrial_400.font.js"></script>
  <script type="text/javascript" src="js/bgSlider.js" ></script>
  <script type="text/javascript" src="js/script.js" ></script>
  <script type="text/javascript" src="js/pages.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/bg.js" ></script>
  <script type="text/javascript" src="js/forms.js"></script>
  <script type="text/javascript" src="js/jcarousellite.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/atooltip.jquery.js"></script>
 
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
  <![endif]-->
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
</head>

<body>
<div class="spinner"></div>
<div id="bgSlider"></div>
<div class="extra">
	<div class="main">
		<div class="box">
			<!--header -->
			<header>
				<h1><a href="index.php" id="logo"></a></h1>
				<nav class="menu">
					<ul id="menu">
						<li><a href="#!/page_About"><span></span><strong>About</strong></a></li>
						<li><a href="#!/page_Teachers"><span></span><strong>Our Teachers</strong></a></li>
						<li><a href="#!/page_Prices"><span></span><strong>Prices</strong></a></li>
						<li><a href="#!/page_Contact"><span></span><strong>Contact Us</strong></a></li>
                                                
                                                <?php
                                                if ($log=="true"||$admin== "true"){
                                                    echo '<li><a href="#!/page_Schedule"><span></span><strong>Schedule</strong></a></li>';
                                                    echo '<li><a href="#!/page_My_Account"><span></span><strong>My account</strong></a></li>';
                                                    
                                                    if ($admin=="true"){
                                                     echo '<li><a href="#!/page_users"><span></span><strong>Users</strong></a></li>';
                                                     }
                                                    
                                                    echo '<li><a href="SignIn/LogOut.php"><span></span><strong>Log out</strong></a></li>';}
                                                    else {echo '<li><a href="SignIn/index.php"><span></span><strong>Sign In</strong></a></li>';}
                                                    
                                                    
                                                 ?>
                                                
					</ul>
				</nav>
			</header><div class="ic">More Website Templates @ TemplateMonster.com - September12 2011!</div>
			<!--header end-->
			<!--content -->
			<article id="content">
				<ul>
					<li id="page_About">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<div class="col1">
										<h2>Yoga Philosophy</h2>
										<p class="quot">Exercises are like prose, whereas yoga is the poetry of movements.<img src="images/quot2.png" alt=""></p>
										<p class="pad_bot1">The art and science of yoga is dedicated to creating union between body, mind and spirit. It is about creating balance so as to live in peace, good health and harmony with the greater whole.</p>
									</div>
									<div class="col1 pad_left1">
										<h2>About Us</h2>
										<div class="scroll">
											<ul>
												<li>
													<p><strong>The Masters of Yoga</strong> is a yoga centre for the whole family, where all ages and abilities work together to achieve optimum health.</p>
												</li>
												<li>
													<p>We're excited about sharing our diverse yoga classes with you and we look forward to helping you discover and develop your own yoga practice.</p>
												</li>
                                                                                                <li>
													<p>Our timetables and classes are at times to suit you. We believe in variety, health & fitness and your emotional and spiritual wellbeing.</p>
												</li>
                                                                                                <li>
													<p>Prepare yourself for a healthier, lighter, more flexible, more energetic and relaxed version of you!</p>
												</li>
											</ul>
										</div>
										<a href="#" class="prev"><span></span></a>
										<a href="#" class="next"><span></span></a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li id="page_Teachers">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Our Staff</h2>
									<div class="wrapper pad_bot2">
										<figure class="left marg_right1"><img src="images/helen2.jpg" alt=""></figure>
										<p class="pad_bot2"><strong>Helen Williams</strong></p>
										<p class="pad_bot1">Helen’s dynamic classes are imbued with her warmth and kindness and are suitable to all.</p>
										<p class="pad_bot2"><a href="#!/page_Helen" class="link1">Read More</a></p>
									</div>
									<div class="wrapper pad_bot2">
										<figure class="left marg_right1"><img src="images/susan2.jpg" alt=""></figure>
										<p class="pad_bot2"><strong>Susan Arrington</strong></p>
										<p class="pad_bot1">Susan’s advanced physical practice is a wonder to behold, while her commitment to the spiritual path of yoga is an inspiration! </p>
										<p class="pad_bot2"><a href="#!/page_Susan" class="link1">Read More</a></p>
									</div>
									<div class="wrapper pad_bot2">
										<figure class="left marg_right1"><img src="images/katie2.jpg" alt=""></figure>
										<p class="pad_bot2"><strong>Katie Barnet</strong></p>
										<p class="pad_bot1">Katie went to her first Astanga class eleven years ago and hasn’t stopped since.</p>
										<p class="pad_bot2"><a href="#!/page_Katie" class="link1">Read More</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li id="page_Schedule">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Schedule</h2>
									<div class="table">
										<table>
											<thead>
												<tr>
													<th class="bg"></th>
													<th><strong>Mon</strong></th>
													<th class="bg"><strong>Tue</strong></th>
													<th><strong>Wed</strong></th>
													<th class="bg"><strong>Thur</strong></th>
													<th><strong>Fri</strong></th>
													<th class="bg"><strong>Sat</strong></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="bg"><strong>9:00</strong></td>
													<td>Helen Williams</td>
													<td class="bg">Katie Barnet</td>
													<td>Helen Williams</td>
													<td class="bg">Katie Barnet</td>
													<td>Helen Williams</td>
													<td class="bg">Katie Barnet</td>
												</tr>
												<tr>
													<td class="bg2"><strong>10:00</strong></td>
													<td class="bg">Susan Arrington</td>
													<td class="bg2">Helen Williams</td>
													<td class="bg">Susan Arrington</td>
													<td class="bg2">Helen Williams</td>
													<td class="bg">Susan Arrington</td>
													<td class="bg2">Helen Williams</td>
												</tr>
												<tr>
													<td class="bg"><strong>12:00</strong></td>
													<td>Katie Barnet</td>
													<td class="bg">Susan Arrington</td>
													<td>Katie Barnet</td>
													<td class="bg">Susan Arrington</td>
													<td>Katie Barnet</td>
													<td class="bg">Susan Arrington</td>
												</tr>
												<tr>
													<td class="bg2"><strong>14:00</strong></td>
													<td class="bg">Helen Williams</td>
													<td class="bg2">Katie Barnet</td>
													<td class="bg">Helen Williams</td>
													<td class="bg2">Katie Barnet</td>
													<td class="bg">Helen Williams</td>
													<td class="bg2">Katie Barnet</td>
												</tr>
												<tr>
													<td class="bg"><strong>16:00</strong></td>
													<td>Susan Arrington</td>
													<td class="bg">Helen Williams</td>
													<td>Susan Arrington</td>
													<td class="bg">Helen Williams</td>
													<td>Susan Arrington</td>
													<td class="bg">Helen Williams</td>
												</tr>
												<tr>
													<td class="bg2"><strong>17:00</strong></td>
													<td class="bg">Katie Barnet</td>
													<td class="bg2">Susan Arrington</td>
													<td class="bg">Katie Barnet</td>
													<td class="bg2">Susan Arrington</td>
													<td class="bg">Katie Barnet</td>
													<td class="bg2">Susan Arrington</td>
												</tr>
												<tr>
													<td class="bg"><strong>18:30</strong></td>
													<td>Helen Williams</td>
													<td class="bg">Katie Barnet</td>
													<td>Helen Williams</td>
													<td class="bg">Katie Barnet</td>
													<td>Helen Williams</td>
													<td class="bg">Katie Barnet</td>
												</tr>
												<tr>
													<td class="bg2"><strong>20:00</strong></td>
													<td class="bg">Susan Arrington</td>
													<td class="bg2">Helen Williams</td>
													<td class="bg">Susan Arrington</td>
													<td class="bg2">Helen Williams</td>
													<td class="bg">Susan Arrington</td>
													<td class="bg2">Helen Williams</td>
												</tr>
											</tbody>
										</table>
									</div>
																	</div>
							</div>
						</div>
					</li>
					<li id="page_Prices">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Our Prices</h2>
									<p class="pad_bot1"><strong>Introductory Offer:</strong><br>
											One Month Unlimited <span class="color1">£39</span><br>
											New clients only. One time purchase. Must purchase with-in first week of coming to studio.</p>
									<p class="pad_bot1">
											<strong>Auto-Pay Membership: Unlimited Yoga</strong><br>
											<span class="color1">£89</span> per month - with a minimum 6 month commitment <br>
											<span class="color1">£79</span> per month - student/senior pricing - with a 6 month minimum commitment </p>
									<p class="pad_bot1">
											<strong>Regular Pricing:</strong><br>
											Drop In - <span class="color1">£17</span> ** New Rate** <br>
											One Month Unlimited - <span class="color1">£135</span><br>
											One Year Unlimited - <span class="color1">£1000</span><br>
											5 Class Package - <span class="color1">£70</span></p>
									<p class="pad_bot1">
											<strong>Student/Senior Pricing:</strong><br>
											Drop In - <span class="color1">£13</span> **New Rate** <br>
											One Month Unlimited - <span class="color1">£110</span><br>
											One Year Unlimited - <span class="color1">£750</span></p>
									<p>
											Please note - student pricing is for full time students. Must present valid ID. </p>
								</div>
							</div>
						</div>
					</li>
					<li id="page_Contact">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<div class="col1">
										<h2>Our Address</h2>
										<p><strong>2 Kite Yard <br>
                                                                                                Cambridge Road <br>
												London SW11 4TA</strong></p>
										<p class="address">Telephone:<br>
												E-mail:</p>
										<p class="pad_bot1">0207 978 7995<br>
												<a href="mailto:" class="color1">masters@yoga.co.uk</a></p>
									</div>
									<div class="col1 pad_left1">
										<h2>Careers</h2>
										<p class="pad_bot1">We are looking for experienced and passionate yoga teachers. If you are interested in joining our team please send your CV to <a href="mailto:" class="color1">masters@yoga.co.uk</a>.</p>
									</div>
								</div>
								<div class="wrapper">
									
								</div>
							</div>
						</div>
					</li>
                                        
                                        
                                        <li id="page_My_Account">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>My account</h2>
                                                                        <p class="pad_bot1"><br><br><br>
                                                                            NAME:  <?php echo $_COOKIE['firstname'];   ?>  <br>
                                                                            LAST NAME:  <?php echo $_COOKIE['lastname'];  ?> <br>
                                                                            E-MAIL:    <?php 
                                                                            if($admin=="true"){echo $_COOKIE['admin_name'];}
                                                                            else {
                                                                            echo $_COOKIE['username'];}  ?> <br><br><br>
                                                                            <a href="SignIn/DeleteAccount.php"><span></span><strong>Delete my account</strong></a>
                                                                            
                                                                            </p>
									
								</div>
							</div>
						</div>
					</li>
                                        
                                        
                                        <li id="page_users">
						<div class="box2" >
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>USERS</h2>
                                                                        <p class="pad_bot1"><br>
                                                                            
                                                                            
                                                                            
                                                                             <form action="SignIn/deleteUser.php" method="post">
                                                                                  <label>
                                                                                <span class="req">delete user number:   </span>
                                                                                    </label>
                                                                            <input type="text" required autocomplete="off" name="id_num" />
                                                                            
                                                                            <button type="submit" class="button button-block" />DELETE</button>
                                                                             </form>
                                                                        
                                                                        <br>
                                                                        <br>   
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                            
                                                                            <?php
                                                                            
                                                                            
                                                                             $dbhost = 'localhost';     
                                                                             $dblogin = 'root';
                                                                             $dbpass = '';
                                                                             $dbselect = 'projekt';
  
  
                                                                              $con=mysqli_connect($dbhost,$dblogin,$dbpass);
                                                                              $db= mysqli_select_db( $con, $dbselect) or die("error");
                                                                             
                                                                              $user = mysqli_query($con, "SELECT * FROM user") or die(mysql_error($user));
                                                                              echo ' <div class="table"> <table> <thead>
												<tr>
													<th><strong>ID</strong></th>
													<th class="bg"><strong> First Name</strong></th>
													<th><strong>Last Name</strong></th>
													<th class="bg"><strong>E-mail</strong></th>
												</tr>
											</thead> <tbody>'; 
                                                                              while($r = mysqli_fetch_assoc($user)) { 
                                                                              echo "<tr>"; 
                                                                              echo '<td class="bg">'.$r['ID_logowanie'].'</td>';
                    
                                                                              echo "<td >". $r['FirstName']."</td>"; 
                                                                         
                                                                              echo "<td>". $r['LastName']."</td>"; 
                                                                       
                                                                              echo "<td>". $r['Email']."</td>";
                                                                             
                                                                              echo "</tr>"; 
                                                                              
                                                                              } 
                                                                              echo "</tbody> </table></div>"; 
                                                                            
                                                                            ?> 
                                                                            
                                                                            </p>
									
								</div>
							</div>
						</div>
					</li>
                                        
                                        
                                        
                                        
                                        
					<li id="page_Helen">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Helen Williams</h2>
									<p>Helen started practicing yoga in her bedroom at the age of 17 and completely fell in love with the practice from the get go! In 2012 she completed her teacher training at The Himalaya Yoga Valley Centre in India under the direction of Yogacharya Lalit Kumar. Lalit ignited her passion for the Ashtanga Yoga system, which has been her daily practice ever since. She continues to practice here in London with Hamish Hendry and is committed to making annual trips back to India, to develop her understanding of yoga further under the guidance of R.Sharath Jois, at the Sri K. Pattabhi Jois Ashtanga Yoga Institute in Mysore.</p>
									<div class="wrapper pad_bot1">
										<figure class="left marg_right1"><img src="images/helen.jpg" alt=""></figure>
                                                                        </div>
									<p class="pad_bot1"></p>
									
								</div>
							</div>
						</div>
					</li>
                                        <li id="page_Susan">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Susan Arrington</h2>
									<p>Susan’s teaching is gentle and kind, encouraging and nurturing. With a smile and love for teaching, she seeks to instil a sense of lightness and ease in students, whilst helping them to connect with their bodies and minds. She creates sequences that suit the energy and level of each class, whilst challenging and inspiring students to honour their abilities and presence on and off the mat. She believes that in both life and teaching one should be grounded but light, dedicated, mindful, aware and understanding of personal limitations that are inherent in each individual.</p>
									<div class="wrapper pad_bot1">
										<figure class="left marg_right1"><img src="images/susan.jpg" alt=""></figure>
                                                                        </div>
									<p class="pad_bot1"></p>
                                                                </div>
							</div>
						</div>
					</li>
                                        <li id="page_Katie">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Katie Barnet</h2>
									<p>Katie went to her first Astanga class eleven years ago and hasn’t stopped since. Practicing daily with her teacher, Hamish Hendry, Katie also frequently travels to Mysore, India, to practice with Sharath Jois.<br>
                                                                        As a teacher, Katie’s intention is to share these aspects of yoga with her students. She provides a space that allows them to welcome whatever arises during their practice whilst feeling safe and understood. Her style is traditional, but in a way that is safe and fun.</p>
									<div class="wrapper pad_bot1">
										<figure class="left marg_right1"><img src="images/katie.jpg" alt=""></figure>
                                                                        </div>
									<p class="pad_bot1"></p>
                                                                </div>
							</div>
						</div>
					</li>
				</ul>
			</article>
			<!--content end-->
		</div>
	</div>
	<div class="block"></div>
</div>
<div class="bg1">
	<div class="main">
			<!--footer -->
			<footer>
				<div class="col_1">
					<div class="wrapper">
						<div class="bg_spinner"></div>
						<ul class="pagination">
							<li class="current">Background: &nbsp; <a href="images/bg_img1.jpg">1</a></li>
							<li><a href="images/bg_img2.jpg">2</a></li>
							<li><a href="images/bg_img3.jpg">3</a></li>
						</ul>
					</div>
					
				</div>
				
				<!-- {%FOOTER_LINK} -->
			</footer>
			<!--footer end-->
	</div>
</div>
<script>
$(window).load(function() {	
	$('.spinner').fadeOut();
	$('body').css({overflow:'inherit'})
        
})
</script>
</body>
</html>