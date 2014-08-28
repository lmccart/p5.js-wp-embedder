<?php
  $dom = new DOMDocument();
  $dom->loadHTMLFile("index.html");

  $xpath = new DOMXpath($dom);
  $sketches = $xpath->query('//a[@class="p5"]');

  foreach ($sketches as $s) {
    $name = $s->nodeValue;
    $url = $s->getAttribute('href');

    $code = file_get_contents($url);

    $w = $s->getAttribute('data-width');
    $h = $s->getAttribute('data-height');
    $nocode = $s->getAttribute('data-nocode');

    $iframe = $dom->createElement('iframe');
    $iframe->setAttribute('src', 'p5_iframe.html');
    $iframe->setAttribute('id', 'exampleFrame');
    $iframe->setAttribute('width', $w);
    $iframe->setAttribute('height', $h);
    $s->parentNode->appendChild($iframe);

    $pre = $dom->createElement('pre');
    $pre->setAttribute('class', 'language-javascript');
    $s->parentNode->appendChild($pre);

    $editor = $dom->createElement('code', $code);
    $editor->setAttribute('id', 'editor');
    $editor->setAttribute('class', 'language-javascript');
    $pre->appendChild($editor);

    if ($nocode == 'true') {
      $pre->setAttribute('style', 'display:none');
    }

  }

  echo $dom->saveHTML();

?>

