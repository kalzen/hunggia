export default function HeroSection() {
  return (
    <div className="hero6" style={{backgroundImage: 'url(https://placehold.co/1920x800?text=Hero+Background)'}}>
      <div className="container">
        <div className="row">
          <div className="col-lg-6">
            <div className="main-heading6">
              <span className="sub-title"><img src="/assets/img/icons/span3.svg" alt="" />HƯNG GIA GROUP</span>
              <h1>Kiến tạo giá trị bền vững</h1>
              <p className="mt-16">Chuyên kết nối nhân tài, phát triển dự án bất động sản, xây dựng, môi trường, vươn tầm quốc tế.</p>
              <div className="buttons">
                <a href="#about" className="theme-btn11">
                  <span className="theme-btn11__shape"></span>
                  <span className="theme-btn11__shape"></span>
                  <span className="theme-btn11__shape"></span>
                  <span className="theme-btn11__shape"></span>
                  <span className="theme-btn11__text">Khám phá ngay</span>
                  <span className="arrow1"><i className="fa-solid fa-arrow-right"></i></span><span className="arrow2"><i className="fa-solid fa-arrow-right"></i></span>
                </a>
                <div className="video-buttton6 play-btn">
                  <a id="play-video" className="video-play-button" href="#">
                    <span></span>
                  </a>
                  <p>Play Video</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* Slider logo chạy ngang */}
      <div className="hero6-bottom-slider">
        <section className="hero10-benar">
          <div className="container-fluid p-0">
            <div className="row">
              <div className="col-12">
                <div className="marquee-wrap">
                  <div className="marquee-text">
                    {[1,2,3,4,5,6,7,8].map(i => (
                      <div className="brand-single-box" key={i}>
                        <img src={`https://placehold.co/120x60?text=Logo+${i}`} alt="logo" />
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            </div>
            <div className="slider-after"></div>
          </div>
        </section>
      </div>
    </div>
  );
} 