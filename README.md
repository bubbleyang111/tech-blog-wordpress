# Tech Blog WordPress Theme

🚀 A modern WordPress theme with Hugging Face-inspired design for tech-focused blogs.

## Features

- **Modern Design**: Clean, minimalist interface inspired by Hugging Face's UI
- **Responsive Layout**: Optimized for desktop, tablet, and mobile devices
- **Tech-Focused**: Perfect for AI, ML, cloud computing, and technology blogs
- **Card-Based Layout**: Beautiful grid system with hover effects
- **Placeholder Content**: All text and images use placeholder syntax for easy customization

## Design Elements

### Color Scheme
- Primary: `#FF9D00` (HF Orange)
- Secondary: `#FFD21E` (HF Yellow)
- Background: `#FFFFFF` / `#F9FAFB`
- Text: `#1F2937` / `#6B7280`

### Key Features
- Rounded corners (12px radius)
- Card shadows and hover effects
- Gradient backgrounds
- Sticky header navigation
- Hero section on homepage
- Grid-based post layout

## File Structure

```
wp-content/themes/hf-tech-theme/
├── style.css          # Main stylesheet with HF-inspired design
├── index.php          # Homepage template with post grid
├── header.php         # Header with logo and navigation
├── footer.php         # Footer with links and info
├── single.php         # Single post template
└── functions.php      # Theme functions and setup
```

## Installation

1. Clone this repository
2. Copy the `hf-tech-theme` folder to your WordPress installation:
   ```
   wp-content/themes/
   ```
3. Activate the theme in WordPress Admin → Appearance → Themes

## Placeholder Syntax

The theme uses placeholder syntax for easy content replacement:

### Text Placeholders
- `TITLE: [Your Title]` - Post titles
- `EXCERPT: [Your excerpt]` - Post excerpts
- `CONTENT: [Your content]` - Post content
- `CATEGORY_NAME` - Category names
- `MENU: Item Name` - Menu items

### Image Placeholders
- `[PLACEHOLDER_IMAGE_N: Description]` - Featured images
- `[AI Generated Tech Image]` - Default thumbnails
- `[FEATURED_IMAGE: Description]` - Single post images

## Customization

### Changing Colors
Edit the CSS variables in `style.css`:

```css
:root {
  --hf-orange: #FF9D00;
  --hf-yellow: #FFD21E;
  /* ... other colors ... */
}
```

### Adding Real Content
1. Replace placeholder text with actual content
2. Upload images through WordPress Media Library
3. Create categories and assign to posts
4. Set up navigation menu in WordPress Admin

## Tech Stack

- WordPress 5.0+
- PHP 7.4+
- CSS3 (Grid, Flexbox, Custom Properties)
- Modern HTML5 markup

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

MIT License - feel free to use and modify for your projects.

## Credits

Design inspired by [Hugging Face](https://huggingface.co) UI/UX patterns.

---

**Built with ❤️ for the tech community**
