<?php namespace BigName\HtmlToMarkdown;

use BigName\HtmlToMarkdown\Tags;

class MarkdownRendererTest extends \UnitTest
{
    public function test_can_render()
    {
        $converter = new DomNodeParser();
        $node = $converter->parse($this->getHtml());

        $renderer = new MarkdownRenderer();
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

        $output = $node->render($renderer);

        echo $output;
    }

    public function test_can_shutup()
    {

    }
    private function getHtml()
    {
        return <<<EOF
<img src="http://catssite/bob.jpg" alt="dogs" title="title"/>
<a href="http://yahoo.com">Go to Yahoo!</a>
EOF;
    }
}
