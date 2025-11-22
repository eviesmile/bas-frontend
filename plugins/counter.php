<?PHP

// counter($slug) - show page counter - $slug = page slug
function counter($slug, $tag = "like my page?") { return <<<EOF

<div id="counter">
    <span>$tag</span><br>
    <iframe
        src="//incr.easrng.net/badge?key=$slug"
        style="background: url(//incr.easrng.net/bg.gif)"
        title="increment badge" width="88" height="31"
        frameborder="0"
        >
    </iframe>
</div>

EOF;}
