<?php

/* LaKombiUsersBundle:User:user.html.twig */
class __TwigTemplate_6156af448d94539b099c9b7957f4b55d extends Twig_Template
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
    - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo "</h1>
    <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "adress1"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "nickname"), "html", null, true);
        echo "
    </p>
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Retour à l'accueil</a>
";
    }

    public function getTemplateName()
    {
        return "LaKombiUsersBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
