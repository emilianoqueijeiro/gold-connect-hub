import { Edit3, Users, CheckCircle } from "lucide-react";

const steps = [
  {
    icon: Edit3,
    title: "1. Tell us what you need",
    description: "Describe your project in detail and upload photos if needed. The more information, the better quotes you'll receive.",
    color: "text-primary"
  },
  {
    icon: Users,
    title: "2. Get matched with professionals",
    description: "Receive multiple quotes from verified professionals in your area. Compare profiles, reviews, and pricing.",
    color: "text-primary-glow"
  },
  {
    icon: CheckCircle,
    title: "3. Choose and book",
    description: "Select the best professional for your needs and budget. Message directly and schedule the work.",
    color: "text-success"
  }
];

const HowItWorksSection = () => {
  return (
    <section id="how-it-works" className="py-20 bg-gradient-secondary">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">
            How ServiceConnect works
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Get your project done in three simple steps. Our platform makes it easy to find and hire trusted professionals.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8 lg:gap-12">
          {steps.map((step, index) => {
            const IconComponent = step.icon;
            return (
              <div key={index} className="text-center group">
                <div className="relative mb-6">
                  <div className="w-20 h-20 mx-auto bg-gradient-hero border-2 border-primary/20 rounded-2xl flex items-center justify-center shadow-soft group-hover:shadow-glow transition-all duration-300">
                    <IconComponent className={`h-10 w-10 ${step.color}`} />
                  </div>
                  {index < steps.length - 1 && (
                    <div className="hidden md:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-primary/30 to-transparent -z-10" />
                  )}
                </div>
                
                <h3 className="text-xl font-semibold mb-3">
                  {step.title}
                </h3>
                
                <p className="text-muted-foreground leading-relaxed">
                  {step.description}
                </p>
              </div>
            );
          })}
        </div>

        <div className="text-center mt-16">
          <div className="inline-flex items-center gap-2 px-6 py-3 bg-background rounded-full shadow-soft border border-border/50">
            <div className="w-3 h-3 bg-gradient-primary rounded-full animate-pulse"></div>
            <span className="text-sm font-medium">Average response time: 15 minutes</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HowItWorksSection;