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
    
                  <nav class="navbar navbar-expand-lg navbar-white bg-white">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('images/dc-logo.png') }}" alt="" class="img-fluid"/></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                          <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
                          <input type="text" placeholder="Search">
                        </div>
                      </div>
                    </div>                  
                  </nav>
            </div>
        </div>
    </section>
</header>