<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class H3Tag extends Tag
{
    public function render(Node $node, $text)
    {
        return "### {$text}\n";
    }
}
