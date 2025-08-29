import { Shield, Award, Heart, Star } from "lucide-react";

const stats = [
  {
    icon: Shield,
    number: "500,000+",
    label: "Trusted homeowners",
    description: "Verified customers nationwide",
    color: "text-primary"
  },
  {
    icon: Award,
    number: "50,000+",
    label: "Professional contractors",
    description: "Licensed and insured",
    color: "text-success"
  },
  {
    icon: Heart,
    number: "2M+",
    label: "Projects completed",
    description: "Successfully finished jobs",
    color: "text-primary-glow"
  },
  {
    icon: Star,
    number: "4.8/5",
    label: "Average rating",
    description: "Based on 250k+ reviews",
    color: "text-primary-dark"
  }
];

const TrustIndicatorsSection = () => {
  return (
    <section className="py-20 bg-gradient-hero">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">
            Trusted by millions nationwide
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Join the growing community of homeowners and professionals who trust our platform for their projects.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          {stats.map((stat, index) => {
            const IconComponent = stat.icon;
            return (
              <div 
                key={index}
                className="text-center group"
              >
                <div className="inline-flex items-center justify-center w-16 h-16 mb-6 bg-background rounded-2xl shadow-soft group-hover:shadow-medium transition-all duration-300 border border-border/50">
                  <IconComponent className={`h-8 w-8 ${stat.color}`} />
                </div>
                
                <div className="mb-3">
                  <div className="text-3xl lg:text-4xl font-bold text-foreground mb-1">
                    {stat.number}
                  </div>
                  <div className="text-lg font-semibold text-foreground">
                    {stat.label}
                  </div>
                </div>
                
                <p className="text-muted-foreground">
                  {stat.description}
                </p>
              </div>
            );
          })}
        </div>

        {/* Trust Badges */}
        <div className="mt-16 pt-16 border-t border-border/30">
          <div className="flex flex-wrap justify-center items-center gap-8 lg:gap-12">
            <div className="flex items-center gap-3 px-6 py-3 bg-background rounded-full shadow-soft border border-border/50">
              <Shield className="h-5 w-5 text-success" />
              <span className="text-sm font-medium">Licensed & Insured</span>
            </div>
            
            <div className="flex items-center gap-3 px-6 py-3 bg-background rounded-full shadow-soft border border-border/50">
              <Award className="h-5 w-5 text-primary" />
              <span className="text-sm font-medium">Background Checked</span>
            </div>
            
            <div className="flex items-center gap-3 px-6 py-3 bg-background rounded-full shadow-soft border border-border/50">
              <Heart className="h-5 w-5 text-primary-glow" />
              <span className="text-sm font-medium">Satisfaction Guaranteed</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TrustIndicatorsSection;