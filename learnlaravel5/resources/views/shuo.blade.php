@extends('_layouts.default2') 

@section("content")
  <!--content start-->
    <div id="say">
     <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>碎言碎语</h1></div>
           </div>
            @foreach($pages as $page)
            <ul class="say_box">
                        <div class="sy">
                            <p> {{$page->body}}</p>
                        </div>
                    <span class="dateview">{{date('m月-d日 H:i',strtotime($page->updated_at))}}</span>
            </ul>
            @endforeach
            
     </div>
    <!--content end-->
    <!--footer-->
    <div id="footer">
     <p>Design by:zilong@2016-2017</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>
@endsection
