<?php
  $dom = new DOMDocument();
  $dom->loadHTMLFile("index.html");

  $xpath = new DOMXpath($dom);
  $sketches = $xpath->query('//a[@class="p5-embed"]');

  foreach ($sketches as $s) {
    $name = $s->nodeValue;
    $url = $s->getAttribute('href');
    $s->setAttribute('class', 'p5_sketch_link');

    $code = file_get_contents($url);

    $w = $s->getAttribute('data-width');
    $h = $s->getAttribute('data-height');
    $nocode = $s->getAttribute('data-nocode');
    $fontsize = $s->getAttribute('data-fontsize');

    $iframe = $dom->createElement('iframe');
    $iframe->setAttribute('src', 'p5_iframe.html');
    $iframe->setAttribute('class', 'p5_exampleFrame');
    $iframe->setAttribute('width', $w);
    $iframe->setAttribute('height', $h);
    $s->parentNode->appendChild($iframe);

    $pre = $dom->createElement('pre');
    $pre->setAttribute('class', 'language-javascript');
    $s->parentNode->appendChild($pre);

    $editor = $dom->createElement('code', $code);
    $editor->setAttribute('class', 'p5_editor language-javascript');
    $pre->appendChild($editor);

    if ($nocode == 'true') {
      $pre->setAttribute('style', 'display:none');
    }

    if ($fontsize) {
      $lineheight = $fontsize * 1.45;
      $pre->setAttribute('style', 'font-size:'.$fontsize.'px !important;');
      $editor->setAttribute('style', 'line-height:'.$lineheight.'px !important');
    }
  }

  echo mb_convert_encoding($dom->saveHTML(), 'HTML-ENTITIES', 'UTF-8');
?>

