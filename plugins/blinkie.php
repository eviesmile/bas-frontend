<?PHP

// blinkie - Generates page blinkie
function blinkie($SIZE1, $img, $name, $LINK = null, $newtab = true) {
    
    if ($SIZE1 === 88) {
        $SIZE = "88x31";
        $WIDTH = 88;
        $HEIGHT = 31;
    } else if ($VARS === 150) {
        $SIZE = "150x20";
        $WIDTH = 150;
        $HEIGHT = 20;
    } else {
        errout(500, "An invalid blinkie size was given");
    }
    
    if ($LINK) {
        if ($newtab) {
            $newtab = 'target="_blank"';
        }
        $LINK1 = '<a href="$LINK" '.$newtab.' >';
        $LINK2 = '</a>';
    }
    
    return <<<BLINK
    
    $LINK1 <img src="$img" width="$WIDTH" height="$HEIGHT" /> $LINK2
    
BLINK; }
