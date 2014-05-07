<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class HtmlTag implements Tag
{
    public function render(Node $node, $text)
    {
        return '<' . $node->getType() . $this->htmlAttributes($node->getAttributes()) . '>' . $node->getText() . '</' . $node->getType() . '>';
    }

    private function htmlAttributes($attributes)
    {
        if ( ! is_array($attributes)) {
            return '';
        }

        $html = '';

        foreach ($attributes as $key => $value) {
            $html .= " {$key}=\"{$value}\"";
        }

        return $html;
    }
}
