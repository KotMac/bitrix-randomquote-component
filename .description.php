<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
    "NAME" => "Random Quote",
    "DESCRIPTION" => "Displays a random quote on the page.",
    "COMPLEX" => "N",
    "PATH" => array(
        "ID" => "content",
        "CHILD" => array(
            "ID" => "randomquote",
            "NAME" => "Random Quote"
        )
    ),
);