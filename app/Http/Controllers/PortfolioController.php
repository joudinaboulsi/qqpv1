<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortfolioPage;
use App\Portfolio;
use App\Helpers\FileUploadHelper;

class PortfolioController extends Controller
{
    //
    public function index(){
        $page = PortfolioPage::find(1);
      
        $portfolios = Portfolio::all();
        return view('cms.portfolio.index',compact('portfolios','page'));
    }


    public function storePage(Request $request)
    {
        $portfolio = PortfolioPage::find(1);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/portfolio/');
        if($image_header!=null)
            $portfolio->update(['image_header' => $image_header]);

            PortfolioPage::find(1)->update([
                'title_header' => $request->title_header,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_portfolio');
    }

  
    public function create()
    {
        return view('cms.portfolio.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'img/portfolio/');
    
        Portfolio::create([
            'title' => $request->title,
            'image' => $image,
            'alt' => $request->alt,
            'type' => $request->type,
           
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_portfolio');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('cms.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $portfolio = Portfolio::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'img/portfolio/');
        if($image!=null)
            $portfolio->update(['image' => $image]);

        $portfolio->update([
            'title' => $request->title,
            'alt' => $request->alt,
            'type' => $request->type,
            
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_portfolio');
    }

    public function delete($id)
    {
        Portfolio::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_portfolio');
    }
}
