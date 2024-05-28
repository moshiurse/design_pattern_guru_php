<?php

namespace DesignPattern\AbstractFactory;
interface TemplateFactory{

    public function createTitleTemplate();
    public function createPageTemplate(): PageTemplate;
    public function getRenderer(): TemplateRenderer;
    
}