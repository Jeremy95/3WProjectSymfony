<?php

/* StoreBackendBundle:Supplier:view.html.twig */
class __TwigTemplate_4b10c78c464322793eda50e1e4f157d13b9b12b43ec7f2f8f87d2d46ecb6fd67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("StoreBackendBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titlepage' => array($this, 'block_titlepage'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StoreBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlepage($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1><i class=\"fa fa-truck\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["supplier"]) ? $context["supplier"] : $this->getContext($context, "supplier")), "name", array()), "html", null, true);
        echo "</h1>

    <p>Description : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["supplier"]) ? $context["supplier"] : $this->getContext($context, "supplier")), "description", array()), "html", null, true);
        echo "</p>
    <p>Image : <br>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["supplier"]) ? $context["supplier"] : $this->getContext($context, "supplier")), "image", array()), "html", null, true);
        echo "\"></p>
    <p>Active : ";
        // line 12
        echo (($this->getAttribute((isset($context["supplier"]) ? $context["supplier"] : $this->getContext($context, "supplier")), "active", array())) ? ("Oui") : ("Non"));
        echo "</p>
    <p>Date Création : ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["supplier"]) ? $context["supplier"] : $this->getContext($context, "supplier")), "dateCreated", array()), "d/m/Y"), "html", null, true);
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Supplier:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  63 => 12,  59 => 11,  54 => 9,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
