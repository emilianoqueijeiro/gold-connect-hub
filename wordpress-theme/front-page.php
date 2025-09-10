<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <?php echo esc_html(get_theme_mod('hero_title', 'Find trusted service professionals in your area')); ?>
                </h1>
                <p class="hero-subtitle">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Connect with vetted professionals for all your home and business needs')); ?>
                </p>
                
                <div class="hero-trust">
                    <span><?php esc_html_e('Trusted by 50,000+ customers nationwide', 'serviceconnect'); ?></span>
                </div>
                
                <form class="hero-search" action="<?php echo esc_url(home_url('/search')); ?>" method="get">
                    <div class="search-inputs">
                        <div class="search-field">
                            <label for="service-search"><?php esc_html_e('What service do you need?', 'serviceconnect'); ?></label>
                            <input type="text" id="service-search" name="service" placeholder="<?php esc_attr_e('e.g., Plumbing, Cleaning, Electrician', 'serviceconnect'); ?>" required>
                        </div>
                        
                        <div class="search-field">
                            <label for="location-search"><?php esc_html_e('Your postcode', 'serviceconnect'); ?></label>
                            <input type="text" id="location-search" name="location" placeholder="<?php esc_attr_e('Enter your postcode', 'serviceconnect'); ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        <?php esc_html_e('Get Quotes', 'serviceconnect'); ?>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works-section">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e('How ServiceConnect Works', 'serviceconnect'); ?></h2>
                <p><?php esc_html_e('Get connected with trusted professionals in three simple steps', 'serviceconnect'); ?></p>
            </div>
            
            <div class="steps-grid">
                <div class="step">
                    <div class="step-icon">1</div>
                    <h3><?php esc_html_e('Describe Your Job', 'serviceconnect'); ?></h3>
                    <p><?php esc_html_e('Tell us what you need done and we\'ll match you with available professionals in your area.', 'serviceconnect'); ?></p>
                </div>
                
                <div class="step">
                    <div class="step-icon">2</div>
                    <h3><?php esc_html_e('Get Free Quotes', 'serviceconnect'); ?></h3>
                    <p><?php esc_html_e('Receive up to 5 free quotes from qualified professionals. Compare and choose the best fit.', 'serviceconnect'); ?></p>
                </div>
                
                <div class="step">
                    <div class="step-icon">3</div>
                    <h3><?php esc_html_e('Hire & Get It Done', 'serviceconnect'); ?></h3>
                    <p><?php esc_html_e('Hire your chosen professional and get your job completed with confidence and quality.', 'serviceconnect'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Categories Section -->
    <section class="service-categories-section">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e('Popular Services', 'serviceconnect'); ?></h2>
                <p><?php esc_html_e('Browse our most requested service categories', 'serviceconnect'); ?></p>
            </div>
            
            <div class="services-grid">
                <?php
                $service_categories = get_terms(array(
                    'taxonomy' => 'service_category',
                    'hide_empty' => false,
                    'number' => 8,
                ));
                
                if ($service_categories) :
                    foreach ($service_categories as $category) :
                        $job_count = wp_count_posts('services')->publish; // Simplified for demo
                ?>
                    <div class="service-card">
                        <div class="service-icon">🔧</div>
                        <h3><?php echo esc_html($category->name); ?></h3>
                        <p><?php echo esc_html($job_count); ?> <?php esc_html_e('jobs available', 'serviceconnect'); ?></p>
                    </div>
                <?php 
                    endforeach;
                else :
                    // Default categories if none exist
                    $default_services = array(
                        array('name' => 'Plumbing', 'icon' => '🔧', 'jobs' => '1,247'),
                        array('name' => 'Electrical', 'icon' => '⚡', 'jobs' => '892'),
                        array('name' => 'Cleaning', 'icon' => '🧽', 'jobs' => '2,156'),
                        array('name' => 'Gardening', 'icon' => '🌱', 'jobs' => '1,843'),
                        array('name' => 'Painting', 'icon' => '🎨', 'jobs' => '967'),
                        array('name' => 'Carpentry', 'icon' => '🔨', 'jobs' => '743'),
                        array('name' => 'Moving', 'icon' => '📦', 'jobs' => '1,324'),
                        array('name' => 'Roofing', 'icon' => '🏠', 'jobs' => '456'),
                    );
                    
                    foreach ($default_services as $service) :
                ?>
                    <div class="service-card">
                        <div class="service-icon"><?php echo $service['icon']; ?></div>
                        <h3><?php echo esc_html($service['name']); ?></h3>
                        <p><?php echo esc_html($service['jobs']); ?> <?php esc_html_e('jobs available', 'serviceconnect'); ?></p>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            
            <div class="section-footer">
                <a href="<?php echo esc_url(get_post_type_archive_link('services')); ?>" class="btn btn-outline">
                    <?php esc_html_e('View All Services', 'serviceconnect'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Trust Indicators Section -->
    <section class="trust-indicators-section">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e('Why Choose ServiceConnect?', 'serviceconnect'); ?></h2>
                <p><?php esc_html_e('Join thousands of satisfied customers who trust us with their service needs', 'serviceconnect'); ?></p>
            </div>
            
            <div class="trust-stats">
                <div class="stat">
                    <div class="stat-icon">👥</div>
                    <div class="stat-number">50,000+</div>
                    <div class="stat-label"><?php esc_html_e('Happy Customers', 'serviceconnect'); ?></div>
                    <p><?php esc_html_e('Customers trust us nationwide', 'serviceconnect'); ?></p>
                </div>
                
                <div class="stat">
                    <div class="stat-icon">✅</div>
                    <div class="stat-number">98%</div>
                    <div class="stat-label"><?php esc_html_e('Completion Rate', 'serviceconnect'); ?></div>
                    <p><?php esc_html_e('Jobs completed successfully', 'serviceconnect'); ?></p>
                </div>
                
                <div class="stat">
                    <div class="stat-icon">⭐</div>
                    <div class="stat-number">4.9/5</div>
                    <div class="stat-label"><?php esc_html_e('Average Rating', 'serviceconnect'); ?></div>
                    <p><?php esc_html_e('Customer satisfaction score', 'serviceconnect'); ?></p>
                </div>
                
                <div class="stat">
                    <div class="stat-icon">🕒</div>
                    <div class="stat-number">24hrs</div>
                    <div class="stat-label"><?php esc_html_e('Response Time', 'serviceconnect'); ?></div>
                    <p><?php esc_html_e('Average quote delivery', 'serviceconnect'); ?></p>
                </div>
            </div>
            
            <div class="trust-badges">
                <div class="badge">
                    <div class="badge-icon">🛡️</div>
                    <span><?php esc_html_e('Licensed & Insured', 'serviceconnect'); ?></span>
                </div>
                
                <div class="badge">
                    <div class="badge-icon">✓</div>
                    <span><?php esc_html_e('Background Checked', 'serviceconnect'); ?></span>
                </div>
                
                <div class="badge">
                    <div class="badge-icon">💯</div>
                    <span><?php esc_html_e('Satisfaction Guaranteed', 'serviceconnect'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e('What Our Customers Say', 'serviceconnect'); ?></h2>
                <p><?php esc_html_e('Real stories from real customers', 'serviceconnect'); ?></p>
            </div>
            
            <div class="testimonials-grid">
                <?php
                $testimonials = new WP_Query(array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                ));
                
                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                        $client_name = get_post_meta(get_the_ID(), '_client_name', true);
                        $client_location = get_post_meta(get_the_ID(), '_client_location', true);
                        $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true);
                ?>
                    <div class="testimonial">
                        <div class="testimonial-rating">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <span class="star <?php echo ($i <= $rating) ? 'filled' : ''; ?>">★</span>
                            <?php endfor; ?>
                        </div>
                        
                        <blockquote><?php the_content(); ?></blockquote>
                        
                        <div class="testimonial-author">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="author-avatar">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="author-info">
                                <div class="author-name"><?php echo esc_html($client_name); ?></div>
                                <div class="author-location"><?php echo esc_html($client_location); ?></div>
                            </div>
                        </div>
                    </div>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Default testimonials if none exist
                    $default_testimonials = array(
                        array(
                            'content' => 'ServiceConnect made finding a reliable plumber so easy. Got 3 quotes within hours and hired someone the same day. Excellent service!',
                            'name' => 'Sarah Johnson',
                            'location' => 'Melbourne, VIC',
                            'rating' => 5
                        ),
                        array(
                            'content' => 'I needed my garden redesigned and found the perfect landscaper through ServiceConnect. The whole process was seamless.',
                            'name' => 'Michael Chen',
                            'location' => 'Sydney, NSW',
                            'rating' => 5
                        ),
                        array(
                            'content' => 'Great platform for finding trusted professionals. Used it twice now and both experiences were fantastic.',
                            'name' => 'Emma Wilson',
                            'location' => 'Brisbane, QLD',
                            'rating' => 4
                        )
                    );
                    
                    foreach ($default_testimonials as $testimonial) :
                ?>
                    <div class="testimonial">
                        <div class="testimonial-rating">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <span class="star <?php echo ($i <= $testimonial['rating']) ? 'filled' : ''; ?>">★</span>
                            <?php endfor; ?>
                        </div>
                        
                        <blockquote><?php echo esc_html($testimonial['content']); ?></blockquote>
                        
                        <div class="testimonial-author">
                            <div class="author-info">
                                <div class="author-name"><?php echo esc_html($testimonial['name']); ?></div>
                                <div class="author-location"><?php echo esc_html($testimonial['location']); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- For Professionals Section -->
    <section class="for-professionals-section">
        <div class="container">
            <div class="professionals-content">
                <div class="professionals-text">
                    <h2><?php esc_html_e('Join Our Network of Professionals', 'serviceconnect'); ?></h2>
                    <p><?php esc_html_e('Grow your business with quality leads and trusted customers', 'serviceconnect'); ?></p>
                    
                    <ul class="benefits-list">
                        <li><?php esc_html_e('Get matched with customers in your area', 'serviceconnect'); ?></li>
                        <li><?php esc_html_e('Set your own rates and schedule', 'serviceconnect'); ?></li>
                        <li><?php esc_html_e('Build your reputation with customer reviews', 'serviceconnect'); ?></li>
                        <li><?php esc_html_e('Access to business tools and support', 'serviceconnect'); ?></li>
                    </ul>
                    
                    <div class="professionals-cta">
                        <a href="#" class="btn btn-primary"><?php esc_html_e('Join as a Professional', 'serviceconnect'); ?></a>
                        <a href="#" class="btn btn-outline"><?php esc_html_e('Learn More', 'serviceconnect'); ?></a>
                    </div>
                </div>
                
                <div class="professionals-stats">
                    <div class="stat">
                        <div class="stat-number">15,000+</div>
                        <div class="stat-label"><?php esc_html_e('Active Professionals', 'serviceconnect'); ?></div>
                    </div>
                    
                    <div class="stat">
                        <div class="stat-number">$2,500</div>
                        <div class="stat-label"><?php esc_html_e('Average Monthly Earnings', 'serviceconnect'); ?></div>
                    </div>
                    
                    <div class="stat">
                        <div class="stat-number">4.8/5</div>
                        <div class="stat-label"><?php esc_html_e('Professional Satisfaction', 'serviceconnect'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>