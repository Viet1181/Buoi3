<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/assets/images/logo.jpg" />
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
        @yield('header')
    </head>

    <body>
        <header>


            <section class="section_header bg-light">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="row w-100">
                            <div class="col-sm-2 d-flex justify-content-center mt-4">
                                <img src="{{ asset('images/logo1.webp') }}" class="logo img-fluid" alt="logo"
                                    style="border-radius: 5px; max-width: 70%; max-height: 70%;" />

                            </div>
                            <div class="col-sm-8 py-4 d-flex align-items-center justify-content-between">
                                <nav class="navbar navbar-expand-lg bg-light">
                                    <button class="navbar-toggler" type="button" onclick="toggleExpanded()"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-grow-1">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <form class="search-form me-4">
                                    <div style="display: flex;">
                                        <input type="search" placeholder="Search" value=""
                                            onchange="handleChange(event)" class="search-input rounded me-2"
                                            aria-label="Search" style="flex: 1;" />
                                        <button type="submit" class="buta search-button rounded">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-2 d-flex justify-content-center">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-heart me-3"></i>
                                    <i class="fas fa-bell me-3"></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
</div>
</section>
</header>
<main>
    @yield('maincontent')
</main>


<!-- footer -->
<footer class="mt-2 bg-black">
    <div class="row">
        <div class="col-sm-4 m-3">
            <h4 class="text-white ms-2">THÔNG TIN</h4>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Chúng tôi luôn trân trọng và mong đợi nhận được mọi
                    ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">70 Lữ Gia, Phường 15, Quận 11, TP. HCM</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">1900 6750</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">support@sapo.vn</a>
            </li>

        </div>
        <div class="col-sm-3 m-3">
            <h4 class="text-white ms-2">CHÍNH SÁCH</h4>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Chính sách thành viên</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Chính sách vận chuyển</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Chăm sóc khách hàng</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Phương thức thanh toán</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Chính sách đổi trả / bảo hành</a>
            </li>
        </div>
        <div class="col-md m-3">
            <h4 class="text-white ms-2">HƯỚNG DẪN</h4>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Denny Member</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Mua hàng dễ dàng</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Hợp tác nhượng quyền</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Hướng dẫn mua hàng online</a>
            </li>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Hướng dẫn kiểm tra hạng thẻ thành viên</a>
            </li>
        </div>
        <div class="col-md m-3">
            <h4 class="text-white ms-2">ĐĂNG KÝ NHẬN TIN</h4>
            <li class="nav-link text">
                <a class="text-white-50" style="text-decoration: none;">Chúng tôi luôn trân trọng và mong đợi nhận được
                    mọi
                    ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</a>
            </li>

        </div>
    </div>
    <div class="row d-flex justify-content-center p-3 text-white">Thiết kế bởi: Nguyen Quoc Viet</div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

@yield('footer')

</body>

</html>
</div>
