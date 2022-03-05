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
	<link rel="stylesheet" type="text/css" href="genera.css">
	<link rel="stylesheet" href="owl.carousel.min.css">
	<link rel="stylesheet" href="owl.theme.default.min.css">
	<script src="jquery.min.js"></script>
	<script src="owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
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
					<div class="col-9">
						<ul class="row center-2">
								<li><a href="index.php">About Us</a></li>
								<li><a href="Postcast.html">Postcast</a></li>
								<li><a href="Courses.html">Courses</a></li>
								<li><a href="LearningMethods.html">Learning Methods</a></li>
								<li><a href="Resources.html">Resources</a></li>
								<li><a href="Contact.html">Contact</a></li>

						</ul>
						
					</div>
					<div class="col-2">
						<a href="resgister.php"><h4>REGISTER NOW</h4></a>
						
						
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
					<p class="style4">Med Lang Fanatic là một nhóm các bác sĩ có hoài bão cải thiện khả<br>năng ngoại ngữ và kỹ năng giao tiếp của nhân viên y tế tại Việt Nam. </p>
				
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
					<p style="margin: 30px 120px;text-align: justify;">Chúng tôi không đi theo lối mòn của bài giảng truyền thống mà hướng đến những nội dung giảng dạy mới, thân thiện và hiệu quả, dựa trên kết quả của các nghiên cứu.</p>
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
						<p style="margin: 0px;">Trau dồi kỹ năng ngôn ngữ </p>
						<p class="style8">Đọc, nghe, giao tiếp và hơn thế nữa</p>
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
						<p style="margin: 0px;">Nâng cao kỹ năng cho nhóm học viên </p>
						<p class="style8">Chúng tôi làm việc với các nhóm, khoa phòng hay bệnh viện để thiết kế khóa học phù hợp cho số lượng đông học viên</p>
					</div>
				</div>
				<div class="col-4 style7"style="background:#D04F47;height:778px">
					<div class="row center-2">
						<img class="logo" src="logo 3.png">
						<hr size="5" width="80%" color="black" style="margin: 20px auto 20px auto;">
						<p style="margin: 0px;">Sẵn sàng phát triển sự nghiệp </p>
						<p class="style8">Tạo ưu thế cho chính bạn trong môi trường làm việc<br>toàn những tinh hoa</p>
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
							    <td><h5>Học viên</h5></td>
							    <td><h5>Booklets</h5></td>
							    
							</tr>

							<tr>
							    <th><h3 class="th-align">38</h3></th>
							    <th><h3>7</h3></th>
							    
							</tr>
							<tr>
							    <td><h5  class="td-align">Tập postcast</h5></td>
							    <td><h5>Khoá</h5></td>
							    
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
			<div class="row center-1">
				<div class="col-12 owl-carousel">
					<div class="item">
						<p>
							Vừa học xong khóa RE và không biết nói gì hơn với 2 chữ quá tuyệt!! Thầy giảng bài và soạn giáo án cực kì tâm huyết. Nội dung chỉ trong 8 buổi nhưng đã phác họa cho mình cái nhìn rõ hơn về việc học anh văn chuyên ngành, được tiếp cận thêm nhiều công cụ giúp ích cho việc đọc hiểu các tài liệu y khoa. Học xong mình cảm thấy đầu mình sáng ra nhiều lắm, còn được thầy truyền cảm hứng cho việc học nữa. Vài dòng không diễn tả hết được. Em cảm ơn thầy nhiều lắm thầy ơi!!!
						</p>
						<p class="section-8-content">
							
							Bao Tran Do Quyen
						</p>
						
					</div>
					<div class="item">
						<p>"Mình không bít khen gì luôn vì thấy mọi người khen quá trời luôn mà toàn khen đúng ý mình 😚"
						<br>
						"Mình học hết cả hai khoá học rùi, thấy team Med Lang Fanatic rất tâm huyết, chỉn chu, cung cấp nhiều kiến thức, “cần câu cá” như là chỉ cho mình nên học gì,nên tìm tài liệu ở đâu, học như nào ,hay mẹo tra từ, mình chỉ sợ nhiều kiến thức đồ sộ quá mình không học hết thui 😅"
						</p>
						<p class="section-8-content">
							
							Huyen Le
						</p>

						
					</div>
					<div class="item">
						<p>Đội ngũ Med Lang Fanatic phải nói là đều siêu siêu giỏi và siêu siêu có tâm. Yêu thương các anh chị rất nhiều và em sẽ luôn ủng hộ các khóa học khi sắp xếp được thời gian ạ 🥰</p>
						<p class="section-8-content">
							
							Jenny Pham
						</p>
					</div>
					<div class="item">
						<p>Sau khi tham gia khóa học, mình cảm thấy nhân sinh tươi sáng hẳn 😁 Thật sự anh Hưng và đội ngũ MedLangFanatic rất có tâm, các khóa học của anh đều có hẳn một lộ trình tỉ mỉ và đầu tư. Tất nhiên là nếu cố gắng duy trì “cần câu chất lượng” đấy thì mình tin rằng các bạn sẽ level up nhanh thôi 😉
						<br>
						Cảm ơn anh và mọi người vì đã tạo ra những khóa học bổ ích ạ!
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
