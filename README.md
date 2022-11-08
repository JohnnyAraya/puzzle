# Puzzle-With-File-Uploads

Using the attached sliding puzzle game (or your own if you prefer) modify the code so it works in the following way:


When the page is loaded initially, the default image should be used for the puzzle
This image and all its tiles are stored in the "images" directory
Three new buttons are now available in the "control panel" area (provided)
"Choose File" which allows you to choose an image for uploading
"Upload" which submits the uploaded file
When this button is pressed your game should behave in the following way
If any errors occur, you should display a JavaScript alert and reset the game to the default image
Possible errors are:
* File is not an image
* allow jpeg, png, and gif images
* File is not at least 612 pixels on one of the sides
* File is too large (max size should be 1.5MB)
* No file was uploaded
All files in the "uploads" directory except those starting with a dot should be deleted use scanDir() and unlink() for this.
If all is good with the upload, it should be scaled down to be 612 pixels on the longest side
The final scaled image should be modified slightly so that both the height and width are multiples of 3
612 is already a multiple of three
The other dimension will need to be reduced by at most two pixels
This scaled image should be saved as "guideImage.jpg" in the "uploads" folder
After scaling, you should slice the guide image into nine equal-sized tiles and saved as "tile0.jpg" - "tile 8.jpg"
For simplicity, save all slices as jpegs
You will create a blank image by doing the following:
* create a new image resource in php of the proper size
* Sample the center pixel in the guide image
* use imagecolorat() for this
* extract the r, g, b values for that color
* read the php manual to find out how to extract the rgb values
* Invert the color extracted and use the inverted color for the blank
* fill the new image resource with the new color
* use imagefill() for this
* Save the image as "blank.jpg" in the "uploads" folder
* "Reset to default puzzle image"
  When this button is pressed, the page is reloaded using the default image for the puzzle
  
  
## Teams

* Johnny/Peyton/Naihrobi/Michael
* Jon/JP/Eli/Leo

Include a document describing your contribution to the project
