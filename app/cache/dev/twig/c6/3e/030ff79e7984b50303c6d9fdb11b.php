<?php

/* LaKombiMainBundle:Main:contact.html.twig */
class __TwigTemplate_c63e030ff79e7984b50303c6d9fdb11b extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - Contact
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "contact-notice"), "method")) {
            // line 11
            echo "    <div class=\"contact-notice\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "contact-notice"), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 15
        echo "<table>
\t<tr>
\t\t<td><h1>Contact LaKombi.com</h1></td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td><h3>Envoyez un message à Seb LaKombi en remplissant ce formulaire :</h3></td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>\t
\t\t    <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaKombiMainBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"contact\">
        \t";
        // line 40
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

\t        ";
        // line 42
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"), array("label" => "Nom : "));
        echo "
    \t    ";
        // line 43
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"), array("label" => "Mail : "));
        echo "
    \t    ";
        // line 44
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "subject"), array("label" => "Sujet : "));
        echo "
    \t    ";
        // line 45
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "body"), array("label" => "Message : "));
        echo "

    \t    ";
        // line 47
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

    \t    <input type=\"submit\" value=\"Envoyer\" />
   \t\t\t</form>
    \t</td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "LaKombiMainBundle:Main:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
