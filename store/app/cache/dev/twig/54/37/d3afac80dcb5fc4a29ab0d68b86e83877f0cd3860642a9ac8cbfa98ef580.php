<?php

/* StoreBackendBundle:Product:list.html.twig */
class __TwigTemplate_5437d3afac80dcb5fc4a29ab0d68b86e83877f0cd3860642a9ac8cbfa98ef580 extends Twig_Template
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
        echo "    <h1><i class=\"fa fa-tags\"></i>  Liste des produits</h1>

    <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\" id=\"uidemo-tabs-default-demo\">
            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#uidemo-tabs-default-demo-home\">Actif </a>
            </li>
            <li class=\"\">
                <a data-toggle=\"tab\" href=\"#uidemo-tabs-default-demo-profile\">Inactif </a>
            </li>
            <li class=\"\">
                <a data-toggle=\"tab\" href=\"#uidemo-tabs-default-demo-cover\">Cover </a>
            </li>
        </ul>

        <div class=\"tab-content tab-content-bordered\">
            <div id=\"uidemo-tabs-default-demo-home\" class=\"tab-pane fade\">
                ";
        // line 23
        if (((isset($context["actifproduct"]) ? $context["actifproduct"] : $this->getContext($context, "actifproduct")) == null)) {
            // line 24
            echo "                Y a rien ici
                ";
        } else {
            // line 26
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actifproduct"]) ? $context["actifproduct"] : $this->getContext($context, "actifproduct")));
            foreach ($context['_seq'] as $context["_key"] => $context["ap"]) {
                // line 27
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ap"], "title", array()), "html", null, true);
                echo "
                    <br/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ap'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                ";
        }
        // line 31
        echo "            </div> <!-- / .tab-pane -->
            <div id=\"uidemo-tabs-default-demo-profile\" class=\"tab-pane fade active in\">
                ";
        // line 33
        if (((isset($context["inactifproduct"]) ? $context["inactifproduct"] : $this->getContext($context, "inactifproduct")) == null)) {
            // line 34
            echo "                    Y a rien ici
                ";
        } else {
            // line 36
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inactifproduct"]) ? $context["inactifproduct"] : $this->getContext($context, "inactifproduct")));
            foreach ($context['_seq'] as $context["_key"] => $context["iap"]) {
                // line 37
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["iap"], "title", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iap'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                ";
        }
        // line 40
        echo "            </div> <!-- / .tab-pane -->
            <div id=\"uidemo-tabs-default-demo-cover\" class=\"tab-pane fade\">
                ";
        // line 42
        if (((isset($context["coverproduct"]) ? $context["coverproduct"] : $this->getContext($context, "coverproduct")) == null)) {
            // line 43
            echo "                    Y a rien ici
                ";
        } else {
            // line 45
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coverproduct"]) ? $context["coverproduct"] : $this->getContext($context, "coverproduct")));
            foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
                // line 46
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "title", array()), "html", null, true);
                echo "
                        <br/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                ";
        }
        // line 50
        echo "            </div> <!-- / .tab-pane -->
        </div> <!-- / .tab-content -->
    </div>

    <div class=\"row\">
        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("store_backend_product_new");
        echo "\" class=\" pull-right btn btn-primary btn-lg btn-rounded\">Ajouter un produit
            <i class=\"fa fa-plus\"></i>
        </a>
    </div>


    <table class=\"table table-primary\">
        <thead>
        <tr>
            <th>id</th>
            <th>Ref.</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Actif</th>
            <th>Date de création</th>
            <th>CMS</th>
            <th>Fournisseurs</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 79
            echo "            <tr>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ref", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_product_view", array("name" => $this->getAttribute($context["product"], "slug", array()), "id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "€</td>
                <td>";
            // line 84
            if ($this->getAttribute($this->getAttribute($context["product"], "meta", array(), "any", false, true), "video", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "meta", array()), "video", array()), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 85
            echo (($this->getAttribute($context["product"], "active", array())) ? ("<i class=\"fa fa-check\"></i>") : ("<i class=\"fa fa-times\"></i>"));
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "dateActive", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td><span class=\"badge badge-info\"><strong>";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["product"], "cms", array())), "html", null, true);
            echo "</strong></span> pages cms</td>
                <td><span class=\"badge badge-info\"><strong>";
            // line 88
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["product"], "supplier", array())), "html", null, true);
            echo "</strong></span> fournisseurs</td>
                <td>
                    <!-- Single button -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa fa-cogs\"></i>  Actions <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_product_view", array("id" => $this->getAttribute($context["product"], "id", array()), "name" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-search\"></i>  Voir</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pencil\"></i>  Editer</a></li>
                            <li><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_backend_product_remove", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>  Supprimer</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 104,  236 => 98,  231 => 96,  220 => 88,  216 => 87,  212 => 86,  208 => 85,  202 => 84,  198 => 83,  192 => 82,  188 => 81,  184 => 80,  181 => 79,  177 => 78,  151 => 55,  144 => 50,  141 => 49,  131 => 46,  126 => 45,  122 => 43,  120 => 42,  116 => 40,  113 => 39,  104 => 37,  99 => 36,  95 => 34,  93 => 33,  89 => 31,  86 => 30,  76 => 27,  71 => 26,  67 => 24,  65 => 23,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
