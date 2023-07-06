<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Team;
use App\Firstservice;
use App\Service;
use App\Blog;
use App\Client;

class FrontController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::paginate(3);
        $teams = Team::paginate(10);
        $firstservice = Firstservice::paginate(4);
        $serviceee = Service::paginate(10);
        $clients = Client::paginate(100);
        $blogs = Blog::paginate(100);
        return view('front.index',compact('portfolio','teams','firstservice','serviceee','clients','blogs'));
    }

    public function about()
    {
        $teams = Team::paginate(10);
        $firstservice = Firstservice::paginate(4);
        $serviceee = Service::paginate(10);
        return view('front.about',compact('firstservice','teams','serviceee'));
    }

    public function services()
    {
        $serviceee = Service::paginate(10);
        return view('front.services',compact('serviceee'));
    }

    public function portfolio()
    {
        $portfolio = Portfolio::paginate(100);
        $serviceee = Service::paginate(10);
        return view('front.portfolio',compact('portfolio','serviceee'));
    }

    public function blog()
    {
        $blogs = Blog::paginate(100);
        $serviceee = Service::paginate(10);
        return view('front.blog',compact('blogs','serviceee'));
    }

    public function contact()
    {
        $serviceee = Service::paginate(10);
        return view('front.contact',compact('serviceee'));
    }
    public function showportfolio($id)
    {
        $portfolio = Portfolio::find($id);
        $serviceee = Service::paginate(10);
    
        // Portföy öğesi bulunamazsa veya geçersizse hata durumu oluşturun
        if (!$portfolio) {
            abort(404, 'Portföy bulunamadı');
        }
    
        $images = json_decode($portfolio->images);
    
        return view('front.portfolio-id', compact('images','portfolio','serviceee'));
    }
    public function servicesid($id)
    {
        $service = Service::find($id);
        $serviceee = Service::paginate(10);
        return view('front.services-id', compact('service','serviceee'));
    }
    public function blogid($id)
    {
        $blog = Blog::find($id);
        $serviceee = Service::paginate(10);
        return view('front.blog-list', compact('blog','serviceee'));
    }
    public function footer()
    {
        $serviceee = Service::paginate(10);
        return view('layouts.layout', compact('serviceee','serviceee'));
    }
}
