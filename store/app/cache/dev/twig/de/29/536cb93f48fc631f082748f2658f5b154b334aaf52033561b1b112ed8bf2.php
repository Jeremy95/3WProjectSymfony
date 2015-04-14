<?php

/* StoreBackendBundle::layout.html.twig */
class __TwigTemplate_de29536cb93f48fc631f082748f2658f5b154b334aaf52033561b1b112ed8bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'classname' => array($this, 'block_classname'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'titlepage' => array($this, 'block_titlepage'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_classname($context, array $blocks = array())
    {
        echo "theme-default main-menu-animated";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/css/pixel-admin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/css/widgets.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/css/rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/css/themes.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <script>var init = [];</script>

    <div id=\"main-wrapper\">

        ";
        // line 19
        echo "        ";
        echo twig_include($this->env, $context, "StoreBackendBundle:Partial:main_navigation.html.twig");
        echo "

        ";
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "StoreBackendBundle:Partial:main_menu.html.twig");
        echo "

        <div id=\"content-wrapper\">

            <div class=\"page-header\">

                <div class=\"row\">
                    <!-- Page header, center on small screens -->
                    <h1 class=\"col-xs-12 col-sm-4 text-center text-left-sm\"><i class=\"fa fa-dashboard page-header-icon\"></i>&nbsp;&nbsp;";
        // line 30
        $this->displayBlock('titlepage', $context, $blocks);
        echo "</h1>

                    <div class=\"col-xs-12 col-sm-8\">
                        <div class=\"row\">
                            <hr class=\"visible-xs no-grid-gutter-h\">
                            <!-- \"Create project\" button, width=auto on desktops -->
                            <div class=\"pull-right col-xs-12 col-sm-auto\"><a href=\"#\" class=\"btn btn-primary btn-labeled\" style=\"width: 100%;\"><span class=\"btn-label icon fa fa-plus\"></span>Create project</a></div>

                            <!-- Margin -->
                            <div class=\"visible-xs clearfix form-group-margin\"></div>

                            <!-- Search field -->
                            <form action=\"\" class=\"pull-right col-xs-12 col-sm-6\">
                                <div class=\"input-group no-margin\">
                                    <span class=\"input-group-addon\" style=\"border:none;background: #fff;background: rgba(0,0,0,.05);\"><i class=\"fa fa-search\"></i></span>
                                    <input type=\"text\" placeholder=\"Search...\" class=\"form-control no-padding-hr\" style=\"border:none;background: #fff;background: rgba(0,0,0,.05);\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- / .page-header -->

            ";
        // line 54
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        </div> <!-- / .content-wrapper -->

        <div id=\"main-menu-bg\"></div>

    </div> <!-- / .main-wrapper -->

";
    }

    // line 30
    public function block_titlepage($context, array $blocks = array())
    {
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "            ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "
    ";
        // line 67
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/js/pixel-admin.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        init.push(function () {
            // Javascript code here
        });
        window.PixelAdmin.start(init);
    </script>

";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  157 => 67,  154 => 66,  151 => 65,  147 => 55,  144 => 54,  139 => 30,  129 => 56,  126 => 54,  100 => 30,  88 => 22,  82 => 19,  76 => 14,  73 => 13,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
