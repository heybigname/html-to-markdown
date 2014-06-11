<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class StrongTag extends Tag
{
    public function render(Node $node, $text)
    {
        list($preWhitespace, $text, $postWhitespace) = $this->cutWhitespaceFromText($text);
        return "{$preWhitespace}**{$text}**$postWhitespace";
    }
}
