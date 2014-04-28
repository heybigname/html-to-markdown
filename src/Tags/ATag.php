<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class ATag implements Tag
{
    public function render(Node $node, $text)
    {
        $href = $node->getAttribute('href');
        return "[{$node->getText()}]({$href})";
    }
}
