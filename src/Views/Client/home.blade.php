<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <header class="mt-5">
            <img src="images/banner.png" width="100%">
        </header>
        <nav>
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Bài viết</a></li>
                <li><a href="">Danh mục</a></li>
                @if (!is_logged())
                    <li><a class="btn-primary" href="{{ url('auth/login') }}">Login</a></li>
                @endif
                @if (is_logged())
                    <li><a class="btn-primary" href="{{ url('auth/logout') }}">Logout</a></li>
                @endif
                <li><a href="">Liên hệ</a></li>
            </ul>
        </nav>
        <section class="content">
            <div class="product">
                <h2>SẢN PHẨM MỚI</h2>
                <div class="product-list">
                    <div class="product-item">
                        <img src="images/son5.jpg" width="100%" height="400px">
                        <div class="product-detail">
                            <h3>Son Merzy The Watery Dew Tint Ver3</h3>
                            <span class="product-price">$15.0</span>
                            <button class="btn-pro btn">Buy</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="images/son6.jpg" width="100%" height="400px">
                        <div class="product-detail">
                            <h3>Son Peripera Ink Mood</h3>
                            <span class="product-price">$18.0</span>
                            <button class="btn-pro btn">Buy</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="images/son3.jpg" width="100%" height="400px">
                        <div class="product-detail">
                            <h3>Son BlackRouge Double Layer Ver1</h3>
                            <span class="product-price">$12.0</span>
                            <button class="btn-pro btn">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="post-content">
                    <div class="post-detail">
                        <h2>Đánh giá chất lượng son 3CE</h2>
                        <p class="description">Các dòng son 3CE đều có thiết kế bao bì đơn giản nhưng tinh tế, trẻ trung và hiện đại.<br>
                        Chất son 3CE được đánh giá là rất tốt và an toàn cho làn môi.<br>
                        Độ bám màu của son 3CE cũng rất cao, từ 4 đến 6 tiếng tùy theo dòng son và cách sử dụng.<br></p>
                        <button class="btn">Read more</button>
                    </div>
                </div>
                <div class="post-img">
                    <img src="images/son1.jpeg" width="100%" height="500px">
                </div>
            </div>
        </section>
        <footer>
            <p>@ Nguyễn Thị Phương Thảo</p>
            <form>
                <input type="text" placeholder="Tìm kiếm sản phẩm">
                <button class="btn btn-f">Send</button>
            </form>
        </footer>
    </div>
</body>
</html>