# -*- coding: utf-8 -*-
# Generated by Django 1.11.dev20161029223924 on 2016-12-12 06:08
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('accounts', '0012_skill_picture_thumbnail'),
    ]

    operations = [
        migrations.RenameField(
            model_name='skill',
            old_name='picture_thumbnail',
            new_name='picture_low_res',
        ),
    ]
