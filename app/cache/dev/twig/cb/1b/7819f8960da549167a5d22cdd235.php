<?php

/* LaKombiUsersBundle:UserData:addUser.html.twig */
class __TwigTemplate_cb1b7819f8960da549167a5d22cdd235 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute($this->getContext($context, "user"), "id")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit user"), "html", null, true);
        } elseif ($this->getContext($context, "addnewzuser")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Newzletter"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add user"), "html", null, true);
        }
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<form action=\"";
        if ($this->getAttribute($this->getContext($context, "user"), "id")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("userId" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_add"), "html", null, true);
        }
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    <h1>";
        // line 6
        if ($this->getAttribute($this->getContext($context, "user"), "id")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit user"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add user"), "html", null, true);
        }
        echo "</h1>
    <div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "name"), $this->env->getExtension('translator')->trans("Name"));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
    </div>
    <div>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "surname"));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "surname"), $this->env->getExtension('translator')->trans("Surname"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "surname"));
        echo "
    </div>
    <div>
    ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "nickname"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "nickname"), $this->env->getExtension('translator')->trans("Nickname"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nickname"));
        echo "
    </div>
    
    ";
        // line 23
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" id=\"submit\" value=\"";
        // line 24
        if ($this->getAttribute($this->getContext($context, "user"), "id")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Update"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        }
        echo "\" name=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "LaKombiUsersBundle:UserData:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
