@extends('layouts.frontend')

@section('content')
<main>
<!--=== HERO AREA START === -->
<div class="hero6" style="background-image: url({{ asset('assets/img/hero/hero6-bg.png') }});">
    <div class="container">
     <div class="row">
        <div class="col-lg-6">
           <div class="main-heading6">
              <span class="sub-title" data-aos="zoom-in-left" data-aos-duration="900"><img src="{{ asset('assets/img/icons/span3.svg') }}" alt="">HUNG GIA GROUP</span>
              <h1>Xây dựng công trình chất lượng - Phát triển bền vững</h1>
              <p class="mt-16">Hưng Gia Group được thành lập với sứ mệnh xây dựng những công trình chất lượng, cung cấp giải pháp bất động sản toàn diện, uy tín, minh bạch và mang đến những giải pháp bảo vệ môi trường hiệu quả.</p>
              <div class="buttons">
                 <a href="#about" class="theme-btn11" bis_skin_checked="1">
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__text">Về chúng tôi</span>
                    <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                  <div class="video-buttton6 play-btn" href="#">
                      <a id="play-video" class="video-play-button">
                          <span></span>
                      </a>
                        <p>Video giới thiệu</p>
                  </div>
              </div>
          </div>
        </div>
     </div>
    </div>
    <div class="hero6-bottom-slider">
        <section class="hero10-benar">
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-12">
                  <div class="marquee-wrap">
                    <div class="marquee-text">
                    <!-- Logo đối tác, thành tựu, lĩnh vực tiêu biểu -->
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo1.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo2.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo3.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo4.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo5.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo6.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo7.png') }}" alt=""></div>
                    <div class="brand-single-box"><img src="{{ asset('assets/img/others/hero6-slider-logo8.png') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-after"></div>
            </div>
          </section> 
    </div>
</div>
<!--=== HERO AREA END === -->

