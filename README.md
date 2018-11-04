# District five

Please excuse the awful code, it was extracted from a live website (The previous
dev could not be found)
This repo only tracks the adaptations to make this a processwire-based website.

## concepts
To make the website as flexible as possible, the main (and only) page is
structured as blocks, that can be arraged, duplicated, etc.... They are:

- Intro block
  - Contains the website title and the interactive image.
  - Should probably remain the first block
- Links block
  - either one or two arbitrary links, big or small
  - links with an @ will be considered to be emails, and rendered with 'mailto'
- Video block
  - A block for displaying a video.
  - Handles youtube, vimeo and mp4 urls (mp4 urls are not recommended: the
  styling might fail)
- Generic block
  - Name is legacy. Should be: text block
  - A block with a title and between 1 and 4 columns of text. text size depends
  on the number of columns
- about block
  - The 'about' section of the website, showing the different players, a photo,
  etc...