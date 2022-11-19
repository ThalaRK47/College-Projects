#models.py

from operator import mod
from pyexpat import model
from django.db import models

# Create your models here.

class Pins(models.Model):
    title=models.CharField(max_length=30)
    link=models.URLField(max_length=30)
    description=models.TextField()
    img=models.ImageField(upload_to="images")

    class Meta:
        db_table="pins"
        
    def __str__(self):
        return self.title

class signup(models.Model):
    email=models.EmailField(max_length=30)
    password=models.CharField(max_length=30)
    age=models.CharField(max_length=30)

    class Meta:
        db_table="user"
        
    def __str__(self):
        return self.email

