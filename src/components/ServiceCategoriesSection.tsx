import { 
  Wrench, 
  Paintbrush, 
  Zap, 
  Droplets, 
  TreePine, 
  Hammer, 
  Home, 
  Scissors,
  Wind,
  Trash2,
  Camera,
  Car
} from "lucide-react";
import { Button } from "@/components/ui/button";

const services = [
  { icon: Wrench, name: "Handyman", jobs: "15,243 jobs" },
  { icon: Paintbrush, name: "Painting", jobs: "12,891 jobs" },
  { icon: Zap, name: "Electrical", jobs: "8,765 jobs" },
  { icon: Droplets, name: "Plumbing", jobs: "11,432 jobs" },
  { icon: TreePine, name: "Landscaping", jobs: "9,876 jobs" },
  { icon: Hammer, name: "Renovation", jobs: "7,654 jobs" },
  { icon: Home, name: "Roofing", jobs: "5,432 jobs" },
  { icon: Scissors, name: "Cleaning", jobs: "13,567 jobs" },
  { icon: Wind, name: "HVAC", jobs: "6,789 jobs" },
  { icon: Trash2, name: "Removal", jobs: "4,321 jobs" },
  { icon: Camera, name: "Security", jobs: "3,456 jobs" },
  { icon: Car, name: "Automotive", jobs: "2,876 jobs" }
];

const ServiceCategoriesSection = () => {
  return (
    <section id="services" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">
            Popular services near you
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Browse hundreds of services or search for what you need. Our professionals are ready to help.
          </p>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 lg:gap-6">
          {services.map((service, index) => {
            const IconComponent = service.icon;
            return (
              <div 
                key={index}
                className="group p-6 bg-card rounded-2xl border border-border hover:border-primary/30 hover:shadow-soft transition-all duration-300 cursor-pointer"
              >
                <div className="text-center">
                  <div className="w-16 h-16 mx-auto mb-4 bg-gradient-hero rounded-xl flex items-center justify-center group-hover:bg-gradient-primary transition-all duration-300">
                    <IconComponent className="h-8 w-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                  </div>
                  
                  <h3 className="font-semibold mb-2 group-hover:text-primary transition-colors duration-300">
                    {service.name}
                  </h3>
                  
                  <p className="text-sm text-muted-foreground">
                    {service.jobs}
                  </p>
                </div>
              </div>
            );
          })}
        </div>

        <div className="text-center mt-12">
          <Button 
            variant="outline" 
            size="lg"
            className="border-primary text-primary hover:bg-gradient-primary hover:text-primary-foreground hover:border-primary shadow-soft"
          >
            View All Services
          </Button>
        </div>
      </div>
    </section>
  );
};

export default ServiceCategoriesSection;