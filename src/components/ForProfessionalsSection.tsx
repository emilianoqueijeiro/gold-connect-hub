import { Button } from "@/components/ui/button";
import { TrendingUp, Clock, CreditCard, Users } from "lucide-react";

const benefits = [
  {
    icon: TrendingUp,
    title: "Grow your business",
    description: "Get connected with customers actively seeking your services"
  },
  {
    icon: Clock,
    title: "Save time",
    description: "No more cold calling - customers come to you with project details"
  },
  {
    icon: CreditCard,
    title: "Get paid faster", 
    description: "Secure payment processing and milestone-based payments"
  },
  {
    icon: Users,
    title: "Build reputation",
    description: "Showcase your work and collect reviews to attract more clients"
  }
];

const ForProfessionalsSection = () => {
  return (
    <section id="for-pros" className="py-20 bg-gradient-secondary">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Content */}
          <div>
            <div className="inline-block mb-6 px-4 py-2 bg-background rounded-full border border-border/50 shadow-soft">
              <span className="text-sm font-medium text-primary">For Service Professionals</span>
            </div>
            
            <h2 className="text-3xl md:text-4xl font-bold mb-6">
              Ready to grow your business?
            </h2>
            
            <p className="text-xl text-muted-foreground mb-8">
              Join thousands of professionals who use ServiceConnect to find new customers, 
              manage projects, and grow their business.
            </p>

            {/* Benefits Grid */}
            <div className="grid sm:grid-cols-2 gap-6 mb-8">
              {benefits.map((benefit, index) => {
                const IconComponent = benefit.icon;
                return (
                  <div key={index} className="flex gap-4">
                    <div className="flex-shrink-0 w-12 h-12 bg-gradient-primary rounded-xl flex items-center justify-center shadow-soft">
                      <IconComponent className="h-6 w-6 text-primary-foreground" />
                    </div>
                    <div>
                      <h3 className="font-semibold mb-2">
                        {benefit.title}
                      </h3>
                      <p className="text-muted-foreground text-sm">
                        {benefit.description}
                      </p>
                    </div>
                  </div>
                );
              })}
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <Button 
                size="lg" 
                className="bg-gradient-primary hover:opacity-90 text-primary-foreground font-semibold shadow-soft"
              >
                Join as Professional
              </Button>
              <Button 
                variant="outline" 
                size="lg"
                className="border-primary text-primary hover:bg-gradient-primary hover:text-primary-foreground"
              >
                Learn More
              </Button>
            </div>
          </div>

          {/* Stats Card */}
          <div className="bg-background p-8 rounded-2xl shadow-large border border-border/50">
            <h3 className="text-2xl font-bold mb-6">Join our success</h3>
            
            <div className="space-y-6">
              <div className="flex items-center justify-between p-4 bg-gradient-hero rounded-xl border border-primary/20">
                <div>
                  <div className="text-2xl font-bold text-primary">$2,500</div>
                  <div className="text-sm text-muted-foreground">Average monthly earnings</div>
                </div>
                <TrendingUp className="h-8 w-8 text-primary" />
              </div>
              
              <div className="flex items-center justify-between p-4 bg-muted rounded-xl">
                <div>
                  <div className="text-2xl font-bold text-foreground">15</div>
                  <div className="text-sm text-muted-foreground">Average projects per month</div>
                </div>
                <Users className="h-8 w-8 text-muted-foreground" />
              </div>
              
              <div className="flex items-center justify-between p-4 bg-muted rounded-xl">
                <div>
                  <div className="text-2xl font-bold text-foreground">24hrs</div>
                  <div className="text-sm text-muted-foreground">Average response time</div>
                </div>
                <Clock className="h-8 w-8 text-muted-foreground" />
              </div>
            </div>

            <div className="mt-6 p-4 bg-success/10 rounded-xl border border-success/20">
              <div className="flex items-center gap-2 mb-2">
                <div className="w-3 h-3 bg-success rounded-full"></div>
                <span className="font-semibold text-success">Free to join</span>
              </div>
              <p className="text-sm text-muted-foreground">
                No setup fees. Pay only when you get hired.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ForProfessionalsSection;