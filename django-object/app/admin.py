from django.contrib import admin
from .models import Articles,Comments,Diaries,Words,Messages
# Register your models here.

class ArticleAdmin(admin.ModelAdmin):
    list_display=('title','slug','datetime',)

class CommentAdmin(admin.ModelAdmin):
    list_display=('article_id','nickname','datetime',)

class DiaryAdmin(admin.ModelAdmin):
    list_display=('title','datetime',)

class WordAdmin(admin.ModelAdmin):
    list_display=('title','datetime',)

class MessageAdmin(admin.ModelAdmin):
    list_display=('nickname','datetime',)
 
admin.site.register(Articles,ArticleAdmin)
admin.site.register(Comments,CommentAdmin)
admin.site.register(Diaries,DiaryAdmin)
admin.site.register(Words,WordAdmin)
admin.site.register(Messages,MessageAdmin)