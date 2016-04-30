<?php

namespace PatternLab\PatternEngine\Twig;

class PatternDataIncludeNode extends \Twig_Node_Include
{
    use PatternDataNodeTrait;

    public function __construct(\Twig_Node_Include $originalNode, $data)
    {
        parent::__construct(
          $originalNode->getNode('expr'),
          $originalNode->getNode('variables'),
          $originalNode->getAttribute('only'),
          $originalNode->getAttribute('ignore_missing'),
          $originalNode->getLine(),
          $originalNode->getNodeTag()
        );

        $this->data = $data;
    }
}
