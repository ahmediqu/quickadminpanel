<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\News;
use App\Model\Story;
use App\Model\Event;
use App\Model\Team;
use App\Model\Product;
use App\Model\Contact;
use App\Model\Aboutus;
use App\Model\Gallery;
use App\Model\Community;
use App\Model\Art;
use App\Model\ArtCategory;
use App\Model\Video;
use App\Model\Subscription;
use App\Model\Mission;
use App\Model\History;
use App\Model\Library;
use App\Model\BlogImage;
use App\Model\NewsImage;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mission(){
        $data = [];
        $data['mission'] = Mission::first();
        return view('frontend.pages.mission',$data);
    }

    public function ourHistory(){
        $data = [];
        $data['histories'] = History::all();
        return view('frontend.pages.ourHistory',$data);
    }
    public function community(){
        $data = [];
        $data['gallery'] = gallery::orderBy('position','desc')->get();
        return view('frontend.pages.community',$data);
    }
    public function art(){
        $data = [];
        $data['arts'] = Art::orderBy('position','desc')->get();
        $data['artscategorys'] = ArtCategory::get();
        return view('frontend.pages.art',$data);
    }
    public function video(){
        $data = [];
        $data['videos'] = Video::all();
        return view('frontend.pages.video',$data);
    }
    public function communityCategory($id){

        $data = [];
        $data['communityPosts'] = Community::where('category_id',$id)->orderBy('position','desc')->get();
        return view('frontend.pages.communityPost',$data);
    }
    public function communityDetails($id){

        $data = [];
     
        $data['blogs'] = Community::findOrFail($id);
        return view('frontend.pages.communityDetails',$data);
    }
    public function artDetails($id){

        $data = [];
     
        $data['art'] = Art::findOrFail($id);
        return view('frontend.pages.artDetails',$data);
    }

    public function aboutUs(){
        $data = [];
        $data['about_us'] = Aboutus::first();
        return view('frontend.pages.aboutus',$data);
    }

    public function team(){
        $data = [];
        $data['teams'] = Team::all();
        return view('frontend.pages.team',$data);
    }
    public function teamDetails($id){
        $data = [];
        
        $data['team'] = Team::findOrFail($id);
        return view('frontend.pages.teamDetails',$data);
    }

    public function story(){
        $data = [];
        $data['story'] = Story::orderBy('position','desc')->orderBy('id','desc')->paginate(6);
        return view('frontend.pages.story',$data);
    }

    public function storyDetails($id){
        $data = [];
        $data['story'] = Story::findOrFail($id);
        return view('frontend.pages.storyDetails',$data);
    }
    public function shopCategory($id){
        $data = [];
        $data['products'] = Product::where('category_id',$id)->get();
        return view('frontend.pages.shopCategory',$data);
    }

    public function news(){
        $data = [];
        $data['news'] = News::orderBy('position','desc')->orderBy('id','desc')->get();
        return view('frontend.pages.news',$data);
    }

    public function newsDetails($id){
        $data = [];
        $data['news'] = News::findOrFail($id);
        $data['news_images'] = NewsImage::where('news_id',$id)->get();
        return view('frontend.pages.newsDetails',$data);
    }

    public function event(){
        $data = [];
        $data['event'] = Event::orderBy('id','desc')->get();
        return view('frontend.pages.event',$data);
    }
    public function eventGallery(){
        $data = [];
        $data['event'] = Event::orderBy('date')->get();
        return view('frontend.pages.pastEvent',$data);
    }

    public function eventDetails($id){
        $data = [];
        $data['event'] = Event::findOrFail($id);
        return view('frontend.pages.eventDetails',$data);
    }

    public function shop(){
        $data = [];
        $data['products'] = Product::all();
        return view('frontend.pages.shop',$data);
    }
    public function shopDetails($id){
        $data = [];
        $data['product'] = Product::findOrFail($id);
        return view('frontend.pages.shopDetails',$data);
    }

    public function blog(){
        $data = [];
        $data['blogs'] = Blog::orderBy('position','desc')->orderBy('id','desc')->get();
        return view('frontend.pages.blog',$data);
    }

    public function blogDetails($id){
        $data = [];
        $data['blogs'] = Blog::findOrFail($id);
        $data['blogimages'] = BlogImage::where('blog_id',$id)->get();
        return view('frontend.pages.blogDetails',$data);
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function contactSave(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tel = $request->tel;
        $contact->message = $request->message;
        $this->setSuccess('Successfully Send.');
        $contact->save();
        return back();
    }

    public function search(){
        return view('frontend.pages.mission');
    }

    public function mentorProgram(){
        return view('frontend.pages.mentorProgram');
    }
    public function subscribe(){
        return view('frontend.pages.subscribe');
    }
    public function subscribePost(Request $request){
        $this->validate($request, [
        
            'email' => 'required|email|unique:subscriptions,email',
            
        ]);
        $subscription = new Subscription();
        $subscription->fullname = $request->fullname;
        $subscription->email = $request->email;
        $subscription->save();
    
        return back();
    }
    public function testimonial(){

        return view('frontend.pages.testimonial');
    }
    public function libraryCategory($id){

        $data = [];
        $data['library'] = Library::where('category_id',$id)->get();
        return view('frontend.pages.libraryCategory',$data);
    }
    public function libraryDetails($id){
        
        $data = [];
        $data['library'] = Library::where('id',$id)->first();
        return view('frontend.pages.libraryDetails',$data);
    }
}
