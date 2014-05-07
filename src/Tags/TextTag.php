<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class TextTag implements Tag
{
    public function render(Node $node, $text)
    {
        return $this->cleanInitialWhitespace($node->getText());
    }

    private function cleanInitialWhitespace($value)
    {
        return preg_replace('/^[ \t]/m', '', $value);
    }
}
