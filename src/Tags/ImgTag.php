<?php namespace BigName\HtmlToMarkdown\Tags; 

use BigName\HtmlToMarkdown\Node;

class ImgTag implements Tag
{
    public function render(Node $node, $text)
    {
        $alt = $node->getAttribute('alt');
        $src = $node->getAttribute('src');
        $title = $this->getOptionalTitle($node->getAttribute('title'));
        return "![{$alt}]({$src}{$title})";
    }

    private function getOptionalTitle($title)
    {
        if ($title) {
            return ' "' . $title . '"';
        }
        return '';
    }
}