<!--=== ABOUT AREA START === -->
<div class="about6 sp" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="heading6 _mt-50">
                  <span class="sub-title">ABOUT US</span>
                  <h2 class="text-anime-style-3">Sứ mệnh & Tầm nhìn Hưng Gia Group</h2>
               </div>
            </div>
            <div class="col-lg-6">
              <div class="heading6" data-aos="fade-left" data-aos-duration="800">
                 <p>Chúng tôi hoạt động dựa trên nền tảng trung thực, chuyên nghiệp và khát vọng vươn lên không ngừng. Tầm nhìn trở thành tập đoàn đa ngành hàng đầu khu vực miền Bắc trong lĩnh vực xây dựng, bất động sản, xử lý rác thải.</p>
              </div>
            </div>
        </div>
        <div class="row mt-30 align-items-center">
           <div class="col-lg-6">
              <div class="row about6-images mt-30">
                 <div class="col-lg-6">
                    <div class="image image-anime reveal">
                       <img src="{{ asset('assets/img/about/about6-image1.png') }}" alt="">
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="image image-anime reveal">
                       <img src="{{ asset('assets/img/about/about6-image2.png') }}" alt="">
                    </div>
                    <div class="count-text-box">
                       <h3>8+</h3>
                       <p>Năm phát triển</p>
                       <img src="{{ asset('assets/img/shapes/faq6-text-shape.png') }}" alt="" class="count-shape">
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="about6-content-box mt-50 ml-30 md:ml-0 sm:ml-0" data-aos="fade-left" data-aos-duration="800">
                 <div class="_relative">
                    <div class="icon">
                       <img src="{{ asset('assets/img/icons/about6-icon1.svg') }}" alt="">
                    </div>
                    <div class="icon-shape">
                       <img src="{{ asset('assets/img/shapes/about6-icon-shape.svg') }}" alt="">
                    </div>
                 </div>
                 <div class="text heading6">
                    <h4><a href="#">Lịch sử phát triển</a></h4>
                    <p class="mt-10">Từ năm 2016, Hưng Gia Group không ngừng phát triển từ bất động sản tại Cao Bằng, mở rộng sang xây dựng hạ tầng tại Bắc Giang, Bắc Ninh và phát triển lĩnh vực xử lý rác thải, khẳng định vị thế trên thị trường.</p>
                 </div>
              </div>
              <div class="about6-content-box mt-50 ml-30 md:ml-0 sm:ml-0" data-aos="fade-left" data-aos-duration="1000">
                 <div class="_relative">
                    <div class="icon">
                       <img src="{{ asset('assets/img/icons/about6-icon2.svg') }}" alt="">
                    </div>
                    <div class="icon-shape">
                       <img src="{{ asset('assets/img/shapes/about6-icon-shape.svg') }}" alt="">
                    </div>
                 </div>
                 <div class="text heading6">
                    <h4><a href="#">Đội ngũ & Thiết bị hiện đại</a></h4>
                    <p class="mt-10">Sở hữu hơn 50 nhân sự chính thức bao gồm kỹ sư xây dựng, kiến trúc sư, quản lý dự án và hệ thống máy móc hiện đại như máy xúc, máy ủi, xe trộn bê tông, giàn giáo tiêu chuẩn.</p>
                 </div>
              </div>
              <div class="about6-content-box ml-30 mt-50 md:ml-0 sm:ml-0" data-aos="fade-left" data-aos-duration="1200">
                 <div class="_relative">
                    <div class="icon">
                       <img src="{{ asset('assets/img/icons/about6-icon3.svg') }}" alt="">
                    </div>
                    <div class="icon-shape">
                       <img src="{{ asset('assets/img/shapes/about6-icon-shape.svg') }}" alt="">
                    </div>
                 </div>
                 <div class="text heading6">
                    <h4><a href="#">Giá trị cộng đồng</a></h4>
                    <p class="mt-10">Hưng Gia Group cam kết phát triển song hành cùng cộng đồng, tài trợ học bổng cho học sinh nghèo, tạo việc làm ổn định cho hàng trăm lao động địa phương và hỗ trợ xây dựng cơ sở hạ tầng nông thôn.</p>
                 </div>
              </div>
              <div class="button ml-30 mt-50 md:ml-0 sm:ml-0" data-aos="fade-left" data-aos-duration="1100">
                 <a href="#contact" class="theme-btn11" bis_skin_checked="1">
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__text">Liên hệ hợp tác</span>
                    <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
           </div>
        </div>
    </div>
</div>
<!--=== ABOUT AREA END === -->

