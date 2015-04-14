<?php

/* StoreBackendBundle:Product:view.html.twig */
class __TwigTemplate_b4920b3a0b8a554b5c15005e8db59658dfd5a847908b9c9ffe6eb7e6ff4f36d0 extends Twig_Template
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
        echo "    <h1><i class=\"fa fa-tag\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "title", array()), "html", null, true);
        echo "</h1>

    <p>Résumé : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "summary", array()), "html", null, true);
        echo "</p>
    <p>Description : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
    <p>Quantité : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "quantity", array()), "html", null, true);
        echo "</p>
    <p>Prix : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</p>
    <p>Boutique : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "jeweler", array()), "html", null, true);
        echo "</p>

    <h3>Détails</h3>
    <ul>
        <li>Fournisseur ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "meta", array(), "any", false, true), "video", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "meta", array()), "video", array()), "html", null, true);
        }
        echo "</li>
    </ul>

    <h3>Catégories associés :</h3>
    <ul>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>

    <h3>Tags associés :</h3>
    <ul>
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "word", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>

    <h3>Promotions associés</h3>
    <ul>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "business", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["business"]) {
            // line 36
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["business"], "message", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['business'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </ul>


";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  127 => 36,  123 => 35,  117 => 31,  108 => 29,  104 => 28,  98 => 24,  89 => 22,  85 => 21,  75 => 16,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
