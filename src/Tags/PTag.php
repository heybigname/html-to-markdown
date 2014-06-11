<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class PTag extends Tag
{
    public function render(Node $node, $text)
    {
        return $this->removeBeginningWhitespace($text);
    }
}