<!--=== SERVICE AREA START === -->
<div class="service6 sp sec-bg5" id="services">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="heading6 _mt-50">
                 <span class="sub-title">OUR SERVICES</span>
                 <h2 class="text-anime-style-3">Xây dựng - Bất động sản - Môi trường</h2>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="buttons text-end sm:text-start md:text-start sm:mt-20 md:mt-20" data-aos="fade-left" data-aos-duration="1100">
                 <a href="#projects" class="theme-btn11" bis_skin_checked="1">
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__shape"></span>
                    <span class="theme-btn11__text">Dự án tiêu biểu</span>
                    <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
        </div>
        <div class="row mt-30">
           <div class="col-md-6 col-lg-7">
              <div class="row">
                 <div class="col-lg-12">
                    <div class="service6-box mt-30">
                       <div class="icon">
                          <img src="{{ asset('assets/img/icons/service6-icon1.svg') }}" alt="">
                       </div>
                       <div class="content heading6">
                          <h4><a href="#">Bất động sản & Đầu tư</a></h4>
                          <p class="mt-16">Đầu tư và phân phối dự án khu đô thị, nhà ở, đất nền tại các tỉnh Cao Bằng, Bắc Ninh. Các dự án nổi bật: TNR Star Center, TNR Grand Palace, HP Galaxy Cao Bằng.</p>
                          <a href="#projects" class="learn">Xem dự án <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="service6-box mt-30">
                       <div class="icon">
                          <img src="{{ asset('assets/img/icons/service6-icon3.svg') }}" alt="">
                       </div>
                       <div class="content heading6">
                          <h4><a href="#">Xây dựng & Hạ tầng</a></h4>
                          <p class="mt-16">Thi công hạ tầng giao thông, hạ tầng khu công nghiệp tại Bắc Giang như khu công nghiệp Yên Lư, Tân Hưng và các tuyến nhánh cao tốc.</p>
                          <a href="#projects" class="learn">Xem dự án <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="service6-box mt-30">
                       <div class="icon">
                          <img src="{{ asset('assets/img/icons/service6-icon4.svg') }}" alt="">
                       </div>
                       <div class="content heading6">
                          <h4><a href="#">Xử lý môi trường</a></h4>
                          <p class="mt-16">Xử lý chất thải khu công nghiệp, chất thải xây dựng với công nghệ hiện đại, thân thiện môi trường và bền vững lâu dài.</p>
                          <a href="#projects" class="learn">Xem dự án <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-md-6 col-lg-5">
              <div class="service6-box mt-30">
                 <div class="icon">
                    <img src="{{ asset('assets/img/icons/service6-icon2.svg') }}" alt="">
                 </div>
                 <div class="content heading6">
                    <h4><a href="#">Cho thuê máy móc</a></h4>
                    <p class="mt-16">Cho thuê máy móc thiết bị thi công xây dựng bao gồm máy xúc, máy ủi, xe trộn bê tông, giàn giáo tiêu chuẩn phục vụ các dự án xây dựng.</p>
                    <a href="#projects" class="learn">Xem dự án <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                 </div>
              </div>
              <div class="service6-box mt-30">
                 <div class="icon">
                    <img src="{{ asset('assets/img/icons/service6-icon5.svg') }}" alt="">
                 </div>
                 <div class="content heading6">
                    <h4><a href="#">Các công ty thành viên</a></h4>
                    <p class="mt-16">Hệ sinh thái gồm 3 công ty thành viên: Xây dựng Thương mại Vận tải Hưng Gia, Đầu tư Phát triển Bất động sản Hưng Gia và Xử lý chất thải môi trường Hưng Gia.</p>
                    <a href="#about" class="learn">Tìm hiểu thêm <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                 </div>
              </div>
           </div>
        </div>
    </div>
</div>
<!--=== SERVICE AREA END === -->

<!--=== WORK AREA START === -->
<div class="work6 sp" id="work-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-cneter">
              <div class="heading6 _mt-50 text-center">
                 <span class="sub-title">DEVELOPMENT JOURNEY</span>
                 <h2 class="text-anime-style-3">Hành trình phát triển từ 2016 đến nay</h2>
              </div>
            </div>
        </div>
        <div class="row mt-30">
           <div class="col-lg-6">
              <div class="image image-anime reveal mt-30">
                 <img src="{{ asset('assets/img/work/work6-image.png') }}" alt="">
              </div>
           </div>
           <div class="col-lg-6">
              <div class="work6-items mt-30 ml-40 md:ml-0 sm:ml-0">
                 <div class="work6-single-item">
                    <div class="icon"><div class="point"></div></div>
                    <div class="text heading6">
                       <h4><a href="#">2016 - Khởi đầu</a></h4>
                       <p class="mt-16">Thành lập công ty TNHH Bất động sản Địa ốc Hưng Gia, tập trung kinh doanh bất động sản đầu tư và phân phối dự án nhà ở đất nền tại tỉnh Cao Bằng.</p>
                       <a href="#about" class="learn">Tìm hiểu thêm <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                 </div>
                 <div class="work6-single-item">
                    <div class="icon"><div class="point"></div></div>
                    <div class="text heading6">
                       <h4><a href="#">2022-2023 - Mở rộng</a></h4>
                       <p class="mt-16">Mở rộng hoạt động thi công hạ tầng giao thông, hạ tầng nhà máy xí nghiệp, cho thuê máy móc thiết bị và thành lập công ty TNHH Xây dựng, Thương mại và Vận tải Hưng Gia.</p>
                       <a href="#about" class="learn">Tìm hiểu thêm <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                 </div>
                 <div class="work6-single-item">
                    <div class="icon"><div class="point"></div></div>
                    <div class="text heading6">
                       <h4><a href="#">2025-2026 - Phát triển</a></h4>
                       <p class="mt-16">Chuyển đổi thành công ty TNHH Đầu tư và Phát triển Bất động sản Hưng Gia, đẩy mạnh phát triển lĩnh vực xây dựng hạ tầng khu công nghiệp và hệ sinh thái bất động sản công nghiệp.</p>
                       <a href="#about" class="learn">Tìm hiểu thêm <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                 </div>
                 <div class="work6-single-item">
                    <div class="icon"><div class="point"></div></div>
                    <div class="text heading6">
                       <h4><a href="#">Tương lai - Bền vững</a></h4>
                       <p class="mt-16">Tiếp tục phát triển bền vững, mở rộng thị trường, ứng dụng công nghệ xanh và đóng góp tích cực cho cộng đồng.</p>
                       <a href="#about" class="learn">Tìm hiểu thêm <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
