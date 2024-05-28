<?php

namespace DesignPattern\AbstractFactory;
use DesignPattern\AbstractFactory\TemplateRenderer;

class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return "<?php echo $templateString ?>";
    }
}