import React from "react";
// Nếu cần import Swiper, import ở đây

const projects = [
  {
    title: "Khu đô thị Hưng Gia",
    desc: "Dự án khu đô thị hiện đại, tích hợp đa tiện ích, kiến tạo không gian sống lý tưởng.",
    image: "/assets/wireframe/project1.jpg",
  },
  {
    title: "Nhà máy công nghệ cao",
    desc: "Nhà máy sản xuất thiết bị công nghệ, đáp ứng tiêu chuẩn quốc tế.",
    image: "/assets/wireframe/project2.jpg",
  },
  {
    title: "Trung tâm thương mại Hưng Gia",
    desc: "Trung tâm thương mại quy mô lớn, điểm đến mua sắm và giải trí hàng đầu.",
    image: "/assets/wireframe/project3.jpg",
  },
  {
    title: "Khu nghỉ dưỡng ven biển",
    desc: "Khu nghỉ dưỡng cao cấp, hòa mình vào thiên nhiên, dịch vụ đẳng cấp.",
    image: "/assets/wireframe/project4.jpg",
  },
];

const ProjectsSection = () => {
  return (
    <section className="py-20 bg-white" id="projects">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Dự án tiêu biểu</h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">Các dự án nổi bật của Hưng Gia Group thể hiện năng lực triển khai và tầm nhìn phát triển bền vững.</p>
        </div>
        {/* Swiper slider */}
        <div className="relative">
          {/* Thay thế bằng Swiper ở đây */}
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {projects.map((project, idx) => (
              <div key={idx} className="bg-muted rounded-xl shadow-lg overflow-hidden group transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div className="aspect-[4/3] bg-gray-200">
                  <img src={project.image} alt={project.title} className="w-full h-full object-cover" />
                </div>
                <div className="p-6">
                  <h3 className="font-semibold text-lg mb-2">{project.title}</h3>
                  <p className="text-muted-foreground text-sm">{project.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default ProjectsSection; 