# Config

    - SITE_URL this is a site where a list of links to generate images will be taken.

    - ARRAY_LENGTH  indicates the number of pictures that will be displayed.

# PictureController

Class in which creates an object and runs its methods to generate an array.

# PictureModel

    Reads an array of pages and returns an array of links with the required number of elements.

    Methods:
    - readUrl() => reads an array of data from the site and returns the required number of randomly generated elements.
    - chekUrlToExists() => takes the term in which the link to the site, and returns the bool accordingly if the site is true.
    - pictureCheck() => takes an array of links to sites and returns an array of links to the image.