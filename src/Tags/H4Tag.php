<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class H4Tag implements Tag
{
    public function render(Node $node, $text)
    {
        return "#### {$text}\n";
    }
}
