import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Search, MapPin } from "lucide-react";
import heroImage from "@/assets/hero-image.jpg";

const HeroSection = () => {
  return (
    <section className="relative min-h-[600px] lg:min-h-[700px] flex items-center overflow-hidden">
      {/* Background Image with Overlay */}
      <div className="absolute inset-0 z-0">
        <img 
          src={heroImage} 
          alt="Professional service provider" 
          className="w-full h-full object-cover"
        />
        <div className="absolute inset-0 bg-gradient-to-r from-background/95 via-background/60 to-background/30" />
      </div>
      
      {/* Content */}
      <div className="relative z-10 container mx-auto px-4">
        <div className="max-w-2xl">
          <div className="inline-block mb-6 px-4 py-2 bg-gradient-hero rounded-full border border-primary/20">
            <span className="text-sm font-medium text-primary">Trusted by 500,000+ homeowners</span>
          </div>
          
          <h1 className="text-4xl md:text-6xl font-bold leading-tight mb-6">
            Find trusted 
            <span className="block bg-gradient-primary bg-clip-text text-transparent">
              professionals
            </span>
            for your home
          </h1>
          
          <p className="text-xl text-muted-foreground mb-8 max-w-lg">
            Get matched with verified professionals in minutes. From repairs to renovations, we connect you with the best.
          </p>

          {/* Search Form */}
          <div className="bg-background/95 backdrop-blur p-6 rounded-2xl shadow-large border border-border/50">
            <div className="flex flex-col md:flex-row gap-4">
              <div className="flex-1 relative">
                <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-muted-foreground" />
                <Input 
                  placeholder="What service do you need?" 
                  className="pl-10 h-12 text-base border-border bg-background"
                />
              </div>
              
              <div className="flex-1 relative">
                <MapPin className="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-muted-foreground" />
                <Input 
                  placeholder="Enter your postcode" 
                  className="pl-10 h-12 text-base border-border bg-background"
                />
              </div>
              
              <Button 
                size="lg" 
                className="h-12 px-8 bg-gradient-primary hover:opacity-90 text-primary-foreground font-semibold shadow-soft"
              >
                Get Quotes
              </Button>
            </div>
            
            <p className="text-sm text-muted-foreground mt-4 flex items-center gap-2">
              <span className="w-2 h-2 bg-success rounded-full"></span>
              Free to use • No commitment • Get quotes in minutes
            </p>
          </div>

          {/* Trust Indicators */}
          <div className="flex items-center gap-8 mt-8 pt-8 border-t border-border/30">
            <div className="text-center">
              <div className="font-bold text-2xl text-foreground">4.8★</div>
              <div className="text-sm text-muted-foreground">Average rating</div>
            </div>
            <div className="text-center">
              <div className="font-bold text-2xl text-foreground">50k+</div>
              <div className="text-sm text-muted-foreground">Professionals</div>
            </div>
            <div className="text-center">
              <div className="font-bold text-2xl text-foreground">1M+</div>
              <div className="text-sm text-muted-foreground">Jobs completed</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;