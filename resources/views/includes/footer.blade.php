@php
    $social_icons = config('social')  
@endphp

<section id="top-footer"> 
    <div class="container py-5 d-flex justify-content-center">
        <div class="d-flex justify-content-between">
             <div class="card-merch d-flex align-items-center">
                 <figure>
                     <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                 </figure>   
                 <div class="capt">
                     <h6 class="text-uppercase mx-3">Digital Comics</h6>
                 </div>
             </div>
             <div class="card-merch d-flex align-items-center">
                 <figure>
                     <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                 </figure>   
                 <div class="capt">
                     <h6 class="text-uppercase mx-3">Digital Comics</h6>
                 </div>
             </div>
             <div class="card-merch d-flex align-items-center">
                 <figure>
                     <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                 </figure>   
                 <div class="capt">
                     <h6 class="text-uppercase mx-3">Digital Comics</h6>
                 </div>
             </div>
             <div class="card-merch d-flex align-items-center">
                 <figure>
                     <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                 </figure>   
                 <div class="capt">
                     <h6 class="text-uppercase mx-3">Digital Comics</h6>
                 </div>
             </div>
             <div class="card-merch d-flex align-items-center">
                 <figure>
                     <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                 </figure>   
                 <div class="capt">
                     <h6 class="text-uppercase mx-3">Digital Comics</h6>
                 </div>
             </div>
         </div>
    </div>  
 </section>
 <section id="main-footer">
     <div class="container">
         <div class="row">
             <div id="left-footer" class="col-6 py-5">
                 <div class="d-flex justify-content-between">    
                     <div class="text-white">
                         <h4 class="text-uppercase">Dc Comics</h4>
                         <ul>
                             <li>Characters</li>
                             <li>Comics</li>
                             <li>Movies</li>
                             <li>Tv</li>
                             <li>Games</li>
                             <li>Videos</li>
                             <li>News</li>
                         </ul>
                         <h4> Shop</h4>
                         <ul>
                             <li>Shop DC</li>
                             <li>Shop DC Collectibles</li>
                         </ul>
                     </div>
                     <div class="text-white">
                         <h4 class="text-uppercase">DC</h4>
                         <ul>
                             <li>Terms Of Use</li>
                             <li>Privacy policy(New)</li>
                             <li>Ad Choices</li>
                             <li>Advertising</li>
                             <li>Jobs</li>
                             <li>Subscriptions</li>
                             <li>Talent Workshop</li>
                             <li>CPSC Certificates</li>
                             <li>Ratings</li>
                             <li>Shop Help</li>
                             <li>Contact us</li>
                         </ul>
                     </div>
                     <div class="text-white">
                         <h4 class="text-uppercase">Sites</h4>
                         <ul>
                             <li>DC</li>
                             <li>MAD Magazine</li>
                             <li>DC Kids</li>
                             <li>DC universe</li>
                             <li>DC Power Visa</li>
                         </ul>
                     </div>
                  </div>
                 <span>All sites Content Tm and c 2020 DC Entertainment, unless otherwise noted here. All rights reserved.
                     Cookies Settings
                 </span>
             </div>
             <div id="right-footer" class="col-6 ">
                 <figure>
                     <img src="{{asset('images/dc-logo-bg.png')}}" alt="dc-logo" class="img-fluid">
                 </figure>
             </div>
         </div>
     </div>
 </section>
 {{-- Bottom Footer --}}
 <section id="bottom-footer" class="py-5">
     <div class="container">
         <div class="row align-items-center">
             {{-- BTN --}}
             <div class="col-6">
                 <div class="sign-btn"><a href="#" class="text-uppercase text-white">Sign-up Now!</a></div>
             </div>
             {{-- SOCIAL --}}
             <div class="col-6 d-flex justify-content-end">
                 <div class="follow mx-3">
                     <a href="#" class="text-uppercase">Follow Us</a>
                 </div>
                 <div class="icon-social d-flex justify-content-between align-itemse-center">
                     
                    @foreach ($social_icons as $icon)
                     <figure class="mx-2">
                          <img src="{{asset($icon['asset_url'])}}" alt="">
                      </figure>
                     @endforeach
                     
                 </div>
             </div>
         </div>
     </div>
 </section>