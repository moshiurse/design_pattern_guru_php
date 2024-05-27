<?php

namespace DesignPattern\AbstractFactory;

interface TemplateRenderer {
    public function render(string $templateString, array $arguments = []): string;
}