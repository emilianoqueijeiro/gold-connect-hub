import Header from "@/components/Header";
import HeroSection from "@/components/HeroSection";
import HowItWorksSection from "@/components/HowItWorksSection";
import ServiceCategoriesSection from "@/components/ServiceCategoriesSection";
import TrustIndicatorsSection from "@/components/TrustIndicatorsSection";
import TestimonialsSection from "@/components/TestimonialsSection";
import ForProfessionalsSection from "@/components/ForProfessionalsSection";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main>
        <HeroSection />
        <HowItWorksSection />
        <ServiceCategoriesSection />
        <TrustIndicatorsSection />
        <TestimonialsSection />
        <ForProfessionalsSection />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
