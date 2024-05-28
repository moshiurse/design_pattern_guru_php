<?php

use DesignPattern\AbstractFactory\PageTemplate;
use DesignPattern\AbstractFactory\TemplateFactory;
use DesignPattern\AbstractFactory\TemplateRenderer;
use DesignPattern\AbstractFactory\TitleTemplate;
use DesignPattern\AbstractFactory\TwigRenderer;

class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}