<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class UTag implements Tag
{
    public function render(Node $node, $text)
    {
        return $text;
    }
}
