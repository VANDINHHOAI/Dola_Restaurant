<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm</title>
    <link rel="stylesheet" href="./public/css/buy.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./public/image/logo/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- header design -->
    <header class="header" id="header">
        <div class="container">
            <div class="logo" id="logo"><img src="./public/image/logo/logo.png" alt=""></div>
            <nav class="navbar" id="navbar">
                <div class="container">
                    <ul>
                        <li class="nav-item"><a href="home.html">Trang chủ</a></li>
                        <li class="nav-item"><a href="introduce.html">Giới thiệu</a></li>
                        <li class="nav-item"><a href="#menu_mid"  style="color: #d69c52;">Menu</a></li>
                        <li class="nav-item"><a href="#">Món ăn nổi bật</a></li>
                        <li class="nav-item"><a href="#">Tin tức</a></li>
                        <li class="nav-item"><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>

            <div class="btn-box">
                <div class="container">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <div class="header-content">
                                <p>tìm kiếm món ăn của bạn</p>
                                <div class="input">
                                    <input type="text" class="my-input" placeholder="Nhập tên món ăn..." >
                                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                </div>                 
                            </div>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li class="user">
                            <a href="#">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="nav-second">
                                <li><a href="login.html">Đăng nhập</a></li>
                                <li><a href="register.html">Đăng ký</a></li>
                                <li><a href="#">Món ăn yêu thích</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i></a></li>
                    </ul>                     
                    <button class="btn-header">Đặt bàn</button>
                </div>
            </div>
        </div>  
    </header>

    <div class="bodywrap">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="home.html">Trang chủ</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </li>
                    <li class="intro">
                        <strong>
                            <span>Tất cả sản phẩm</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <section class="container_category">
            <div class="menu_left">
                <div class="menu">
                    <h3>DANH MỤC SẢN PHẨM</h3>
                    <div>Trang chủ</div>
                    <div>Giới thiệu</div>
                    <div>Menu</div>
                    <div>Món ăn nổi bật</div>
                    <div>Món ngon mỗi ngày</div>
                    <div>Tin tức</div>
                    <div>Liên hệ</div>
                </div>
                <div class="menu">
                    <h3>CHỌN MỨC GIÁ</h3>
                    <div><input type="checkbox">Dưới 100.000đ</div>
                    <div><input type="checkbox">Từ 100.000đ - 200.000đ</div>
                    <div><input type="checkbox">Từ 200.000đ - 500.000đ</div>
                    <div><input type="checkbox">Từ 500.000đ - 1 triệu</div>
                    <div><input type="checkbox">Trên 1 triệu</div>
                </div>
                <div class="menu">
                    <h3>HƯƠNG VỊ</h3>
                    <div><input type="checkbox">Mặn</div>
                    <div><input type="checkbox">Ngọt</div>
                    <div><input type="checkbox">Chua</div>
                    <div><input type="checkbox">Cay</div>
                </div>
                <div class="menu">
                    <h3>KÍCH CỠ</h3>
                    <div><input type="checkbox">Lớn</div>
                    <div><input type="checkbox">Vừa</div>
                    <div><input type="checkbox">Nhỏ</div>
                </div>
            </div>
            <div class="menu_right">
                <div class="title">
                    <h3>TẤT CẢ MÓN ĂN</h3>
                    <div><b>Sắp xếp:</b>&nbspMặc định  <i class='bx bx-chevron-down'></i></div>
                </div>
                <div class="product">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="./public/image/products/1.jpg" alt=""> 
                             </a>
                             <div class="product-info">
                                 <a href="#" class="product-name">Salad rau mùa sốt cam</a>
                                 <div class="price-box">
                                     <span class="price">68.000đ</span>
                                     <!-- <span class="compare-price">70.000đ</span> -->
                                 </div>
                             </div>
                             <div class="btn-card">
                                 <a href="#" class="btn-more">Xem chi tiết</a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="show_all"><button>Xem thêm</button></div>
            </div>
        </section>
    </div>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="info">
                <div class="logo">
                    <img src="./public/image/logo/logo.png" alt="">
                </div>
                <div class="ft-description">
                    Nhà hàng chúng tôi luôn luôn đặt khách hàng lên hàng đầu, tận tâm phục vụ, mang lại cho khách hàng những trãi nghiệm tuyệt với nhất. Các món ăn với công thức độc quyền sẽ mang lại hương vị mới mẻ cho thực khách. Dola Restaurant xin chân thành cảm ơn.
                </div>
                <div class="group-address">
                    <div class="title">Cửa hàng chính</div>
                    <ul>
                        <li>
                            <b>Địa chỉ:<span>70 Lữ Gia, phường 15, quận 11, TP.HCM</span></b>
                        </li>
                        <li>
                            <b>Điện thoại: <a href="#">1900 6750</a></b>
                        </li>
                        <li>
                            <b>Email: <a href="#">support@sapo.vn</a></b>
                        </li>
                    </ul>
                    <a href="#" class="see-store">Hệ thống cửa hàng</a>
                </div>
            </div>
            <div class="instruct">
                <h4 class="title-menu">Hướng dẫn</h4>
                <ul class="list-menu">
                    <li><a href="#">Hướng dãn mua hàng</a></li>
                    <li><a href="#">Hướng dãn thanh toán</a></li>
                    <li><a href="#">Đăng ký thành viên</a></li>
                    <li><a href="#">Hỗ trợ khách hàng</a></li>
                </ul>
            </div>
            <div class="policy">
                <h4 class="title-menu">Chính sách</h4>
                <ul class="list-menu">
                    <li><a href="#">Chính sách thành viên</a></li>
                    <li><a href="#">Chính sách thanh toán</a></li>
                    <li><a href="#">Hướng dãn mua hàng</a></li>
                    <li><a href="#">Bảo mật thông tin cá nhân</a></li>
                    <li><a href="#">Quà tặng tri ân</a></li>
                </ul>
            </div>
            <div class="social-box">
                <h4 class="title-menu">Mạng xã hội</h4>
                <ul class="social">
                    <li><a href="#"><img src="./public/image/icon/zalo.svg" alt=""></a></li>
                    <li><a href="#"><img src="./public/image/icon/facebook.svg" alt=""></a></li>
                    <li><a href="#"><img src="./public/image/icon/youtube.svg" alt=""></a></li>
                </ul>
                <h4 class="title-menu">Hình thức thanh toán</h4>
                <ul class="thanhtoan">
                    <li><a href="#"><img src="./public/image/icon/payment_1.png" alt=""></a></li>
                    <li><a href="#"><img src="./public/image/icon/payment_2.png" alt=""></a></li>
                    <li><a href="#"><img src="./public/image/icon/payment_3.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- button scroll to top design -->
    <button id="toTop"><i class="fa-solid fa-chevron-up"></i></button>

    <script src="buy.js"></script>
</body>
</html>