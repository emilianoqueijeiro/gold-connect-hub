/**
 * ServiceConnect WordPress Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');
    
    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            navigation.style.display = navigation.style.display === 'block' ? 'none' : 'block';
            this.classList.toggle('active');
        });
    }
    
    // Search form validation
    const searchForm = document.querySelector('.hero-search');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const serviceInput = this.querySelector('input[name="service"]');
            const locationInput = this.querySelector('input[name="location"]');
            
            if (!serviceInput.value.trim() || !locationInput.value.trim()) {
                e.preventDefault();
                alert('Please fill in both service type and location fields.');
                return false;
            }
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add scroll effect to header
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                header.style.boxShadow = 'none';
            }
        });
    }
    
    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.step, .service-card, .stat, .testimonial').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});