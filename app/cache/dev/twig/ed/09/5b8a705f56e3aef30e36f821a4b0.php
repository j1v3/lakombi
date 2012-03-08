<?php

/* LaKombiMainBundle:Main:teasing.html.twig */
class __TwigTemplate_ed095b8a705f56e3aef30e36f821a4b0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
\t<a href=\"#\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/news.png"), "html", null, true);
        echo "\"/></a>
</div>
\t
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:teasing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
