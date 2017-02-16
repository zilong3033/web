from django import forms

class comment_check(forms.Form):
    nickname=forms.CharField()
    email=forms.EmailField()
    website=forms.CharField()
    content=forms.CharField(widget=forms.Textarea)
    article_id=forms.IntegerField()
    
    
class guestbook_check(forms.Form):
    nickname=forms.CharField()
    email=forms.EmailField()
    content=forms.CharField(widget=forms.Textarea)