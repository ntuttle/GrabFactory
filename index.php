<?
require_once __DIR__.'/core/core.php';

$HTML = new WWW($CFG);
echo implode(LF,$HTML->HTML);
?>