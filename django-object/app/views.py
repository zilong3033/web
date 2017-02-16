#encoding:utf-8
from django.shortcuts import render
from app.models import Articles,Comments,Words,Diaries,Messages
from .forms import comment_check,guestbook_check
from django.http import HttpResponseRedirect  
# Create your views here.

new_articles=Articles.objects.raw('select * from app_articles order by id desc limit 6')
comments=Comments.objects.raw('select * from app_comments order by id desc limit 3')

def home(request):
    users=[]
    articles=Articles.objects.raw('select * from app_articles order by id desc limit 5')
    return render(request,'home.html',{'articles':articles,'new_articles':new_articles,'comments':comments})

def article_show(request,id):
    sql="select * from app_articles where id=%d" % int(id)
    article=Articles.objects.raw(sql)
    sql1='select * from app_comments where article_id=%d' % int(id)
    article_comments=Comments.objects.raw(sql1)
    return render(request,'show.html',{'aarticle':article,'article_comments':article_comments,'new_articles':new_articles,'comments':comments})

def comment_save(request):
    if request.method=="POST":
        form=comment_check(request.POST)
        if form.is_valid():
            nickname=form.cleaned_data['nickname']
            email=form.cleaned_data['email']
            website=form.cleaned_data['website']
            content=form.cleaned_data['content']
            article_id=form.cleaned_data['article_id']
            c=Comments(nickname=nickname,email=email,website=website,content=content,article_id=article_id)
            c.save()
            return HttpResponseRedirect(request.META.get('HTTP_REFERER'))
    else:
        form=comment_check()
    some="发表失败！"
    return render(request,'waring.html',{'string':some})
    
def shuo(request):
    words=Words.objects.raw('select * from app_words order by id desc limit 6')
    return render(request,'shuo.html',{"words":words})
    
def riji(request):
    diaries=Diaries.objects.raw("select * from app_diaries order by id desc limit 6")
    return render(request,"riji.html",{"diaries":diaries,'new_articles':new_articles,'comments':comments})
    
def guestbook_show(request):
    messages=Messages.objects.raw("select * from app_messages order by id desc limit 6")
    return render(request,"guestbook.html",{"messages":messages,'new_articles':new_articles,'comments':comments})
    
def guestbook_save(request):
    if request.method=="POST":
        form=guestbook_check(request.POST)
        if form.is_valid():
            nickname=form.cleaned_data['nickname']
            email=form.cleaned_data['email']
            content=form.cleaned_data['content']
            c=Messages(nickname=nickname,email=email,content=content)
            c.save()
            return HttpResponseRedirect(request.META.get('HTTP_REFERER'))
    else:
        form=guestbook_check()
    some="发表失败！"
    return render(request,'waring.html',{'string':some})            