<?php

/* LaKombiMainBundle:Main:home.html.twig */
class __TwigTemplate_79719c6b6c1e50b9943ca8abc743b04f extends Twig_Template
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
    - Accueil
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<table width=\"100%\" border=\"0\">
\t\t<tr>
 \t\t <td valign=\"top\">";
        // line 11
        $this->env->loadTemplate("LaKombiMainBundle:Main:clip.html.twig")->display($context);
        echo "</td>
         <td>&nbsp;</td>
 \t\t <td valign=\"top\" rowspan=\"2\">";
        // line 13
        $this->env->loadTemplate("LaKombiMainBundle:Main:gallery.html.twig")->display($context);
        echo "</td>
        </tr>
        <tr>
        \t<td colspan=\"2\">&nbsp;</td>
       \t</tr>
   \t</table>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
