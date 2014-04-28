<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class StrongTag implements Tag
{
    public function render(Node $node, $text)
    {
        return '**' . $text . '**';
    }
}
