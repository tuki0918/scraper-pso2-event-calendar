<?php

namespace App\Parser\Core;

use Symfony\Component\CssSelector\CssSelectorConverter;
use Symfony\Component\DomCrawler\Crawler;

abstract class ParseEngine implements ParseEngineInterface
{
    /** @var Crawler */
    protected $crawler;
    /** @var CssSelectorConverter */
    protected $cssSelector;

    /**
     * ParseEngine constructor.
     */
    public function __construct()
    {
        $this->crawler = new Crawler();
        $this->cssSelector = new CssSelectorConverter();
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->crawler->clear();
        $this->crawler->addContent($content);
        return $this;
    }
}