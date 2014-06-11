<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class PassThroughTag extends Tag
{
    public function render(Node $node, $text)
    {
        return $text;
    }
}
