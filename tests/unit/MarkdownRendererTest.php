<?php namespace BigName\HtmlToMarkdown;

use BigName\HtmlToMarkdown\Tags;

class MarkdownRendererTest extends \UnitTest
{
    private $converter;

    public function setUp()
    {
        $parser = new DomNodeParser();

        $renderer = new MarkdownRenderer();
        $renderer->addTag('#text', new Tags\TextTag());
        $renderer->addTag('strong', new Tags\StrongTag());
        $renderer->addTag('em', new Tags\EmTag());
        $renderer->addTag('li', new Tags\LiTag());
        $renderer->addTag('body', new Tags\BodyTag());
        $renderer->addTag('p', new Tags\PTag());
        $renderer->addTag('ul', new Tags\UlTag());
        $renderer->addTag('h1', new Tags\H1Tag());
        $renderer->addTag('a', new Tags\ATag());
        $renderer->addTag('ol', new Tags\OlTag());
        $renderer->addTag('img', new Tags\ImgTag());

        $this->converter = new Converter($parser, $renderer);
    }

    public function test_can_render()
    {
        $inputOutput = [
            'cats' => 'cats',
            '<strong>dogs</strong>' => '**dogs**',
        ];

        foreach ($inputOutput as $input => $output) {
            $this->assertEquals($output, $this->converter->convert($input));
        }
    }
}
