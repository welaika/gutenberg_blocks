# Top news block

This block show three selected news as TOP news.


## Installation

1. Copy `topnews.php` inside `your_wordless_theme/config/initializers/blocks/`

2. Insert this line
   ```
     new Topnews();
   ```
   inside `create_blocks()` function in `your_wordless_theme/config/initializers/custom_gutenberg_acf_blocks.php`


3. Copy `_topnews.sass` inside `your_wordless_theme/theme/assets/stylesheets/blocks/`

4. Include it adding `@import 'blocks/topnews'` inside `your_wordless_theme/theme/assets/stylesheets/blocks.sass`

5. Copy `_topnews.pug` file must be copied inside `your_wordless_theme/theme/views/blocks/`
