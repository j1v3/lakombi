<?php

/* LaKombiMainBundle:Default:index.html.twig */
class __TwigTemplate_9a1a1639ec25afb89a390c4167c556b3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">
\t<head>
\t\t<title>LaKombi.com - Intro</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
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
\t\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/js/swfobject.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tswfobject.registerObject(\"myFlashContent\", \"9.0.0\");
\t\t</script>
\t\t
\t\t<style type=\"text/css\" media=\"screen\">
\t\thtml, body { height:100%; background-color: #000000;}
\t\tbody { margin:0; padding:0; overflow:hidden; }
\t\t#intro { background-color: #000000; width:100%; height:100%; position:absolute; z-index:0; }
\t\t</style>
\t</head>
\t<body>
\t\t<div id=\"intro\">
\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"100%\" height=\"100%\" id=\"myFlashContent\">
\t\t\t\t<param name=\"movie\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/intro.swf"), "html", null, true);
        echo "\" />
\t\t\t\t<!--[if !IE]>-->
\t\t\t\t<object type=\"application/x-shockwave-flash\" data=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lakombimain/images/intro.swf"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
\t\t\t\t<!--<![endif]-->
\t\t\t\t\t<a href=\"http://www.adobe.com/go/getflashplayer\">
\t\t\t\t\t\t<img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" />
\t\t\t\t\t</a>
\t\t\t\t<!--[if !IE]>-->
\t\t\t\t</object>
\t\t\t\t<!--<![endif]-->
\t\t\t</object>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
