@extends('frontend.layouts.master')
@section('page-content')

<section class="banner-section" style="background-image: url({{asset($bannerSection->image)}});">
  <div class="container-fluid">
    <div class="banner-section-content">
      <div class="row">
        <div class="col-md-6 content-left-bottom">
          <div class="">
            <p>SUBMISSIONS OPEN</p>
            <h1>{{$bannerSection->title}}</h1>
            <a href="{{$bannerSection->btn_link}}" target="_blank">SHARE YOUR STORY</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<section class="second-section">
  <div class="container-fluid">
    <div class="row">
      @foreach($stories as $story)
      <div class="col-md-4">
        <div class="card custom-card">
          <a href="{{url('story/details',$story->id)}}" class="second-section-a">
          <img src="{{url($story->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;"></a>
          <div class="card-body custom-card-body">
            <h5 class="card-title">{{$story->title}}</h5>
            <p class="card-text second-section-p">
              <div class="description">{!! $story->description !!}</div></p>
            <a href="{{url('story/details',$story->id)}}" class="second-section-a">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    
  </div>
</section>
<section class="third-section" style="background-image: url({{asset($sectionTwo->image)}});">
  <div class="container-fluid">
    <div class="">
      <div class="row">
        <div class="col-md-12">
          <div class="third-section-content text-center">
            
            <h1 class="long-big-text">{{$sectionTwo->title}}
            </h1>
            <a href="{{$sectionTwo->btn_link}}" class="common-a a">Learn More</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<section class="second-section">
  <div class="container-fluid">
    <div class="row">
      @foreach($letest_story as $data)
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url($data->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          <div class="card-body custom-card-body">
            <span class="font-weight-bold">Latest Story</span>
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text second-section-p">
              <div class="description">{!! $data->description !!}</div></p>
            <a href="{{url('story/details',$data->id)}}" class="second-section-a">Read More</a>
          </div>
        </div>
      </div>
      @endforeach

      @foreach($blogs as $blog)
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url($blog->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          <div class="card-body custom-card-body">
            <span class="font-weight-bold">Latest Blog</span>
            <h5 class="card-title">{{$blog->title}}</h5>
            <p class="card-text second-section-p">
              <div class="description">{!! $blog->description !!}</div></p>
            <a href="{{url('blog',$blog->id)}}" class="second-section-a">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($events as $event)
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url($event->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          <div class="card-body custom-card-body">
            <span class="font-weight-bold">Latest Event</span>
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-text second-section-p">
              <div class="description">{!! $event->description !!}</div></p>
            <a href="{{url('event',$event->id)}}" class="second-section-a">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
</section>
<section class="four-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <img src="{{url($sectionEvent->image)}}" alt="" style="width: 100%">
      </div>
      <div class="col-md-5">
        
        <div class="four-section-content">
          
          <h1 class="">{{$sectionEvent->title}}</h1> <br>
          <p class="card-text">{!! $sectionEvent->description !!}</p>
          <a href="{{$sectionEvent->btn_link}}" class="common-a-black"> Read More </a>
        </div>
        
      </div>
    </div>
  </div>
</section>
<section class="second-section">
  <div class="container-fluid">
    <h1 class="text-center long-big-text text-black" style="color: #000;">Featured Members</h1> 
    <br>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body custom-card-body">
            <h5 class="card-title">SUBSCRIBE TO THE PODCAST
            </h5>
            <p class="card-text second-section-p">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
            <a href="#" class="second-section-a">Listen Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body custom-card-body">
            <h5 class="card-title">Cancer and The Prayer Warriors</h5>
            <p class="card-text second-section-p">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
            <a href="#" class="second-section-a">Share your story</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body custom-card-body">
            <h5 class="card-title">Cancer and The Prayer Warriors</h5>
            <p class="card-text second-section-p">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
            <a href="#" class="second-section-a">Share your story</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<section class="podcast-voice-section" style="background-image: url({{asset($sectionvoice->image)}});">
  <div class="container-fluid">
    <div class="banner-section-content">
      <div class="row">
        <div class="col-md-6 content-left-bottom">
          <div class="">
            <p>HEAR THE VOICES</p>
            <h1>{{$sectionvoice->title}}</h1>
            <a href="{{$sectionvoice->btn_link}}">SUBSCRIBE NOW</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="second-section">
  <div class="container-fluid">
    <h1 class="text-center long-big-text text-black" style="color: #000;">Featured Episodes</h1> 
    <br>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body custom-card-body">
            <h5 class="card-title">SUBSCRIBE TO THE PODCAST
            </h5>
            <p class="card-text second-section-p">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
            <a href="#" class="second-section-a">Listen Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body custom-card-body">
            <h5 class="card-title">Cancer and The Prayer Warriors</h5>
            <p class="card-text second-section-p">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
            <a href="#" class="second-section-a">Share your story</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body custom-card-body">
            <h5 class="card-title">Cancer and The Prayer Warriors</h5>
            <p class="card-text second-section-p">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
            <a href="#" class="second-section-a">Share your story</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>


<section class="four-section bg-pink">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <img src="{{url($sectionShop->image)}}" alt="" style="width: 100%">
      </div>
      <div class="col-md-5">
        
        <div class="shop-section-content">
          
          <h1 class="">{{$sectionShop->title}}</h1> <br>
          <p class="card-text">{!! $sectionShop->title !!}

</p>
          <a href="{{$sectionShop->btn_link}}" class="common-a-black"> SHOP NOW</a>
        </div>
        
      </div>
    </div>
  </div>
</section>



<section class="second-section">
  <div class="container-fluid">
    <h1 class="text-center long-big-text text-black" style="color: #000;">Featured Products
</h1> 
    <br>
    <br>
    <div class="row">
      @foreach($products as $product)
      <div class="col-md-4">
        <div class="card custom-card">
          <img src="{{url($product->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          <div class="card-body custom-card-body">
           
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text second-section-p">
              <div class="description">{!! $product->description !!}</div></p>
            <a href="{{url('shop',$product->id)}}" class="second-section-a">Shop Now</a>
          </div>
        </div>
      </div>
      @endforeach      
      
    </div>
    
  </div>
</section>

<section class="store-section">
  <div class="container-fluid">
    <div class="banner-section-content">
      <div class="row">
        <div class="col-md-6 content-left-bottom">
          <div class="">
          
            <h1>Read The 
Stories</h1>
            <a href="#">DIVE IN</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>


<section class="second-section bg-pink">
  <div class="container-fluid">
    <h1 class="text-center long-big-text text-black" style="color: #000;">Testimonial</h1> 
    <br>
    <br>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="owl-carousel owl-theme" id="owl-one">
        <div class="card custom-card text-center bg-pink">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="..." style="height: 100px;width: 100px;border-radius: 100%;align-self:center;">
          <div class="card-body custom-card-body text-center">
            <h5 class="card-title">SUBSCRIBE TO THE PODCAST
            </h5>
            <p class="card-text second-section-p text-center">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
           <p> <b>Women In Digital </b></p>
          </div>
        </div>
        <div class="card custom-card text-center bg-pink">
          <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="..." style="height: 100px;width: 100px;border-radius: 100%;align-self:center;">
          <div class="card-body custom-card-body text-center">
            <h5 class="card-title">SUBSCRIBE TO THE PODCAST
            </h5>
            <p class="card-text second-section-p text-center">Submissions open to share your narrative nonfiction work. We are looking for writing on topics of healing, trauma recovery, body, creativity, and empowerment.</p>
           <p> <b> Childern71 </b></p>
          </div>
        </div>
      </div>
      </div>
    
      
    </div>
    
  </div>
</section>











@endsection
@section('scripts')
<script>
 jQuery(".description").text(function (i, text) {
  return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 200)) + '...' : text;
});
</script>

<script>
  $('#owl-one').owlCarousel({
    
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    navText:["<i class='fas fa-chevron-left arrow-left'></i>","<i class='fas fa-chevron-right arrow-right'></i>"],
    responsive:{
        
        0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
    }
});


</script>
@endsection