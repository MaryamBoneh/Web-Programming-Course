
    @include('../header');
    @include('../navbar');


    <div class="container">
      <section>
        <div class="row py-2">
          <div class="col-12">
            <img src="{{asset('assets/img/s1-top.jpeg')}}" class="rounded-3 img-fluid" alt="">
          </div>
        </div>
        <div class="row py-2">
          <div class="col-lg-8 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner rounded-3">
                <div class="carousel-item active">
                  <img src="{{asset('assets/img/s1-slider-3.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets/img/s1-slider-4.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets/img/s1-slider-1.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets/img/s1-slider-2.jpeg')}}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column justify-content-between">
            <img src="{{asset('assets/img/s1-left-top.jpeg')}}" class="rounded-3 img-fluid d-none d-sm-none d-md-none d-lg-block" alt="">
            <img src="{{asset('assets/img/s1-left-bottom.jpeg')}}" class="rounded-3 img-fluid d-none d-sm-none d-md-none d-lg-block" alt="">
          </div>
        </div>
      </section>
    </div>

    <section class="section-two my-4 p-5">
      <div class="row">
        <div class="d-none d-sm-none d-md-none d-lg-block col-lg">
          <img src="{{asset('assets/img/s2-right.png')}}" class="img-fluid" alt="باکس پیشنهاد ویژه">
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/02.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
                رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div> 
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/01.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
              رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-danger">
              ۶۰٪ 
              <span class="text-black-50">فروش رفته</span>
            </div>
          </div>
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/03.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
              رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/04.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
              رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-3 col-sm-6 my-2">
          <img src="{{asset('assets/img/s3-1.jpeg')}}" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg-3 col-sm-6 my-2">
          <img src="{{asset('assets/img/s3-2.jpeg')}}" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg-3 col-sm-6 my-2">
          <img src="{{asset('assets/img/s3-3.jpeg')}}" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg-3 col-sm-6 my-2">
          <img src="{{asset('assets/img/s3-4.jpeg')}}" class="img-fluid rounded-3" alt="">
        </div>
      </div>
    </div>

    <section class="section-four my-4 p-5">
      <div class="row">
        <div class="d-none d-sm-none d-md-none d-lg-block col-lg">
          <img src="{{asset('assets/img/s4-right.png')}}" class="img-fluid" alt="شگفت‌انگیز سوپرمارکتی">
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/05.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
                رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div> 
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-danger">
              ۶۰٪ 
              <span class="text-black-50">فروش رفته</span>
            </div>
          </div>
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/06.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
              رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-danger">
              ۴۰٪ 
              <span class="text-black-50">فروش رفته</span>
            </div>
          </div>
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/07.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
              رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
        <div class="card col-lg col-md col-sm-4 rounded-3 m-2 px-3">
          <img src="{{asset('assets/img/products/08.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
              رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container slider-1 py-2">

      <div class="row">
        <div class="col-lg col-sm col-md py-1">
          <img src="{{asset('assets/img/s5-left.jpeg')}}" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg col-sm col-md py-1">
          <img src="{{asset('assets/img/s5-right.jpeg')}}" class="img-fluid rounded-3" alt="">
        </div>
      </div>

      <div class="row my-5">
        <div class="col-lg-10 col-md col-sm d-flex p-4 m-2 bg-white" style="border: 1px solid #ddd; border-radius: 5px; margin-right: 12px;">
          <div class="row">
            <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
              <img src="{{asset('assets/img/products/09.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
              <div class="card-body p-1">
                <p class="card-text">
                    رنده برقی باس صنعتی مدل 82mmBS
                </p>
                <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                  646,000 تومان
                </div>
              </div>
            </div>

            <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
              <img src="{{asset('assets/img/products/10.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
              <div class="card-body p-1">
                <p class="card-text">
                    رنده برقی باس صنعتی مدل 82mmBS
                </p>
                <div class="d-flex justify-content-end align-items-center">
                  <div class="offer-price">570,000</div>
                  <div class="offer-percentage">25%</div>
                </div> 
                <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                  646,000 تومان
                </div>
              </div>
            </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/11.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/12.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="offer-price">570,000</div>
                <div class="offer-percentage">25%</div>
              </div> 
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>
          </div>
        </div>

        <div class="d-none d-sm-none d-md-none d-lg-block col-lg-2 col-md col-sm p-0 m-2 bg-white" style="width: 14%; border: 1px solid #92fbff; border-radius: 5px;">
          <div class="p-3 border-bottom text-center border-danger">پیشنهادهای لحظه‌ای شما</div>
          <div class="card col-lg col-md col-sm-4 rounded-3 border-0 m-0 w-100 px-3">
            <img src="{{asset('assets/img/products/05.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="offer-price">570,000</div>
                <div class="offer-percentage">25%</div>
              </div> 
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="text-danger">
                ۶۰٪ 
                <span class="text-black-50">فروش رفته</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--------------- categories ---------------->
      <div class="row my-5 mx-1 d-flex flex-column"  style="border: 1px solid #ddd; border-radius: 5px;">
        <div class="col-lg-12 col-md col-sm d-flex text-center p-4 bg-white text-secondary justify-content-center">
          <h4>بیش از ۶،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</h4>
        </div>

        <div class="col-lg-12 col-md col-sm d-flex d-flex flex-wrap p-4 bg-white">

          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-laptop px-3" style="font-size: 32px"></i>
            <div class="py-3">
            کالای دیجیتال 
            </div>
            <span class="cyan-color">
              + ۹۱۱۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-car px-3" style="font-size: 32px"></i>
            <div class="py-3">
            خودرو، ابزار و تجهیزات صنعتی 
            </div>
            <span class="cyan-color">
              + ۱۷۸۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-tshirt px-3" style="font-size: 32px"></i>
            <div class="py-3">
            مد و پوشاک
            </div>
            <span class="cyan-color">
              + ۷۷۳۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-baby px-3" style="font-size: 32px"></i>
            <div class="py-3">
            اسباب بازی، کودک و نوزاد
            </div>
            <span class="cyan-color">
              + ۸۳۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-cheese-swiss px-3" style="font-size: 32px"></i>
            <div class="py-3">
            کالاهای سوپرمارکتی 
            </div>
            <span class="cyan-color">
              + ۷۲۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-heart px-3" style="font-size: 32px"></i>
            <div class="py-3">
            زیبایی و سلامت 
            </div>
            <span class="cyan-color">
              + ۱۰۹۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-utensils-alt px-3" style="font-size: 32px"></i>
            <div class="py-3">
            خانه و آشپزخانه
            </div>
            <span class="cyan-color">
              + ۶۰۳۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-pen px-3" style="font-size: 32px"></i>
            <div class="py-3">
            کتاب، لوازم تحریر و هنر 
            </div>
            <span class="cyan-color">
              + ۳۰۲۰۰۰ کالا
            </span>
          </div>
          
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-volleyball-ball px-3" style="font-size: 32px"></i>
            <div class="py-3">
            ورزش و سفر 
            </div>
            <span class="cyan-color">
              + ۴۷۰۰۰ کالا
            </span>
          </div>
          <div class="col-lg col-md col-sm m-3 text-center text-secondary">
            <i class="cyan-color far far fa-suitcase px-3" style="font-size: 32px"></i>
            <div class="py-3">
            محصولات بومی و محلی
            </div>
            <span class="cyan-color">
            ۵۰۰۰ کالا
            </span>
          </div>
        
        </div>
      </div>
      
      <div class="row my-5 mx-1"  style="border: 1px solid #ddd; border-radius: 5px;">
        <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-start border-bottom border-black-50">
          <h5>اسباب‌بازی و سرگرمی</h5>
        </div>
        <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-center">
          <div class="row">
            <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
              <img src="{{asset('assets/img/products/13.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
              <div class="card-body p-1">
                <p class="card-text">
                    رنده برقی باس صنعتی مدل 82mmBS
                </p>
                <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                  646,000 تومان
                </div>
              </div>
            </div>

            <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
              <img src="{{asset('assets/img/products/14.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
              <div class="card-body p-1">
                <p class="card-text">
                    رنده برقی باس صنعتی مدل 82mmBS
                </p>
                <div class="d-flex justify-content-end align-items-center">
                  <div class="offer-price">570,000</div>
                  <div class="offer-percentage">25%</div>
                </div> 
                <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                  646,000 تومان
                </div>
              </div>
            </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/15.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/16.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="offer-price">570,000</div>
                <div class="offer-percentage">25%</div>
              </div> 
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-lg col-sm col-md py-1">
        <img src="{{asset('assets/img/s9-left.jpeg')}}" class="img-fluid rounded-3" alt="">
      </div>
      <div class="col-lg col-sm col-md py-1">
        <img src="{{asset('assets/img/s9-right.jpeg')}}" class="img-fluid rounded-3" alt="">
      </div>
    </div>
   
    <div class="row my-5 mx-1"  style="border: 1px solid #ddd; border-radius: 5px;">
      <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-start border-bottom border-black-50">
        <h5>محصولات سوپرمارکتی</h5>
      </div>
      <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-center">
        <div class="row">
          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/05.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/06.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="offer-price">570,000</div>
                <div class="offer-percentage">25%</div>
              </div> 
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>

        <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
          <img src="{{asset('assets/img/products/08.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
                رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>

        <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
          <img src="{{asset('assets/img/products/07.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
                رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div> 
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg col-sm col-md py-1">
        <img src="{{asset('assets/img/s-10.jpeg')}}" class="img-fluid rounded-3" alt="">
      </div>
    </div>

    <div class="row my-5 mx-1"  style="border: 1px solid #ddd; border-radius: 5px;">
      <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-start border-bottom border-black-50">
        <h5>شال های مردانه و زنانه</h5>
      </div>
      <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-center">
        <div class="row">
          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{('assets/img/products/12.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/products/09.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
            <div class="card-body p-1">
              <p class="card-text">
                  رنده برقی باس صنعتی مدل 82mmBS
              </p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="offer-price">570,000</div>
                <div class="offer-percentage">25%</div>
              </div> 
              <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
                646,000 تومان
              </div>
            </div>
          </div>

        <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
          <img src="{{asset('assets/img/products/10.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
                رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>

        <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
          <img src="{{asset('assets/img/products/11.jpeg')}}" class="card-img-top img-fluid py-3" alt="...">
          <div class="card-body p-1">
            <p class="card-text">
                رنده برقی باس صنعتی مدل 82mmBS
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <div class="offer-price">570,000</div>
              <div class="offer-percentage">25%</div>
            </div> 
            <div class="main-price d-flex justify-content-end py-3 text-dark" style="font-size: 1rem">
              646,000 تومان
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="row my-5 mx-1"  style="border: 1px solid #ddd; border-radius: 5px;">
      <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-start border-bottom border-black-50">
        <h5>برندهای ویژه</h5>
      </div>
      <div class="col-lg-12 col-md col-sm d-flex p-4 bg-white text-secondary justify-content-center">
        <div class="row">
          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/clothing_brand_1.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/electronic_brand_2.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/jewelry_brand_1.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/mobile_brand_2.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/homeDecore_brand_1.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/protein_brand_1.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

          <div class="card col-lg col-md col-sm rounded-3 border-0 m-2 px-3">
            <img src="{{asset('assets/img/brands/supermarket_brand_4.png')}}" class="card-img-top img-fluid py-3" alt="...">
          </div>

        </div>
      </div>
    </div>

    </div>

    @include('../footer');

