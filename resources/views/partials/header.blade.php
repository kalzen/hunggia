{{-- Header và mobile header --}}
@include('partials.search-popup')
<!--=====HEADER START=======-->

<header>

   <div id="vl-header-sticky" class="vl-header-area6 header-tranperent">
       <div class="container header2-bg">
           <div class="row align-items-center">
               <div class="col-lg-2 col-md-6 col-6">
                   <div class="vl-logo">
                       <a href="#" class="header1-logo-block"><img style="width: 115px;" src="{{ asset('assets/img/logo/white-logo.png') }}" alt="Hưng Gia Group"></a>
                   </div>
               </div>
               <div class="col-lg-7 d-none d-lg-block text-end">
                   <div class="vl-main-menu">
                       <nav class="vl-mobile-menu-active">
                           <ul>
                              <li><a href="#about">Trang chủ</a></li>
                              <li><a href="#about">Giới thiệu</a></li>
                              <li><a href="#services">Lĩnh vực hoạt động</a></li>
                              <li><a href="#blog">Tin tức</a></li>
                              <li><a href="#projects">Dự án</a></li>
                           </ul>
                       </nav>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6">
                  <div class="vl-header4-btns text-end d-none d-lg-block">
                     <div class="buttons">
                        <div class="vl-search1">
                           <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </div>
                        <a href="#contact" class="theme-btn11" bis_skin_checked="1">
                            <span class="theme-btn11__shape"></span>
                            <span class="theme-btn11__shape"></span>
                            <span class="theme-btn11__shape"></span>
                            <span class="theme-btn11__shape"></span>
                            <span class="theme-btn11__text">Liên hệ</span>
                            <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                     </div>
                  </div>
                   <div class="vl-header-action-item d-block d-lg-none">
                       <button type="button" class="vl-offcanvas-toggle">
                           <i class="fa-duotone fa-solid fa-bars-staggered"></i>
                       </button>
                    </div>
               </div>
           </div>
       </div>
   </div>
 </header>
  <!--=====HEADER END =======-->