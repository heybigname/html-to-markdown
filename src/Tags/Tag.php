<?php namespace BigName\HtmlToMarkdown\Tags;

use BigName\HtmlToMarkdown\Node;

abstract class Tag
{
    abstract public function render(Node $node, $text);

    protected function removeBeginningWhitespace($text)
    {
        return preg_replace("/^\s+/", '', $text);
    }

    protected function arrayToHtmlAttributes($attributes)
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

    protected function cutWhitespaceFromText($text)
    {
        preg_match('/^(\s*)((\w|\s\w)*)(\s*)$/', $text, $matches);
        if (count($matches) != 5) {
            return ['', $text, ''];
        }
        return [$matches[1], $matches[2], $matches[4]];
    }
}
