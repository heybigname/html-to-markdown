<?php namespace BigName\HtmlToMarkdown; 

class Converter
{
    public function convert($html)
    {
        $document = $this->getDomFromHtml($html);
        return $this->getDocumentNode($document);
    }

    private function getDocumentNode($document)
    {
        $bodyTags = $document->getElementsByTagName('body');
        $bodyTag = $bodyTags->item(0);

        $node = new Node;
        $node->setDepth(0);
        $node->setType('body');

        $this->hydrate($node, $bodyTag);

        return $node;
    }

    private function getDomFromHtml($html)
    {
        $document = new \DomDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $document->loadHTML('<?xml encoding="UTF-8">' . $html, LIBXML_HTML_NODEFDTD | LIBXML_NOENT);
        $document->encoding = 'UTF-8';
        $document->preserveWhiteSpace = false;
        return $document;
    }

    private function hydrate($parent, $element)
    {
        $childElements = $element->childNodes;

        if (is_null($childElements)) {
            return;
        }

        foreach ($childElements as $childElement) {
            $node = $this->createNodeFromElement($childElement, $parent);
            $parent->addChild($node);
            $this->hydrate($node, $childElement);
        }
    }

    private function createNodeFromElement($elem, $parent)
    {
        $node = new Node;
        $node->setParent($parent);
        $node->setType($elem->nodeName);
        $node->setText($elem->nodeValue);
        $node->setDepth($parent->getDepth() + 1);
        $node->setAttributes($this->getElementAttributes($elem));
        return $node;
    }

    private function getElementAttributes($elem)
    {
        if ( ! $elem->hasAttributes()) {
            return [];
        }

        $attributes = [];
        foreach ($elem->attributes as $attr) {
            $attributes[$attr->name] = $attr->value;
        }
        return $attributes;
    }
}
