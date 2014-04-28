<?php namespace BigName\HtmlToMarkdown;

class Node
{
    private $parentNode;
    private $childNodes = [];

    private $depth;

    private $type;
    private $text;

    private $attributes = [];

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getAttribute($name)
    {
        if ( ! isset($this->attributes[$name])) {
            return null;
        }
        return $this->attributes[$name];
    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setParent(Node $parentNode)
    {
        $this->parentNode = $parentNode;
    }

    public function getParent()
    {
        return $this->parentNode;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function addChild(Node $childNode)
    {
        $this->childNodes[] = $childNode;
    }

    public function hasChildren()
    {
        return ! is_null($this->childNodes);
    }

    public function getChildren()
    {
        return $this->childNodes;
    }

    public function render(MarkdownRenderer $renderer)
    {
        $output = '';
        foreach ($this->getChildren() as $child) {
            $output .= $child->render($renderer);
        }

        return $renderer->render($this, $output);
    }
}
