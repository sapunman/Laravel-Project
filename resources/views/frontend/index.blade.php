@extends('frontend.layouts.main')

@section('main-container')
    
    <!-- o meni -->
    <section id="usluge" class="py">
      <article class="container text-center text-white">
        <h2 class="display-4">Our Services</h2>
        <br />
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <i class="fab fa-wordpress"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Web Design</h5>
                <p class="card-text">
                  We offer the best and top notch services in the web industry. We build your custom website for business or personal use. We guarantee optimized performance, security and design for your website.
                </p>
                <button class="btn btn-primary form-control">
                  Try it yourself
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <i class="fa-solid fa-address-book"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">SEO</h5>
                <p class="card-text">
                  We offer you a free first year of 24/7 maintenance for your website. Changed your mind and need more customization for your website? All of this is included in he first year free support & maintenance package.
                </p>
                <button class="btn btn-primary form-control">
                  Try it yourself
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Mobilna aplikacija</h5>
                <p class="card-text">
                  We offer the best and top notch services in the web industry. We build your custom website for business or personal use. We guarantee optimized performance, security and design for your website.
                </p>
                <button class="btn btn-primary form-control">
                  Try it yourself
                </button>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>

    <!-- usluge -->
    <section id="need" class="py">
      <article class="container text-center text-white">
        <h2 class="display-4">Need a Custom Website For Your Business?</h2>
        <p class="lead">
          Choose The Design That Suits You Best From Our Gallery of 100+ Designs</p>
        
            </div>
          </div>
        </div>
      </article>
    </section>

    <!-- iskustvo -->
    <section id="iskustvo" class="py text-white">
      <article class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <h3 class="display-3 text-center">WHAT WE’RE GOOD AT</h3>
          </div>
          <div class="col-md-6">
            <h4 class="my-3">HTML & CSS</h4>
            <div class="progress">
              <div
                class="progress-bar bg-success"
                role="progressbar"
                style="width: 90%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <h4 class="my-3">WordPress</h4>
            <div class="progress">
              <div
                class="progress-bar bg-warning"
                role="progressbar"
                style="width: 95%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <h4 class="my-3">PHP</h4>
            <div class="progress">
              <div
                class="progress-bar bg-danger"
                role="progressbar"
                style="width: 85%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <h4 class="my-3">JavaScript</h4>
            <div class="progress">
              <div
                class="progress-bar bg-primary"
                role="progressbar"
                style="width: 90%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
          </div>
        </div>
      </article>
    </section>

    <!-- tehnologije -->
   

    <!-- portfolio -->
    <section id="portfolio" class="py text-center text-white">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="display-4 p-3">OUR TEAM</h2>
          </div>
        </div>
        <div class="row filter-container">
          <div class="col-md-4" data-category="1">
          <img class="img-fluid" src="{{asset('slike/paspalj.jpg')}}" alt="" />
          <h3>Paspalj</h3>
          <p>Marketing Manager
              Zarko is a hardworking online marketing officer that has helped our company to excel and be among the elite in this field of web design and development.</p>
          </div>
          <div class="col-md-4 filtr-item" data-category="2">
            <img class="img-fluid" src="{{asset('slike/jokic.jpg')}}" alt="" />
            <h3>Jokic</h3>
            <p>Founder & CEO
              Nikola is one of the top entrepreneurs in the field of web design and development. His goal-centered vision has brought this company to be on the top of its competitors.</p>
          </div>
          <div class="col-md-4 filtr-item" data-category="3">
            <img class="img-fluid" src="{{asset('slike/rodman.png')}}" alt="" />
            <h3>Rodman</h3>
            <p>Design Artist
              Denis has unique taste in art in general and web design in specific has significantly contributed to the creation of 100+ stunning designs of this magnificent web design industry.</p>
          </div>
          
        </div>
      </article>
    </section>

    <!-- kontakt -->
    <section id="kontakt" class="py">
      <article class="container text-center text-white">
        <h2 class="display-4 mb-5">Contact us</h2>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <i class="fas fa-mobile-alt"></i>
            <p class="lead">063 218-988</p>
          </div>
          <div class="col-md-3">
            <i class="fas fa-envelope"></i>
            <p class="lead">antonije.s@gmail.com</p>
          </div>
          <div class="col-md-3">
            <i class="fas fa-map-marker-alt"></i>
            <p class="lead">Beograd</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mx-auto mt-5">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Name"
                  />
                </div><br>
                <div class="form-group col-md-6">
                  <input
                    class="form-control"
                    type="email"
                    placeholder="Email"
                  />
                </div><br>
              </div>
              
              <div class="form-group">
                <textarea
                  class="form-control"
                  cols="30"
                  rows="10"
                  placeholder="Message"
                ></textarea>
              </div>
              <a href="" class="button">Send</a>
            </form>
          </div>
        </div>
      </article>
    </section>

@endsection
