window.MathJax = {
    loader: { load: ['[tex]/mathtools'] },
    tex: {
        packages: { '[+]': ['mathtools'] },
        inlineMath: [ // start/end delimiter pairs for in-line math
            ['$$', '$$'],
            ['\\(', '\\)']
        ],
        displayMath: [ // start/end delimiter pairs for display math
            ['$$$', '$$$'],
            ['\\[', '\\]']
        ],
        macros: { // not the one that we use usually, but MathJax does not support \boldmath
            v: ["\\boldsymbol{#1}", 1]
        },
        tags: 'ams',
    },
    svg: {
        fontCache: 'global'
    }
};
(function() {
    var script = document.createElement('script');
    // script.src = 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js';
    script.src = 'https://cdn.jsdelivr.net/npm/mathjax@3.2.0/es5/tex-chtml-full.js';
    script.async = true;
    document.head.appendChild(script);
})();