</div>
<!--=== WORK AREA END === -->

<!--=== PROJECTS AREA START === -->
<div class="project6 sp sec-bg6" id="projects">
  <div class="container">
     <div class="row align-items-center">
        <div class="col-lg-5">
           <div class="heading6-w _mt-50">
              <span class="sub-title">FEATURED PROJECTS</span>
              <h2 class="text-anime-style-3">Dự án bất động sản & công trình tiêu biểu</h2>
           </div>
        </div>
        <div class="col-lg-7">
           <div class="buttons text-end sm:text-start md:text-start sm:mt-20 md:mt-20">
              <a href="#contact" class="theme-btn11" bis_skin_checked="1">
                 <span class="theme-btn11__shape"></span>
                 <span class="theme-btn11__shape"></span>
                 <span class="theme-btn11__shape"></span>
                 <span class="theme-btn11__shape"></span>
                 <span class="theme-btn11__text">Liên hệ hợp tác</span>
                 <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span>
             </a>
           </div>
        </div>
     </div>
     <div class="row mt-30">
        <div class="col-lg-4 col-md-6">
           <div class="project6-box mt-30">
              <div class="image">
                 <img class="w-full" src="{{ asset('assets/img/work/project6-image1.png') }}" alt="">
              </div>
              <div class="content-box">
                 <h4><a href="#">TNR Star Center Cao Bằng</a></h4>
                 <p class="mt-10">Dự án bất động sản cao cấp tại tỉnh Cao Bằng, kiến tạo không gian sống hiện đại và tiện ích đẳng cấp cho cộng đồng.</p>
                 <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
           </div>
           <div class="project6-box mt-30">
              <div class="image">
                 <img class="w-full" src="{{ asset('assets/img/work/project6-image2.png') }}" alt="">
              </div>
              <div class="content-box">
                 <h4><a href="#">TNR Grand Palace Cao Bằng</a></h4>
                 <p class="mt-10">Dự án khu đô thị cao cấp với thiết kế hiện đại, tiện ích đầy đủ, đáp ứng nhu cầu sống chất lượng cao tại Cao Bằng.</p>
                 <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
           </div>
        </div>
        <div class="col-lg-4 col-md-6">
           <div class="project6-box mt-30">
              <div class="image">
                 <img class="w-full" src="{{ asset('assets/img/work/project6-image3.png') }}" alt="">
              </div>
              <div class="content-box">
                 <h4><a href="#">HP Galaxy Cao Bằng</a></h4>
                 <p class="mt-10">Dự án bất động sản đa năng, kết hợp nhà ở, thương mại và văn phòng, tạo nên không gian sống và làm việc hiện đại.</p>
                 <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
           </div>
           <div class="project6-box mt-30">
              <div class="image">
                 <img class="w-full" src="{{ asset('assets/img/work/project6-image4.png') }}" alt="">
              </div>
              <div class="content-box">
                 <h4><a href="#">Khu công nghiệp Yên Lư</a></h4>
                 <p class="mt-10">Thi công hạ tầng khu công nghiệp Yên Lư tại tỉnh Bắc Giang, bao gồm đường giao thông, hệ thống điện nước và các công trình phụ trợ.</p>
                 <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
           </div>
        </div>
        <div class="col-lg-4 col-md-6">
           <div class="project6-box mt-30">
              <div class="image">
                 <img class="w-full" src="{{ asset('assets/img/work/project6-image5.png') }}" alt="">
              </div>
              <div class="content-box">
                 <h4><a href="#">Khu công nghiệp Tân Hưng</a></h4>
                 <p class="mt-10">Thi công hạ tầng khu công nghiệp Tân Hưng tại tỉnh Bắc Giang, bao gồm mặt bằng, đường giao thông và các công trình hạ tầng kỹ thuật.</p>
                 <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
           </div>
           <div class="project6-box mt-30">
              <div class="image">
                 <img class="w-full" src="{{ asset('assets/img/work/project6-image6.png') }}" alt="">
              </div>
              <div class="content-box">
                 <h4><a href="#">Hạ tầng cao tốc</a></h4>
                 <p class="mt-10">Thi công các tuyến nhánh lối xuống và lên cao tốc tại tỉnh Bắc Giang, đảm bảo kết nối giao thông thuận tiện cho khu vực.</p>
                 <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--=== PROJECTS AREA END === -->

