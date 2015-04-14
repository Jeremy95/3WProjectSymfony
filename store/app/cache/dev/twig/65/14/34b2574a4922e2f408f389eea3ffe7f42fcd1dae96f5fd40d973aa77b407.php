<?php

/* StoreBackendBundle:Main:product.html.twig */
class __TwigTemplate_651434b2574a4922e2f408f389eea3ffe7f42fcd1dae96f5fd40d973aa77b407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Page produit

nom : ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Main:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
