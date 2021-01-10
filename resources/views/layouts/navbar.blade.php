<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#mymenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mymenu">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl2 col-lg-2 col-md-4  fixed-top" id="sidebar">
                    <a href="#"
                        class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 border-bottom">نت پیک</a>
                    <div class="text-center text-warning border-bottom pb-3" id="username">
                        <div class="row justify-content-center">
                            <img src="https://rp76.ir/favicon.ico" class="col-2 ml-2 mt-1 p-0 rounded-circle border" alt="نام کاربری"> نام کاربری
                        </div>
                        {{-- {{Auth::user()->name}} --}}
                    </div>
                    <ul class="navbar-nav flex-column p-0 mt-2">
                        <li class="nav-item my-1 @yield('dashboard')">
                            <a href="" class="nav-link text-white">
                                <i class="fa fa-tachometer"></i>
                                داشبورد
                            </a>
                        </li>

                        <li class="nav-item my-1 @yield('note')">
                            <a href="" class="nav-link text-white">
                                <i class="fa fa-sticky-note"></i>
                                یادداشت
                            </a>
                        </li>

                        <li class="nav-item my-1">
                            <a href="#" class="nav-link text-white">
                                <i class="fa fa-cogs"></i>
                                تنظیمات
                            </a>
                        </li>

                        <li class="nav-item my-1">
                            <a href="#" class="nav-link text-white">
                                <i class="fa fa-sign-out"></i>
                                خروج
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- end of sidebar -->
                <!-- topnav -->
                <div class="col-lg-10 col-md-8 bg-dust mr-auto fixed-top" id="topbar">
                    <div class="row">
                        ۱
                    </div>
                </div>
                <!-- end oftopnav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->
