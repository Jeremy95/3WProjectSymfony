<?php

/* StoreBackendBundle:Supplier:list.html.twig */
class __TwigTemplate_8886001685443baebd4e3fcfff6c1219a351913df04059134cae73cc5354ebee extends Twig_Template
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
    <h1><i class=\"fa fa-truck\"></i>  Liste des fournisseurs</h1>

    <table class=\"table table-primary\">
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Image</th>
            <th>Date de création</th>
            <th>Nb. de produits associés</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suppliers"]) ? $context["suppliers"] : $this->getContext($context, "suppliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "description", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "image", array()), "html", null, true);
            echo "\" width=\"100px\" height=\"auto\"></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["supplier"], "dateCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td><span class=\"badge badge-info\"><strong>";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["supplier"], "product", array())), "html", null, true);
            echo "</strong></span> produits associés</td>
                <td>
                    <!-- Single button -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa fa-cogs\"></i>  Actions <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_supplier_view", array("id" => $this->getAttribute($context["supplier"], "id", array()), "name" => $this->getAttribute($context["supplier"], "name", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-search\"></i>  Voir</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pencil\"></i>  Editer</a></li>
                            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_supplier_remove", array("id" => $this->getAttribute($context["supplier"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>  Supprimer</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>

    </table>

";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Supplier:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  108 => 40,  103 => 38,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  69 => 24,  65 => 23,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
