<!DOCTYPE html>

<head>

    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/Project4/Css/PJ4-sanpham.css">

    <title>Coffe Tung Lam</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    

    
    <img class="img-banner" src="/Project4/image/chuakeo28.jpg">

    <div class="container">

        <div class="row" >

            <div class="col-md-12 col-sm-12 about">

                NHANG TRẦM

            </div> 

        </div>

        <div class="row content-product">

            <div class="col-md-6">

                <a href="#">

                    <figure class="img-product-series">

                        <img src="/Project4/image/chuakeo19.jpg" alt="">

                    </figure>

                    <div class="content1">

                        <p class="title-product-series1">Nhang trầm không tăm</p>

                        <p class="title-product-series1-1">100,00 VND

                            <p class="title-product-series2">(100g)</p>

                        </p>

                        <div class="content1-text">

                            <p class="title-product-series3">Hương nhẹ</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Đậu tàn</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Khói mỏng</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series4">

                                Với đặc tính lan tỏa trong không gian lớn, nhang Trầm thường được sử dụng để xông nhà, xông văn phòng, xưởng làm việc.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-md-6">

                <a href="#">

                    <figure class="img-product-series">

                        <img src="/Project4/image/chuakeo20.jpg" alt="">

                    </figure>

                    <div class="content1">

                        <p class="title-product-series1">Nhang nụ</p>

                        <p class="title-product-series1-1">100,00 VND

                            <p class="title-product-series2">(100g)</p>

                        </p>

                        <div class="content1-text">

                            <p class="title-product-series3">Hương nhẹ</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Đậu tàn</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Khói mỏng</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series4">

                                Với đặc tính lan tỏa trong không gian lớn, nhang Trầm thường được sử dụng để xông nhà, xông văn phòng, xưởng làm việc.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

            <div class="row content-product">

                <div class="col-md-6">

                    <a href="#">

                        <figure class="img-product-series">

                            <img src="/Project4/image/chuakeo21.jpg" alt="">

                        </figure>

                        <div class="content1">

                            <p class="title-product-series1">Nhang vòng</p>

                            <p class="title-product-series1-1">100,00 VND

                                <p class="title-product-series2">(100g)</p>

                            </p>

                            <div class="content1-text">

                                <p class="title-product-series3">Hương nhẹ</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series3">Đậu tàn</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series3">Khói mỏng</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series4">

                                    Với đặc tính lan tỏa trong không gian lớn, nhang Trầm thường được sử dụng để xông nhà, xông văn phòng, xưởng làm việc.

                                </p>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="col-md-6">

                    <a href="#">

                        <figure class="img-product-series">

                            <img src="/Project4/image/chuakeo22.jpg" alt="">

                        </figure>

                        <div class="content1">

                            <p class="title-product-series1">Nhang cây</p>

                            <p class="title-product-series1-1">100,00 VND

                                <p class="title-product-series2">(100g)</p>

                            </p>

                            <div class="content1-text">

                                <p class="title-product-series3">Hương nhẹ</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series3">Đậu tàn</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series3">Khói mỏng</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series4">

                                    Với đặc tính lan tỏa trong không gian lớn, nhang Trầm thường được sử dụng để xông nhà, xông văn phòng, xưởng làm việc.

                                </p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row" >

            <div class="col-md-12 col-sm-12 about">

                TRÀ VÀ BÁNH

            </div> 

        </div>

        <div class="row content-product">

            <div class="col-md-6">

                <a href="#">

                    <figure class="img-product-series">

                        <img src="/Project4/image/chuakeo23.jpg" alt="">

                    </figure>

                    <div class="content1">

                        <p class="title-product-series1">Trà khô</p>

                        <p class="title-product-series1-1">100,00 VND

                            <p class="title-product-series2">(100g)</p>

                        </p>

                        <div class="content1-text">

                            <p class="title-product-series3">Đậm vị</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Dùng lâu</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Dễ dùng</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series4">

                                Với các thành phần tự nhiên giúp kích thích khả năng vận động của huyết cảm , hỗ trợ thận lọc kỹ hơn các chất cặn bã trong cơ thể ra ngoài theo đường tiết niệu.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-md-6">

                <a href="#">

                    <figure class="img-product-series">

                        <img src="/Project4/image/chuakeo24.jpg" alt="">

                    </figure>

                    <div class="content1">

                        <p class="title-product-series1">Chè tươi</p>

                        <p class="title-product-series1-1">100,00 VND

                            <p class="title-product-series2">(100g)</p>

                        </p>

                        <div class="content1-text">

                            <p class="title-product-series3">Vị nhẹ</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Tự nhiên</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Dễ uống</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series4">

                                Với các thành phần tự nhiên giúp kích thích khả năng vận động của huyết cảm , hỗ trợ thận lọc kỹ hơn các chất cặn bã trong cơ thể ra ngoài theo đường tiết niệu.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

        <div class="row  content-product">

            <div class="col-md-6">

                <a href="#">

                    <figure class="img-product-series">

                        <img src="/Project4/image/chuakeo25.jpg" alt="">

                    </figure>

                    <div class="content1">

                        <p class="title-product-series1">Trà túi lọc</p>

                        <p class="title-product-series1-1">100,00 VND

                            <p class="title-product-series2">(100g)</p>

                        </p>

                        <div class="content1-text">

                            <p class="title-product-series3">Nhiều vị</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Tiện lợi</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series3">Dễ dùng</p>

                        </div>

                        <div class="content1-text">

                            <p class="title-product-series4">

                                Với các thành phần tự nhiên giúp kích thích khả năng vận động của huyết cảm , hỗ trợ thận lọc kỹ hơn các chất cặn bã trong cơ thể ra ngoài theo đường tiết niệu.

                            </p>

                        </div>

                    </div>

                </a>

            </div class="row content-product">

                <div class="col-md-6">

                    <a href="#">

                        <figure class="img-product-series">

                            <img src="/Project4/image/chuakeo26.jpg" alt="">

                        </figure>

                        <div class="content1">

                            <p class="title-product-series1">Bánh cáy</p>

                            <p class="title-product-series1-1">100,00 VND

                                <p class="title-product-series2">(100g)</p>

                            </p>

                            <div class="content1-text">

                                <p class="title-product-series3">Đặc sản</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series3">Vị ngọt</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series3">Ngon</p>

                            </div>

                            <div class="content1-text">

                                <p class="title-product-series4">

                                    Qua đôi bàn tay khéo léo của người làng Nguyễn, Thái Bình, các nguyên liệu như gạo nếp, lạc, vừng, gấc, mỡ lợn, vỏ quýt… hòa quyện với nhau tạo nên thứ bánh quê dân dã, vừa béo, vừa bùi.

                                </p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </div>      

    <div class="solid"></div>

    <footer class="footer-all">
        
        <div class="row" >

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

    </footer>

</body>