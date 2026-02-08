# Installation Guide

## Quick Start

### 1. Download & Install

Clone or download this repository:
```bash
git clone https://github.com/bubbleyang111/tech-blog-wordpress.git
```

### 2. Upload to WordPress

Copy the theme folder to your WordPress installation:
```
your-wordpress-site/
└── wp-content/
    └── themes/
        └── hf-tech-theme/  ← Place the theme here
```

### 3. Activate Theme

1. Login to your WordPress Admin Panel
2. Navigate to **Appearance → Themes**
3. Find **HF Tech Theme** and click **Activate**

## Theme Structure

```
hf-tech-theme/
├── style.css       # Main stylesheet with Hugging Face design
├── functions.php   # Theme setup and functionality
├── header.php      # Site header with navigation
├── footer.php      # Site footer
├── index.php       # Homepage/blog listing
└── single.php      # Single post template
```

## Customization Guide

### Replacing Placeholder Content

The theme uses placeholder syntax that you should replace:

#### Text Placeholders
- `SITE_NAME:` → Your site name
- `TITLE:` → Article titles
- `EXCERPT:` → Post summaries
- `CONTENT:` → Full article content
- `CATEGORY_*` → Category names
- `MENU:` → Menu item names

#### Image Placeholders
- `[PLACEHOLDER_IMAGE_*]` → Upload actual images via Media Library
- `[AI Generated Tech Image]` → Feature images
- `[FEATURED_IMAGE:]` → Hero/header images

### Step-by-Step Content Replacement

#### 1. Update Site Info
Go to **Settings → General** and set:
- Site Title
- Tagline
- WordPress Address

#### 2. Create Categories
Go to **Posts → Categories** and create:
- Artificial Intelligence
- Machine Learning
- Cloud Computing
- Blockchain
- Quantum Computing

#### 3. Create Navigation Menu
1. Go to **Appearance → Menus**
2. Create a new menu
3. Add pages/categories
4. Set as **Primary Menu**

#### 4. Add Posts
1. Go to **Posts → Add New**
2. Replace placeholder titles and content
3. Set featured images
4. Assign categories
5. Add tags

#### 5. Upload Images
1. Go to **Media → Add New**
2. Upload your tech-related images
3. Set as featured images for posts

### Color Customization

Edit `style.css` and modify the CSS variables:

```css
:root {
  --hf-orange: #FF9D00;        /* Primary brand color */
  --hf-orange-dark: #E88D00;   /* Darker variant */
  --hf-yellow: #FFD21E;        /* Accent color */
  --hf-bg: #FFFFFF;            /* Background */
  --hf-bg-secondary: #F9FAFB;  /* Alt background */
  --hf-text: #1F2937;          /* Text color */
  --hf-text-secondary: #6B7280; /* Muted text */
  --hf-border: #E5E7EB;        /* Border color */
}
```

## Design Features

### Hugging Face Inspired Elements

1. **Color Palette**
   - Orange (#FF9D00) as primary
   - Yellow (#FFD21E) as accent
   - Clean grays for text

2. **Layout**
   - Card-based design
   - Rounded corners (12px)
   - Subtle shadows
   - Grid system

3. **Typography**
   - System font stack
   - Clear hierarchy
   - Excellent readability

4. **Components**
   - Sticky header
   - Hero section
   - Post cards with hover effects
   - Category badges
   - Gradient backgrounds

## Tips for Best Results

1. **Images**: Use high-quality tech-related images (1200x600px recommended)
2. **Content**: Write concise, informative articles about technology
3. **Categories**: Organize posts into clear categories
4. **Tags**: Use relevant tags for better organization
5. **Excerpts**: Write compelling excerpts (2-3 sentences)

## Troubleshooting

### Theme doesn't appear
- Check that files are in `wp-content/themes/hf-tech-theme/`
- Verify `style.css` has theme header comments

### Styles not loading
- Clear browser cache
- Check WordPress Admin → Settings → Permalinks and click Save

### Menu not showing
- Create menu in Appearance → Menus
- Assign to "Primary Menu" location

## Support

For issues or questions:
- Open an issue on GitHub
- Check WordPress.org documentation
- Review theme files for comments

## Credits

- Design inspired by [Hugging Face](https://huggingface.co)
- Built for the tech community
- Open source and free to use

---

Happy blogging! 🚀
