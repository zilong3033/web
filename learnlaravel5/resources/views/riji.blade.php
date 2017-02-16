@extends("_layouts.default")

@section("content")
    <!--content start-->
    <div id="content">
       <!--left-->
         <div class="left" id="riji">
           <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>个人日记</h1></div>
           </div>
           <div class="rj_content">
                <!--时光-->
            @foreach($pages as $page)    
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="/images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="/images/left.png" width="13" height="16" alt="左图标"/>
                    {{$page->body}}
                </div>
                <div class="clear"></div>
              </div>
            @endforeach
              <!--时光 end-->    
           </div>
         </div>
         <!--end left -->
@endsection