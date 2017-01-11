<?php

class oEmbedVilloid {

  var $oembed_endpoint;
  var $oembed_format;

  function __construct()
  {
    $this->oembed_format = '#https?://[a-zA-Z0-9-]{2,63}\\.villoid\\.com/.*#i';
    $this->oembed_endpoint = 'https://store-web.villoid.com/oembed/';

    $this->new_oembed();
  }

  function __destruct() {}

  function new_oembed()
  {
    wp_oembed_add_provider( $this->oembed_format, $this->oembed_endpoint, true );
  }

}

$oembed_villoid = new oEmbedVilloid;