<!--=== TESTIMONIAL AREA START === -->
<div class="testimonial sp" id="testimonials">
  <div class="container">
     <div class="row">
        <div class="col-lg-6 m-auto text-center">
           <div class="heading6 _mt-50">
              <span class="sub-title">CLIENTS & PARTNERS</span>
              <h2 class="text-anime-style-2">Sự hài lòng của bạn là thành công của chúng tôi</h2>
           </div>
        </div>
     </div>
     <div class="row mt-30 align-items-center">
        <div class="col-lg-6">
           <div class="tes6-image image-anime reveal mt-30">
              <img class="w-full" src="{{ asset('assets/img/testimonial/tes6-image.png') }}" alt="">
           </div>
        </div>
        <div class="col-lg-6">
           <div class="tes6-slider-all mt-30">
              <div class="tes6-slider-content">
                 <div class="tes6-slider">
                    <div class="tes6-single-slider">
                       <div class="stars">
                          <ul>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                          </ul>
                       </div>
                       <div class="qoute">
                          <img src="{{ asset('assets/img/icons/qoute6.svg') }}" alt="">
                       </div>
                       <p class="content-text">“Hưng Gia Group là đối tác chiến lược tin cậy, luôn đồng hành và hỗ trợ chúng tôi phát triển bền vững.”</p>
                       <div class="bottom-area">
                          <div class="author-area">
                             <div class="author-image">
                                <img src="{{ asset('assets/img/testimonial/team2-image2.png') }}" alt="">
                             </div>
                             <div class="author-text">
                                <a href="#">Nguyễn Văn A</a>
                                <p>Giám đốc đối tác</p>
                             </div>
                          </div>
                          <div class="google-logo">
                             <img src="{{ asset('assets/img/others/google6.png') }}" alt="">
                          </div>
                       </div>
                    </div>
                    <div class="tes6-single-slider">
                       <div class="stars">
                          <ul>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                             <li><i class="fa-solid fa-star"></i></li>
                          </ul>
                       </div>
                       <div class="qoute">
                          <img src="{{ asset('assets/img/icons/qoute6.svg') }}" alt="">
                       </div>
                       <p class="content-text">“Dịch vụ của Hưng Gia Group rất chuyên nghiệp, tận tâm, đáp ứng mọi nhu cầu của doanh nghiệp chúng tôi.”</p>
                       <div class="bottom-area">
                          <div class="author-area">
                             <div class="author-image">
                                <img src="{{ asset('assets/img/testimonial/team2-image2.png') }}" alt="">
                             </div>
                             <div class="author-text">
                                <a href="#">Trần Thị B</a>
                                <p>Khách hàng doanh nghiệp</p>
                             </div>
                          </div>
                          <div class="google-logo">
                             <img src="{{ asset('assets/img/others/google6.png') }}" alt="">
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="tes6-slider-btns">
                 <button class="tes6-next-arrow"><i class="fa-regular fa-arrow-left"></i></button>
                 <button class="tes6-prev-arrow"><i class="fa-regular fa-arrow-right"></i></button>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--=== TESTIMONIAL AREA END === -->

