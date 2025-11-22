<?PHP

function generate($part, $content) {
    
    foreach ($content as $function) {
        if ($function["component"] === "paragraph") {
            $text = $function["text"];
            $ELEMENT[] = paragraph($text);
        } elseif ($function["component"] === "counter") {
            $slug = $function["slug"];
            $ELEMENT[] = counter($slug);
        } else {
            errout("invalid function");
        }
    }

    $OUTPUT[] = '<'.$part.'>';
    
    foreach ($ELEMENT as $element) {
        $OUTPUT[] = $element;
    }
    
    $OUTPUT[] = '</'.$part.'>';
    
    return $OUTPUT;

}
