<?PHP

//  Page ID Set
$PGID = $_GET["id"];

//  Function Files
$FUNFILES = glob(__DIR__ . "/functions/*.php");
foreach ($FUNFILES as $file) { include $file; }

//  Plugin Files
$PLUGFILES = glob(__DIR__ . "/plugins/*.php");
foreach ($PLUGFILES as $file) { include $file; }

//  Site Info
$SITEINFO = yaml_parse_file($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/siteinfo.yaml");

//  Page Info
$PGINFOYAML = glob($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/static/*.yaml");
foreach ($PGINFOYAML as $file) {
    yaml_parse_file($file);
}

//  Specific Page Variables
$PGCONTENT = glob($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/static/*.yaml");

$MAIN["YAML"] = yaml_parse_file($PGCONTENT[$PGID]);

$HTML["MAIN"] = implode("", generate("main", $MAIN["YAML"]) );

//  Set Generative Variables
$TITLE = $SITEINFO["name"];
$LANG = $SITEINFO["lang"];


//  Generate Page
echo <<<HTML
<html lang=$LANG>
    <head>
        <title>$TITLE</title>
    </head>

    <body>
        {$HTML["MAIN"]}
    </body>
</html>
HTML;
?>
