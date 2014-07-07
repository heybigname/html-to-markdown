<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class HrTag extends Tag
{
    public function render(Node $node, $text)
    {
        return '---------------------------------------';
    }
}
