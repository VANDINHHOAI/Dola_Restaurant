<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng</title>
    <link rel="stylesheet" href="./public/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <li class="nav-item"><a href="#menu_mid">Menu</a></li>
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
                                    <input type="text" class="my-input" placeholder="Nhập tên món ăn...">
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
                    <li class="home">
                        <a href="home.html">Giỏ hàng</a>
                    </li>

                </ul>
            </div>
        </section>
        <section>
            <main class="main_center">
                <div class="main">
                    <div class="cart_main">
                        <div class="hear_cart">
                            <h1>Giỏ hàng của bạn</h1>
                        </div>
                        <div class="">
                            <form action="">
                                <div class="table_cart">
                                    <div class="table_thead">
                                        <div class="table_top">
                                            <div class="info_product">Thông tin sản phẩm</div>
                                            <div class="price">Đơn giá</div>
                                            <div class="quantity">Số lượng</div>
                                            <div class="total">Thành tiền</div>
                                        </div>
                                    </div>
                                    <div class="table_cart">
                                        <div class="table_thead">
                                            <div class="table_main">
                                                <div class="container_table">
                                                    <div class="product">
                                                        <div class="image">
                                                            <img src="./public/image/products/4.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <div class="infoo">
                                                                <div class="name">Phở cuốn</div>
                                                                <div class="delete">xóa</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price_main">82.000₫</div>
                                                    <div class="quantity_main">
                                                        <div class="quantity_item">
                                                            <div class="button " onclick="decrement()"><span>-</span></div>
                                                            <input type="number" value="1" readonly id="numberInput">
                                                            <div class="button" onclick="increment()"><span>+</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="price_main">82.000₫</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="thanhtoan">
                                    <div class="container_toan">
                                        <div class="tongtien">
                                            <span>Tổng tiền:</span>
                                            <span>82.000₫</span>
                                        </div>
                                        <div class="buttonthanhtoan">
                                            <button>Thanh toán</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="voucher">

                        <div class="cart_voucher">
                            <div class="title_voucher">
                                <img src="./public/image/logo/voucher.png" alt="">
                                <span>Nhận voucher ngay !!!</span>
                            </div>
                            <div class="thump_check">
                                <div class="check_bar"></div>
                                <div class="dot dot1" style="left: calc(30% - 10px);">
                                </div>
                                <div class="dot dot2" style="left: calc(70% - 10px);">
                                </div>
                                <div class="dot dot3" style="left: calc(100% - 10px);">
                                </div>
                            </div>
                            <ul class="coupon">
                                <li class="item-coupon coupon-1">
                                    <div class="coupon-content">
                                        <b>Còn 218.000₫</b>
                                        <b>để được nhận mã freeship</b>
                                    </div>
                                    <div class="saochep">sao chép</div>
                                </li>
                                <li class="item-coupon coupon-2">
                                    <div class="coupon-content">
                                        <b>Còn 618.000₫</b>
                                        <b>để được nhận mã giảm 20.000₫</b>
                                    </div>
                                    <div class="saochep">sao chép</div>
                                </li>
                                <li class="item-coupon coupon-3">
                                    <div class="coupon-content">
                                        <b>Còn 918.000₫</b>
                                        <b>để được nhận mã giảm 50.000₫</b>
                                    </div>
                                    <div class="saochep">sao chép</div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </main>
        </section>

    </div>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="info">
                <div class="logo">
                    <img src="./public/image/logo/logo.png" alt="">
                </div>
                <div class="ft-description">
                    Nhà hàng chúng tôi luôn luôn đặt khách hàng lên hàng đầu, tận tâm phục vụ, mang lại cho khách hàng
                    những trãi nghiệm tuyệt với nhất. Các món ăn với công thức độc quyền sẽ mang lại hương vị mới mẻ cho
                    thực khách. Dola Restaurant xin chân thành cảm ơn.
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

    <script src="./public/js/buy.js"></script>
</body>

</html>