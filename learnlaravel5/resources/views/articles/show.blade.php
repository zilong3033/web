{% extends ''%}

@section('content')
<div class="left" id="c_left">
          <div class="content_text2">
   <center><h2>{{$article->title}}</h2></center>
    <hr style="border: 1px dashed #999;margin-top:15px;">
    <div id="date" style="text-align:right;margin-top:10px;margin-right:15px">
        {{$article->updated_at}}
    </div>
    @if(!empty($article->image))
        <img src="{{$article->image}}" width="400"  height="246" alt="" style="margin:auto;margin-top:20px;">
    @endif
    <div id="dd_text_1" style="padding:50px;">
    <p>
        {!!$article->body!!}
    </p>
    </div>
    <hr style="border: 1px dashed #999;margin-top:10px;">
    <div id="comments" style="margin-bottom:100px;margin-top:25px;">
    
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$errror}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div id="new">
        <form action="{{URL('comment/store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="article_id" value="{{$article->id}}">
            <div class="form-group">
                <label>Nickname</label>
                <input type="text" name="nickname" class="form-control" style="width:300px;" required="required">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" style="width:300px;">
            </div>
            <div class="form-group">
                <label>Home page</label>
                <input type="text" name="website" class="form-control" style="width: 300px;">
            </div>
            <div class="form-group">
          <label>Content</label>
          <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
      </form>
    </div>

<script>  
function reply(a) {  
  var nickname = a.parentNode.parentNode.firstChild.nextSibling.getAttribute('data');
  var textArea = document.getElementById('newFormContent');
  textArea.innerHTML = '@'+nickname+' ';
}
</script>

    <div class="conmments" style="margin-top: 100px;">
        @foreach($article->hasManyComments as $comment)
            
            <div class="one" style="border-top:solid 20px #efefef;padding:5px 20px;">
                <div class="nickname" data="{{$comment->nickname}}">
                
                @if($comment->website)
                    <a href="{{$comment->website}}">
                    <h3>{{$comment->nickname}}</h3>
                    </a>
                @else
                    <h3>{{$comment->nickname}}</h3>
                @endif
                    <h6>{{$comment->created_at}}</h6>
                </div>
                <div class="content">
                    <p style="padding:20px;">
                        {{$comment->content}}
                    </p>
                </div>
                <div calss="reply" style="text-align:right;padding:5px;">
                <a href="#new" onclick="reply(this);">回复</a>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>
</div>
@endsection