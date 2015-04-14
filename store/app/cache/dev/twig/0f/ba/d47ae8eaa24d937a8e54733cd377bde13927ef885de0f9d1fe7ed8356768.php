<?php

/* ::base.html.twig */
class __TwigTemplate_0fbad47ae8eaa24d937a8e54733cd377bde13927ef885de0f9d1fe7ed8356768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'classname' => array($this, 'block_classname'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"ie8\"> <![endif]-->
<!--[if IE 9]>         <html class=\"ie9 gt-ie8\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"gt-ie8 gt-ie9 not-ie\"> <!--<![endif]-->
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">

    <!-- Open Sans font from Google CDN -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin\" rel=\"stylesheet\" type=\"text/css\">

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
</head>
<body class=\"";
        // line 24
        $this->displayBlock('classname', $context, $blocks);
        echo "\">
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        <!-- Pixel Admin's stylesheets -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
    }

    // line 24
    public function block_classname($context, array $blocks = array())
    {
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "    <!-- Get jQuery from Google CDN -->
    <!--[if !IE]> -->
    <script type=\"text/javascript\"> window.jQuery || document.write('<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\">'+\"<\"+\"/script>\"); </script>
    <!-- <![endif]-->
    <!--[if lte IE 9]>
    <script type=\"text/javascript\"> window.jQuery || document.write('<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\">'+\"<\"+\"/script>\"); </script>
    <![endif]-->

    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  99 => 27,  96 => 26,  91 => 25,  86 => 24,  80 => 20,  77 => 19,  74 => 18,  68 => 9,  63 => 37,  61 => 26,  59 => 25,  55 => 24,  51 => 22,  49 => 18,  44 => 16,  34 => 9,  24 => 1,);
    }
}
