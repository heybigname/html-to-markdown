<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class UlTag implements Tag
{
    public function render(Node $node, $text)
    {
        return $text;
    }
}
