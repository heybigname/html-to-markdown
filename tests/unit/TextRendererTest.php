<?php namespace BigName\HtmlToMarkdown;

class TextRendererTest extends \UnitTest
{
    public function test_can_render()
    {
        $converter = new Converter;
        $node = $converter->convert($this->getHtml());

        $renderer = new TextRenderer;

        $renderer->render($node);
    }

    private function getHtml()
    {
        return <<<EOF
<img src="http://catssite/bob.jpg" alt="dogs" title="title"/>
<a href="http://yahoo.com">Go to Yahoo!</a>
<h1>FUCKED YOUR mother</h1>
<p>
	<strong>PRE-COLONOSCOPY MEDICATION INSTRUCTIONS</strong>
</p>
<p>
	<strong>Note: You are to continue all of your heart, blood pressure and lung medications with a few sips of water at least 2 hours before your procedure. Make certain that the doctor is aware of any blood thinners (such as Coumadin or Plavix), arthritis medications, diet medications, herbal supplements, diabetes medications or insulin you are taking.</strong>
</p>
<p>
	Unless otherwise directed, the following medications <em>should be avoided</em> during the week prior to your Colonoscopy, as they may increase the risk of bleeding or other complications during the procedure.
</p>
<ul>
	<li>Aspirin, or aspirin containing products (Check the label of any over-the-counter pain or cold medications.)</li>
	<li>Non prescription Ibuprofen (Motrin, Advil, Nuprin, Medipren, Aleve, etc.)</li>
	<li>Prescription anti-inflammatory medications (Anaprox, Ansaid, Butazolidin, Celebrex, Clinoril, Daypro, Dolobid, Feldene, Indocin, Meclomen, Motrin, Nalfon, Naprosyn, Orudis, Ponstel, Relafen, Tolectin, Voltarin, etc.)</li>
	<li>Iron supplements (and vitamin tablets containing iron)</li>
	<li>Pepto-Bismol</li>
	<li>Fish Oil</li>
	<li>Vitamin E</li>
	<li>Ginkgo and Ginseng Supplements</li>
	<li>St. John’s Wart</li>
</ul>
<p>
	Although you cannot take Aspirin or Ibuprofen, YOU MAY TAKE TYLENOL.
</p>
<p>
	<strong>COLONOSCOPY: NULYTELY OR COLYTE PREP INSTRUCTIONS</strong>
</p>
EOF;
    }
}
