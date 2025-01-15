<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class RandomQuoteComponent extends \CBitrixComponent
{
    private $quotes = [
        "Работа не волк. Никто не волк. Только волк — волк.",
        "Если закрыть глаза, становится темно.",
        "В Риме был, а папы не видал.",
        "Тут — это вам не там.",
        "Если кто-то громко плачет, это значит, что все в порядке."
    ];

    public function executeComponent()
    {
        $this->arResult["QUOTE"] = $this->getRandomQuote();
        $this->includeComponentTemplate();
    }

    private function getRandomQuote()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}