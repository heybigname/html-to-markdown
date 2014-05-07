<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class StrongTag implements Tag
{
    public function render(Node $node, $text)
    {
        return preg_replace('/^(\s*)((\w|\s\w)*)(\s*)$/', '$1**$2**$4', $text);
    }
}
