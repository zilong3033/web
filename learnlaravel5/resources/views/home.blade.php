@extends('_layouts.default')

@section('content')
         <!--left-->
         <div class="left" id="c_left">
           <div class="s_tuijian">
           <h2>文章<span>推荐</span></h2>
           </div>
          <div class="content_text">
           <!--wz-->
           @foreach($articles as $article)
           <div class="wz">
            <h3><a href="{{URL('articles/'.$article->id)}}" title="{{$article->title}}">{{$article->title}}</a></h3>
             <dl>
                @if(!empty($article->image))
                    <dt><img src="{{$article->image}}" width="200"  height="123" alt=""></dt>
                @else
                    <dt><img src="/images/s3.jpg" width="200"  height="123" alt=""></dt>
                @endif
                {{empty($article->image)}}
                <dd>
                 <p class="dd_text_1">
                 <a href="{{URL('articles/'.$article->id)}}">
                    @if(strlen($article->body)>150)
                        {!!str_limit($article->body,150)!!}
                    @else
                        {!!$article->body!!}
                    @endif
                 </a>
                    <br>
                 </p>
               <p class="dd_text_2">
               <span class="left author">{{App\User::find($article->user_id)->name}}</span><span class="left sj">{{$article->created_at}}</span>
               <span class="left fl">分类:<a href="#" title="{{$article->slug}}">{{$article->slug}}</a></span><span class="left yd"><a href="{{URL('articles/'.$article->id)}}" title="阅读全文">阅读全文</a>
               </span>
                <div class="clear"></div>
               </p>
               </dd>
               <div class="clear"></div>
             </dl>
            </div>
            @endforeach                  
           </div>
         </div>
         <!--left end-->
@endsection

