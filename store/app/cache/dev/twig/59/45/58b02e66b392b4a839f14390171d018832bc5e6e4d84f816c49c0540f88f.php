<?php

/* StoreBackendBundle:CMS:list.html.twig */
class __TwigTemplate_594558b02e66b392b4a839f14390171d018832bc5e6e4d84f816c49c0540f88f extends Twig_Template
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
        echo "    <h1><i class=\"fa fa-arrows-alt\"></i>  Liste des CMS</h1>

    <table class=\"table table-primary\">
        <thead>
        <tr>
            <th>id</th>
            <th>Titre</th>
            <th>Résumé</th>
            <th>Etat</th>
            <th>Nb. produits affectés</th>
            <th>Date de création</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cms"]) ? $context["cms"] : $this->getContext($context, "cms")));
        foreach ($context['_seq'] as $context["_key"] => $context["oneCms"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneCms"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneCms"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneCms"], "summary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo (($this->getAttribute($context["oneCms"], "active", array())) ? ("<i class=\"fa fa-check\"></i>") : ("<i class=\"fa fa-times\"></i>"));
            echo "</td>
                <td><span class=\"badge badge-info\"><strong>";
            // line 28
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["oneCms"], "product", array())), "html", null, true);
            echo "</strong></span> produits associés</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["oneCms"], "dateCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <!-- Single button -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa fa-cogs\"></i>  Actions <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_cms_view", array("id" => $this->getAttribute($context["oneCms"], "id", array()), "name" => $this->getAttribute($context["oneCms"], "title", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-search\"></i>  Voir</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pencil\"></i>  Editer</a></li>
                            <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_cms_remove", array("id" => $this->getAttribute($context["oneCms"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>  Supprimer</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneCms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:CMS:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  107 => 39,  102 => 37,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  68 => 23,  64 => 22,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
