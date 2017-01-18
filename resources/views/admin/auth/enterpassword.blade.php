<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>登录超时</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/skin/manage/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    {{--<link href="/skin/manage/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">--}}

    <link href="/skin/manage/css/animate.min.css" rel="stylesheet">
    <link href="/skin/manage/css/style.min.css?v=4.0.0" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="lock-word animated fadeInDown">
</div>
<div class="middle-box text-center lockscreen animated fadeInDown">
    <div>
        <div class="m-b-md">
            <img alt="image" class="img-circle circle-border" src="/skin/manage/img/profile_small.jpg">
        </div>
        <h3>Beaut-zihan</h3>
        <p>您需要再次输入密码</p>
        <form class="m-t" role="form" action="{{ route('getEnterpassword') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="************" required="">
            </div>

            @if(count($errors))
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif

            <button type="submit" class="btn btn-primary block full-width">登录</button>
        </form>
    </div>
</div>

<!-- 全局js -->
<script src="/skin/js/jquery.min.js?v=2.1.4"></script>
<script src="/skin/js/bootstrap.min.js?v=3.4.0"></script>

</body>

</html>