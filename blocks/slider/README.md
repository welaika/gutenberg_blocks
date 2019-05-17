# Slider block

This block implements an horizontal fullwidth slider using an image as background and a text as front text.

*Editor*
![](editor.png)

*Frontend*
![](frontend.png)


## Installation

1. Copy `slider.php` inside `your_wordless_theme/config/initializers/blocks/`

2. Insert this line
   ```
     new Slider();
   ```
   inside `create_blocks()` function in `your_wordless_theme/config/initializers/custom_gutenberg_acf_blocks.php`

3. Install [Swiper](https://github.com/nolimits4web/swiper/) running `yarn install swiper` inside your theme root folder

4. Copy `_slider.js.coffee` inside `your_wordless_theme/theme/assets/javascripts/blocks/`

5. Include it adding `import './blocks/_slider.js.coffee'` inside `your_wordless_theme/theme/assets/javascripts/application.js.coffee`

6. Copy `_slider.sass` inside `your_wordless_theme/theme/assets/stylesheets/blocks/`

7. Include it adding `@import 'blocks/slider'` inside `your_wordless_theme/theme/assets/stylesheets/blocks.sass`

8. Copy `_slider.pug` file must be copied inside `your_wordless_theme/theme/views/blocks/`

9. Ensure you have defined these two SASS variables, and/or included them, before `blocks/slider` inclusion in `blocks.sass` and/or before `blocks` inclusion in `screen.sass`:
    ```
      $light-color: white
      $primary-color: red
    ```
