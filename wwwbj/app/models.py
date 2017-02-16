from __future__ import unicode_literals

from django.db import models
from django.contrib.auth.models import User  
# Create your models here.
class Articles(models.Model):
    id=models.AutoField(primary_key=True)
    title=models.CharField(max_length=30)
    slug=models.CharField(max_length=30)
    body=models.TextField(null=True)
    image=models.ImageField(upload_to="upload")
    user_id=models.IntegerField()
    datetime=models.DateTimeField(auto_now=True)

class Comments(models.Model):
    id=models.AutoField(primary_key=True)
    nickname=models.CharField(max_length=20)
    email=models.EmailField(null=True)
    website=models.URLField(null=True)
    content=models.TextField(null=True)
    article_id=models.IntegerField()
    datetime=models.DateTimeField(auto_now=True)

class Diaries(models.Model):
    id=models.AutoField(primary_key=True)
    title=models.CharField(max_length=30)
    body=models.TextField(null=True)
    image=models.ImageField(upload_to="upload")
    datetime=models.DateTimeField(auto_now=True)
    
class Words(models.Model):
    id=models.AutoField(primary_key=True)
    title=models.CharField(max_length=30)
    body=models.TextField(null=True)
    datetime=models.DateTimeField(auto_now=True)
    
class Messages(models.Model):
    id=models.AutoField(primary_key=True)
    nickname=models.CharField(max_length=20)
    email=models.EmailField(null=True)
    content=models.TextField(null=True)
    datetime=models.DateTimeField(auto_now=True)