<!--=== FAQ AREA START === -->
<div class="faq6 sp sec-bg5" id="faq">
  <div class="container">
     <div class="row align-items-center">
        <div class="col-lg-6">
           <div class="heading6 _mt-50">
              <span class="sub-title">FAQ & SUPPORT</span>
              <h2 class="text-anime-style-3">Câu hỏi thường gặp về Hưng Gia Group</h2>
              <div class="faq6-area pt-16">
                 <div class="accordion accordion1 accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Hưng Gia Group hoạt động trong những lĩnh vực nào?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Chúng tôi hoạt động trong 3 lĩnh vực chính: xây dựng hạ tầng khu công nghiệp, bất động sản đầu tư và phân phối, xử lý chất thải môi trường.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Làm sao để trở thành đối tác của Hưng Gia Group?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Quý đối tác vui lòng liên hệ qua form hoặc hotline, chúng tôi sẽ phản hồi trong thời gian sớm nhất.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Hưng Gia Group có những thành tựu nổi bật nào?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Chúng tôi đã thi công hơn 50 công trình dân dụng - công nghiệp tại Bắc Giang, triển khai các dự án bất động sản nổi bật tại Cao Bằng và hợp tác với các đối tác lớn như TNR Holdings, Hải Phát.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          Chính sách tuyển dụng của Hưng Gia Group ra sao?
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Chúng tôi luôn chào đón nhân sự tài năng, môi trường làm việc chuyên nghiệp, chế độ đãi ngộ hấp dẫn.</div>
                      </div>
                    </div>
                  </div>
              </div>
           </div>
        </div>
        <div class="col-lg-6">
           <div class="faq6-images sm:mt-30 md:mt-30">
              <div class="image1">
                 <img src="{{ asset('assets/img/others/faq6-image1.png') }}" alt="">
              </div>
              <div class="image2">
                 <img src="{{ asset('assets/img/others/faq6-image2.png') }}" alt="">
              </div>
              <div class="text-count">
                 <div class="shape-bg">
                    <img src="{{ asset('assets/img/shapes/faq6-text-shape.png') }}" alt="">
                 </div>
                 <h3>8+</h3>
                 <p>Năm kinh nghiệm</p>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--=== FAQ AREA END === -->

