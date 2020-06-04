@extends('web_layout.default')

@section('social_link')
    @include('web_layout._social_link')
@stop

@section('title')
    Welcome to ASHIRE
@stop

@section('slider')
    @include('web_layout._slider')
@stop

@section('css')
     <!-- add js files if required to this page -->
@stop

@section('js')
    <!-- add js files if required to this page -->
@stop

@section('content')

<section class="intro py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro-box w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text pl-3">
                            <h4 class="mb-0">Call us: +91 9884416894</h4>
                            <span> B10 Iswarya Flats, No 22 Viswanathapuram, Nanganallur, Chennai 600061</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-box w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <div class="text pl-3">
                            <h4 class="mb-0">Opening Hours</h4>
                            <span>Mon - Sat 10:00 AM - 6:00 PM </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-box w-100">
                        <p class="mb-0"><a href="#" class="btn btn-primary">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Ashire focuses on "Recruitment" but works for "Many Domains"</h2>
        <span class="subheading">We offer Services</span>
      </div>
    </div>
        <div class="row">
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-goal"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Recruitment Solutions</h3>
            <p>As our tagline "Recruitment redefined", Ashire ensures to deliver high quality human resources with a strategic hiring methodology.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-stress"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Training &amp; Certifications</h3>
            <p>Ashire is preparing to provide job oriented training with certification to enhance skills of job seekers and assist them for placements.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-crm"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Research &amp; Analytics</h3>
            <p>Ashire is preparing to provide high-end research and analytics services in order to make a business to transform to the next level.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-marriage"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">ERP Solutions</h3>
            <p>Ashire is preparing to provide ERP and software development services with the help of cutting edge technologies.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Why Ashire?</h2>
        <span class="subheading">Because we follow</span>
      </div>
    </div>
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(assets/images/about.jpg);">
                    <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
                    <div class="text pl-4">
                        <h4>Accountability</h4>
                        <p>We take responsibility to ensure 100% quality on all the services we offer, without fail.</p>
                    </div>
                </div>
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
                    <div class="text pl-4">
                        <h4>Expertise</h4>
                        <p>Our expertise is to work along with the customer, to ensure that we give 100% satisfaction to our customers.</p>
                    </div>
                </div>
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
                    <div class="text pl-4">
                        <h4>Speed</h4>
                        <p>Our strategic planning before we start our service, gives us a way to work fastly and smartly.</p>
                    </div>
                </div>
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-event"></span></div>
                    <div class="text pl-4">
                        <h4>Delivery</h4>
                        <p>We expect all the services we offer to be delivered with quality, reliability and commitment.</p>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>

<section class="ftco-counter" id="section-counter">
    <div class="container">
            <div class="row">
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="20">0</strong>
          </div>
          <div class="text">
              <span>No of clients</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="309">0</strong>
          </div>
          <div class="text">
              <span>No of vacancies</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="192">0</strong>
          </div>
          <div class="text">
              <span>Closed vacancies</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="8056">0</strong>
          </div>
          <div class="text">
              <span>Number of registered Job Seekers</span>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>



<section class="ftco-section testimony-section bg-secondary">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
        <h2>Happy Clients &amp; Feedbacks</h2>
        <span class="subheading">Testimonies</span>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(assets/images/person_1.jpg)"></div>
                    <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(assets/images/person_2.jpg)"></div>
                    <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(assets/images/person_3.jpg)"></div>
                    <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(assets/images/person_1.jpg)"></div>
                    <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(assets/images/person_2.jpg)"></div>
                    <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Latest news from our blog</h2>
        <span class="subheading">News &amp; Blog</span>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_1.jpg');">
          </a>
          <div class="text mt-3">
              <div class="meta mb-2">
              <div><a href="#">January 30, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_2.jpg');">
          </a>
          <div class="text mt-3">
              <div class="meta mb-2">
              <div><a href="#">January 30, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_3.jpg');">
          </a>
          <div class="text mt-3">
              <div class="meta mb-2">
              <div><a href="#">January 30, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="bg-secondary w-100 rounded p-4">
                <div class="row">
                  <div class="col-md-7 d-flex align-items-center">
                    <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 18px;">Subcribe for our weekly tips</h2>
                  </div>
                  <div class="col-md-5 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                      <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                      </div>
                    </form>
                  </div>
              </div>
              </div>
            </div>
          </div>
  </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Pricing for Database and Consulting Services</h2>
        <span class="subheading">Price &amp; Plans</span>
      </div>
    </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="block-7">
            <div class="text-center">
            <span class="price"><sup>Rs</sup> <span class="number">4500</span></span>
            <span class="excerpt d-block">Smart DB Access</span>

            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>2 users</li>
              <li><span class="fa fa-check mr-2"></span>RDB Access - 3000/month</li>
              <li><span class="fa fa-check mr-2"></span>Excel Downloads - 3000/month</li>
              <li><span class="fa fa-check mr-2"></span>Unlimited Job Postings</li>
              <li><span class="fa fa-check mr-2"></span>24/7 support</li>
              <li><span class="fa fa-check mr-2"></span>Price Inclusive of GST</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="block-7">
            <div class="text-center">
            <span class="price"><sup>Rs</sup> <span class="number">6500</span></span>
            <span class="excerpt d-block">Professional DB Access</span>

            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>2 users</li>
              <li><span class="fa fa-check mr-2"></span>RDB Access - 7500/month</li>
              <li><span class="fa fa-check mr-2"></span>Excel Downloads - 5000/month</li>
              <li><span class="fa fa-check mr-2"></span>Unlimited Job Postings</li>
              <li><span class="fa fa-check mr-2"></span>24/7 support</li>
              <li><span class="fa fa-check mr-2"></span>Price Inclusive of GST</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="block-7">
            <div class="text-center">
            <span class="price"><sup>Rs</sup> <span class="number">60K</span></span>
            <span class="excerpt d-block">Annual Saver-DB Access</span>

            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>2 users</li>
              <li><span class="fa fa-check mr-2"></span>RDB Access - 8000/month</li>
              <li><span class="fa fa-check mr-2"></span>Excel Downloads - 5000/month</li>
              <li><span class="fa fa-check mr-2"></span>Unlimited Job Postings</li>
              <li><span class="fa fa-check mr-2"></span>24/7 support</li>
              <li><span class="fa fa-check mr-2"></span>Price Inclusive of GST</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="block-7">
            <div class="text-center">
            <span class="price"> <span class="number">7.5<sup>%</sup></span></span>
            <span class="excerpt d-block">Consulting Charges</span>

            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>Price calculated out of Annual CTC</li>
              <li><span class="fa fa-check mr-2"></span>24/7 Support</li>
              <li><span class="fa fa-check mr-2"></span>45 Days payment time</li>
              <li><span class="fa fa-check mr-2"></span>Negotiable on bulk vacancies</li>
              <li><span class="fa fa-check mr-2"></span>On Time Completion</li>
              <li><span class="fa fa-check mr-2"></span>Price - Exclusive of GST</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@stop
