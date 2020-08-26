<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Story;
use App\Model\Event;
use App\Model\News;
use App\Model\Blog;
use App\Model\Team;
use App\Model\Product;
use App\Model\BannerSection;
use App\Model\SectionTwo;
use App\Model\SectionEvent;
use App\Model\SectionShop;
use App\Model\SectionVoic;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['stories'] = Story::limit(3)->get();
        $data['events'] = Event::limit(1)->get();
        $data['blogs'] = Blog::limit(1)->get();
        $data['news'] = News::limit(3)->get();
        $data['letest_story'] = Story::limit(1)->latest()->get();
        $data['products'] = Product::limit(3)->get();
        $data['teams'] = Team::limit(3)->get();
        $data['bannerSection'] = BannerSection::first();
        $data['sectionTwo'] = SectionTwo::first();
        $data['sectionEvent'] = SectionEvent::first();
        $data['sectionShop'] = SectionShop::first();
        $data['sectionvoice'] = SectionVoic::first();
        return view('frontend.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
