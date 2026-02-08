# Tech Blog WordPress Theme 🚀

A modern, responsive WordPress theme inspired by Hugging Face's clean and professional design. Perfect for technology blogs focusing on AI, ML, cloud computing, and emerging technologies.

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![WordPress](https://img.shields.io/badge/WordPress-5.0%2B-blue.svg)
![Version](https://img.shields.io/badge/version-1.0.0-green.svg)

## ✨ Features

- **🎨 Hugging Face-Inspired Design**: Clean, modern interface with professional aesthetics
- **📱 Fully Responsive**: Optimized for desktop, tablet, and mobile devices
- **⚡ Performance Optimized**: Lightweight and fast-loading
- **🎯 Tech-Focused**: Purpose-built for technology and innovation content
- **🎴 Card-Based Layout**: Beautiful grid system with smooth hover effects
- **🔧 Easy Customization**: Well-documented placeholder system for content replacement
- **♿ Accessible**: Semantic HTML5 markup
- **🌐 SEO Friendly**: Proper heading hierarchy and meta support

## 🎨 Design Elements

### Color Palette
```css
Primary Orange:   #FF9D00
Accent Yellow:    #FFD21E
Background:       #FFFFFF / #F9FAFB
Text:             #1F2937
Secondary Text:   #6B7280
Border:           #E5E7EB
```

### Key Design Features
- ✅ Rounded corners (12px radius)
- ✅ Card shadows and hover animations
- ✅ Gradient backgrounds
- ✅ Sticky header navigation
- ✅ Hero section on homepage
- ✅ Grid-based post layout
- ✅ Category badges with rounded pills
- ✅ Clean typography with system fonts

## 📁 File Structure

```
wp-content/themes/hf-tech-theme/
├── style.css          # Main stylesheet with HF design
├── functions.php      # Theme setup and functionality
├── header.php         # Site header with sticky navigation
├── footer.php         # Footer with multi-column layout
├── index.php          # Homepage/blog listing template
└── single.php         # Single post template
```

## 🚀 Quick Start

### Installation

1. **Download the theme**
   ```bash
   git clone https://github.com/bubbleyang111/tech-blog-wordpress.git
   ```

2. **Upload to WordPress**
   - Copy `hf-tech-theme` folder to `wp-content/themes/`
   - Or upload as ZIP in WordPress Admin → Appearance → Themes → Add New

3. **Activate**
   - Go to Appearance → Themes
   - Click "Activate" on HF Tech Theme

📖 **For detailed instructions, see [INSTALLATION.md](INSTALLATION.md)**

## 🎯 Placeholder System

The theme uses an intuitive placeholder syntax for easy content replacement:

### Text Placeholders
- `SITE_NAME:` → Your website name
- `TITLE: [...]` → Article titles
- `EXCERPT: [...]` → Post summaries  
- `CONTENT: [...]` → Full article content
- `CATEGORY_*` → Category names
- `MENU:` → Menu item names
- `HERO_TITLE:` → Hero section title
- `HERO_DESC:` → Hero section description

### Image Placeholders
- `[PLACEHOLDER_IMAGE_N: Description]` → Featured images
- `[AI Generated Tech Image]` → Thumbnail placeholders
- `[FEATURED_IMAGE: Description]` → Large hero images

### Example Usage

```php
<!-- Before -->
<h2>TITLE: [Revolutionary AI Technology Breakthrough]</h2>

<!-- After replacement -->
<h2>GPT-4 Achieves New Benchmark in Language Understanding</h2>
```

## 🎨 Customization

### Changing Colors

Edit `style.css` and modify CSS variables:

```css
:root {
  --hf-orange: #FF9D00;        /* Your brand color */
  --hf-orange-dark: #E88D00;   
  --hf-yellow: #FFD21E;        /* Accent color */
  /* ... */
}
```

### Adding Real Content

1. **Create Categories**: Posts → Categories
2. **Add Posts**: Posts → Add New
3. **Upload Images**: Media → Add New
4. **Create Menu**: Appearance → Menus
5. **Configure Settings**: Settings → General

## 📋 Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Modern web browser

## 🌟 Use Cases

Perfect for:
- ✅ AI & Machine Learning blogs
- ✅ Technology news sites
- ✅ Developer portfolios
- ✅ Tech company blogs
- ✅ Innovation showcases
- ✅ Research publications
- ✅ Startup blogs

## 📸 Screenshots

The theme includes placeholder content that demonstrates:
- Homepage with hero section and post grid
- Single post layout with full content
- Responsive navigation menu
- Footer with multiple sections
- Category badges and meta information

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Credits

- Design inspiration: [Hugging Face](https://huggingface.co)
- Built with ❤️ for the tech community
- WordPress theme development best practices

## 📞 Support

- 📖 [Installation Guide](INSTALLATION.md)
- 🐛 [Report Issues](https://github.com/bubbleyang111/tech-blog-wordpress/issues)
- 💬 [Discussions](https://github.com/bubbleyang111/tech-blog-wordpress/discussions)

## 🔄 Version History

### v1.0.0 (2026-02-08)
- Initial release
- Hugging Face inspired design
- Responsive layout
- Placeholder content system
- Core WordPress theme files

---

**Made with 🚀 for innovators and tech enthusiasts**

[⬆ Back to top](#tech-blog-wordpress-theme-)
