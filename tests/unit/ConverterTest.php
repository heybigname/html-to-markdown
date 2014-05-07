<?php namespace BigName\HtmlToMarkdown; 

class ConverterTest extends \UnitTest
{
    private $converter;

    public function setUp()
    {
        parent::setUp();

        $this->converter = new Converter(new DomNodeParser(), new MarkdownRenderer());
    }

    public function test_can_create()
    {
        $this->assertInstanceOf('BigName\HtmlToMarkdown\Converter', $this->converter);
    }
}
