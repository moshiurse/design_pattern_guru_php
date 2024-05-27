<?php

use DesignPattern\AbstractFactory\TitleTemplate;

class PHPTitleTemplate implements TitleTemplate{

    public function getTemplateString(): string {
        return "<h1><?= \$my_title ?></h1>";
    }

}