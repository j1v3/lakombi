<?php

/* LaKombiMainBundle:Main:about.html.twig */
class __TwigTemplate_0acf8a52ff426bc115e3da0f8d91fe03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - Biographie
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
