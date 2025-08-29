import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Facebook, Twitter, Instagram, Linkedin, Smartphone, Mail } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-foreground text-background">
      <div className="container mx-auto px-4">
        {/* Newsletter Section */}
        <div className="py-16 border-b border-background/20">
          <div className="max-w-2xl mx-auto text-center">
            <h3 className="text-2xl font-bold mb-4">
              Stay updated with ServiceConnect
            </h3>
            <p className="text-background/80 mb-8">
              Get tips, trends, and special offers delivered to your inbox.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
              <Input 
                placeholder="Enter your email"
                className="bg-background/10 border-background/30 text-background placeholder:text-background/60"
              />
              <Button className="bg-gradient-primary hover:opacity-90 text-primary-foreground">
                Subscribe
              </Button>
            </div>
          </div>
        </div>

        {/* Main Footer Content */}
        <div className="py-16">
          <div className="grid md:grid-cols-2 lg:grid-cols-5 gap-8">
            {/* Company Info */}
            <div className="lg:col-span-2">
              <h2 className="text-2xl font-bold bg-gradient-primary bg-clip-text text-transparent mb-4">
                ServiceConnect
              </h2>
              <p className="text-background/80 mb-6 max-w-md">
                Connecting homeowners with trusted professionals for all their home service needs. 
                Licensed, insured, and ready to help.
              </p>
              <div className="flex gap-4">
                <div className="w-10 h-10 bg-background/10 rounded-full flex items-center justify-center hover:bg-background/20 transition-colors cursor-pointer">
                  <Facebook className="h-5 w-5 text-background" />
                </div>
                <div className="w-10 h-10 bg-background/10 rounded-full flex items-center justify-center hover:bg-background/20 transition-colors cursor-pointer">
                  <Twitter className="h-5 w-5 text-background" />
                </div>
                <div className="w-10 h-10 bg-background/10 rounded-full flex items-center justify-center hover:bg-background/20 transition-colors cursor-pointer">
                  <Instagram className="h-5 w-5 text-background" />
                </div>
                <div className="w-10 h-10 bg-background/10 rounded-full flex items-center justify-center hover:bg-background/20 transition-colors cursor-pointer">
                  <Linkedin className="h-5 w-5 text-background" />
                </div>
              </div>
            </div>

            {/* Services */}
            <div>
              <h4 className="font-semibold mb-4 text-background">Popular Services</h4>
              <ul className="space-y-2 text-background/80">
                <li><a href="#" className="hover:text-background transition-colors">Handyman</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Plumbing</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Electrical</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Painting</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Landscaping</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Cleaning</a></li>
              </ul>
            </div>

            {/* Company */}
            <div>
              <h4 className="font-semibold mb-4 text-background">Company</h4>
              <ul className="space-y-2 text-background/80">
                <li><a href="#" className="hover:text-background transition-colors">About Us</a></li>
                <li><a href="#" className="hover:text-background transition-colors">How It Works</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Careers</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Press</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Blog</a></li>
                <li><a href="#" className="hover:text-background transition-colors">Help Center</a></li>
              </ul>
            </div>

            {/* Contact */}
            <div>
              <h4 className="font-semibold mb-4 text-background">Contact</h4>
              <ul className="space-y-3 text-background/80">
                <li className="flex items-center gap-3">
                  <Mail className="h-4 w-4" />
                  <span className="text-sm">hello@serviceconnect.com</span>
                </li>
                <li className="flex items-center gap-3">
                  <Smartphone className="h-4 w-4" />
                  <span className="text-sm">1300 123 456</span>
                </li>
              </ul>
              
              <div className="mt-6">
                <h5 className="font-medium mb-3 text-background">Download Our App</h5>
                <div className="space-y-2">
                  <Button variant="outline" size="sm" className="w-full justify-start text-background border-background/30 hover:bg-background/10">
                    <Smartphone className="h-4 w-4 mr-2" />
                    App Store
                  </Button>
                  <Button variant="outline" size="sm" className="w-full justify-start text-background border-background/30 hover:bg-background/10">
                    <Smartphone className="h-4 w-4 mr-2" />
                    Google Play
                  </Button>
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="py-6 border-t border-background/20">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4">
            <p className="text-background/60 text-sm">
              © 2024 ServiceConnect. All rights reserved.
            </p>
            <div className="flex gap-6 text-sm text-background/60">
              <a href="#" className="hover:text-background transition-colors">Privacy Policy</a>
              <a href="#" className="hover:text-background transition-colors">Terms of Service</a>
              <a href="#" className="hover:text-background transition-colors">Cookie Policy</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;