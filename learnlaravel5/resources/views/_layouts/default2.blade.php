<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="/css/index.css"/>
<link rel="stylesheet" href="/css/style.css"/>
<script type="text/javascript" src="/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>    
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
        <center>
         <li><a href="/">首页</a></li>
         <li><a href="/shuo/">碎言碎语</a></li>
         <li><a href="/riji/">个人日记</a></li>
         <li><a href="/guestbook/">留言板</a></li>
         <div class="clear"></div>
         </center>
        </ul>
      </div>
    @yield('content')