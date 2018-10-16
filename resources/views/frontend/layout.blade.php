<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="description" content="@yield('site_description')"/>      
    <link rel="canonical" href="http://giagiaphu.com.vn" />
    <meta name='revisit-after' content='1 days' />    
    <link rel="icon" href="{{ URL::asset('public/assets/favicon.png') }}" type="image/x-icon" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Gia Gia Phú">
    <meta property="og:image" content="http:assets/logo.png">
    <meta property="og:image:secure_url" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="http://giagiaphu.com,vn">
    <meta property="og:site_name" content="Gia Gia Phú">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.1.1/dist/css/ionicons.min.css">
    <link href="{{ URL::asset('public/assets/plugin.scss.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('public/assets/owl.carousel.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('public/assets/base.scss.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('public/assets/style.scss.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('public/assets/ant-construction.scss.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ URL::asset('public/assets/jquery-2.2.3.min.js') }}" type='text/javascript'></script>
</head>

<body>
    <!-- Main content -->
    <header class="header">

        <div class="container">
            <div class="header-main">
                <div class="row">
                    <div class="col-md-6 col-100-h">
                        <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <a href="{{ route('home') }}" class="logo-wrapper ">
                                <img class="img-responsive center-block" src="{{ URL::asset('public/assets/logo.gif') }}" alt="logo Gia Gia Phú">
                            </a>
                        </div>
                        <div class="mobile-cart visible-sm visible-xs">
                            <div class="mobile-search">
                                <i class="ion ion-ios-search"></i>
                            </div>
                            <a href="/cart" title="Giỏ hàng">
                                <i class="ion ion-md-appstore"></i>
                                <div class="cart-right">
                                    <span class="count_item_pr">0</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search">
                            <div class="header_search search_form">
                                <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                                    <input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                                    <span class="input-group-btn">
			<button class="btn icon-fallback-text">
				<i class="fa fa-search"></i>
			</button>
		</span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs">                       
                        <div id="TopMenu">
					    	<ul>
                            @if($lang != 'vi')
					    	<li><a href="{{ route('home', 'vi')}}"><img src="{{ URL::asset('public/assets/images/vn.png') }}"> Vietnamese</a></li>	
                            @endif
                            @if($lang != 'cn')
					    	<li><a href="{{ route('home', 'cn')}}"><img src="{{ URL::asset('public/assets/flag_cn.gif') }}"> Chineses</a></li>
					    	@endif
                            @if($lang != 'en')
					    	<li><a href="{{ route('home', 'en')}}"><img src="{{ URL::asset('public/assets/flag_en.gif') }}"> English</a></li>	        
					        @endif
					      </ul> 
					    </div>
                                          
                    </div>
                </div>
            </div>
        </div>
        <nav class="hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="nav" class="nav">

                            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">{!! $textArr['trang-chu']->$text_key !!}</a></li>

                            <li class="nav-item "> 
                                <a href="javascript:;" class="nav-link">{!! $textArr['gioi-thieu']->$text_key !!} <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($aboutList as $about)
                                    <li>
                                        <a class="nav-link" href="{{ route('pages', ['lang' => $lang, 'slug' => $about->$slug_key])}}">{!! $about->$title_key !!}</a>
                                    </li>
                                    @endforeach
                                </ul></li>

                            <li class="nav-item ">
                                <a href="javascript:;" class="nav-link">{!! $textArr['san-pham']->$text_key !!}  <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($cateList as $cate)
                                    <li>
                                        <a class="nav-link" href="{{ route('cates', ['lang' => $lang, 'slug' => $cate->$slug_key])}}">{!! $cate->$name_key !!}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('news', $lang) }}" class="nav-link">{!! $textArr['tin-tuc']->$text_key !!}</a>
                            </li>

                            <li class="nav-item "><a class="nav-link" href="/lien-he">{!! $textArr['lien-he']->$text_key !!}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>  

    @yield('content')

    <footer class="footer">
        <div class="site-footer">
            <div class="container">
                <div class="footer-inner padding-top-25 padding-bottom-10">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-no-mb">
                            <div class="footer-widget">
                                <h3><span>Thông tin liên hệ</span></h3>
                                <ul class="list-menu ul-footer-contact">

                                    <li><span>Địa chỉ:</span> 22 đường số 8 Cư xá Bình Thới, P8, Quận 11,<br>TP Hồ Chí Minh</li>
                                    <li><span>Điện thoại:</span> <a class="a-phone" href="tel:02839626288">028 39 62 62 88 - 028 39 62 62 99</a></li>
                                    <li><span>Email:</span> <a href="mailto:anhthu@giagiaphu.com.vn">anhthu@giagiaphu.com.vn </a></li>
                                    <li><span>Website:</span> <a href="http://giagiaphu.com.vn">https://giagiaphu.com.vn</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 col-mb">
                            <div class="footer-widget">
                                <h3><span>Menu</span></h3>
                                <ul class="list-menu footer-has-border">

                                    <li><a href="{{ route('home') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {!! $textArr['trang-chu']->$text_key !!}</a></li>

                                    <li><a href="{{ route('pages', [$lang, 'gioi-thieu-cong-ty'])}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {!! $textArr['gioi-thieu']->$text_key !!}</a></li>

                                    <li><a href="/collections/all"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {!! $textArr['san-pham']->$text_key !!}</a></li>

                                    <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> {!! $textArr['tin-tuc']->$text_key !!}</a></li>

                                    <li><a href="{{ route('contact', $lang) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {!! $textArr['lien-he']->$text_key !!}</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-mb">
                            <div class="footer-widget dat-hang">
                                <h3><span>{!! $textArr['ho-tro-dat-hang']->$text_key !!}</span></h3>
                                <ul class="list-menu">
                                    <li>
                                       <p>028 39 62 62 98</p>                                       
                                    </li>
                                    <li>
                                       <p>028 39 62 62 99</p>                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-mb">
                            <div class="footer-widget">
                                <h3><span>{!! $textArr['ho-tro-online']->$text_key !!}</span></h3>
                                <ul class="list-menu footer-has-border online">

                                    <li>
                                       <p>Ms Anh Thư - 0935.174.238</p>                                       
                                    </li>
                                    <li>
                                       <p>Mr Tường - 0932.662.633</p>                                       
                                    </li>

                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="constrot-strip"></div>
        <div class="copyright clearfix">
            <div class="container">
                <div class="inner clearfix">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <span>© Bản quyền thuộc về <b>GIA GIA PHU</b> <span class="s480-f">|</span> Cung cấp bởi <a href="http://sahoweb.com" title="sahoweb" target="_blank" rel="nofollow">sahoweb</a></span>

                        </div>
                    </div>
                </div>

                <div class="back-to-top"><i class="fa  fa-arrow-circle-up"></i></div>

            </div>
        </div>
    </footer>
    <!-- Bizweb javascript -->
    <script src="{{ URL::asset('public/assets/option-selectors.js') }}" type='text/javascript'></script>
    <script src="{{ URL::asset('public/assets/api.jquery.js') }}" type='text/javascript'></script>
    <!-- Plugin JS -->
    <script src="{{ URL::asset('public/assets/owl.carousel.min.js') }}" type='text/javascript'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $.validate({});
    </script>   
    <script src="{{ URL::asset('public/assets/appear.js') }}" type='text/javascript'></script>
    <script src="{{ URL::asset('public/assets/cs.script.js') }}" type='text/javascript'></script>

    <script src="{{ URL::asset('public/assets/counterup-min.js') }}" type='text/javascript'></script>   

    <script src="{{ URL::asset('public/assets/main.js') }}" type='text/javascript'></script>

    <div class="backdrop__body-backdrop___1rvky"></div>
    <div class="mobile-main-menu">
        <div class="drawer-header">
            <a href="account/login">
                <div class="drawer-header--auth">
                    <div class="_object">
                        <img src="assets/user.svg" alt="Gia Gia Phú" />
                    </div>

                    <div class="_body">
                        ĐĂNG NHẬP
                        <br> Nhận nhiều ưu đãi hơn
                    </div>

                </div>
            </a>
        </div>
        <ul class="ul-first-menu">
            <li>
                <a href="/">
                    <i class="ion ion-ios-home"></i> {!! $textArr['trang-chu']->$text_key !!}
                </a>
            </li>
            <li>
                <a href="/collections/all">
                    <i class="ion ion-ios-albums"></i> Danh sách sản phẩm
                </a>
            </li>

            <li><a href="/account/login"><i class="ion ion-ios-log-in"></i> Đăng nhập</a></li>
            <li><a href="/account/register"><i class="ion ion-ios-person-add"></i> Đăng ký</a></li>

        </ul>
        <div class="la-scroll-fix-infor-user">
            <!--CATEGORY-->
            <div class="la-nav-menu-items">
                <div class="la-title-nav-items">Danh mục</div>
                <ul class="la-nav-list-items">

                    <li class="ng-scope">
                        <a href="/">{!! $textArr['trang-chu']->$text_key !!}</a>
                    </li>

                    <li class="ng-scope">
                        <a href="/gioi-thieu">Giới thiệu</a>
                    </li>

                    <li class="ng-scope ng-has-child1">
                        <a href="/collections/all">Sản phẩm <i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                        <ul class="ul-has-child1">

                            <li class="ng-scope">
                                <a href="/dung-cu-cam-tay">Dụng cụ cầm tay</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/nhom-su-dung-dien">Nhóm sử dụng điện</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/phu-kien-gia-dinh">Phụ kiện gia đình</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/van-chuyen-nang-do">Vận chuyển, nâng đỡ</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/dung-cu-lam-vuon">Dụng cụ làm vườn</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/son-dau-mo-hoa-chat">Sơn, dầu mỡ, hoá chất</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/vat-dung-khac">Vật dụng khác</a>
                            </li>

                            <li class="ng-scope">
                                <a href="/kim-khi-bao-ho-lao-dong">Kim khí, bảo hộ lao động</a>
                            </li>

                        </ul>
                    </li>

                    <li class="ng-scope ng-has-child1">
                        <a href="/tin-tuc">Tin tức <i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                        <ul class="ul-has-child1">

                            <li class="ng-scope ng-has-child2">
                                <a href="/">Sản phẩm <i class="fa fa-plus fa2" aria-hidden="true"></i></a>
                                <ul class="ul-has-child2">

                                    <li class="ng-scope">
                                        <a href="/dung-cu-cam-tay">Dụng cụ cầm tay</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/nhom-su-dung-dien">Nhóm sử dụng điện</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/phu-kien-gia-dinh">Phụ kiện gia đình</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/van-chuyen-nang-do">Vận chuyển, nâng đỡ</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/dung-cu-lam-vuon">Dụng cụ làm vườn</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/son-dau-mo-hoa-chat">Sơn, dầu mỡ, hoá chất</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/vat-dung-khac">Vật dụng khác</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/kim-khi-bao-ho-lao-dong">Kim khí, bảo hộ lao động</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="ng-scope ng-has-child2">
                                <a href="/">Sản phẩm <i class="fa fa-plus fa2" aria-hidden="true"></i></a>
                                <ul class="ul-has-child2">

                                    <li class="ng-scope">
                                        <a href="/dung-cu-cam-tay">Dụng cụ cầm tay</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/nhom-su-dung-dien">Nhóm sử dụng điện</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/phu-kien-gia-dinh">Phụ kiện gia đình</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/van-chuyen-nang-do">Vận chuyển, nâng đỡ</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/dung-cu-lam-vuon">Dụng cụ làm vườn</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/son-dau-mo-hoa-chat">Sơn, dầu mỡ, hoá chất</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/vat-dung-khac">Vật dụng khác</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/kim-khi-bao-ho-lao-dong">Kim khí, bảo hộ lao động</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="ng-scope ng-has-child2">
                                <a href="/">Tin tức <i class="fa fa-plus fa2" aria-hidden="true"></i></a>
                                <ul class="ul-has-child2">

                                    <li class="ng-scope">
                                        <a href="/">Sản phẩm</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/">Sản phẩm</a>
                                    </li>

                                    <li class="ng-scope">
                                        <a href="/">Tin tức</a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="ng-scope">
                        <a href="/lien-he">Liên hệ</a>
                    </li>

                </ul>
            </div>
        </div>
        <ul class="mobile-support">
            <li>
                <div class="drawer-text-support">HỖ TRỢ</div>
            </li>

            <li><i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: <a href="tel:0982362509">0982 362 509</a></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL: <a href="mailto:baotrung304@gmail.com">baotrung304@gmail.com</a></li>

        </ul>
    </div>
</body>

</html>