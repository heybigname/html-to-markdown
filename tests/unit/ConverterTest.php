<?php namespace BigName\HtmlToMarkdown;

function dd($var)
{
    die(var_dump($var));
}

class ConverterTest extends \UnitTest
{
    public function setUp()
    {
        parent::setUp();
        $this->converter = new Converter;
    }

    public function test_can_create()
    {
        $this->assertInstanceOf('BigName\HtmlToMarkdown\Converter', $this->converter);
    }

    public function test_can_convert()
    {
        $node = $this->converter->convert($this->getHtml());

//        dd($node);
    }

    private function getHtml()
    {
        return <<<EOF
<a href="http://yahoo.com">Go to Yahoo</a>
<strong>cats favor the <em>weak</em></strong>
EOF;
    }
}
