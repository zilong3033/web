@extends('_layouts.default')

@section('rigth')
       <!--right-->
         <div class="right" id="c_right">
          <div class="s_about">
          <h2>关于博主</h2>
           <img src="images/my.gif" width="230" height="230" alt="博主"/>
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
					<li><a href="{{URL('pages/'.$comment->page_id)}}">{{$comment->nickname}}&nbsp;&nbsp;{{date('m-d H:i',strtotime($comment->updated_at))}}
                    <br>{{$comment->content}}</a>
                    </li>
                @endforeach
				</ul>
              </div>
           </div>
           <!--end-->
           <div class="link">
            <h2>友情链接</h2>
            <p><a href="http://www.duanliang920.com">段亮个人博客</a></p>
           </div>
         </div>
         <!--right end-->
         <div class="clear"></div>
    </div>
    <!--content end-->
    <!--footer start-->
    <div id="footer">
     <p>Design by:<a href="http://www.duanliang920.com" target="_blank">少年</a> 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
@endsection