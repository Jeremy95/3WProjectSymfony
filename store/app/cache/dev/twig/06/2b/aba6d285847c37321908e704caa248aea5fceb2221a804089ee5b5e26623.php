<?php

/* StoreBackendBundle:Category:list.html.twig */
class __TwigTemplate_062baba6d285847c37321908e704caa248aea5fceb2221a804089ee5b5e26623 extends Twig_Template
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
        echo "    <h1><i class=\"fa fa-cogs\"></i>  Liste des catégories</h1>

    <table class=\"table table-primary\">
        <thead>
        <tr>
            <th>id</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Nb. de produits affectés</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</td>
                <td><span class=\"badge badge-info\"><strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "product", array())), "html", null, true);
            echo "</strong></span> produits associés</td>
                <td>
                    <!-- Single button -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa fa-cogs\"></i>  Actions <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_category_view", array("id" => $this->getAttribute($context["category"], "id", array()), "name" => $this->getAttribute($context["category"], "title", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-search\"></i>  Voir</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pencil\"></i>  Editer</a></li>
                            <li><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_category_remove", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>  Supprimer</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>

    </table>


";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  97 => 35,  92 => 33,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
