import React from "react";
// Nếu cần import icon lucide, import ở đây

const steps = [
  {
    title: "Khởi đầu & Định hướng",
    desc: "Hưng Gia Group được thành lập với sứ mệnh kiến tạo giá trị bền vững, định hướng phát triển đa ngành nghề.",
    icon: "Rocket",
  },
  {
    title: "Phát triển & Đổi mới",
    desc: "Không ngừng đổi mới, ứng dụng công nghệ hiện đại, mở rộng lĩnh vực hoạt động, nâng cao năng lực cạnh tranh.",
    icon: "TrendingUp",
  },
  {
    title: "Hợp tác & Thành tựu",
    desc: "Hợp tác cùng các đối tác lớn, đạt nhiều thành tựu nổi bật trong và ngoài nước.",
    icon: "Handshake",
  },
  {
    title: "Vươn tầm quốc tế",
    desc: "Khẳng định vị thế trên thị trường quốc tế, đóng góp tích cực cho cộng đồng và xã hội.",
    icon: "Globe2",
  },
];

const WorkProcessSection = () => {
  return (
    <section className="py-20 bg-muted/50" id="work-process">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Lộ trình phát triển</h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">Hành trình phát triển của Hưng Gia Group được xây dựng trên nền tảng đổi mới, hợp tác và khát vọng vươn xa.</p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          {steps.map((step, idx) => (
            <div key={idx} className="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center text-center group transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
              {/* Icon lucide */}
              <div className="mb-6 text-primary">
                {/* Thay thế bằng icon lucide tương ứng */}
                <span className="inline-block w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                  {/* Ví dụ: <Rocket className="w-7 h-7" /> */}
                  <span className="text-2xl">{step.icon}</span>
                </span>
              </div>
              <h3 className="font-semibold text-lg mb-2">{step.title}</h3>
              <p className="text-muted-foreground text-sm">{step.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default WorkProcessSection; 