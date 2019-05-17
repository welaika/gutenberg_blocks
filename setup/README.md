# Requirements

Before start you must have installed and running:
- [Advanced Custom Fields](https://github.com/AdvancedCustomFields/acf). Version: 5.8.0+
- [WordLess](https://github.com/welaika/wordless). Version: 2.6.1+

# First installation

1. Copy `custom_gutenberg_acf_blocks.php` inside `your_wordless_theme/config/initializers/`

2. Copy `blocks` folder (containing `base_block.php`) inside `your_wordless_theme/config/initializers/`

3. Copy `blocks.sass` inside `your_wordless_theme/stylesheets/`

4. Add this line:
   ```
     new ExtractTextPlugin "../stylesheets/blocks.css"
   ```
   after `new ExtractTextPlugin "../stylesheets/screen.css"` in `your_wordless_theme/webpack.config.coffee`

5. Add this line:
   ```
     require('./stylesheets/blocks.sass');
   ```
   after `require('./stylesheets/screen.sass');` in `your_wordless_theme/theme/assets/main.js`

That's all.

6. Add this line:
   ```
     @import 'blocks'
   ```
   inside `your_wordless_theme/theme/assets/stylesheets/screen.sass`

That's all.
