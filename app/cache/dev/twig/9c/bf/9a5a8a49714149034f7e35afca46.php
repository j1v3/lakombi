<?php

/* LaKombiMainBundle:Main:teaser.html.twig */
class __TwigTemplate_9cbf9a5a8a49714149034f7e35afca46 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div width=\"100%\" style=\"vertical-align: top\">
\t<a href=\"#\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/teaser.png"), "html", null, true);
        echo "\"/></a>
\t<a href=\"#\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/teaser.png"), "html", null, true);
        echo "\"/></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
