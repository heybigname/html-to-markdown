<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class ScriptTag implements Tag
{
    public function render(Node $node, $text)
    {
        return '<script' . $this->htmlAttributes($node->getAttributes()) . '>' . $node->getText() . '</script>';
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
