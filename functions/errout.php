<?PHP

// errout - returns http/500 for something that went wrong
function errout($reason = null, $errcode = 500) {
  http_response_code($errcode);
	if (!$reason) {
		$reason = "A reason wasn't given for this error. You should contant the webmaster.";
	}
	echo <<<EOF
		<div style="background-color: #990000">
			THERE HAS BEEN A MAJOR ERROR.<br>$reason
		</div>
EOF; exit;}
    
