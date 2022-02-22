<div class="">
    <!-- <div class="carousel slide" id="slider_header" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider_header" data-bs-slide-to="0" arial-label="slide1" class="active" arial-current="true"></button>
                <button type="button" data-bs-target="#slider_header" data-bs-slide-to="1" arial-label="slide2"></button>
                <button type="button" data-bs-target="#slider_header" data-bs-slide-to="2" arial-label="slide3"></button>
            </div>
            <div class="carousel-item active header-h" style="background-image:url({{ asset('img/1.jpg') }})" data-bs-interval="10000">
               <!--  <img src="images/1.jpg" alt="" class="d-block w-100 header-h">
                    <div class="justify-content-start carousel-caption d-md-block ">
                        {{-- <img src="{{ asset('img/1.jpg') }}" alt="" srcset=""> --}}
                        <video class="w-100 " autoplay loop style="opacity:.4" muted>
                            <source src="{{ asset('video/22.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                          </video>
                          <p id="statusText"></p>
                        {{-- <h5>second slide label</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam libero, ratione ullam n</p> --}}
                    </div>
            </div>
            <div class="carousel-item header-h" style="background-image:url({{ asset('img/1.jpg') }})">
                <!-- <img src="images/2.jpg" alt="" class="d-block w-100 header-h">
                <div class="carousel-caption d-md-block h-100" >
                    {{-- <img src="{{ asset('img/1.jpg') }}" alt="" srcset=""> --}}
                    <h5>secomd slide label</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum molestiae temporibus hic, consec</p>
                </div>
            </div>
            <div class="carousel-item header-h" style="background-image:url({{ asset('img/1.jpg') }})">
                <!-- <img src="images/3.jpg" alt="" class="d-block w-100 header-h"> 
                <div class="carousel-caption d-md-block h-100" >
                    {{-- <img src="{{ asset('img/1.jpg') }}" alt="" srcset=""> --}}
                    <h5>third slide label</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae necessitatibus, reiciend</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev header-h" type="button" data-bs-target="#slider_header" data-bs-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">previous</span>
        </button>
        <button class="carousel-control-next header-h" type="button" data-bs-target="#slider_header" data-bs-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">next</span>
        </button>
    </div>
    <script>
       
    </script> -->
    <div class="header-h2" style="background-image:url({{asset('storage/headers/'.$headers[0]->id.'.png')}}?{{rand()}})" data-bs-interval="10000">
        <!--  <img src="images/1.jpg" alt="" class="d-block w-100 header-h"> -->
        <div class=" row" style="background-color: rgba(0,0,0,.5)">
            <video class="video col-lg-6 col-12" autoplay loop style="opacity:.3" muted>
                <source src="{{ asset('video/22.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <div class="col-lg-6 col-12">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white align-self-center">
                        <h1>Bonjour</h1>
                        <p>
                            {{$headers[0]->Descrip}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>