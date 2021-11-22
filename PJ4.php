<!DOCTYPE html>

<head>

	<meta charset="UTF-8"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/Project4/Css/PJ4.css">

	<title>Coffe Tung Lam</title>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>	

	<div class="w3-top">

		<nav class="navbar navbar-inverse">

			<div class="container-fluid">

			    <div class="navbar-header">

				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

				        <span class="icon-bar"></span>

				        <span class="icon-bar"></span>

				        <span class="icon-bar"></span>

				    </button>

				    <a class="navbar-brand" href="/Project4/PJ4.php">

				      	<img src="/Project4/image/logo.png" alt="Cafe image">

				    </a>

			    </div>

			    <div class="collapse navbar-collapse" id="myNavbar">

				    <ul class="nav navbar-nav">

				        <li class="active">
				        	
				    		<div class="dropdown">

							  	<button class="dropbtn" onclick="document.location='/Project4/PJ4-sanpham.php'">Sản phẩm <span class="glyphicon glyphicon-menu-down"></span></button>

							  	<div class="dropdown-content">

							  		<div class="col-sm-6">

									    <a href="#"><b>Nhang trầm</b></a>

								    	<a href="#">Nhang trầm không tăm</a>

								    	<a href="#">Nhang nụ</a>

								    	<a href="#">Nhang vòng</a>

								    	<a href="#">Nhang cây</a>

							    	</div>

							    	<div class="col-sm-6">

									    <a href="#"><b>Trà và bánh</b></a>

								    	<a href="#">Trà khô</a>

								    	<a href="#">Chè tươi</a>

								    	<a href="#">Trà túi lọc</a>

								    	<a href="#">Bánh cáy</a>

							    	</div>

							  	</div>

							</div>

				        </li>

				        <li>

				        	<div class="dropdown">

							  	<button class="dropbtn" onclick="document.location='/Project4/PJ4-traquan.php'">Món chay & trà <span class="glyphicon glyphicon-menu-down"></span></button>

							  	<div class="dropdown-content">

							    	<a href="#">Món ăn chay</a>

							    	<a href="#">Trà quán</a>

							    	<a href="#">Phòng VIP</a>

							  	</div>

							</div>

				        </li>

				        <li>

				        	<div class="dropdown">

							  	<button class="dropbtn" onclick="document.location='/Project4/PJ4-khoahoc.php'">Khóa học <span class="glyphicon glyphicon-menu-down"></span></button>

							  	<div class="dropdown-content">
								    
							    	<a href="#">Khóa học tu thiền</a>

							    	<a href="#">Khóa học văn hóa chùa và đặc sản</a>

							  	</div>

							</div>

				        </li>

				        <li><a id="navbar-brand1" href="/Project4/PJ4-chuakeo.php">Về chùa Keo</a></li>

				        <li><a id="navbar-brand1" href="#">Đặt hàng trực tuyến</a></li>

				    </ul>

				    <ul class="nav navbar-nav navbar-right">

				        <li>

				        	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Tài khoản</button>

							<div class="modal fade" id="myModal" role="dialog">

							    <div class="modal-dialog">

								    <div class="modal-content">

								        <div class="modal-header">

								          	<button type="button" class="close" data-dismiss="modal">&times;</button>

								          	<h4 class="modal-title">Đăng nhập</h4>

								        </div>

								        <div class="modal-body">

								          	<form class="header_top_right_button_login_form" onsubmit="login_form()">

												<label for="header_top_right_button_login_email"></label>

												<input type="text" id="header_top_right_button_login_email_tx" name="" placeholder="Email"><br>

												<label for="header_top_right_button_login_email"></label>

												<input type="text" id="header_top_right_button_login_password_tx" name="" placeholder="Password"><br>
										
											</form>

								        </div>

								        <div class="modal-footer">

								          	<button type="button" class="btn-btn-login" >Login</button>
								    
								    		<button type="button" class="btn-btn-default" data-dismiss="modal">Cancel</button>

								        </div>

								    </div>
							      
							    </div>

							</div>

				        </li>

				        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>

				    </ul>

			    </div>

			</div>

		</nav>

	</div>

	<div class="header_background">
		
		<div class="container1">
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    
			    <ol class="carousel-indicators">
				    
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    
				    <li data-target="#myCarousel" data-slide-to="2"></li>

			    </ol>

			    <div class="carousel-inner">

				    <div class="item active one">

				    	<a href="#">
				    	
				        	<img src="/Project4/image/chuakeo1.jpg" alt="kien truc">

				    	</a>

				        <div class="carousel-caption">

				          	<h3>Kiến trúc cổ kính.</h3>

				          	<p>Di sản Văn hóa phi vật thể Quốc gia.</p>

				        </div>

				    </div>

				    <div class="item two">

				    	<a href="#">
				        
				        	<img class=" item-two-img" src="/Project4/image/chuakeo1-2.jpg" alt="tin nguong">

				        </a>
				        
				        <div class="carousel-caption">

					        <h3>Nét đẹp tâm linh.</h3>

					        <p>Tín ngưỡng truyền thống.</p>

				        </div>

				    </div>
				    
				    <div class="item three">

				    	<a href="#">

				        	<img class=" item-three-img" src="/Project4/image/chuakeo1-3.jpg" alt="Van hoa">

				        </a>

				        <div class="carousel-caption">

					        <h3>Văn hóa dân gian.</h3>

					        <p>Lễ hội văn hóa độc đáo!</p>

				        </div>

				    </div>
			  
			    </div>

			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">

				    <span class="glyphicon glyphicon-chevron-left"></span>

				    <span class="sr-only">Previous</span>

			    </a>

			    <a class="right carousel-control" href="#myCarousel" data-slide="next">

				    <span class="glyphicon glyphicon-chevron-right"></span>

				    <span class="sr-only">Next</span>

			    </a>

			</div>

		</div>

	</div>

	<div class="jumbotron">

		<div class="container-fluid bg-3 text-center">    
  
  			<div class="row">

			    <div class="col-sm-3 jumbotron1">
			    
			    
			    </div>

			    <div class="col-sm-2 jumbotron2">
			    
			    	<div class="container text-center">

			    		<div class="col-sm-2" style="margin-top: 6%;">

			    			<img src="/lam/cafe/tickV.jpg">

			    		</div>

			    		<div class="col-sm-10">

					    	<h1>Văn hóa độc đáo</h1>   

					    	<p>Thư giãn bằng nhang trầm cùng trà và bánh</p>

					    </div>

				  	</div>
			    
			    </div>

			    <div class="col-sm-2 jumbotron2">
			    
			    	<div class="container text-center">

			    		<div class="col-sm-2" style="margin-top: 6%;">

			    			<img src="/lam/cafe/tickV.jpg">

			    		</div>

			    		<div class="col-sm-10">

					    	<h1>Sử dụng dễ dàng</h1>    

					    	<p>Dễ dàng sử dụng tại nhà của bạn</p>

				    	</div>

				  	</div>

				</div>

			    <div class="col-sm-2 jumbotron2">
			    
			    	<div class="container text-center text-center1">

			    		<div class="col-sm-2" style="margin-top: 6%;">

			    			<img src="/lam/cafe/tickV.jpg">

			    		</div>

			    		<div class="col-sm-10">

					    	<h1>Pháp lý</h1>    

					    	<p>Cửa hàng đáng tin cậy được chứng nhận</p>

					    </div>

				  	</div>

			    </div>

			    <div class="col-sm-3 jumbotron1">
			    
			    
			    </div>

			</div>

		</div>

	</div>

	<div class="container">

	  	<div class="row row-container2">

	    	<div class="col-sm-4 col-container2">

				<div class="wrapper">

					<div class="parent" onclick="">

						<div class="child bg-1">

							<h3 class="child-text1">Ẩm thực</h3>

							<a href="#">Món ăn chay nổi tiếng.</a>

						</div>

					</div>

				</div>

			</div>

			<div class="col-sm-4 col-container2">

				<div class="wrapper">

					<div class="parent" onclick="">

						<div class="child bg-2">

							<h3 class="child-text1">Nghỉ ngơi</h3>

							<a href="#">Quán trà đậm nét văn hóa dân tộc.</a>

						</div>

					</div>

				</div>

			</div>

			<div class="col-sm-4 col-container2">

				<div class="wrapper">

					<div class="parent" onclick="">

						<div class="child bg-3-1">

							<h3 class="child-text1">Quà lưu niệm</h3>

							<a href="#">Quà tặng ý nghĩa <br>cho người thân yêu.</a>

						</div>

					</div>

				</div>
					
			</div>

		</div>

	</div><br>



	<div class="container">

		<div class="title-container">
			
			<h3><b>Chọn nhang trầm của chúng tôi thông qua tính cách của bạn</b></h3>

		</div>

		<div class="row">

		    <div class="col-sm-3 col-container3">

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo19.jpg" class="img-responsive" alt="Product Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Nhang không tăm</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>


		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>  
	      
		    </div>

		    <div class="col-sm-3 col-container3"> 

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo20.jpg" class="img-responsive" alt="Product Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Nhang nụ</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>   
		      
		    </div>

		    <div class="col-sm-3 col-container3"> 

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo21.jpg" class="img-responsive" alt="Product Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Nhang vòng</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>    
		      
		    </div>

		    <div class="col-sm-3 col-container3"> 

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo22.jpg" class="img-responsive" alt="Product Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Nhang cây</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>    
		      
		    </div>

		</div>

	</div><br>

	<div class="container">

	  	<div class="row row-container3">

	    	<div class="col-sm-8 content2 col-container3-1">

				<div class="wrapper">

					<div class="parent" onclick="">

						<div class="child bg-4">

							<h3 class="child-text1">Điểm mới</h3>

							<a href="#">HƯỚNG DẪN LỄ DÂNG HƯƠNG MIỄN PHÍ CHO KHÁCH DU LỊCH</a>

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-sm-6 content2">

						<div class="wrapper">

							<div class="parent" onclick="">

								<div class="child bg-5">

									<h3 class="child-text1">Về chúng tôi</h3>

									<a href="#">CÁCH CHÚNG TÔI LÀM NHANG TRẦM</a>

								</div>

							</div>

						</div>

					</div>

					<div class="col-sm-6 content2">

						<div class="wrapper">

							<div class="parent" onclick="">

								<div class="child bg-6">

									<h3 class="child-text1">Sự kiện</h3>

									<a href="#">THƯỞNG THỨC LỄ HỘI TẠI QUÁN</a>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-sm-3 content2 col-container3-2">

				<div class="wrapper">

					<div class="parent" id="parent1" onclick="">

						<div class="child bg-7">

							<h3 class="child-text1">Khóa học</h3>

							<a href="#">ĐĂNG KÝ KHÓA HỌC TU</a>

						</div>

					</div>

				</div>

			</div>

			<div class="col-sm-3 content2 col-container3-3">

				<div class="wrapper">

					<div class="parent" onclick="">

						<div class="child bg-8">

							<h3 class="child-text1">Kiến thức phật giáo</h3>

							<a href="#">HIỂU THÊM VỀ CHÙA KEO</a>

						</div>

					</div>

					<div class="parent" onclick="">

						<div class="child bg-9">

							<h3 class="child-text1">Đặc sản nơi đây</h3>

							<a href="#">CÁC LOẠI BÁNH VÀ TRÀ</a>

						</div>

					</div>

				</div>
					
			</div>

		</div>

	</div><br>

	<div class="container">

		<div class="title-container">
			
			<h3><b>Thư giãn cùng các loại trà và bánh</b></h3>

		</div>

		<div class="row">

		    <div class="col-sm-3 col-title-container">

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo23.jpg" class="img-responsive" alt="Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Trà khô</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>  
	      
		    </div>

		    <div class="col-sm-3 col-title-container"> 

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo24.jpg" class="img-responsive" alt="Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Chè tươi</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>   
		      
		    </div>

		    <div class="col-sm-3 col-title-container"> 

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo25.jpg" class="img-responsive" alt="Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Trà túi lọc</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>    
		      
		    </div>

		    <div class="col-sm-3 col-title-container"> 

		        <div class="panel-body">

		        	<img src="/Project4/image/chuakeo26.jpg" class="img-responsive" alt="Image">

		        </div>

		        <div class="panel-footer1">

		        	<a href="#">Bánh cáy</a><br>

		        	<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><br>

		        	<span>Từ <b>100,000 VNĐ </b></span><br>

		        	<span>Bao gồm 10% VAT</span><br>

		        	<span>Còn hàng</span>

		        </div>

		        <div class="panel-footer1-btn">

			        <button type="button" class="btn btn-link">

			        	<a href="#"><b>CHỌN PHIÊN BẢN</b></a>

			        </button>

			    </div>    
		      
		    </div>

		</div>

	</div><br>

	<div class="content4">

		<div class="row row-container4">
			
			<div class="col-sm-3 col-sm-3-content4-1">
				


			</div>

			<div class="col-sm-3 col-sm-3-content4">
				
				<h1>BẢN TIN TÙNG LÂM</h1>

			  	<form class="form-inline">

			  		<h5>Đăng ký nhận bản tin của chúng tôi và bạn sẽ nhận được phiếu thưởng 10% cho đơn hàng đầu tiên của mình!</h5><br>

			    	<input type="email" class="form-control" size="50" placeholder="Địa chỉ email của bạn"><br>

			    	<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">

  					<label for="vehicle1" style="color: #fff;"> Tôi đã đọc tuyên bố bảo vệ dữ liệu và ghi chú lại nó.</label><br>

			    	<button type="submit" class="btn btn-danger">Đăng ký</button>

			    </form>

			</div>

			<div class="col-sm-3 col-sm-3-content4-1">
				
				<!-- <img src="/Project4/image/chuakeo27.jpg" alt="voucher image" style="display: block; height: auto; width: 150px; margin-left: auto; margin-right: auto; margin-top: 30px;"> -->

			</div>

			<div class="col-sm-3 col-sm-3-content4-1">
				


			</div>

		</div>

		

	</div>

	<footer class="container-fluid text-center">

	  	<div class="content6">

			<div class="row">
				
				<div class="col-sm-3 footer-textt">
					


				</div>

				<div class="col-sm-3 footer-text">
					
					<h4><b>ĐẶT HÀNG TRỰC TUYẾN</b></h4><br>

					<h5 class="footer-text-1">Tại Tùng Lâm, bạn có thể đặt sản ph yêu thích của mình trực tuyến suốt ngày đêm. Cho dù trà khô, chè tươi, trà túi lọc hay bánh cáy. Và khi nói đến nhang trầm, bạn cũng sẽ tìm thấy những gì bạn đang mong muốn trải nghiệm nhang trầm với nhiều loại khác nhau trong cửa hàng trực tuyến của chúng tôi. Trong vòng bán kính 3km, chúng tôi sẽ gửi đơn hàng của bạn miễn phí với giá trị đơn hàng thấp nhất là 200,000 VNĐ.</h5><br>

					<h4><b>DÀNH NHIỀU THỜI GIAN HƠN</b></h4><br>

					<h5>Tại Tùng Lâm, chúng tôi tin rằng mọi thứ sẽ thực sự tốt nếu bạn thực hiện chúng một cách cẩn thận và chú ý đến từng chi tiết. Chúng tôi làm nhang trầm với một điểm khác biệt quan trọng đối với những nơi khác: Chúng tôi dành thời gian của mình. Với việc sử dụng quá trình chuẩn bị kỹ lưỡng, nhẹ nhàng trong thời gian dài, mỗi sản phẩm nhang trầm của chúng tôi sẽ có đủ thời gian cần thiết để phát triển hương thơm hoàn hảo. Và bạn cũng có thể trải nghiệm miễn phí tại cửa hàng.</h5><br>
					
				</div>

				<div class="col-sm-3 footer-text">
					
					<h4><b>KHÓA TU CHO KHÁCH DU LỊCH</b></h4><br>

					<h5>Chúng tôi biết mong muốn thư giãn khi tới chùa Keo của bạn quan trọng như thế nào. Đó là lý do tại sao chúng tôi mang đến cho bạn trải nghiệm dịch vụ hoàn hảo trực tiếp với khóa tu thiền tịnh của chúng tôi. Từ những hiểu biết sâu sắc về việc tu tâm đến những vị sư thông thái dày kinh nghiệm của chúng tôi  - chúng tôi chăm sóc mọi thứ mà trái tim bạn mong muốn. Bạn chỉ cần thư giãn tại đây và chúng tôi làm phần còn lại - chúng tôi gọi đó là kinh doanh nhưng tới từ trái tim.</h5><br>

					<h4><b>ĐẶC SẢN BÁNH CÁY TẠI TÙNG LÂM </b></h4><br>

					<h5>Tại Tùng Lâm cung cấp cho bạn một loạt các loại trà và bánh đặc sản xuất xứ duy nhất tại Thái Bình để bạn lựa chọn. Bánh Cáy đến thẳng từ người thợ làm bánh lâu đời của chúng tôi ở ngay tại cửa hàng để làm mà không cần đi đường vòng. Điều này đảm bảo chất lượng bánh cao nhất và điều kiện tốt hơn cho thợ làm bánh của chúng tôi.</h5><br>
					
				</div>

				<div class="col-sm-3 footer-textt">
					


				</div>

			</div>

		

		</div>	  	

	</footer>

	<div class="solid"></div>
	
	<div class="row content5" >

		<div class="col-md-2 col-sm-12">

	    </div>

	    <div class="col-md-10 col-sm-12 footer-all">

	        <div class="row">
	        	
	        	<div class="col-md-5 col-sm-12 footer-text1">

	        		<h3><b>THÔNG TIN LIÊN HỆ</b></h3>

	        		<p class="footer-text2">

	        			Coffe Tung Lam là một cổ đông thuộc sở hữu của Tung Lam Creative với vai trò là nhà cung cấp các dịch vụ, quà tặng thời trang phật giáo đến với khách hàng khắp mọi miền tổ quốc. <br>

	        			Địa chỉ: Hà Nội - Hà Nội - Hà Nội - Hà Nội.

	        		</p>

    			</div>

    			<div class="col-md-2 col-sm-12 footer-text1">

    				<h3><b>CHÍNH SÁCH</b></h3>

    				<a href="#"> Hướng dẫn mua hàng</a><br>

    				<a href="#"> Chính sách thanh toán</a><br>

    				<a href="#"> Chính sách vạn chuyển</a><br>

    			</div>

    			<div class="col-md-2 col-sm-12 footer-text1">

    				<h3><b>THÔNG TIN</b></h3>

    				<a href="#"> Về chúng tôi</a><br>

    				<a href="#"> Câu hỏi thường gặp</a><br>

    				<a href="#"> Tin tức</a><br>

    			</div>

    			<div class="col-md-3 col-sm-12 footer-text1">

    				<h3><b>FAN PAGE</b></h3>

    				<a href="https://www.facebook.com/chuakeothaibinh/" class="fa fa-facebook"></a>
					
					<a href="#" class="fa fa-twitter"></a>
					
					<a href="#" class="fa fa-google"></a>
					
					<a href="https://www.youtube.com/watch?v=P4Dui0bsPwE&ab_channel=V%C4%83nh%C3%B3aVi%E1%BB%87tNam" class="fa fa-youtube"></a>

    			</div>

	        </div>

	    </div>

	    <div class="col-md-2 col-sm-12">

	    </div>
	    
	</div>

</body>