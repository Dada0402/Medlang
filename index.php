<?php
require "database.php";
$email = "";
echo "hello";
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{  if (isset($_GET['email'])){$email=$_GET['email'];}

$do_sql = new database();
	$input_sql = "INSERT INTO Medlang (Email) VALUES ('$email')";
	$input = $do_sql-> insert($input_sql);

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MedLangFantatic</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Belleza&family=Montserrat:wght@100;600&family=Roboto+Condensed:wght@700&family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Belleza&family=Montserrat:wght@100;600&family=Roboto+Condensed:wght@700&family=Roboto:wght@100&family=Rubik:wght@300;700&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="general.css"> -->
	<link rel="stylesheet" href="owl.carousel.min.css">
	<link rel="stylesheet" href="owl.theme.default.min.css">
	<script src="jquery.min.js"></script>
	<script src="owl.carousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="general.css">
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:20,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:1
			        }
			    }

			});

		});
	</script>
</head>
<body class="background bodytext">
	<header class="container" style="background:#000000">
		<div class="row">
			<div class="col-1">
				
			</div>
			<div class="col-10">
				<div class="row center-1">
					<div class="col-1">
						<img class="main-logo" src="main-logo1.png">
						
					</div>
					<div class="col-9 ">
						<ul class="row center-2">
								<li><a href="index.php" class="hover-1">About Us</a></li>
								<li><a href="Postcast.html" class="hover-1">Postcast</a></li>
								<li><a href="Courses.html" class="hover-1">Courses</a></li>
								<li><a href="LearningMethods.html" class="hover-1">Learning Methods</a></li>
								<li><a href="Resources.html" class="hover-1">Resources</a></li>
								<li><a href="Contact.html" class="hover-1">Contact</a></li>

						</ul>
						
					</div>
					<div class="col-2">
						<a href="resgister.php" class="button-menu">REGISTER NOW</a>
						
						
					</div>
				
				</div>
			</div>
			<div class="col-1">
				
			</div>
		</div>
		
		
	</header>
	<main>
		<div class="section-1">
			<div class="row">
				<div class="col-6 bg1" >
					<p class="style1">MED LANG</p>
					<hr size="8" width="75%" color="black">
					<p class="style2">FANATIC</p>
					<hr size="8" width="75%" color="black" class="style3">
				
					
				</div>
				<div class="col-6">
					<img src="1.png" class="hinh1" >
					<p class="style4">Med Lang Fanatic l?? m???t nh??m c??c b??c s?? c?? ho??i b??o c???i thi???n kh???<br>n??ng ngo???i ng??? v?? k??? n??ng giao ti???p c???a nh??n vi??n y t??? t???i Vi???t Nam. </p>
				
					<h4 style="padding: 0px 0px 0px 50px">SEE</h4> 
				
					<h4 style="background:rgba(208, 79, 71, 1);padding: 10px 60px 10px 0px">ABOUT US</h4>
				

					
				</div>
				
			</div>
			
		</div>
		<div class="section-2">
			<div class="row">
				<div class="col-6 bg2 ">
				</div>
			
				<div class="col-6 ">
					<div style="background:rgba(233, 185, 97, 1);height: 80px;">
						
					</div>
					
				</div>
			</div>
		</div>
			
		
		<div class="section-3 ">
			<div class="row center-1">
				<div class="col-5-1">
					<h3 class="h3-1">NOT JUST ANOTHER<br> WAY TO LEARN<br> MEDICAL ENGLISH</h3>
					<hr size="5" width="20%" color="#E9B961">
					<p style="margin: 30px 120px;text-align: justify;">Ch??ng t??i kh??ng ??i theo l???i m??n c???a b??i gi???ng truy???n th???ng m?? h?????ng ?????n nh???ng n???i dung gi???ng d???y m???i, th??n thi???n v?? hi???u qu???, d???a tr??n k???t qu??? c???a c??c nghi??n c???u.</p>
					<h4 style="padding: 0px 0px 0px 120px">SEE</h4> 
				
					<h4 style="background:#E9B961;padding: 10px 40px 10px 0px"> OUR COURSES</h4>
				</div>
				<div class="col-6-1 bg3" style="background:rgba(233, 185, 97, 1);">
					<div class="row center-2"> 
						<div class="col-12">
						
							<div class="style5"><hr class="line" size="5" width="8%" color="black" style="display:inline-block">OUR COURSES</div>		
						</div>
					
					</div>
					<div class="row">
						
						<div class="col-5">
							<div>
								<img src="2.png" style="margin:0px 0px 0px 30px ">
							<p class="style6" style="margin: 20px;">Listening to the<br> language of medicine</p>
							</div>
						</div>
						<div class="col-5" style="">
							<img src="3.png">
							<p class="style6" style="margin:20px 50px 20px 0px"> English communication<br> in medicine</p>
							
						</div>
						
					</div>
				</div>
			</div>

			
		</div>
		<div class="section-4">
			<div class="row center-1">
				<div class="col-6 bg-gradient">
						<img src="4.png" style="padding: 20px 0px 0px 120px">
						<p class="style6" style="color:#E9B961; margin: 20px 20px 20px 80px;">Medical literacy:<br>the essential course</p>
				</div>
				<div class="col-6" style="background:rgba(233,185,97,1)">
					<img src="5.png" style="padding: 20px 0px 0px 0px">
					<div class="row">
						<div class="col-10">
						<p class="style6" style="color:black; margin: 20px 20px 20px 0px;">Presenting clinical case<br>from scratch</p>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>

		<div class="container1 section-5">
			<div class="row center-1">
				<div class="col-4 style7 " style="background:#E9B961; height:778px">
					<div class="row center-2">
						<img class="logo" src="logo 2.png">
						<hr size="5" width="80%" color="black" style="margin: 20px auto 20px auto;">
						<p style="margin: 0px;">Trau d???i k??? n??ng ng??n ng??? </p>
						<p class="style8">?????c, nghe, giao ti???p v?? h??n th??? n???a</p>
					</div>
				</div>
				<div class="col-4 style7" style="background: #5DB2C4;">
					
					<div class="row center-2">
						<p style="color: white;background: black; padding: 10px;margin: 100px 20px 20px 20px;"> OUR COURSES</P>
					</div>
					<div class="row center-2">
					
						<h1 style="padding: 0px 0px 50px 0px;"> BENEFITS</h1>
						<img src="logo 2.png">
						<hr size="5" width="80%" color="black" style="margin: 20px auto 20px auto;">
						<p style="margin: 0px;">N??ng cao k??? n??ng cho nh??m h???c vi??n </p>
						<p class="style8">Ch??ng t??i l??m vi???c v???i c??c nh??m, khoa ph??ng hay b???nh vi???n ????? thi???t k??? kh??a h???c ph?? h???p cho s??? l?????ng ????ng h???c vi??n</p>
					</div>
				</div>
				<div class="col-4 style7"style="background:#D04F47;height:778px">
					<div class="row center-2">
						<img class="logo" src="logo 3.png">
						<hr size="5" width="80%" color="black" style="margin: 20px auto 20px auto;">
						<p style="margin: 0px;">S???n s??ng ph??t tri???n s??? nghi???p </p>
						<p class="style8">T???o ??u th??? cho ch??nh b???n trong m??i tr?????ng l??m vi???c<br>to??n nh???ng tinh hoa</p>
					</div>
				</div>
				
			</div>
			
		</div>
		<div class="container1 section-6">
			<div class="row center-1">
				<div class="col-4">
					<div class="box-1">
						<h2 style="color:#E9B961">PODCASTS</h2>
					
					
						<img class="icon" src="icon-podcast.png">
					</div>
					
				</div>
				<div class="col-4">
					<div class="box-2">
						<h2 style="color:black;">BLOGS</h2>
					
					
						<img class="icon" src="icon-blog.png">
					</div>
				</div>
				<div class="col-4">
					<div class="box-3">
						<h2 style="color:#D04F47">BOOKS</h2>
					
						<img class="icon" src="icon-book.png">
					</div>
				</div>
			</div>
			
		</div>
		<div class=" container-fluid section-7">
			<div class="row">
				<div class="col-6">
					<img style="width:100%" src="6.png">
				</div>
				<div class="col-6" style="background: #E9B961">
					<div class="row">
						<h1 class="style9">ACHIEVEMENT</h1>
					</div>
					<div class="row">
						<hr size="5" width="40%" color="black" class="line1">
						<h1 style="font-family: Roboto;">2020</h1>
					</div>
					<div class="row">
						<table style="width:85%">
							<tr>
							    <th><h3>200+</h3></th>
							    <th><h3>3</h3></th>
							    
							</tr>

							<tr>
							    <td><h5>H???c vi??n</h5></td>
							    <td><h5>Booklets</h5></td>
							    
							</tr>

							<tr>
							    <th><h3 class="th-align">38</h3></th>
							    <th><h3>7</h3></th>
							    
							</tr>
							<tr>
							    <td><h5  class="td-align">T???p postcast</h5></td>
							    <td><h5>Kho??</h5></td>
							    
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	<!-- 	<div class=" container slide">dhbcfjhsdv</div>-->
		<div class="container-fluid section-8 bg1">
			<div class="row center-1">
				<div class="col-12">
					<div class="row center-2">
						<h1 class="line-2">TESTIMONIALS</h1>
					</div>
					
				</div>
				
			</div>
			<div class=" play-slider">
				
					<div class="owl-carousel">
						<div class="item">
							<p>
								V???a h???c xong kh??a RE v?? kh??ng bi???t n??i g?? h??n v???i 2 ch??? qu?? tuy???t!! Th???y gi???ng b??i v?? so???n gi??o ??n c???c k?? t??m huy???t. N???i dung ch??? trong 8 bu???i nh??ng ???? ph??c h???a cho m??nh c??i nh??n r?? h??n v??? vi???c h???c anh v??n chuy??n ng??nh, ???????c ti???p c???n th??m nhi???u c??ng c??? gi??p ??ch cho vi???c ?????c hi???u c??c t??i li???u y khoa. H???c xong m??nh c???m th???y ?????u m??nh s??ng ra nhi???u l???m, c??n ???????c th???y truy???n c???m h???ng cho vi???c h???c n???a. V??i d??ng kh??ng di???n t??? h???t ???????c. Em c???m ??n th???y nhi???u l???m th???y ??i!!!
							</p>
							<p class="section-8-content">
								
								Bao Tran Do Quyen
							</p>
						
						</div>
						<div class="item">
							<p>"M??nh kh??ng b??t khen g?? lu??n v?? th???y m???i ng?????i khen qu?? tr???i lu??n m?? to??n khen ????ng ?? m??nh ????"
							<br>
							"M??nh h???c h???t c??? hai kho?? h???c r??i, th???y team Med Lang Fanatic r???t t??m huy???t, ch???n chu, cung c???p nhi???u ki???n th???c, ???c???n c??u c????? nh?? l?? ch??? cho m??nh n??n h???c g??,n??n t??m t??i li???u ??? ????u, h???c nh?? n??o ,hay m???o tra t???, m??nh ch??? s??? nhi???u ki???n th???c ????? s??? qu?? m??nh kh??ng h???c h???t thui ????"
							</p>
							<p class="section-8-content">
								
								Huyen Le
							</p>
						</div>
						<div class="item">
							<p>?????i ng?? Med Lang Fanatic ph???i n??i l?? ?????u si??u si??u gi???i v?? si??u si??u c?? t??m. Y??u th????ng c??c anh ch??? r???t nhi???u v?? em s??? lu??n ???ng h??? c??c kh??a h???c khi s???p x???p ???????c th???i gian ??? ????</p>
							<p class="section-8-content">
								
								Jenny Pham
							</p>
						</div>
						<div class="item">
							<p>Sau khi tham gia kh??a h???c, m??nh c???m th???y nh??n sinh t????i s??ng h???n ???? Th???t s??? anh H??ng v?? ?????i ng?? MedLangFanatic r???t c?? t??m, c??c kh??a h???c c???a anh ?????u c?? h???n m???t l??? tr??nh t??? m??? v?? ?????u t??. T???t nhi??n l?? n???u c??? g???ng duy tr?? ???c???n c??u ch???t l?????ng??? ?????y th?? m??nh tin r???ng c??c b???n s??? level up nhanh th??i ????
							<br>
							C???m ??n anh v?? m???i ng?????i v?? ???? t???o ra nh???ng kh??a h???c b??? ??ch ???!
							</p>
							<p class="section-8-content">
								
								Tran H. Uyen
							</p>
						</div>

						
					</div>
			</div>
			
		
		</div>

		<div class=" section-9">
			<div class="row center-1">
				<div class="col-4">
					<div class="row center-2">
						<img src="logo-american.png">
					</div>
				</div>
				<div class="col-8" style="background-color:white;">
					<div class="row">
						<div class="col-7">
							
								<p class="h4-1">OUR</p>
							
								<h3 class="h3-2">PARNERS</h3>
							
								
								<hr size="5" width="60%" color="black" style="margin: 30px auto 20px auto;">
								<p class="p-value">We collaborate and seek to cooperate with organizations in favor of promoting English learning for Vietnamese healthcare providers </p>
							
							
						</div>
						<div class="col-5">
							<img style="width:100%" src="7.png">
						</div>
					</div>
					
					
				</div>
				
				
				
			</div>
			
		</div>
		<div class="container1 section-10">
			<div class="row center-1">
				<div class="col-4">
					<div class="row center-2">
						<img style="width:80% ; margin: 60px 0px 0px 0px" src="main-logo2.png">
					</div>
					<div class="row">
						<ul class="row center-3">
							<li><a href="https://www.facebook.com/"><img src="Facebook.png"></a></li>
							<li><a href="#"><img src="Instagram.png"></a></li>
							<li><a href="#"><img src="Twitter.png"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-4">
					<div class="row">
						<form action="index.php" method="get">
							<div class="row center-2">
								<p style="margin: 0px 0px 30px 0px">For new updates, subcribe to our newletter today*</p>
							</div>

							<div class="row center-2">
								<input class="input_text" type="text" placeholder="Enter your email here*" name="email">
								<!-- <p><big><i>Enter your email here*</i></big></p> -->
								<hr class="hr-1" >
							</div >

								
							
							<div class="row center-2">
								<button type="submit">
									<p class="section-10-small-a"> Join</p>
								</button>
								
								
							</div>
						</form>
					</div>
						
				</div>
				<div class="col-3">
					<div>
						<hr class="hr-2" >
					</div>
					<div class="row ">
						<ul  class="row1 center-2 style10">
							<li ><a class="a-style" href="#">About Us</a></li>
							<li ><a class="a-style" href="#">FQA</a></li>
							<li ><a class="a-style" href="#">Contact</a></li>
						</ul>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</main>
	<footer>
		
	</footer>

</body>
</html>
