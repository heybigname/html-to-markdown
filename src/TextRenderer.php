<?php namespace BigName\HtmlToMarkdown; 

class TextRenderer
{
    public function render(Node $node)
    {
        echo str_repeat('--', $node->getDepth()) . $node->getType() . "\n";

        foreach ($node->getChildren() as $child) {
            $this->render($child);
        }
    }
} 
