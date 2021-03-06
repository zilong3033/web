# -*- coding: utf-8 -*-
# Generated by Django 1.10.5 on 2017-02-15 08:16
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Articles',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False)),
                ('title', models.CharField(max_length=30)),
                ('slug', models.CharField(max_length=30)),
                ('body', models.TextField(null=True)),
                ('image', models.CharField(max_length=50, null=True)),
                ('user_id', models.IntegerField()),
                ('datetime', models.DateTimeField(auto_now=True)),
            ],
        ),
        migrations.CreateModel(
            name='Comments',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False)),
                ('nickname', models.CharField(max_length=20)),
                ('email', models.EmailField(max_length=254, null=True)),
                ('website', models.URLField(null=True)),
                ('content', models.TextField(null=True)),
                ('article_id', models.IntegerField()),
                ('datetime', models.DateTimeField(auto_now=True)),
            ],
        ),
        migrations.CreateModel(
            name='Diaries',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False)),
                ('title', models.CharField(max_length=30)),
                ('body', models.TextField(null=True)),
                ('image', models.CharField(max_length=50, null=True)),
                ('datetime', models.DateTimeField(auto_now=True)),
            ],
        ),
        migrations.CreateModel(
            name='Messages',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False)),
                ('nickname', models.CharField(max_length=20)),
                ('email', models.EmailField(max_length=254, null=True)),
                ('content', models.TextField(null=True)),
                ('datetime', models.DateTimeField(auto_now=True)),
            ],
        ),
        migrations.CreateModel(
            name='Words',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False)),
                ('title', models.CharField(max_length=30)),
                ('body', models.TextField(null=True)),
                ('datetime', models.DateTimeField(auto_now=True)),
            ],
        ),
    ]