<!--=== BLOG AREA START === -->
<div class="blog6 sp" id="blog">
  <div class="container">
     <div class="row">
        <div class="col-lg-6 m-auto text-center">
           <div class="heading6 _mt-50">
              <span class="sub-title">NEWS & EVENTS</span>
              <h2 class="text-anime-style-2">Hoạt động nổi bật của Hưng Gia Group</h2>
           </div>
        </div>
     </div>
     <div class="row mt-30">
        <div class="col-lg-4 col-md-6">
           <div class="vl-blog-6-item mt-30" data-aos="fade-up" data-aos-duration="900">
              <div class="vl-blog-6-content heading6">
                 <div class="vl-blog6-meta pb-16">
                     <a href="#" class="date"><img src="{{ asset('assets/img/icons/date1.svg') }}" alt=""> 12/06/2024</a>
                     <a href="#" class="author"><img src="{{ asset('assets/img/icons/author1.svg') }}" alt=""> Ban Truyền thông</a>
                 </div>
                 <h4><a href="#">Hưng Gia Group khởi công dự án khu đô thị mới tại Bắc Ninh</a></h4>
             </div>
              <div class="thumb-area">
                 <div class=" vl-blog-6-thumb image-anime overflow-hidden _relative">
                    <img class="w-full" src="{{ asset('assets/img/blog/blog6-image1.png') }}" alt="">
                 </div>
                <div class="vl-blog6-btn">
                   <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
           </div>
        </div>
        <div class="col-lg-4 col-md-6">
           <div class="vl-blog-6-item mt-30" data-aos="fade-up" data-aos-duration="900">
              <div class="vl-blog-6-content heading6">
                 <div class="vl-blog6-meta pb-16">
                     <a href="#" class="date"><img src="{{ asset('assets/img/icons/date1.svg') }}" alt=""> 28/05/2024</a>
                     <a href="#" class="author"><img src="{{ asset('assets/img/icons/author1.svg') }}" alt=""> Ban Truyền thông</a>
                 </div>
                 <h4><a href="#">Hưng Gia Group ký kết hợp tác với TNR Holdings Việt Nam</a></h4>
             </div>
              <div class="thumb-area">
                 <div class=" vl-blog-6-thumb image-anime overflow-hidden _relative">
                    <img class="w-full" src="{{ asset('assets/img/blog/blog6-image2.png') }}" alt="">
                 </div>
                <div class="vl-blog6-btn">
                   <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
           </div>
        </div>
        <div class="col-lg-4 col-md-6">
           <div class="vl-blog-6-item mt-30" data-aos="fade-up" data-aos-duration="900">
              <div class="vl-blog-6-content heading6">
                 <div class="vl-blog6-meta pb-16">
                     <a href="#" class="date"><img src="{{ asset('assets/img/icons/date1.svg') }}" alt=""> 10/05/2024</a>
                     <a href="#" class="author"><img src="{{ asset('assets/img/icons/author1.svg') }}" alt=""> Ban Truyền thông</a>
                 </div>
                 <h4><a href="#">Hưng Gia Group tổ chức chương trình "Hưng Gia vì nông thôn mới"</a></h4>
             </div>
              <div class="thumb-area">
                 <div class=" vl-blog-6-thumb image-anime overflow-hidden _relative">
                    <img class="w-full" src="{{ asset('assets/img/blog/blog6-image3.png') }}" alt="">
                 </div>
                <div class="vl-blog6-btn">
                   <a href="#" class="learn">Xem chi tiết <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--=== BLOG AREA END === -->

<!--=== CTA AREA START === -->
<div class="cta6" id="contact">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="cta4-image image-anime reveal">
                <img class="w-full" src="{{ asset('assets/img/others/cta4-image.png') }}" alt="">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="cta6-form-area">
                <div class="heading6">
                    <h2>Liên hệ hợp tác cùng Hưng Gia Group</h2>
                    <p class="mt-16">Trụ sở chính: Xã Xương Lâm, huyện Lạng Giang, tỉnh Bắc Giang<br>
                    Điện thoại: 0816.102.102 | Email: Hunggiagroup.com.vn@gmail.com</p>
                </div>
                <div class="form-area">
                    <form action="#">
                       <div class="single-input">
                          <input type="text" placeholder="Nhập email hoặc số điện thoại của bạn">
                       </div>
                       <div class="button">
                        <button type="submit" class="theme-btn12" bis_skin_checked="1">
                            <span class="theme-btn12__shape"></span>
                            <span class="theme-btn12__shape"></span>
                            <span class="theme-btn12__shape"></span>
                            <span class="theme-btn12__shape"></span>
                            <span class="theme-btn12__text">Gửi liên hệ</span>
                            <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--=== CTA AREA END === -->

</main>
@endsection 