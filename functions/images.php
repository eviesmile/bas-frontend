<?PHP

// insImage - outputs image
function insImage($src, $VARA = "alt", $VARC = null, $VARW = null, $VARH = null) {
	
	if ($VARW) { $WIDTH = 'width="'.$VARW.'"'; }
	if ($VARH) { $HEIGHT = 'height="'.$VARH.'"'; }
	if ($VARC) { $CLASS = 'class="'.$VARC.'"'; }
	if ($VARA) { $ALT = 'alt="'.$VARA.'"'; }
	
	
	return <<<IMG
	<img $CLASS $ALT $WIDTH $HEIGHT src="$src" />
IMG;
}
