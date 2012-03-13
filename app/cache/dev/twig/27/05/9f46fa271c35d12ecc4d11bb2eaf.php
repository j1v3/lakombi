<?php

/* LaKombiMainBundle:Main:clip.html.twig */
class __TwigTemplate_27059f46fa271c35d12ecc4d11bb2eaf extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div align=\"center\" valign=\"top\">
\t<table>
\t\t<tr>
\t\t\t<td align=\"right\" colspan=\"6\"><img width=\"700px\" height=\"453px\" id=\"clip\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/gallery/1full.jpg"), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"500px\">&nbsp;</td>
\t\t\t<td width=\"40px\" align=\"right\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/icons/facebook.png"), "html", null, true);
        echo "\"/></td>
\t\t\t<td width=\"40px\" align=\"right\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/icons/delicious.png"), "html", null, true);
        echo "\"/></td>
\t\t\t<td width=\"40px\" align=\"right\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/icons/linkedin.png"), "html", null, true);
        echo "\"/></td>
\t\t\t<td width=\"40px\" align=\"right\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/icons/twitter.png"), "html", null, true);
        echo "\"/></td>
\t\t\t<td width=\"40px\" align=\"right\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/icons/google.png"), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td align=\"left\" colspan=\"6\"><h1>Commentaire :</h1></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td align=\"left\" colspan=\"6\">&nbsp;</td>
\t\t</tr>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:clip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
