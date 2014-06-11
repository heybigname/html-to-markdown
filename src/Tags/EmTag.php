<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class EmTag extends Tag
{
    public function render(Node $node, $text)
    {
        return '*' . $text . '*';
    }
}
