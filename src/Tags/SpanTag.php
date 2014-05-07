<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class SpanTag implements Tag
{
    public function render(Node $node, $text)
    {
        return $text;
    }
}
