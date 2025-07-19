import { ReactNode, useEffect } from 'react';
import { Home, Phone, Mail, Facebook, Menu } from 'lucide-react';

// Đã import CSS template qua app.blade.php, không cần import ở đây nữa

export default function FrontendLayout({ children }: { children: ReactNode }) {
  useEffect(() => {
    const scripts = [
      '/assets/js/jquery-3-7-1.min.js',
      '/assets/js/bootstrap.min.js',
      '/assets/js/fontawesome.js',
      '/assets/js/mobile-menu.js',
      '/assets/js/jquery.magnific-popup.js',
      '/assets/js/owl.carousel.min.js',
      '/assets/js/jquery.countup.js',
      '/assets/js/slick-slider.js',
      '/assets/js/circle-progress.js',
      '/assets/js/jquery.nice-select.js',
      '/assets/js/gsap.min.js',
      '/assets/js/ScrollTrigger.min.js',
      '/assets/js/swiper-bundle.js',
      '/assets/js/Splitetext.js',
      '/assets/js/text-animation.js',
      '/assets/js/aos.js',
      '/assets/js/SmoothScroll.js',
      '/assets/js/jaquery-ripples.js',
      '/assets/js/jquery.lineProgressbar.js',
      '/assets/js/animation.js',
      '/assets/js/main.js',
    ];
    scripts.forEach(src => {
      const script = document.createElement('script');
      script.src = src;
      script.async = false;
      document.body.appendChild(script);
    });
  }, []);

  return (
    <div className="min-h-screen flex flex-col bg-white dark:bg-gray-950">
      {/* Header giữ nguyên như cũ, có thể chỉnh lại sau */}
      <header className="sticky top-0 z-30 bg-white/90 dark:bg-gray-950/90 shadow-sm backdrop-blur">
        <div className="container mx-auto flex items-center justify-between py-4 px-4 md:px-0">
          <div className="flex items-center gap-2">
            <Home className="text-blue-600 w-8 h-8" />
            <span className="font-bold text-xl tracking-tight text-blue-700">Hưng Gia Group</span>
          </div>
          <nav className="hidden md:flex gap-8 font-medium text-gray-700 dark:text-gray-200">
            <a href="#about" className="hover:text-blue-600 transition">Giới thiệu</a>
            <a href="#services" className="hover:text-blue-600 transition">Dịch vụ</a>
            <a href="#projects" className="hover:text-blue-600 transition">Dự án</a>
            <a href="#team" className="hover:text-blue-600 transition">Đội ngũ</a>
            <a href="#contact" className="hover:text-blue-600 transition">Liên hệ</a>
          </nav>
          <button className="md:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
            <Menu className="w-6 h-6" />
          </button>
        </div>
      </header>
      {/* Main content */}
      <main className="flex-1">{children}</main>
      {/* Footer giữ nguyên như cũ, có thể chỉnh lại sau */}
      <footer className="bg-blue-900 text-white py-8 mt-12">
        <div className="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4 px-4 md:px-0">
          <div className="flex items-center gap-2">
            <Home className="w-6 h-6 text-white" />
            <span className="font-bold text-lg">Hưng Gia Group</span>
          </div>
          <div className="flex gap-6 items-center">
            <a href="tel:0816102102" className="flex items-center gap-1 hover:text-blue-300 transition"><Phone className="w-4 h-4" /> 0816.102.102</a>
            <a href="mailto:Hinggiagroup.com.vn@gmail.com" className="flex items-center gap-1 hover:text-blue-300 transition"><Mail className="w-4 h-4" /> Email</a>
            <a href="https://facebook.com/hunggiagroup" target="_blank" rel="noopener" className="flex items-center gap-1 hover:text-blue-300 transition"><Facebook className="w-4 h-4" /> Facebook</a>
          </div>
          <div className="text-sm text-gray-200">© {new Date().getFullYear()} Hưng Gia Group. All rights reserved.</div>
        </div>
      </footer>
    </div>
  );
} 