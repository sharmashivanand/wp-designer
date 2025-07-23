=== WP Designer - Professional WordPress Design & Customization Tool ===
Plugin Name: WP Designer
Contributors: varun21, ruchika_wp
Donate Link: https://www.converticacommerce.com?item_name=Donation%20for%20WP%20Designer%20Plugin&cmd=_donations&currency_code=USD&lc=US
Tags: wp designer, designer, design, css designer, scss designer, theme customization, customization, designer tools
Requires at least: 5.3
Tested up to: 6.4
Requires PHP: 8.1
Stable tag: 2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The professional WP Designer's toolkit - SCSS compiler, theme-safe customizations, and designer-friendly tools for WordPress development.

== Description ==

**The ultimate WP Designer toolkit for professional WordPress customization!**

WP Designer is the go-to plugin for WordPress designers who need reliable, theme-independent customization tools. Whether you're a freelance WP designer or run a WordPress design agency, this plugin ensures your custom work stays safe and organized.

= Why WP Designers Choose This Plugin =

✅ **Never lose design work** - Code stays safe during theme updates
✅ **Professional SCSS workflow** - Write modern CSS with variables, mixins & nesting  
✅ **Designer-friendly organization** - Clean file structure for all your custom code
✅ **Client-safe customizations** - Debug tools to toggle designs on/off instantly
✅ **Performance optimized** - Auto-minified CSS for production sites (compressed version for visitors)
✅ **Theme-independent functions.php** - Custom PHP functions work with any theme

= Perfect For WordPress Designers =

**Freelance WP Designers**: Build client sites with confidence knowing your custom designs persist across theme changes.

**WordPress Design Agencies**: Standardize your design workflow with organized, maintainable code structure.

**Professional Designers**: Speed up WordPress design projects with SCSS workflow and debugging tools.

= WP Designer File Organization =

Upon activation, creates professional structure in `/wp-content/uploads/wp-designer/`:
- `functions.php` - Your custom WordPress design functions
- `style.scss` - Professional SCSS styles (auto-compiles to CSS)
- `images/` & `scripts/` - Designer asset folders
- Automatic CSS minification for production sites

= SCSS for WordPress Designers =

Write professional, maintainable styles with modern SCSS features:
- Variables for consistent design systems
- Mixins for reusable design components  
- Nesting for organized WordPress stylesheets
- Automatic compilation with file modification time checking
- Development (expanded) & production (compressed) CSS versions
- Cache-busting during development with microtime versioning

**Example WP Designer SCSS:**
```scss
$brand-color: #007cba;
$mobile: 768px;

.wp-designer-header {
  background: $brand-color;
  
  @media (max-width: $mobile) {
    padding: 1rem;
  }
  
  &__title {
    font-size: 2rem;
  }
}
```

= Also read =

