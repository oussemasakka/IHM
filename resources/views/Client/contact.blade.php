@extends('Client.Template')
@section('Content')
<!--==============================
	  Hero area Start
	==============================-->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/Hotels.png')}}">
        <div class="container z-index-common">
          <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <div class="breadcumb-menu-wrap">
              <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--==============================
          Hero Area End
        ==============================-->
    
      <!--==============================
          Contact box Area Start
        ==============================-->
      <section class="space contact-box_wrapper">
        <div class="outer-wrap">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                  <div class="contact-box_icon">
                    <i class="fas fa-map-marked-alt"></i>
                  </div>
                  <h3 class="contact-box__title h5">Address</h3>
                  <p class="contact-box__text">
                    Nasria Imm Emna City Bloc B 4éme étage App 43 , sfax , tunisia
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                  <div class="contact-box_icon">
                    <i class="fas fa-address-card"></i>
                  </div>
                  <h3 class="contact-box__title h5">Contact</h3>
                <br>
                  <ul class="contact-box_list">
                    <li>Mobile: <a href="+216 22 100 200">+216 22 100 200</a></li>
                    <br><br>
                    <li>Hotline: <a href="+216 22 100 200">+216 22 100 200</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                  <div class="contact-box_icon">
                    <i class="fas fa-clock"></i>
                  </div>
                  <h3 class="contact-box__title h5">Office Hour</h3>
                  <br>
                  <ul class="contact-box_list">
                    <li>Monday - Friday: 8:30 - 20:00</li>
                    <br><br>
                    <li>Saturday & Sunday: 9:30 - 21:30</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--==============================
          Contact box Area End
        ==============================-->
    
      <!--==============================
          Contact Form Area End
        ==============================-->
      <div class="space bg-light">
        <div class="container">
          <form class="ajax-contact"  action="/mail.php" method="POST">
            <div class="row justify-content-center text-center">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="title-area">
                  <span class="sec-subtitle">Contact Us</span>
                  <h2 class="sec-title h1">Get In Touch</h2>
                  <p class="sec-text">
                    Curabitur aliquet quam id dui posuere blandit. Vivamus magna
                    justo, lacinia eget consectetur sed, convgallis at tellus.
                    Vestibulum ac diam sit.
                  </p>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6 form-group">
                <input type="text" placeholder="Enter Your First Name" name="fname" id="fname" class="form-control" />
              </div>
              <div class="col-md-6 form-group">
                <input type="text" placeholder="Enter Your Last Name" name="lname" id="lname" class="form-control" />
              </div>
              <div class="col-md-6 form-group">
                <input type="email" placeholder="Your Email" name="email" id="email" class="form-control" />
              </div>
              <div class="col-md-6 form-group">
                <input type="number" placeholder="Phone No" name="number" id="number" class="form-control" />
              </div>
    
              <div class="form-group col-12">
                <textarea placeholder="Write Your Comment" name="message" id="message" class="form-control"></textarea>
              </div>
              <div class="col-md-auto pt-lg-3">
                <button class="vs-btn style4" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--==============================
          Contact Form Area End
        ==============================-->
@endsection