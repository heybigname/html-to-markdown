<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class CdataSectionTag extends Tag
{
    public function render(Node $node, $text)
    {
        return $text;
    }
}
