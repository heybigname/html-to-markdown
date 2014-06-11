<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class ATag extends Tag
{
    public function render(Node $node, $text)
    {
        $href = $node->getAttribute('href');
        $text = $node->getText();
        return "[{$text}]({$href})";
    }
}
