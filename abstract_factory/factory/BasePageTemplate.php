<?php

namespace DesignPattern\AbstractFactory;
use DesignPattern\AbstractFactory\PageTemplate;
use DesignPattern\AbstractFactory\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate){
        $this->titleTemplate = $titleTemplate;
    }

}