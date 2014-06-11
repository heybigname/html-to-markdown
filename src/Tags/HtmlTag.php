<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class HtmlTag extends Tag
{
    public function render(Node $node, $text)
    {
        $html  = '<' . $node->getType() . $this->arrayToHtmlAttributes($node->getAttributes()) . '>';
        $html .= $node->getText() ;
        $html .= '</' . $node->getType() . '>';
        return $html;
    }
}
