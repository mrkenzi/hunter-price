<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description"
          content="@yield('description')"/>
    <meta property="og:image"
          content="@yield('image')"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    {{--<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">--}}
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- bootstrap widget theme - **** RENAMED TO theme.bootstrap_3.css **** -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-flat.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-flat-extras.min.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/introjs.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" id="step1">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SănGiáTốt.TOP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown active" id="step2">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Lazada
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#five" data-toggle="tab" title="Tìm toàn bộ Lazada"><h5>Tìm Toàn Bộ Lazada</h5>
                                </a></li>
                            <li><a href="#four" data-toggle="tab" title="Tìm sản phẩm giảm giá Lazada"><h5>Tìm Theo Giá
                                        / Mức Giảm Giá / SP - x10</h5></a></li>
                            <li><a href="#one" data-toggle="tab" title="Tìm sản phẩm giảm giá tốt nhất"><h5>Tìm Theo Giá
                                        / Mức Giảm Giá / SP</h5></a></li>
                            <li><a href="#six" data-toggle="tab" title="Tìm sản phẩm có quà tặng kèm Lazada"><h5>Tìm Tất
                                        Cả SP Có Quà Tặng Kèm - x10</h5></a></li>
                            <li><a href="#nine" data-toggle="tab" title="Tìm sản phẩm có quà tặng trên Lazada"><h5>Tìm
                                        Tất Cả SP Có Quà Tặng Kèm - Cả Lzd</h5></a></li>
                            <li><a href="#two" data-toggle="tab" title="Tìm sản phẩm có quà tặng trên Lazada"><h5>Tìm
                                        Tất Cả SP Có Quà Tặng Kèm</h5></a></li>
                            <li><a href="#seven" data-toggle="tab" title="Tìm sản phẩm đang có mã giảm giá Lazada"><h5>
                                        Tìm Tất Cả SP Đang Có Mã Giảm Giá - x10</h5></a></li>
                            <li><a href="#eight" data-toggle="tab" title="Tìm mã giảm giá Lazada"><h5>Tìm Tất Cả SP Đang
                                        Có Mã Giảm Giá - Cả Lzd</h5></a></li>
                            <li><a href="#three" data-toggle="tab" title="Tìm mã giảm giá Lazada"><h5>Tìm Tất Cả SP Đang
                                        Có Mã Giảm Giá</h5></a></li>
                        </ul>
                    </li>
                    <li><a href="/lotte-hunter" title="Tìm sản phẩm giảm giá Lotte">Lotte</a></li>
                    <li><a href="/shopee-hunter" title="Tìm sản phẩm giảm giá Shopee">Shopee</a></li>
                    <li><a href="/yes24-hunter" title="Tìm sản phẩm giảm giá Yes24">Yes24</a></li>
                    <li><a href="/tiki-hunter" title="Tìm sản phẩm giảm giá Tiki">Tiki</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <h1></h1>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a style="color: #FFFFFF;" href="https://www.facebook.com/groups/154245985100841/" target=_blank>
            <button class="btn btn-danger btn-block"><h4>THAM GIA GROUP NHẬN MÃ GIẢM GIÁ MỚI NHẤT</h4>
            </button>
        </a>
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button class="btn btn-primary" onclick="startIntro();"
                        title="Introductions Tools" style="color: #FFFFFF">Hướng dẫn bằng Intros
                </button>
            </div>
            <div class="btn-group">
                <a class="btn btn-primary" href="/huongdan/" target="_blank"
                   title="Hướng dẫn sử dụng công cụ tìm kiếm mã giảm giá" style="color: #FFFFFF">Hướng dẫn sử dụng công
                    cụ tìm kiếm</a>
            </div>
        </div>
        <p></p>
        <div class="tabbable">
            <nav class="navbar">
                <ul class="nav nav-pills nav-justified" id="navtabprimary" style="margin-bottom: 10px">

                </ul>
            </nav>
            <div class="tab-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/jquery.tablesorter.min.js')}}"></script>
<script src="{{asset('js/jquery.tablesorter.widgets.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/intro.js')}}"></script>
<script src="{{asset('js/jquery.cookie.js')}}"></script>
<script>
    if (localStorage.getItem("clientKey") === null) {
        startIntro();
    }
    function startIntro() {
        var intro = introJs();
        intro.setOptions({
            steps: [
                {
                    element: '#step1',
                    intro: "Xin chào bạn!<br/>Tôi sẽ hướng dẫn bạn sử dụng công cụ tìm kiếm Mã Giảm Giá"
                },
                {
                    element: '#step2',
                    intro: "Bấm vào chọn cửa hàng yêu thích bạn muốn tìm kiếm Mã Giảm Giá<br/>",
                    position: 'top'
                },
                {
                    element: '#step3',
                    intro: 'Bấm vào đây để chọn danh mục hàng hóa'
                },
                {
                    element: '#step4',
                    intro: "Nhập trang đầu tiên bạn muốn tìm kiếm",
                    position: 'bottom'
                },
                {
                    element: '#step5',
                    intro: 'Nhập trang cuối cùng bạn muốn tìm kiếm'
                },
                {
                    element: '#step6',
                    intro: 'Bạn muốn lọc giá nhỏ nhất từ bao nhiêu?<br/>(Có thể bỏ qua)'
                },
                {
                    element: '#step7',
                    intro: 'Bạn muốn lọc giá lớn nhất đến bao nhiêu?<br/>(Có thể bỏ qua)'
                },
                {
                    element: '#step8',
                    intro: 'Bạn có thể nhập mức giảm giá tối thiểu<br/>(Có thể bỏ qua)'
                },
                {
                    element: '#step9',
                    intro: 'Nếu bạn nhập từ khóa ở đây. Chúng tôi sẽ tìm kiếm theo từ khóa của bạn<br/>(Có thể bỏ qua)'
                },
                {
                    element: '#step10',
                    intro: 'Sau khi nhập đầy đủ thông tin bạn tiếp tục Bấm Tìm Kiếm để tiến hành tìm'
                }, {
                    element: '#step11',
                    intro: 'Thông tin sản phẩm tìm được sẽ hiển thị ở đây. Nhớ bấm vào các nút bên dưới để sắp xếp nhé!'
                }

            ]
        });

        intro.start();
    }
</script>

<script src="{{asset('js/pagescriptsort.js')}}"></script>
<script src="{{asset('js/pagescript.js')}}"></script>
</body>
</html>