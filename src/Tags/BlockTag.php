<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class BlockTag implements Tag
{
    public function render(Node $node, $text)
    {
        return "\n" . $text . "\n";
    }
}
