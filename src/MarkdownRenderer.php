<?php namespace BigName\HtmlToMarkdown; 

use BigName\HtmlToMarkdown\Tags\Tag;
use BigName\HtmlToMarkdown\Tags\TagNotFoundException;

class MarkdownRenderer
{
    private $tags = [];

    public function addTag($type, Tag $tag)
    {
        $this->tags[$type] = $tag;
    }

    public function render(Node $node, $content)
    {
        if ($node->getType() == '#text') {
            return $node->getText();
        }

        if ( ! isset($this->tags[$node->getType()])) {
            throw new TagNotFoundException('No rendering strategy found for tag type: ' . $node->getType());
        }

        return $this->tags[$node->getType()]->render($node, $content);
    }
} 
