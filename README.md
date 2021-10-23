mathjaxForKanboard
==============================

Functionality:
--------------

This plugin adds Mathjax capabilities to the Kanboard.

- Use $$ \alpha $$ for inline math.
- Use $$$ \beta $$$ for display/block math.
- An icon is also added to the text editor toolbar, which inserts a block math environment.
- The `Preview` functionality in the text editor now also renders MathJax!


This plugin uses a CDN (jsdelivr.net) to fetch the required JS files for MathJax.


Author
------

- Michael Zauner
- License MIT

Requirements
------------

- Kanboard >= 1.0.35 (tested on Kanboard 1.2.20)

Installation
------------

You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/mathjaxForKanboard`
3. Clone this repository into the folder `plugins/mathjaxForKanboard`

Note: Plugin folder is case-sensitive.


ToDos / Known Issues:
-----

- When using the `Preview`, and having an equation label defined, Mathjax will not render that equation because the label was already defined in the main body!


Sources
------

- MathJax: https://www.mathjax.org/
- Kanboard: https://kanboard.org/


Acknowledgment
-----
Creecros's MarkdownPlus was a big help in creating this plugin. See the original at: https://github.com/creecros/MarkdownPlus