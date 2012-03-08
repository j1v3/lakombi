<?php

/* LaKombiMainBundle:Main:footer.html.twig */
class __TwigTemplate_366dcba32b6aae05e2930fe6f2e5d703 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <div id=\"footer\">
\t\t\t<table border=\"0\" width=\"1000px\" align=\"center\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"33%\" align=\"center\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaKombiMainBundle_contact"), "html", null, true);
        echo "\">Contact</a></td>
\t\t\t\t\t<td width=\"33%\" align=\"center\"><a href=\"mailto:webmaster@lakombi.com?subject=[LaKombi.com]\">Webmaster</a></td>
\t\t\t\t\t<td width=\"33%\" align=\"center\"><a href=\"http://www.facebook.com/pages/IA-Production-nos-Studios/156051627808703\" target=\"_blank\">IA Production</a></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\" width=\"100%\"  align=\"center\" style=\"vertical-align: middle\">&copy; 2012 LaKombi.com - All rights reserved.</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
