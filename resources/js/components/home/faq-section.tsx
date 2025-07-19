import React, { useState } from "react";
// Nếu cần import icon lucide, import ở đây

const faqs = [
  {
    question: "Hưng Gia Group hoạt động trong những lĩnh vực nào?",
    answer: "Chúng tôi hoạt động đa ngành: bất động sản, công nghệ, thương mại, sản xuất, dịch vụ...",
  },
  {
    question: "Làm sao để trở thành đối tác của Hưng Gia Group?",
    answer: "Quý đối tác vui lòng liên hệ qua form hoặc hotline, chúng tôi sẽ phản hồi trong thời gian sớm nhất.",
  },
  {
    question: "Hưng Gia Group có những thành tựu nổi bật nào?",
    answer: "Chúng tôi đã triển khai nhiều dự án lớn, hợp tác với các tập đoàn trong và ngoài nước, nhận nhiều giải thưởng uy tín.",
  },
  {
    question: "Chính sách tuyển dụng của Hưng Gia Group ra sao?",
    answer: "Chúng tôi luôn chào đón nhân sự tài năng, môi trường làm việc chuyên nghiệp, chế độ đãi ngộ hấp dẫn.",
  },
];

const FAQSection = () => {
  const [openIdx, setOpenIdx] = useState<number | null>(null);
  return (
    <section className="py-20 bg-white" id="faq">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Câu hỏi thường gặp</h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">Giải đáp thắc mắc về Hưng Gia Group, lĩnh vực hoạt động, hợp tác và tuyển dụng.</p>
        </div>
        <div className="max-w-2xl mx-auto">
          {faqs.map((faq, idx) => (
            <div key={idx} className="mb-4 border-b border-muted">
              <button
                className="w-full flex justify-between items-center py-4 text-left font-medium text-lg focus:outline-none transition-colors"
                onClick={() => setOpenIdx(openIdx === idx ? null : idx)}
              >
                <span>{faq.question}</span>
                <span className="ml-2">{openIdx === idx ? "-" : "+"}</span>
              </button>
              <div
                className={`overflow-hidden transition-all duration-300 ${openIdx === idx ? "max-h-40 opacity-100" : "max-h-0 opacity-0"}`}
              >
                <div className="pb-4 text-muted-foreground text-base">{faq.answer}</div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default FAQSection; 