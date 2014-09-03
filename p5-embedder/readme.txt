=== p5.js Embedder ===
Contributors: lmccart
Tags: p5.js, p5, javascript, js, teaching, processing
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin embeds a p5.js sketch into a wordpress blog.

== Description ==

####To include a p5 sketch:

1. Upload the sketch.js file to Media Library.

2. While editing post, choose 'Add Media' and choose the uploaded JS file, it will
add a link in your post.

3. Add class='p5-embed' to the link to specify it should be parsed as a p5 sketch.
`<a href='#' class='p5-embed'>your_filename</a>`

4. If you would like to specify the height and width of the frame of your sketch, use
the data-height and data-width tags (you can specify one or both of these).
`<a href='#' data-height='400' data-width='600' class='p5-embed'>your_filename</a>`

5. By default the sketch and code are displayed. If you would like to hide the code, 
use the tag data-nocode='true'.
`<a href='#' data-nocode='true' class='p5-embed'>your_filename</a>`

####Including media

To include external files (for example, an image via loadImage) you will need to upload the files individually to wordpress and use the full blog url or the upload in the JS code.
  

== Installation ==

1. Choose 'Plugins', 'Add New', 'Upload', and upload p5-embedder.zip.
2. Activate the plugin. See Description for instructions for use in posts.
