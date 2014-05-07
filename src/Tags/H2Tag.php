<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class H2Tag implements Tag
{
    public function render(Node $node, $text)
    {
        return "## {$text}\n";
    }
}
