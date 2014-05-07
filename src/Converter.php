<?php namespace BigName\HtmlToMarkdown; 

class Converter
{
    /**
     * @var DomNodeParser
     */
    private $parser;
    /**
     * @var MarkdownRenderer
     */
    private $renderer;

    public function __construct(DomNodeParser $parser, MarkdownRenderer $renderer)
    {
        $this->parser = $parser;
        $this->renderer = $renderer;
    }

    public function convert($html)
    {
        $node = $this->parser->parse($html);
        return $node->render($this->renderer);
    }
} 
