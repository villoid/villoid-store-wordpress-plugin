<?php

class oEmbedVilloid {

  var $oembed_endpoint;
  var $oembed_format;

  function __construct()
  {
    $this->oembed_endpoint = 'https://.*.villoid.com/oembed/';
    $this->oembed_format = '#https?://(www\\.)?.*villoid.com/.*#i';

    $this->new_oembed();
  }

  function __destruct() {}

  function new_oembed()
  {
    wp_oembed_add_provider( $this->oembed_format, $this->oembed_endpoint );
  }

}

$oembed_villoid = new oEmbedVilloid;
