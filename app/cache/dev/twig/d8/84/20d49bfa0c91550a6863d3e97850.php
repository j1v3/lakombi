<?php

/* ::base.html.twig */
class __TwigTemplate_d88420d49bfa0c91550a6863d3e97850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
     \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"Content-Language\" content=\"fr, en\" />
        <meta name=\"author\" content=\"webmaster@lakombi.com\" />
        <meta name=\"category\" content=\"Musique, Rap, Label Independant\" />
        <meta name=\"copyright\" content=\"lakombi.com\" />
        <meta name=\"description\" content=\"Rap français indépendant, site du label LaKombi.Prod : News, Téléchargement Mixtape, Boutique, Clips\" />
        <meta name=\"keywords\" content=\"Musique, Rap, Label Independant, Français, News, Telechargement, Mixtape, Boutique, Clips\" />
        <meta name=\"publisher\" content=\"lakombi.com\" />
        <meta name=\"revisit-after\" content=\"15 days\" />
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"googlebot\" content=\"noarchive\" />
        <meta name=\"pragma\" content=\"no-cache\" />
                
        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/js/carrousel.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\t\t\$(document).ready(
\t\t\tfunction(){
\t\t\t\tcarrousel('sponsors',160,3,3000,1000,'left','";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/on.png"), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/off.png"), "html", null, true);
        echo "');
\t\t\t}
\t\t);
\t\t</script>
    </head>
    <body id=\"bg_lakombi\">

        <div id=\"nonfooter\">
        \t<table width=\"1196\" border=\"0\" align=\"center\">
        \t\t<tr>
        \t\t\t<td>
\t\t\t\t\t\t<table style=\"border-collapse: collapse; border-width: 0px\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t        \t\t\t\t";
        // line 44
        $this->env->loadTemplate("LaKombiMainBundle:Main:header.html.twig")->display($context);
        // line 45
        echo "\t\t        \t\t\t\t</td>
\t\t      \t\t\t\t</tr>
\t\t      \t\t\t\t<tr>
\t\t      \t\t\t\t\t<td>
\t\t      \t\t\t\t\t";
        // line 49
        $this->env->loadTemplate("LaKombiMainBundle:Main:menu.html.twig")->display($context);
        // line 50
        echo "\t\t      \t\t\t\t\t</td>
\t\t      \t\t\t\t</tr>
\t\t      \t\t\t</table>  \t\t\t
\t\t        \t</td>
        \t\t</tr>
        \t\t<tr>
 \t\t\t\t\t<td>&nbsp;</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<td valign=\"top\" width=\"1196px\">
        \t\t\t";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        \t\t\t</td>
        \t\t<tr>
        \t\t\t<td>&nbsp;</td>
        \t\t</tr>
        \t</table>
        </div>
        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "        ";
        $this->env->loadTemplate("LaKombiMainBundle:Main:sponsors.html.twig")->display($context);
        echo "        
        ";
        // line 70
        $this->env->loadTemplate("LaKombiMainBundle:Main:footer.html.twig")->display($context);
        echo "        
    </body>
</html>
";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "LaKombi.com";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/css/lakombi.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/css/carrousel.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
       ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
