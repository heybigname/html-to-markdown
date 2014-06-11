<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class H4Tag extends Tag
{
    public function render(Node $node, $text)
    {
        return "#### {$text}\n";
    }
}
