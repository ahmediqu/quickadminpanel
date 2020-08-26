@extends('frontend.layouts.master')
@section('page-title',' | About Us')
@section('page-content')
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="banner text-center">
            <img src="{{url('frontend/image/logo.png')}}" alt="" style="width: 100%;">
          </div>
          </div>
        </div>
      </div>
      
    </section>
    
    <section>
      <div class="home-page-content">
        <div class="row justify-content-center">
          <div class="col-md-10">

            {!! $about_us->description !!}
            {{-- <div class="small-text">
              <p>For Women Who Roar is a storytelling movement dedicated to helping women heal their stories through our online and print publications, podcasts, events, and community–featuring the voices, experiences, and art of women. If you consider yourself a women who roars, then this for you. The name was born from a poem written by Founder, Megan Febuary about the experience of being a woman in a society, feeling muffled, yet stepping into her power and presence without apology. </p>
            </div>
            <div class="big-text common-padding">
              <p>“I know it scares you to see me get angry. To hear a woman scream and howl and lose her mind. But I’ve been told to be quiet most of my life. Voice muffled and whispering. So now I’m yelling every chance I get to make up for the silence. Like a lion. Let lose from her cage. Roaring and free.”</p>
              <span class="text-muted muted-text">-MEGAN FEBUARY</span>
            </div>
            <div class="small-text common-padding">
              <p>This poem was the starting point to a much bigger and expansive vision, something all women could be a part of building together through the power of storytelling. We believe the voices of women can change the world and this brand is the mic drop for that.</p>
            </div>
            <div class="video">
              <iframe width="100%" height="674px" src="https://www.youtube.com/embed/1NDM7rsifF0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="about-founder">
              
              <div class="row justify-content-center">
                <div class="col-md-10">
                  <h1 class="text-center">About The Founder</h1>
                  <img src="{{url('frontend/image/Megan_Febuary_Bio.jpg')}}" alt="" class="text-center" style="width: 100%;">
                  <br>
                  <br>
                  <br>
                  <p>Megan Febuary is the Founder and Editor-in-chief of For Women Who Roar®. Her passion around storytelling began at a young age with her own creative journey in writing and art as a form of healing trauma. As a Creative Coach, content curator, and storyteller, Megan’s vision For Women Who Roar® was born from a desire to see womxn’s stories empowered and elevated. Her M.A. in Theology and Culture with an emphasis on Trauma, the body, and integration was around the stories our bodies hold, but are unable to say out loud. Megan has been featured in magazines, podcasts, and panels around the power of voice. As a visionary and social media marketer, she has established several digital platforms with clear brand vision and content direction. Her passion for holding space for women to share their stories has shown itself through multiple publications, hosting creative events and retreats, moderating panels and podcasts, as well as participating in art residencies. She is currently writing her next book.</p>
                  <br>
                  
                  <p class="font-size-14"><b>Want to hear more of Megan’s story and the birth of FWWR? Listen to her interview on the How To Human podcast here.</b></p>
                  <div class="text-center padding-top-30">
                    <a href="" class="btn btn-outline-secondary custom-btn-connect">CONNECT WITH MEGAN</a>
                  </div>
                  <div class="logo-icon common-padding text-center">
                    <img src="image/FWWR_Lion.png" alt="" style="height: 380px;">
                  </div>
                </div>
              </div> --}}
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection