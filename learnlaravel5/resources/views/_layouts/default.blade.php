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
       <!--nav end-->
    <!--content start-->
    <div id="content">
        @yield('content')
          <!--right-->
         <div class="right" id="c_right">
          <div class="s_about">
          <h2>关于博主</h2>
           <img src="/images/my.gif" width="230" height="230" alt="博主"/>
           <p>博主：XX</p>
           <p>职业：学生</p>
           <p>简介：</p>
           <p>
            哈哈哈哈，本人爱玩，爱写代码。
           </p>
           <br>
          </div>
          <!--栏目分类-->
           <div class="lanmubox">
              <div class="hd">
               <ul><li>最新文章</li><li>最新评论</li></ul>
              </div>
              <div class="bd">
                <ul>
                @foreach($new_articles as $article)
					<li><a href="{{URL('articles/'.$article->id)}}" title="{{$article->title}}">{{$article->title}}</a></li>
                @endforeach
				</ul>
                 <ul>
                @foreach($comments as $comment)
                    <hr style="border: 1px dashed #999;margin-top:15px;margin-left:10px;margin-right:10px">
					<li><a href="{{URL('pages/'.$comment->page_id)}}">{{$comment->nickname}}&nbsp;&nbsp;{{date('m-d H:i',strtotime($comment->updated_at))}}</a></li>
                    <p style="text-align:left;margin-left:50px">{{str_limit($comment->content,20)}}</p>
                    </hr>
                @endforeach
				</ul>
              </div>
           </div>
           <!--end-->
           <div class="link">
            <h2>友情链接</h2>
            <p><a href="http://blog.zilong3033.cn">个人博客</a></p>
           </div>
         </div>
         <!--right end-->
         <div class="clear"></div>
    </div>
    <!--content end-->
    <!--footer start-->
    <div id="footer">
     <p>Design by:<a href="http://zilong3033.cn" target="_blank">zilong@2016-2017</a></p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/js/nav.js"></script>
</body>
</html>