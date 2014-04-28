<?php namespace BigName\HtmlToMarkdown\Tags;

use BigName\HtmlToMarkdown\Node;

interface Tag
{
    public function render(Node $node, $text);
}
