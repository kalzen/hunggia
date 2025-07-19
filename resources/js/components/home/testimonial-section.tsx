import React from "react";
// Nếu cần import Swiper, import ở đây

const testimonials = [
  {
    name: "Nguyễn Văn A",
    position: "Đối tác chiến lược",
    content: "Hưng Gia Group là đối tác tin cậy, chuyên nghiệp, luôn đồng hành cùng sự phát triển của chúng tôi.",
    avatar: "/assets/wireframe/avatar1.jpg",
  },
  {
    name: "Trần Thị B",
    position: "Khách hàng doanh nghiệp",
    content: "Dịch vụ của Hưng Gia Group rất tận tâm, chất lượng vượt trội, đáp ứng mọi nhu cầu của doanh nghiệp.",
    avatar: "/assets/wireframe/avatar2.jpg",
  },
  {
    name: "Lê Quốc C",
    position: "Chuyên gia tư vấn",
    content: "Tôi đánh giá cao năng lực triển khai dự án và tầm nhìn phát triển của Hưng Gia Group.",
    avatar: "/assets/wireframe/avatar3.jpg",
  },
];

const TestimonialSection = () => {
  return (
    <section className="py-20 bg-muted/50" id="testimonials">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Khách hàng & Đối tác nói về chúng tôi</h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">Sự hài lòng của khách hàng và đối tác là động lực để Hưng Gia Group không ngừng phát triển.</p>
        </div>
        {/* Swiper slider */}
        <div className="relative">
          {/* Thay thế bằng Swiper ở đây */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {testimonials.map((item, idx) => (
              <div key={idx} className="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center text-center group transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div className="mb-6">
                  <img src={item.avatar} alt={item.name} className="w-20 h-20 rounded-full object-cover border-4 border-primary/20" />
                </div>
                <p className="text-muted-foreground mb-4">“{item.content}”</p>
                <h4 className="font-semibold text-lg">{item.name}</h4>
                <span className="text-sm text-primary/80">{item.position}</span>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialSection; 