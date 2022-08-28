<?php

/**
 * "news" => "news/INDEX" - method actionINDEX() in /NewsController
 * "news/([0-9]+)" => "news/VIEW" - method actionVIEW() in /NewsController
 */
return [
    "^news/([a-zA-Z]+)/([0-9]+)" => "news/view/$1/$2",
    "^news/([0-9]+)" => "news/view",
    "^products/([a-zA-Z]+)/([0-9]+)" => "product/list/$1/$2",
    "^products/list" => "product/list",
    "^news$" => "news/index",
    "^products$" => "product/index"
];