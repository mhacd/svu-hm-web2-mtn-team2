<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/all.css">
    <title>تعديل فاتورة</title>
</head>

<body>

    <!-- Start Navbar -->
    <nav class="navbar bg-blue navbar-dark bg-blue">
        <ul class="navbar-nav d-flex flex-row ">
            <li class="nav-item mx-2"><a href="" class="nav-link text-white">وظائف MTN</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">حلول الأعمال</a></li>
        </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark  py-0 bg-yellow sticky-top">
        <div class="container-fluid ">
            <a class="navbar-brand my-0 py-0" href="#"><img src="images/logo.png" alt=""></a>
            <button class="navbar-toggler" id="navbarCol" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#services">المنتجات والخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#any">العروض</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">خدمة الزبائن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">المركز الإعلامي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">حول MTN</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link " href="Query.html">للاستعلام عن الفاتورة</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item mx-1"><input type="text" class="form-control" name="" id="" placeholder="بحث">
                    </li>
                    <li class="nav-item"><label id="label_login" class="nav-link" aria-expanded="true">
                            تسجيل الدخول <i class="fa-solid fa-user fs-5"></i></label>
                        <div class="col-md-3  position-absolute login" id="div_login">
                            <form method="post" action="login.php" class="bg-blue py-3 px-4">
                                <div class="form-group p-1">
                                    <input type="text" name="username" class="form-control" required placeholder="اسم المستحدم"></div>
                                <div class="form-group p-1">
                                    <input type="password" name="password" class="form-control" required placeholder="كلمة المرور "></div>
                                <div class="form-group p-1">
                                    <a href="" class="text-decoration-none text-white">نسيت كلمة المرور؟</a>
                                </div>
                                <div class="form-group p-1">
                                    <div class="form-group py-2 px-2">
                                        <button type="submit" name="submit" class="btn btn-yellow bg-yellow w-100 border-1">تسجيل الدخول</button>
                                    </div>
                                <div class="form-group p-1"><a href=""
                                        class="btn btn-yellow bg-yellow w-100 border-1">تسجيل الدخول باستخدام
                                        الفيسبوك</a></div>
                            </form>
                            <div class="bg-light">
                                <a href="register.html" class="btn btn-light py-3 rounded-0 w-100">إنشاء حساب جديد</a>
                            </div>
                        </div>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Content -->
    <div class="">
        <div class="contiainer">
            <div class="col-md-5 m-auto  py-5 px-3">
                <div class="bg-blue rounded-2 py-5 px-2">
                    <form method="post" action="add_bill.php" class="">
                        <h3 class="text-center mb-3 p-2 text-warning border-bottom border-warning">تعديل فاتورة</h3>
                        <div class="col-md-8 m-auto form-group py-2">
                            <input type="hidden" name="id" value="<?=$id?>"/>
                            <input type="text" name="bill" class="form-control border-warning "  required placeholder="قيمة الفاتورة">
                        </div>
                        <div class="col-md-8 m-auto form-group  py-2">
                            <input type="submit" name="submit" class="btn btn-warning w-100 text-white" value="تعديل الفاتورة">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Start Footer -->
<footer class="col-12 bottom-0">
        <div class="bg-eee">
            <div class="d-flex justify-content-center py-3 bg-eee">
                <span class="fs-6">© 2022 جميع الحقوق محفوظة MTN</span>
            </div>
            <div class="d-flex flex-md-row justify-content-center flex-column ">
                
                <div class="col-md-3 col-sm-12 text-center py-2">masah_154581</div>
                <div class="col-md-3 col-sm-12 text-center py-2">nour_164236</div>
                <div class="col-md-3 col-sm-12 text-center py-2">shahd_166451</div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="js/nav.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>