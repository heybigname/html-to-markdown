<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class PTag implements Tag
{
    public function render(Node $node, $text)
    {
        $text = preg_replace("/^\s+/", '', $text);
        return $text;
    }
}
