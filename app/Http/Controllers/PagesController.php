<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\PagesRepository;
use SEO;
use SEOMeta;
use App\Portfolio;
use App\PortfolioPage;


class PagesController extends Controller
{
    public function __construct(PagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    public function home()
    {
        $url = url()->current();

        SEO::setTitle('Quick Quality Print | Beirut', false);
        SEO::setDescription('Dive into the Quick Quality Print world. Discover a period of artistic innovation and decadence, from quiet interiors to the bustling streets of the modern city');
        SEOMeta::setKeywords('Quick Quality Print, QQP, Printing services, High-quality printing, Quick print solutions, Custom printing, Professional printing, Printing company, Fast printing, Business printing, Personalized printing, Print marketing, Printing experts');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg'); 

        return view('home_page');
    }

    public function contact()
    {
        $url = url()->current();

        SEO::setTitle('Quick Quality Print | Contact Us', false);
        SEO::setDescription('Get in touch with Quick Quality Print – your trusted partner for all your printing needs. Our friendly team is ready to assist you.');
        SEOMeta::setKeywords('Contact Quick Quality Print, Printing inquiries, Custom print solutions, Get in touch, Printing experts, Personalized service, Friendly support');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg'); 

        return view('contact');
    }

    public function portfolio()
    {
        $url = url()->current();

        SEO::setTitle('Quick Quality Print | Portfolio', false);
        SEO::setDescription('From business materials to personal creations, our portfolio reflects our dedication to transforming ideas into stunning print realities.');
        SEOMeta::setKeywords('QQP Portfolio, Quick Quality Print Portfolio, Printing portfolio, Creative print projects, Quality print showcase, Portfolio highlights, Print achievements, Print diversity, Business materials');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg'); 

        // $projects = $this->pagesRepository->show();
        $projects =Portfolio::all();
        $page= PortfolioPage::where('id',1)->get();
        return view('portfolio', compact('projects','page'));
    }

    public function about()
    {
        $url = url()->current();

        SEO::setTitle('Quick Quality Print | About Us', false);
        SEO::setDescription('Discover the heart behind Quick Quality Print and let us bring your creative visions to life.');
        SEOMeta::setKeywords('Creativity, original ideas, high quality, fresh ideas, unique design, About Quick Quality Print, Print solutions, Quality print materials, Professional print services');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg'); 

        return view('about');
    }
}
