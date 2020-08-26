<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('frontend/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
    @yield('style')
    <title>Children Of 1971 @yield('page-title')</title>
  </head>
  <body>
    <header style="">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('frontend/image/logo.png')}}" alt="" style="height: 82px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto custom-mr">
              
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="{{url('community')}}" id="navbarDropdown">
                  Community
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                  $community_catgory = DB::table('blog_categories')->get();
                  if(isset($community_catgory) && !empty($community_catgory)){
                  foreach($community_catgory as $ct){
                  ?>
                  <a class="dropdown-item" href="{{url('community',$ct->id)}}">{{$ct->category_name}}</a>
                  <?php } } ?>
                  <a class="dropdown-item" href="{{url('news')}}">News</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Content
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('story')}}">Stories</a>
                  <a class="dropdown-item" href="{{url('art')}}">Art </a>
                  <a class="dropdown-item" href="{{url('story')}}">Podcast</a>
                  <a class="dropdown-item" href="{{url('video')}}">Videos</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  LIBRARY
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                  $libarycategory = DB::table('library_categories')->get();
                  if(isset($libarycategory) && !empty($libarycategory)){
                  foreach($libarycategory as $lcat){
                  ?>
                  <a class="dropdown-item" href="{{url('library/category',$lcat->id)}}">{{$lcat->category_name}}</a>
                  <?php
                  }
                  }
                  ?>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="{{url('about-us')}}">
                  About
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('mission')}}">Mission</a>
                  <a class="dropdown-item" href="{{url('our-history')}}">Our History </a>
                  <a class="dropdown-item" href="{{url('team')}}">Meet The Team</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Event
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('event')}}">Upcoming events</a>
                  <a class="dropdown-item" href="{{url('event')}}">Fundraisers</a>
                  <a class="dropdown-item" href="{{url('calender')}}">Calendar</a>
                  <a class="dropdown-item" href="{{url('event-gallery')}}">Gallery</a>
                </div>
              </li>
              
              
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="{{url('shop')}}">
                  Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                  $shop_category = DB::table('product_categories')->get();
                  if(isset($shop_category) && !empty($shop_category)){
                  foreach($shop_category as $scat){
                  ?>
                  <a class="dropdown-item" href="{{url('shop/category',$scat->id)}}">{{$scat->category}}</a>
                  <?php } } ?>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="{{url('blog')}}">
                  Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('mentor-program')}}">Mentor Program</a>
                </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link custom-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Contact
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('https://forms.gle/3MZVfkZ8E8yASbJh7')}}" target="_blank">Submissions</a>
                  <a class="dropdown-item" href="{{url('subscribe')}}">Subscribe</a>
                  <a class="dropdown-item" href="{{url('#')}}">Join The Team</a>
                  <a class="dropdown-item" href="{{url('#')}}">Mentorship application</a>
                  <a class="dropdown-item" href="{{url('leave-a-testimonial-or-question')}}">Leave a testimonial or question</a>
                </div>
              </li> -->
              <!-- Megamenu-->
              <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  custom-nav-link dropdown-toggle-custom dropdown-toggle font-weight-bold text-uppercase">Contact</a>
              <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                <div class="container shadow-lg">
                  <div class="row rounded-0 m-0 ">
                    <div class="col-lg-12 col-xl-12">
                      <div class="p-4">
                        <div class="row bg-white shadow-lg" style="border:1px solid #ddd;">
                          <div class="col-lg-4 pb-4 pt-4 menu-menu-hoverable">
                            <a href="{{url('https://forms.gle/3MZVfkZ8E8yASbJh7')}}" target="_blank" class="dropdown-item">
                            <div class="megamenu-icon">
                              <i class="fab fa-angellist" style="font-size: 30px;color: red;"></i>
                            </div> <br>
                            <h6 class="font-weight-bold text-uppercase">Submissions</h6>
                            </a>
                          </div>
                          <div class="col-lg-4 pb-4 pt-4 menu-menu-hoverable">
                             <a href="{{url('subscribe')}}"  class="dropdown-item">
                            <div class="megamenu-icon">
                              <i class="fab fa-angellist" style="font-size: 30px;color: red;"></i>
                            </div> <br>
                            <h6 class="font-weight-bold text-uppercase">Subscribe</h6>
                          </a>
                            
                          </div>
                          <div class="col-lg-4 pb-4 pt-4 menu-menu-hoverable">
                             <a href="#"  class="dropdown-item">
                            <div class="megamenu-icon">
                              <i class="fab fa-angellist" style="font-size: 30px;color: red;"></i>
                            </div> <br>
                            <h6 class="font-weight-bold text-uppercase">Join The Team</h6>
                            </a>
                          </div>
                          <div class="col-lg-4 pb-4 pt-4 menu-menu-hoverable">
                            <a href="#"  class="dropdown-item">
                            <div class="megamenu-icon">
                              <i class="fab fa-angellist" style="font-size: 30px;color: red;"></i>
                            </div> <br>
                            <h6 class="font-weight-bold text-uppercase">Mentorship application</h6>
                            </a>
                          </div>
                          <div class="col-lg-4 pb-4 pt-4 menu-menu-hoverable">
                            <a href="{{url('leave-a-testimonial-or-question')}}"  class="dropdown-item">
                            <div class="megamenu-icon">
                              <i class="fab fa-angellist" style="font-size: 30px;color: red;"></i>
                            </div> <br>
                            <h6 class="font-weight-bold text-uppercase">Leave a testimonial or question</h6>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 custom-form-control-search" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
        
      </nav>
    </div>
  </header>
  @yield('page-content')
  <footer>
    <div class="container common-padding">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="subcription text-center">
            <h3>Get Weekly Writing Prompts + Mantras</h3>
            <p>Drop your email for all the inspiration!</p>
          </div>
          <div class="subcription-plan text-center justify-content-center">
            <form class="form-inline justify-content-center">
              <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Yes Please</label>
                <input type="email" class="form-control custom-form-control" id="inputPassword2" placeholder="Email Address" required>
              </div>
              <button type="submit" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">Yes Please</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container common-padding mb-5">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="footer-logo text-center">
            <a class="navbar-brand" href="index.html">
              <img src="{{url('frontend/image/logo.png')}}" alt="" style="height: 180px;">
            </a>
            <div class="social-icon">
              <ul class="">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('frontend/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script>
    
    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    </script>
    @yield('scripts')
  </body>
</html>