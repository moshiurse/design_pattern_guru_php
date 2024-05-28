<?php

use DesignPattern\AbstractFactory\PageTemplate;
use DesignPattern\AbstractFactory\TemplateFactory;
use DesignPattern\AbstractFactory\TitleTemplate;
use DesignPattern\AbstractFactory\PHPPageTemplate;
use DesignPattern\AbstractFactory\TemplateRenderer;

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}