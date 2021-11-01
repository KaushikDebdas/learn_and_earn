@extends('welcome')
@section('content')

<div class="main-body">
    <!-- Banner Slider-->
    <section class="#">
      <div id="carouselExampleControls" class="carousel slide orange-bg mt-2" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 sliderDescription">
                <h1>Learn & Earn <span> With Us</span></h1>
                <p>Learn and Earn is an intelligent networking platform where users will be able to take and pay tuition
                  at their convenience. A web based intelligent platform for personal tutor and consultation.</p>
                <button class="learnMoreBtn ">Learn More <i class="fas fa-long-arrow-alt-right ms-1"></i></button>
              </div>
              <div class="col-md-8">
                <img src="{{ asset('frontend/images/banner/banner-1.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 sliderDescription">
                <h1>Exciting <span> Features</span></h1>
                <p>There are so many exciting features like Live Chat, Community based searching and so on. Which will change your experiance of using a tuition based web application.</p>
                <button class="learnMoreBtn ">Learn More <i class="fas fa-long-arrow-alt-right ms-1"></i></button>
              </div>
              <div class="col-md-8">
                <img src="{{ asset('frontend/images/banner/banner-2.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 sliderDescription">
                <h1>Create your <span> own Group</span></h1>
                <p>Here you can create your group by your choice and make amazing projects together.</p>
                <button class="learnMoreBtn ">Learn More <i class="fas fa-long-arrow-alt-right ms-1"></i></button>
              </div>
              <div class="col-md-8">
                <img src="{{ asset('frontend/images/banner/banner-3.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- End Banner Slider-->

    <!-- Top tutor card-->
    <section class="mt-5" id="vision">
      <div class="container vision tuitor">
        <h1>Top <span>Tutor</span></h1>
        <p class="sub mt-3">Our goal is to help the sudents with the studies with some features but also to <span>buid
          communication , share knowledge and improve globally.</span> </p>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">

          <div class="col">
            <div class="tutor-card">
              <img class="center-block" src="{{ asset('frontend/images/top tutor/2.jpg') }}" class="card-img-top" alt="...">
              <div class="tt">
                <h5 class="card-title">Achivements</h5>
                <p class="card-text">If we can help the students with providing proper concept and better results , its
                  an
                  achievment for us.</p>
              </div>
              <div class="tutor-card-body">
                <button class="tt-button">Read more</button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="tutor-card">
              <img class="center-block" src="{{ asset('frontend/images/top tutor/2.jpg') }}" class="card-img-top" alt="...">
              <div class="tt">
                <h5 class="card-title">Achivements</h5>
                <p class="card-text">If we can help the students with providing proper concept and better results , its
                  an
                  achievment for us.</p>
              </div>
              <div class="tutor-card-body">
                <button class="tt-button">Read more</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="tutor-card">
              <img class="center-block" src="{{ asset('frontend/images/top tutor/3.jpg') }}" class="card-img-top" alt="...">
              <div class="tt">
                <h5 class="card-title">Achivements</h5>
                <p class="card-text">If we can help the students with providing proper concept and better results , its
                  an
                  achievment for us.</p>
              </div>
              <div class="tutor-card-body">
                <button class="tt-button">Read more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Top tutor card-->

    <!-- Mission & Vision -->
    <section class="mt-5" id="vision">
      <div class="container vision">
        <h1>Mission <span>& Vision</span></h1>
        <p class="sub mt-5">Our goal is to help the sudents with the studies with some features but also to <span>buid
            communication , share knowledge and improve globally.</span> </p>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/vision/vision-1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tutor Help</h5>
                <p class="card-text">Imrovement in academic life will help a student to be more confident and capable
                  for
                  real life.</p>
                <button class="new-button">Explore >></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/vision/vision-2.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Community</h5>
                <p class="card-text">A large tutor-student community of helping can make the environment of education
                  more
                  beautiful.</p>
                <button class="new-button">Explore >></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/vision/vision-3.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Achivements</h5>
                <p class="card-text">If we can help the students with providing proper concept and better results , its
                  an
                  achievment for us.</p>
                <button class="new-button">Explore >></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Platforms -->
    <section class="mt-5" id="platforms">
      <div class="container platforms">
        <h1>Our Platforms</h1>
        <p class="sub mt-5">Learn & Earn is an intelligent networking platform.we designed our programs , <span>
            Based on their problem we designed our programs.</span></p><br>
        <div class="row mt-5">
          <div class="col-md-7"><img src="{{ asset('frontend/images/banner/banner-5.png') }}" alt="" srcset=""></div>
          <div class="col-md-5">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Tuition Arrangment
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>User will be able to find suitable teacher, tuition and also will be able to post for tuition. A
                      time scheduling facility will also be here.</p>
                  </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Group Study Arrangment
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>If you are looking for a tutor to help you in your studies then “Learn and Earn” is the perfect
                      platform for you. Learn and Earn is giving you the opportunity to find quality tutors in budget on
                      your own. To arrange a group study you simply have to do a registration first and click on the
                      ‘find
                      group study’ option or ‘create group study’ to create. Here you can post by filling necessary
                      fields.</p>
                  </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Sharing Resources
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Finding a good resource according to your subject is so difficult but here you will be able to find them easily and also can share yours.</p>
                  </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Finding Team Members
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Are you searching for some members for your team? Then this is the right place for you. Here you will be able to find your desired team members easily.</p>
                  </div>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Platforms -->

    <!-- Team Members -->
    <section class="mt-5 mb-5" id="about">
      <div class="container about">
        <h1>Our Team</h1>
        <p class="sub mt-5">We are lead by a team who constanly questions,thinked and challages <span>to unlock great
            creativity around every turn.</span></p><br>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/team/1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kaushik Debdas</h5>
                <p class="card-text">CEO & Co-founder</p>
                <p>kaushikdebdas27@gmail.com</p>
                <p>01757921768</p>
                <button class="new-button"><i class="fab fa-linkedin"></i></button>
                <button class="new-button"><i class="fab fa-github"></i></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/team/2.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tarek Mahmud</h5>
                <p class="card-text">CEO & Co-founder</p>
                <p>tmahmud162066@bscse.uiu.ac.bd</p>
                <p>01620792510</p>
                <button class="new-button"><i class="fab fa-linkedin"></i></button>
                <button class="new-button"><i class="fab fa-github"></i></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/team/3.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Khurshida Jahan Tanzeen</h5>
                <p class="card-text">CEO & Co-founder</p>
                <p>ktanzeen162046@bscse.uiu.ac.bd</p>
                <p>01620573368</p>
                <button class="new-button"><i class="fab fa-linkedin"></i></button>
                <button class="new-button"><i class="fab fa-github"></i></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/team/4.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Iffat Haque Rafsan</h5>
                <p class="card-text">CEO & Co-founder</p>
                <p>irafsan162037@bscse.uiu.ac.bd</p>
                <p>01515663630</p>
                <button class="new-button"><i class="fab fa-linkedin"></i></button>
                <button class="new-button"><i class="fab fa-github"></i></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/team/5.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sushmita Mondal</h5>
                <p class="card-text">CEO & Co-founder</p>
                <p>smondal171211@bscse.uiu.ac.bd
                </p>
                <p>01792214546</p>
                <button class="new-button"><i class="fab fa-linkedin"></i></button>
                <button class="new-button"><i class="fab fa-github"></i></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="center-block" src="{{ asset('frontend/images/team/6.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Md. Shahin Alam</h5>
                <p class="card-text">CEO & Co-founder</p>
                <p>malam162016@bscse.uiu.ac.bd</p>
                <p>01705883565</p>
                <button class="new-button"><i class="fab fa-linkedin"></i></button>
                <button class="new-button"><i class="fab fa-github"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Members -->
  </div>

  @endsection
