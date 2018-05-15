<div id = "result">Roll No 103 Pass</div> 

$doc = new DomDocument();
$doc->loadHTMLFile('http://www.results.com');
$thediv = $doc->getElementById('result');
echo $thediv->textContent;

