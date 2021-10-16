mathjaxForKanboard
==============================

This Pluging adds Mathjax capabilities to the Kanboard.

Use $$ \alpha $$ or \\( \alpha \\) for inline math.
Use $$$ \alpha $$$ or \\[ \alpha \\] for display math.

This plugin uses a CDN (jsdelivr.net) to fetch the required JS files for MathJax.

Sources
------

- MathJax: https://www.mathjax.org/
- Kanboard: https://kanboard.org/

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

ToDos
-----

- Add icons to the text editor toolbar to insert a `$$ $$` code fragment
- Get MathJax to also render when clicking on the `Preview` icon in the editor toolbar
