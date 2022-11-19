from django.shortcuts import render
from .models import Pins


# Create your views here.
def index(request):
    return render(request,"index.html")   

def login(request):
    return render(request,"login.html")    

def signup(request):
    return render(request,"signup.html")   

def home(request):
    context={}
    context["datas"]=Pins.objects.all()
    return render(request,"home.html",context)  