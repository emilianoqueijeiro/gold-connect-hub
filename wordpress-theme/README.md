# ServiceConnect WordPress Theme

A modern, professional WordPress theme for service marketplace websites, featuring a minimalist white and gold design.

## Features

- **Responsive Design**: Fully responsive and mobile-optimized
- **Custom Post Types**: Services, Professionals, and Testimonials
- **Customizer Integration**: Easy theme customization through WordPress Customizer
- **SEO Optimized**: Clean, semantic HTML structure
- **Gutenberg Compatible**: Full support for WordPress block editor
- **Performance Optimized**: Fast loading and optimized code
- **Accessibility Ready**: WCAG compliant and accessible

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Activate the theme in WordPress Admin → Appearance → Themes
3. Configure the theme settings in WordPress Admin → Appearance → Customize

## Theme Structure

```
serviceconnect/
├── style.css              # Main theme stylesheet
├── index.php             # Default template
├── front-page.php        # Homepage template
├── header.php            # Header template
├── footer.php            # Footer template
├── functions.php         # Theme functions and features
├── single-services.php   # Single service page
├── archive-services.php  # Services archive page
├── assets/
│   ├── css/
│   │   └── main.css     # Main styles
│   └── js/
│       └── main.js      # Theme JavaScript
└── README.md            # This file
```

## Custom Post Types

### Services
- Custom fields for service details
- Service categories taxonomy
- Archive and single page templates

### Professionals
- Rating system
- Jobs completed counter
- Specialties field
- Professional profiles

### Testimonials
- Client information
- Rating system
- Display on homepage

## Customizer Options

Access these settings in WordPress Admin → Appearance → Customize:

### Hero Section
- Hero title
- Hero subtitle
- Background image

### Contact Information
- Phone number
- Email address
- Business hours

### Colors & Typography
- Primary colors
- Font selections
- Custom CSS

## Menus

The theme supports two menu locations:
- **Primary Menu**: Main navigation in header
- **Footer Menu**: Links in footer

Configure in WordPress Admin → Appearance → Menus

## Widgets

The theme includes widget areas for:
- Sidebar
- Footer sections (4 columns)

Configure in WordPress Admin → Appearance → Widgets

## Page Templates

### Homepage (front-page.php)
- Hero section with search form
- How it works section
- Popular services
- Trust indicators
- Customer testimonials
- Professional signup section

### Service Pages
- Single service details
- Related services
- Call-to-action sections

## Recommended Plugins

For enhanced functionality, consider installing:

- **Contact Form 7**: For contact forms
- **Yoast SEO**: For SEO optimization
- **WP Rocket**: For performance optimization
- **Akismet**: For spam protection
- **UpdraftPlus**: For backups

## Customization

### Adding New Service Categories
1. Go to WordPress Admin → Services → Service Categories
2. Add new categories with descriptions
3. Assign services to categories

### Modifying Colors
The theme uses CSS custom properties for easy color customization:

```css
:root {
    --primary-gold: #D4AF37;
    --primary-gold-dark: #B8941F;
    --primary-gold-light: #F4E4BC;
    /* ... other colors */
}
```

### Custom CSS
Add custom styles in WordPress Admin → Appearance → Customize → Additional CSS

## Development

### File Structure
- Keep CSS organized in `assets/css/main.css`
- JavaScript in `assets/js/main.js`
- Follow WordPress coding standards
- Use semantic HTML elements

### Adding New Features
1. Add functions to `functions.php`
2. Create new template files as needed
3. Register new post types/taxonomies properly
4. Follow WordPress best practices

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Performance

The theme is optimized for performance with:
- Minimal HTTP requests
- Optimized images
- Clean, efficient code
- Proper caching headers

## Support

For support and customization:
1. Check WordPress documentation
2. Review theme code and comments
3. Test in staging environment first

## Changelog

### Version 1.0
- Initial release
- Core functionality
- Responsive design
- Custom post types
- Customizer integration

## License

This theme is licensed under GPL v2 or later.