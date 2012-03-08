<?php

/* LaKombiMainBundle:Main:menu.html.twig */
class __TwigTemplate_cef783eb806adfce6e4ada1cd681dc8b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t<div  id=\"bar\">
\t\t\t<table width=\"1193px\" style=\"border-collapse: collapse; border-width: 10px;\">
\t\t\t\t<tr>
\t\t\t\t\t<td id=\"menu\" width=\"350px\">&nbsp;</td>
\t\t\t\t\t<td id=\"menu\" align=\"center\"><a id=\"amenu\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaKombiMainBundle_home"), "html", null, true);
        echo "\">Accueil</a></td>
\t\t\t\t\t<td id=\"menu\" width=\"15px\">&nbsp;</td>
\t\t\t\t\t<td id=\"menu\" align=\"center\"><a id=\"amenu\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaKombiMainBundle_news"), "html", null, true);
        echo "\">Actualit&eacute;s</a></td>
\t\t\t\t\t<td id=\"menu\" width=\"15px\">&nbsp;</td>
\t\t\t\t\t<td id=\"menu\" align=\"center\"><a id=\"amenu\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaKombiMainBundle_about"), "html", null, true);
        echo "\">Biographie</a></td>
\t\t\t\t\t<td id=\"menu\" width=\"15px\">&nbsp;</td>
\t\t\t\t\t<td id=\"menu\" align=\"center\"><a id=\"amenu\" href=\"#\">Boutique</a></td>
\t\t\t\t\t<td id=\"menu\" width=\"15px\">&nbsp;</td>
\t\t\t\t\t<td id=\"menu\" align=\"center\"><a id=\"amenu\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaKombiMainBundle_contact"), "html", null, true);
        echo "\">Contact</a></td>
       \t\t\t</tr>
\t\t   \t\t<tr>
\t\t \t\t\t<td align=\"right\" colspan=\"10\">
\t\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td align=\"right\">Pseudo :</td>
\t\t\t\t\t\t\t\t<td align=\"center\"><form><input type=\"text\" size=\"4\"></form></td>
\t\t\t\t\t\t\t\t<td align=\"right\">Mot de passe :</td>
\t\t\t\t\t\t\t\t<td align=\"center\"><form><input type=\"text\" size=\"4\"></form></td>
\t\t\t\t\t\t\t\t<td align=\"left\"><form><input type=\"submit\" value=\"Ok\"></form></td>
\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t<td align=\"right\">Rechercher :</td>
\t\t\t\t\t\t\t\t<td align=\"center\"><form><input type=\"text\" size=\"6\"></form></td>
\t\t\t\t\t\t\t\t<td align=\"left\"><form><input type=\"submit\" value=\"Ok\"></form></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
