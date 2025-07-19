import FrontendLayout from '../layouts/frontend-layout';
import HeroSection from '../components/home/hero-section';
import AboutSection from '../components/home/about-section';
import ServicesSection from '../components/home/services-section';
import WorkProcessSection from '../components/home/work-process-section';
import ProjectsSection from '../components/home/projects-section';
import TestimonialSection from '../components/home/testimonial-section';
import FAQSection from '../components/home/faq-section';
// import BlogSection from '../components/home/blog-section';
// import CTASection from '../components/home/cta-section';

export default function Home() {
  return (
    <FrontendLayout>
      <HeroSection />
      <AboutSection />
      <ServicesSection />
      <WorkProcessSection />
      <ProjectsSection />
      <TestimonialSection />
      <FAQSection />
      {/* <BlogSection /> */}
      {/* <CTASection /> */}
    </FrontendLayout>
  );
} 