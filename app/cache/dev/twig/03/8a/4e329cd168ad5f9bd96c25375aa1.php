<?php

/* LaKombiMainBundle:Main:header.html.twig */
class __TwigTemplate_038a4e329cd168ad5f9bd96c25375aa1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    \t<table width=\"1193px\" height=\"200px\">
    \t\t<tr>
    \t\t\t<td valign=\"top\" align=\"left\" id=\"top\">
\t\t\t\t\t<div id=\"logo\"><a href=\"http://cluster003.ovh.net/~lakombi/app_dev.php/\" alt=\"Rejouer l'intro\"><img align=\"left\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/logo1.png"), "html", null, true);
        echo "\" /></a><div>
    \t\t\t</td>
\t\t\t</tr>
\t\t</table>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
