import { Star, Quote } from "lucide-react";

const testimonials = [
  {
    name: "Sarah Johnson",
    role: "Homeowner",
    location: "Melbourne, VIC",
    rating: 5,
    text: "Found an amazing electrician through ServiceConnect. The whole process was smooth and the work quality exceeded my expectations. Highly recommend!",
    project: "Electrical rewiring"
  },
  {
    name: "Michael Chen", 
    role: "Homeowner",
    location: "Sydney, NSW",
    rating: 5,
    text: "Used the platform to find a painter for our kitchen renovation. Got 5 quotes within hours and chose a fantastic professional. Great value for money.",
    project: "Interior painting"
  },
  {
    name: "Emma Williams",
    role: "Homeowner", 
    location: "Brisbane, QLD",
    rating: 5,
    text: "The landscaper we hired transformed our backyard completely. The ServiceConnect platform made it so easy to find qualified professionals in our area.",
    project: "Garden landscaping"
  }
];

const TestimonialsSection = () => {
  return (
    <section className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">
            What our customers say
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Real stories from homeowners who found their perfect professional through our platform.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <div 
              key={index}
              className="bg-card p-8 rounded-2xl border border-border shadow-soft hover:shadow-medium transition-all duration-300"
            >
              {/* Quote Icon */}
              <div className="mb-6">
                <Quote className="h-8 w-8 text-primary/30" />
              </div>

              {/* Rating */}
              <div className="flex items-center gap-1 mb-4">
                {[...Array(testimonial.rating)].map((_, i) => (
                  <Star key={i} className="h-5 w-5 fill-primary text-primary" />
                ))}
              </div>

              {/* Testimonial Text */}
              <p className="text-muted-foreground mb-6 leading-relaxed">
                "{testimonial.text}"
              </p>

              {/* Project Tag */}
              <div className="mb-6">
                <span className="inline-block px-3 py-1 bg-gradient-hero text-primary text-sm font-medium rounded-full border border-primary/20">
                  {testimonial.project}
                </span>
              </div>

              {/* Customer Info */}
              <div className="flex items-center gap-4">
                <div className="w-12 h-12 bg-gradient-primary rounded-full flex items-center justify-center text-primary-foreground font-semibold">
                  {testimonial.name.charAt(0)}
                </div>
                <div>
                  <div className="font-semibold text-foreground">
                    {testimonial.name}
                  </div>
                  <div className="text-sm text-muted-foreground">
                    {testimonial.role} • {testimonial.location}
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Overall Rating Summary */}
        <div className="mt-16 text-center">
          <div className="inline-block p-8 bg-gradient-hero rounded-2xl border border-primary/20 shadow-soft">
            <div className="flex items-center justify-center gap-2 mb-4">
              <div className="flex items-center gap-1">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} className="h-6 w-6 fill-primary text-primary" />
                ))}
              </div>
              <span className="text-2xl font-bold text-foreground ml-2">4.8</span>
            </div>
            <p className="text-muted-foreground">
              Based on <span className="font-semibold text-foreground">250,000+</span> customer reviews
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;