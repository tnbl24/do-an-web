<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/x-icon" href="../material/img/iconheader.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../material/css/style.css" />
    <link rel="stylesheet" href="../material/css/about.css" />
    <link rel="stylesheet" href="../material/css/home.css" />
    <link rel="stylesheet" href="../material/css/comment.css" />
    <link rel="stylesheet" href="../material/css/dog.css" />
    <link rel="stylesheet" href="../material/css/account.css" />
    <link rel="stylesheet" href="../material/css/cart.css" />
    <link rel="stylesheet" href="../material/css/contact.css" />
    <link rel="stylesheet" href="../material/css/product-detail.css" />
    <link rel="stylesheet" href="../material/css/delivery.css" />
    <link rel="stylesheet" href="../material/css/payment.css" />
    <link rel="stylesheet" href="../material/css/order.css" />
    <link rel="stylesheet" href="../material/css/order-detail.css" />
    <link rel="stylesheet" href="../material/css/modal.css"/>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <a href="../web/home.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none logo"><img src="../material/img/logo.png" width="150" height="60" />
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="../web/home.php" class="nav-link px-2 ">Trang chủ</a></li>
                <li><a href="../web/about.php" class="nav-link px-2 ">Giới thiệu</a></li>
                <li><a href="../web/dog.php" class="nav-link px-2 ">Chó</a></li>
                <li><a href="../web/contact.php" class="nav-link px-2 ">Liên hệ</a></li>
                <li><a href="../web/order.php" class="nav-link px-2 ">Đơn Hàng</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="../web/cart.php" class="item cart-color ">
                    <svg class="item-cart" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                    <span class="cart-notice">0</span>
                </a>

                <div class="dropdown account">
                    <div class="dropbtn"><a href="#" class="item "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg></a>

                    </div>

                    <div class="dropdown-content">
                        <svg class="dr-content" xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                            <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                        </svg>

                        <a href="../web/account.php">Tài khoản của tôi</a>
                        <a href="../web/home.php"> Đăng xuất</a>
                    </div>
                </div>
            </div>
        </header>
    </div>