These articles explain the philosophy behind WP Designer's approach:
- [Why Custom Post Types Belong in Plugins](http://justintadlock.com/archives/2013/09/14/why-custom-post-types-belong-in-plugins) - Justin Tadlock explains why functionality should be theme-independent
- [Creating a Custom Functions Plugin for End Users](http://justintadlock.com/archives/2011/02/02/creating-a-custom-functions-plugin-for-end-users) - Best practices for WordPress customization

**WP Designer allows you to:**

1. Add extra functionality to any theme without hassles
2. Extend the capabilities of existing themes
3. Keep your customizations (php code snippets and css styles) outside the theme
4. Theme independence allows extending WordPress without massive theme updates
5. Speed up your development time using SCSS

== Installation ==

1. **Install**: Plugins → Add New → Search "WP Designer" → Install & Activate
2. **Auto-Setup**: Plugin creates professional WP designer file structure automatically  
3. **Start Designing**: Edit functions.php and style.scss in Settings → WP Designer

== Frequently Asked Questions ==

= Is this suitable for professional WordPress designers? =

Absolutely! WP Designer is built specifically for professional WordPress designers and agencies. It follows industry best practices and gives you the tools needed for client work.

= Will my WordPress designs survive theme updates? =

Yes! That's the core benefit for WP designers. Your custom code lives in `/wp-content/uploads/wp-designer/` - completely separate from themes.

= How do I use SCSS as a WordPress designer? =

Edit `style.scss` in your wp-designer folder. It automatically compiles to CSS with all SCSS features - variables, mixins, nesting. Perfect for professional WordPress design workflows.

= Can I disable my designs for debugging? =

Yes! Go to Settings → WP Designer and toggle functions or styles on/off instantly. Essential for troubleshooting client sites during WordPress design projects.

= Do I need coding knowledge to use WP Designer? =

Basic CSS/PHP knowledge helps. This plugin is designed for WordPress designers and developers who write custom code for client projects.

= What user permissions are needed? =

SCSS compilation requires `manage_options` capability (typically Administrator or Editor level). Regular visitors get the optimized minified CSS automatically.

= Does WP Designer support filters? =

Yes! The plugin includes the `wpd_scss` filter that allows manipulation of SCSS content during compile time for advanced customizations.

= Will my old customizations stay when I use SCSS? =

Rest assured, your existing customizations stay in the same style.css file and you can continue to use it. WP Designer will create an additional style.scss file so you can gradually SASSify your customizations. The compile routine is automatically managed.

= Some of my customizations aren't working? =

If you have made customizations using WordPress in-built Customizer or your child theme, they may not work due to CSS priority or specificity. For instance, if you set the `background-color` using the WordPress customizer, the plugin's style.css may not override the same CSS rule.

= What are the detailed installation steps? =

1. Log in to your WordPress dashboard, navigate to Plugins → Add New
2. Search for **WP Designer** and click *Search Plugins*
3. Click "Install Now" then "Activate"
4. **Important**: DO NOT change the name of the `wp-designer` folder
5. Once activated, visit **Settings** → **WP Designer** for usage instructions


== Screenshots ==

1. WP Designer: Debug Tools

== Changelog ==

= 2.3 =
* Updated scssphp library.

= 2.2.4 =
* Updated PHP compatibility requirements.
* Updated scssphp library.
* Generate and enqueue a compressed css for normal visitors for performance speed-up.

= 2.2.3 =
* Implemented versioning to last modified time to force cachebusting during development.

= 2.2.2 =
* Changed inclusion of functions.php to plugins_loaded.
* Fixes a lot of bugs and functions not working.

= 2.2.1 =
* Updated scssphp library.

= 2.1.0 =
* Updated scssphp library.
* Filters allow manipulation of scss during compile time.
* Minified version enqueued for site performance enhancement.

= 2.0.2 =
* WP Designer is fully compatible with WordPress 4.5.

= 2.0.1 =
* WP Designer is fully compatible with WordPress 4.4.

= 2.0 =
* *New Feature:* Added support for SCSS.
* Eliminated obsolete code. 

= 1.0 =
* This is the initial release of the plugin.

== Upgrade Notice ==

= 2.3 =
* Updated scssphp library.

= 2.2.4 =
* Updated PHP compatibility requirements.
* Updated scssphp library.
* Generate and enqueue a compressed css for normal visitors for performance speed-up.

= 2.2.3 =
* Implemented versioning to last modified time to force cachebusting during development.

= 2.2.2 =
* Changed inclusion of functions.php to plugins_loaded.
* Fixes a lot of bugs and functions not working.

= 2.2.1 =
* Updated scssphp library.

= 2.1.0 =
* Updated scssphp library.
* Filters allow manipulation of scss during compile time.
* Minified version enqueued for site performance enhancement.

= 2.0.2 =
* WP Designer is fully compatible with WordPress 4.5.

= 2.0.1 =
* WP Designer is fully compatible with WordPress 4.4.

= 2.0 =
* *New Feature:* Added support for SCSS.
* Eliminated obsolete code. 

= 1.0 =
* This is the initial release of the plugin.