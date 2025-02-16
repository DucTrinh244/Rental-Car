<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Dashboard | DUCNHI-CAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('public/BackEnd/images/favicon.ico') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
    <link href="{{ asset('public/BackEnd/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/BackEnd/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/BackEnd/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('public/BackEnd/js/config.js') }}"></script>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        <header class="topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu me-2">
                                <iconify-icon icon="solar:hamburger-menu-broken"
                                    class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Xin chào!</h4>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-1">

                        <!-- Theme Color (Light/Dark) -->
                        <div class="topbar-item">
                            <button type="button" class="topbar-button" id="light-dark-mode">
                                <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                       
                        <!-- Theme Setting -->
                        <div class="topbar-item d-none d-md-flex">
                            <button type="button" class="topbar-button" id="theme-settings-btn"
                                data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
                                aria-controls="theme-settings-offcanvas">
                                <iconify-icon icon="solar:settings-bold-duotone"
                                    class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                      

                        <!-- User -->
                        <div class="dropdown topbar-item">
                            <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle" width="32"
                                        src="{{ asset('public/uploads/profile/admin_profile.png') }}" alt="avatar-3">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Xin chào</h6>
                                <a class="dropdown-item" href="{{ URL::to('admin/profile-admin') }}">
                                    <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Thông tin cá nhân</span>
                                </a>
                                <div class="dropdown-divider my-1"></div>

                                {{-- <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit">
                                        <i class="bx bx-log-out fs-18 align-middle me-1"></i>
                                        <span class="align-middle">Đăng xuất</span>
                                    </button>
                                </form> --}}
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="bx bx-log-out fs-18 align-middle me-1"></i>
                                    <span class="align-middle">Đăng xuất</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Right Sidebar (Theme Settings) -->
        <div>
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                    <h5 class="text-white m-0">Cài đặt giao diện</h5>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100">
                        <div class="p-3 settings-bar">

                            <div>
                                <h5 class="mb-3 font-16 fw-semibold">Màu giao diện</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-light" value="light">
                                    <label class="form-check-label" for="layout-color-light">Sáng</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-dark" value="dark">
                                    <label class="form-check-label" for="layout-color-dark">Tối</label>
                                </div>
                            </div>

                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Màu thanh trên</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-light" value="light">
                                    <label class="form-check-label" for="topbar-color-light">Sáng</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-dark" value="dark">
                                    <label class="form-check-label" for="topbar-color-dark">Tối</label>
                                </div>
                            </div>


                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Màu menu</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">
                                        Sáng
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">
                                        Tối
                                    </label>
                                </div>
                            </div>

                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Hiển thị sidebar</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">
                                        Mặc định
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">
                                        Ngưng tụ
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-hidden" value="hidden">
                                    <label class="form-check-label" for="leftbar-hidden">
                                        Ẩn
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small-hover-active" value="sm-hover-active">
                                    <label class="form-check-label" for="leftbar-size-small-hover-active">
                                        Di chuyển nhỏ khi hoạt động
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label" for="leftbar-size-small-hover">
                                        Chuyển động nhỏ
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="offcanvas-footer border-top p-3 text-center">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-danger w-100" id="reset-layout">Đặt lại </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== App Menu Start ========== -->
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="{{ URL::to('/trang-chu') }}" class="logo-dark">
                    <img src="{{ asset('public/BackEnd/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('public/BackEnd/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
                </a>

                <a href="{{ URL::to('/trang-chu') }}" class="logo-light">
                    <img src="{{ asset('public/BackEnd/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('public/BackEnd/images/logo-light.png') }}" class="logo-lg" alt="logo light">
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone"
                    class="button-sm-hover-icon"></iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title">Tổng quan</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Trang chủ </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sideBarBookCar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideBarBookCar">
                             <span class="nav-icon">
                                  <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                             </span>
                             <span class="nav-text"> Đặt xe </span>
                        </a>
                        <div class="collapse" id="sideBarBookCar">
                             <ul class="nav sub-navbar-nav">
                                  <li class="sub-nav-item">
                                       <a class="sub-nav-link" href="category-list.html">Quản lý đặt xe</a>
                                  </li>                         
                                  <li class="sub-nav-item">
                                       <a class="sub-nav-link" href="category-edit.html">Danh sách khách hàng</a>
                                  </li>
                             </ul>
                        </div>
                   </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                             <span class="nav-icon">
                                  <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                             </span>
                             <span class="nav-text"> Cá nhân </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                             <ul class="nav sub-navbar-nav">
                                  <li class="sub-nav-item">
                                       <a class="sub-nav-link" href="product-list.html">Thông tin cá nhân</a>
                                  </li>
                                  <li class="sub-nav-item">
                                       <a class="sub-nav-link" href="product-grid.html"></a>
                                  </li>
                             </ul>
                        </div>
                   </li>

                   <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">
                             <span class="nav-icon">
                                  <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                             </span>
                             <span class="nav-text"> Dịch vụ </span>
                        </a>
                        <div class="collapse" id="sidebarServices">
                             <ul class="nav sub-navbar-nav">
                                  <li class="sub-nav-item">
                                       <a class="sub-nav-link" href="{{ route('services') }}">Quản lý dịch vụ</a>
                                  </li>                         
                                  <li class="sub-nav-item">
                                       <a class="sub-nav-link" href="{{ route('services.add') }}">Thêm dịch vụ</a>
                                  </li>
                             </ul>
                        </div>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sideBarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideBarPages">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Quản lý trang</span>
                    </a>
                    <div class="collapse" id="sideBarPages">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="category-list.html">Video hiển thị</a>
                              </li>                         
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="category-list.html">Hình ảnh hiển thị</a>
                              </li>                         
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="category-edit.html">Thông tin hiển thị</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="category-edit.html">Đánh giá khách hàng</a>
                              </li>
                         </ul>
                    </div>
                    </li>

                </ul>
            </div>
        </div>

        @yield('content_admin')

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>

    <!-- END Wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('public/BackEnd/js/vendor.js') }}"></script>
    <script src="{{ asset('public/BackEnd/js/app.js') }}"></script>
    <script src="{{ asset('public/BackEnd/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('public/BackEnd/vendor/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('public/BackEnd/vendor/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('public/BackEnd/js/pages/product-grid.js') }}"></script>
    <script src="{{ asset('public/BackEnd/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('public/BackEnd/js/components/extended-sweetalert.js') }}"></script>
    <script src="{{ asset('public/BackEnd/js/components/form-quilljs.js ') }}"></script>

    @yield('scripts')

</body>

</html>
