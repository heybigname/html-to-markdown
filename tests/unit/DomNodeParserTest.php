<?php namespace BigName\HtmlToMarkdown;

class DomNodeParserTest extends \UnitTest
{
    private $parser;

    public function setUp()
    {
        parent::setUp();
        $this->parser = new DomNodeParser;
    }

    public function test_can_create()
    {
        $this->assertInstanceOf('BigName\HtmlToMarkdown\DomNodeParser', $this->parser);
    }

    private function getHtml()
    {
        return <<<EOF
<a href="http://yahoo.com">Go to Yahoo</a>
<strong>cats favor the <em>weak</em></strong>
EOF;
    }
}
