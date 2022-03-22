<header>
  {{-- Top Header --}}
  <section id="top-header">
          <div class="container">
              <div class="d-flex justify-content-end py-1">
                  <a href="#" class="d-inline-block mx-3">DC Power Visa</a>
                  <a href="#">Additional Dc Sities</a>
              </div>
          </div>
      </section>
      {{-- Main Header --}}
      <section id="main-header">
          <div class="container">
              <div class="row  justify-content-between align-items-center">
                  <div class="col-1 py-4">
                      <div class="logo-container">
                        <a class="navbar-brand" href="{{route('comics.index')}}">
                          <img src="{{ asset('images/dc-logo.png') }}" alt="logo_dc" class="img-fluid"/>
                        </a>
                      </div>
                  </div>
                  <div class="col-8 ">
                      <nav>
                          <ul class="d-flex">
                            <li><a aria-current="page" href="{{route('comics.index')}}">Home</a></li>    
                            <li><a  href="{{route('comics.index')}}">Comics</a></li>
                          </ul>    
                      </nav>
                  </div>
                  <div class="col-2">
                      <input type="text" placeholder="Search">
                  </div>
              </div>
          </div>
      </section>
</header>
