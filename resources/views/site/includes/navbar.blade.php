<div class="top-header text-center">
    <p>عروض الصيف من 5 أغسطس لـ 20 أغسطس وبس!
    </p>
</div>

<div class="middle-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('img/global/logo.PNG')}}" alt=""></a>
                </div>
            </div>
            <div class="col-5">
                <form action="">
                    <div class="search-box">
                        <div class="filter-box">
                            <span id="result"> الأقسام </span>
                        </div>
                        <input type="text" placeholder="ما الذى تحتاجه ؟ ">
                        <button class="btn-search" type="submit"> <i class="fa fa-search"></i> </button>
                    </div>
                    <div class="search-categ">
                        <div class="head">
                            <div> أختار القسم </div>
                        </div>
                        <ul>
                            <li>
                                <p> <input type="checkbox" id="1" value="ملابس" onclick="myCatSelect(this)">
                                    ملابس رجالى </p>
                            </li>
                            <li>
                                <p> <input type="checkbox" id="2" value="اكسسوارات" onclick="myCatSelect(this)">
                                    اكسسوارات موبايل </p>
                            </li>
                            <li>
                                <p> <input type="checkbox" id="3" value="أدوات منزلية " onclick="myCatSelect(this)">
                                    أدوات منزلية </p>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="col-xl-5 col-lg-5 col-sm-2 large-items">

                <div class="nav-icon save-products">
                    <a href="account_favorite.html">
                        <i class="fa fa-cart-plus"></i>
                        <span class="badge badge-primary">3</span>
                    </a>
                </div>
                <div class="nav-icon">
                    <a href="account_favorite.html">
                        <i class="fa fa-user-plus"></i>
                        <span class="cart-text"> مرحبًا، تسجيل الدخول  </span>
                    </a>
                </div>
                <div class="nav-icon">
                    <a href="login.html">
                        <i class="fa fa-key"></i>
                        <span class="cart-text"> سجل الأن</span>
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="bottom-header">
    <div class="container-fluid">
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('img/global/icon5.PNG')}}" alt="icon">
                    <span>الاثاث</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('img/global/icon4.PNG')}}" alt="icon">
                    <span>وحدات التخزين </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('img/global/icon3.PNG')}}" alt="icon">
                    <span>مساحة العمل</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('img/global/icon2.PNG')}}" alt="icon">
                    <span>الديكور</span>
                </a>

            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('img/global/icon.PNG')}}" alt="icon">
                    <span>المطبخ</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('img/global/icon1.PNG')}}" alt="icon">
                    <span>الأجهزة المنزلية</span>
                </a>

            </li>
        </ul>
    </div>

</div>
