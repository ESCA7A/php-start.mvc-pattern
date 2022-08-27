<?php

/**
 * "news" => "news/INDEX" - method actionINDEX() in /NewsController
 * "news/([0-9]+)" => "news/VIEW" - method actionVIEW() in /NewsController
 */
return array(
    "^news/([a-zA-Z]+)/([0-9]+)" => "news/view/$1/$2",
    "^news/([0-9]+)" => "news/view",
    "^products/([0-9]+)" => "product/list",
    "^news$" => "news/index",
    "^products$" => "product/list"
);