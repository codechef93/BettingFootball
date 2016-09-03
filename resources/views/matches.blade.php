@extends('layouts.app')
@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line"></h1>
            <p class="mt-4"></p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section site-blocks-vs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bg-image overlay-success rounded mb-5" style="background-image: url('assets/images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
          
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

              <div class="text-center text-lg-left">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                    <img src="assets/images/team/watford.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="text">
                    <h3 class="h5 mb-0 text-black">Watford</h3>                    
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
              <div class="d-inline-block">
                <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Premier League</small></p>
                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">2:2</span></div>
                <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">16 September</small></p>
              </div>
            </div>

            <div class="col-md-12 col-lg-4 text-center text-lg-right">
              <div class="">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                    <img src="assets/images/team/arsenal.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="text order-1">
                    <h3 class="h5 mb-0 text-black">Arsenal</h3>
                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
              <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                Next match 
                <div id="date-countdown"></div>
              </div>

              <div class="ml-auto pr-4 order-md-2">
                <div class="h5 text-black text-uppercase text-center text-lg-left">
                  <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                    <img src="assets/images/team/norvich.png" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Norwich </span>
                  </div>
                  <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span> 
                  <div class="d-block d-md-inline-block">
                    <img src="assets/images/team/mancity.png" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Man City</span>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-md-12">


            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
              <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                <div class="text-center text-lg-left">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                      <img src="assets/images/team/Bournemouth.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                      <h3 class="h5 mb-0 text-black">Bournemouth</h3>                      
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <div class="d-inline-block">
                  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:1</span></div>
                </div>
              </div>

              <div class="col-md-4 col-lg-4 text-center text-lg-right">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                      <img src="assets/images/team/Everton.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text order-1 w-100">
                      <h3 class="h5 mb-0 text-black">Everton</h3>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- END row -->

            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
              <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                <div class="text-center text-lg-left">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                      <img src="assets/images/team/liverpool.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                      <h3 class="h5 mb-0 text-black">Liverpool</h3>                      
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <div class="d-inline-block">
                  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:1</span></div>
                </div>
              </div>

              <div class="col-md-4 col-lg-4 text-center text-lg-right">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                      <img src="assets/images/team/Newcastle.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text order-1 w-100">
                      <h3 class="h5 mb-0 text-black">Newcastle</h3>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- END row -->

            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
              <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                <div class="text-center text-lg-left">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                      <img src="assets/images/team/Brighton.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                      <h3 class="h5 mb-0 text-black">Brighton</h3>                      
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <div class="d-inline-block">
                  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">1:1</span></div>
                </div>
              </div>

              <div class="col-md-4 col-lg-4 text-center text-lg-right">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                      <img src="assets/images/team/Burnley.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text order-1 w-100">
                      <h3 class="h5 mb-0 text-black">Burnley</h3>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- END row -->

            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
              <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                <div class="text-center text-lg-left">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                      <img src="assets/images/team/manchestrunited.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                      <h3 class="h5 mb-0 text-black">Man Utd</h3>                      
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <div class="d-inline-block">
                  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">1:0</span></div>
                </div>
              </div>

              <div class="col-md-4 col-lg-4 text-center text-lg-right">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                      <img src="assets/images/team/Leicester.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text order-1 w-100">
                      <h3 class="h5 mb-0 text-black">Leicester</h3>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- END row -->

            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
              <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                <div class="text-center text-lg-left">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                      <img src="assets/images/team/sheffutd.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                      <h3 class="h5 mb-0 text-black">Sheffield Utd</h3>                      
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <div class="d-inline-block">
                  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">0:1</span></div>
                </div>
              </div>

              <div class="col-md-4 col-lg-4 text-center text-lg-right">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                      <img src="assets/images/team/southampton.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text order-1 w-100">
                      <h3 class="h5 mb-0 text-black">Southampton</h3>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- END row -->

            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
              <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                <div class="text-center text-lg-left">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                      <img src="assets/images/team/Spurs.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                      <h3 class="h5 mb-0 text-black">Spurs</h3>                      
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <div class="d-inline-block">
                  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">4:0</span></div>
                </div>
              </div>

              <div class="col-md-4 col-lg-4 text-center text-lg-right">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center">
                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                      <img src="assets/images/team/CrystalPalace.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text order-1 w-100">
                      <h3 class="h5 mb-0 text-black">Crystal Palace</h3>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- END row -->

          </div>

        </div>
        <!--
        <div class="row">
          <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
        </div>-->
      </div>
    </div>

    @endsection