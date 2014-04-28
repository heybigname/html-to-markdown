<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class BodyTag implements Tag
{
    public function render(Node $node, $text)
    {
        return $text;
    }
}
