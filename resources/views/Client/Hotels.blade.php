@extends('Client.Template')
@section('Content')

 <!--==============================
	  Hero area Start
	==============================-->
  <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/Hotels.png')}}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Tours</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Tours</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
	  Hero Area End
	==============================-->

  <!--==============================
	  Tours Area Start
	==============================-->
  <section class="space-bottom">
    <div class="outer-wrap">
      <div class="filter-menu1 filter-menu-active wow fadeInUp wow-animated">
        <button class="tab-button active" data-filter="*"><i class="fas fa-sort-alpha-up"></i> Name (A - Z)</button>
        <button class="tab-button" data-filter=".date"><i class="fas fa-calendar-alt"></i> Date</button>
        <button class="tab-button" data-filter=".hightTolow"><i class="fas fa-upload"></i> Price Low to
          High</button>
        <button class="tab-button" data-filter=".lowToHigh"><i class="fas fa-download"></i> Price Hight to
          Low</button>
      </div>
      <div class="container">
        <div class="shadow-content1">
          <div class="row">
            <div class="col-lg-9">
              <div class="row filter-active tours-active">
                @foreach ( $hotels as $hotel )
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="/client/hotels/details/{{$hotel->id}}"><img src="{{ asset($hotel->image) }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $hotel->nombreEtoile)
                                <i class="fas fa-star"></i> <!-- Étoile remplie -->
                            @else
                                <i class="far fa-star"></i> <!-- Étoile vide -->
                            @endif
                        @endfor
                    </div>
                      <h3 class="package-title"><a href="/client/hotels/details/{{$hotel->id}}">{{$hotel->NomHotel}}</a></h3>
                      <p class="package-text">{{$hotel->adress}}</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">{{$hotel->prixmoyen}} DT</span>
                        <a href="/client/hotels/details/{{$hotel->id}}" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

 
              </div>
              <div class="vs-pagination pt-lg-2">
                <ul>
                  <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sidebar-area tours-sidebar">
                <div class="widget">
                  <h3 class="widget_title">Plan Your Trip</h3>
                  <p class="widget_text">Donec rutrum congue leo elit In a eget malesuadga blandit.</p>
                  <form class="booking-form">
                    <div class="form-group ">
                      <i class="fas fa-search"></i>
                      <input type="text" placeholder="Search Tour" />
                    </div>
                    <div class="form-group ">
                      <i class="fas fa-compass"></i>
                      <input type="text" placeholder="Where To?" />
                    </div>
                    <div class="form-group">
                      <i class="fas fa-calendar-alt"></i>
                      <select class="form-select" name="name">
                        <option value="" selected="selected" disabled="disabled" hidden="">Select Month</option>
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <i class="fas fa-thumbtack"></i>
                      <select class="form-select" name="name">
                        <option value="" selected="selected" disabled="disabled" hidden="">Select Type</option>
                        <option value="">Adventure </option>
                        <option value="">Combining</option>
                        <option value="">Sporting</option>
                        <option value="">Domestic</option>
                      </select>
                    </div>
                    <div class="price_slider_wrapper">
                      <h3 class="widget_title">Filter By Price</h3>
                      <div class="price_slider"></div>
                      <div class="price_label">
                        Price: <span class="from">$10</span> — <span class="to">$75</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="chekbox-area">
                        <input type="radio" id="popular" name="fav_language" value="popular" checked />
                        <label for="popular">Popular</label>
                      </div>
                      <div class="chekbox-area">
                        <input type="radio" id="trendy" name="fav_language" value="trendy" />
                        <label for="trendy">Trendy</label>
                      </div>
                      <div class="chekbox-area">
                        <input type="radio" id="latest" name="fav_language" value="latest" />
                        <label for="latest">Latest</label>
                      </div>
                    </div>
                    <button class="vs-btn style4 w-100">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==============================
	  Tours Area End
	==============================-->
@endsection