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
        $renderer->addTag('body', new Tags\PassThroughTag());
        $renderer->addTag('p', new Tags\PTag());
        $renderer->addTag('ul', new Tags\BlockTag());
        $renderer->addTag('h1', new Tags\H1Tag());
        $renderer->addTag('a', new Tags\ATag());
        $renderer->addTag('ol', new Tags\BlockTag());
        $renderer->addTag('img', new Tags\ImgTag());
        $renderer->addTag('script', new Tags\HtmlTag());
        $renderer->addTag('#cdata-section', new Tags\CdataSectionTag());

        $this->converter = new Converter($parser, $renderer);
    }

    private function runConversion($inputOutput)
    {
        foreach ($inputOutput as $input => $output) {
            $this->assertEquals($output, $this->converter->convert($input));
        }
    }

    public function test_can_render_plain_text()
    {
        $this->runConversion([
            'cats' => 'cats',
            "cats and\t dogs & robots and\n  . dogs" => "cats and\t dogs & robots and\n  . dogs",
        ]);
    }

    public function test_can_render_bold_tags()
    {
        $this->runConversion([
            '<strong>dogs</strong>' => '**dogs**',
            '<strong> dogs</strong>' => ' **dogs**',
            '<strong>  dogs</strong>' => '  **dogs**',
            '<strong> dogs </strong>' => ' **dogs** ',
            '<strong> dogs  </strong>' => ' **dogs**  ',
        ]);
    }

    public function test_can_render_em_tags()
    {
        $this->runConversion([
            '<strong>dogs</strong>' => '**dogs**',
            '<strong> dogs</strong>' => ' **dogs**',
            '<strong>  dogs</strong>' => '  **dogs**',
            '<strong> dogs </strong>' => ' **dogs** ',
            'e<e> dogs  </e>' => ' **dogs**  ',
        ]);
    }
}
