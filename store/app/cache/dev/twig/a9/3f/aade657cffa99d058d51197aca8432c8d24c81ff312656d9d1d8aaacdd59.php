<?php

/* StoreBackendBundle:Main:index.html.twig */
class __TwigTemplate_a93faade657cffa99d058d51197aca8432c8d24c81ff312656d9d1d8aaacdd59 extends Twig_Template
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
<h1><i class=\"fa fa-tags\"></i> Dashboard</h1>

<div class=\"row alert\">
    ";
        // line 10
        if (((isset($context["ishasstock"]) ? $context["ishasstock"] : $this->getContext($context, "ishasstock")) == false)) {
            // line 11
            echo "        Les produits suivant sont en rupture de stock :
    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["getstock"]) ? $context["getstock"] : $this->getContext($context, "getstock")));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 13
                echo "        <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "title", array()), "html", null, true);
                echo "</b>
    <br/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        // line 17
        echo "</div>

<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"stat-panel\">
            <div class=\"stat-row\">
                <!-- Small horizontal padding, bordered, without right border, top aligned text -->
                <div class=\"stat-cell col-sm-4 padding-sm-hr bordered no-border-r valign-top\">
                    <!-- Small padding, without top padding, extra small horizontal padding -->
                    <h4 class=\"padding-sm no-padding-t padding-xs-hr\"><i class=\"fa fa-cloud-upload text-primary\"></i>&nbsp;&nbsp;Vos chiffres</h4>
                    <!-- Without margin -->
                    <ul class=\"list-group no-margin\">
                        <!-- Without left and right borders, extra small horizontal padding, without background, no border radius -->
                        <li class=\"list-group-item no-border-hr padding-xs-hr no-bg no-border-radius\">
                            Products <span class=\"label label-pa-purple pull-right\">";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["nbprod"]) ? $context["nbprod"] : null), "nb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nbprod"]) ? $context["nbprod"] : null), "nb", array()), "0")) : ("0")), "html", null, true);
        echo "</span>
                        </li> <!-- / .list-group-item -->
                        <!-- Without left and right borders, extra small horizontal padding, without background -->
                        <li class=\"list-group-item no-border-hr padding-xs-hr no-bg\">
                            Categories <span class=\"label label-danger pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["nbcat"]) ? $context["nbcat"] : null), "nb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nbcat"]) ? $context["nbcat"] : null), "nb", array()), "0")) : ("0")), "html", null, true);
        echo "</span>
                        </li> <!-- / .list-group-item -->
                        <!-- Without left and right borders, without bottom border, extra small horizontal padding, without background -->
                        <li class=\"list-group-item no-border-hr no-border-b padding-xs-hr no-bg\">
                            Suppliers <span class=\"label label-success pull-right\">";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["nbsupp"]) ? $context["nbsupp"] : null), "nb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nbsupp"]) ? $context["nbsupp"] : null), "nb", array()), "0")) : ("0")), "html", null, true);
        echo "</span>
                        </li> <!-- / .list-group-item -->
                        <!-- Without left and right borders, without bottom border, extra small horizontal padding, without background -->
                        <li class=\"list-group-item no-border-hr padding-xs-hr no-bg no-border-radius\">
                            CMS <span class=\"label label-pa-purple pull-right\">";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["nbcms"]) ? $context["nbcms"] : null), "nb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nbcms"]) ? $context["nbcms"] : null), "nb", array()), "0")) : ("0")), "html", null, true);
        echo "</span>
                        </li> <!-- / .list-group-item -->
                        <li class=\"list-group-item no-border-hr padding-xs-hr no-bg\">
                            Comments <span class=\"label label-danger pull-right\">";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["nbcom"]) ? $context["nbcom"] : null), "nb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nbcom"]) ? $context["nbcom"] : null), "nb", array()), "0")) : ("0")), "html", null, true);
        echo "</span>
                        </li> <!-- / .list-group-item -->
                        <!-- Without left and right borders, without bottom border, extra small horizontal padding, without background -->
                        <li class=\"list-group-item no-border-hr no-border-b padding-xs-hr no-bg\">
                            Orders <span class=\"label label-success pull-right\">";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["nborders"]) ? $context["nborders"] : null), "nb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nborders"]) ? $context["nborders"] : null), "nb", array()), "0")) : ("0")), "html", null, true);
        echo "</span>
                        </li> <!-- / .list-group-item -->
                    </ul>
                </div> <!-- /.stat-cell -->
                <!-- Primary background, small padding, vertically centered text -->
                ";
        // line 61
        echo "            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"panel widget-messages-alt\">
            <div class=\"panel-heading\">
                <span class=\"panel-title\"><i class=\"panel-title-icon fa fa-envelope\"></i>CMS</span>
            </div> <!-- / .panel-heading -->
            <div class=\"panel-body padding-sm\">
                <div class=\"messages-list\">

                    ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cms"]) ? $context["cms"] : $this->getContext($context, "cms")));
        foreach ($context['_seq'] as $context["_key"] => $context["oneCms"]) {
            // line 74
            echo "                        <div class=\"message\">
                            <img class=\"message-avatar\" alt=\"\" src=\"assets/demo/avatars/2.jpg\">
                            <a class=\"message-subject\" href=\"#\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneCms"], "title", array()), "html", null, true);
            echo "</a>
                            <div class=\"message-description\">
                                from <a href=\"#\">Robert Jang</a>
                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                2h ago
                            </div> <!-- / .message-description -->
                        </div> <!-- / .message -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneCms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
                </div> <!-- / .messages-list -->
                ";
        // line 86
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["cms"]) ? $context["cms"] : $this->getContext($context, "cms")));
        echo "
                <a class=\"messages-link\" href=\"#\">MORE CMS</a>

            </div> <!-- / .panel-body -->
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"stat-panel\">
            <!-- Bordered, without right border, right aligned text -->
            <div class=\"stat-cell col-xs-5 bordered no-border-r text-right\">
                <!-- Stat panel bg icon -->
                <i class=\"fa fa-trophy bg-icon bg-icon-left\"></i>
                <!-- Extra small text -->
                <span class=\"text-xs\">TODAY'S EARNINGS</span><br>
                <!-- Extra large text -->
                <span class=\"text-xlg\"><small><small>\$</small></small><strong>";
        // line 102
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["totalorder"]) ? $context["totalorder"] : $this->getContext($context, "totalorder")), "total", array()), 2, "floor"), "html", null, true);
        echo "</strong></span>
            </div> <!-- /.stat-cell -->
            <!-- Success darken background, without padding, vertically centered text -->
            <div class=\"stat-cell col-xs-7 bg-success no-padding valign-bottom\">
                <div style=\"width: 100%\" id=\"stats-sparklines-1\" class=\"stats-sparklines\"><canvas style=\"display: inline-block; width: 373px; height: 80px; vertical-align: top;\" width=\"373\" height=\"80\"></canvas></div>
            </div>
        </div>

        <div class=\"stat-panel\">
            <div class=\"stat-row\">
                <!-- Purple background, small padding -->
                <div class=\"stat-cell bg-pa-purple padding-sm\">
                    <!-- Extra small text -->
                    <div style=\"margin-bottom: 5px;\" class=\"text-xs\">RETWEETS GRAPH</div>
                    <div style=\"width: 100%\" id=\"stats-sparklines-3\" class=\"stats-sparklines\"><canvas style=\"display: inline-block; width: 477px; height: 45px; vertical-align: top;\" width=\"477\" height=\"45\"></canvas></div>
                </div>
            </div> <!-- /.stat-row -->
            <div class=\"stat-row\">
                <!-- Bordered, without top border, horizontally centered text -->
                <div class=\"stat-counters bordered no-border-t text-center\">
                    <!-- Small padding, without horizontal padding -->
                    <div class=\"stat-cell col-xs-4 padding-sm no-padding-hr\">
                        <!-- Big text -->
                        <span class=\"text-bg\"><strong>312</strong></span><br>
                        <!-- Extra small text -->
                        <span class=\"text-xs text-muted\">TWEETS</span>
                    </div>
                    <!-- Small padding, without horizontal padding -->
                    <div class=\"stat-cell col-xs-4 padding-sm no-padding-hr\">
                        <!-- Big text -->
                        <span class=\"text-bg\"><strong>1000</strong></span><br>
                        <!-- Extra small text -->
                        <span class=\"text-xs text-muted\">FOLLOWERS</span>
                    </div>
                    <!-- Small padding, without horizontal padding -->
                    <div class=\"stat-cell col-xs-4 padding-sm no-padding-hr\">
                        <!-- Big text -->
                        <span class=\"text-bg\"><strong>523</strong></span><br>
                        <!-- Extra small text -->
                        <span class=\"text-xs text-muted\">FOLLOWING</span>
                    </div>
                </div> <!-- /.stat-counters -->
            </div> <!-- /.stat-row -->
        </div>

        <div class=\"stat-panel\">
            <div class=\"stat-row\">
                <!-- Warning background -->
                <div class=\"stat-cell bg-warning\">
                    <!-- Big text -->
                    <span class=\"text-bg\">11% more</span><br>
                    <!-- Small text -->
                    <span class=\"text-sm\">Unique visitors today</span>
                </div>
            </div> <!-- /.stat-row -->
            <div class=\"stat-row\">
                <!-- Warning background, small padding, without top padding, horizontally centered text -->
                <div class=\"stat-cell bg-warning padding-sm no-padding-t text-center\">
                    <div style=\"width: 100%\" class=\"stats-sparklines\" id=\"stats-sparklines-2\"><canvas style=\"display: inline-block; width: 448px; height: 36px; vertical-align: top;\" width=\"448\" height=\"36\"></canvas></div>
                </div>
            </div> <!-- /.stat-row -->
        </div>

    </div>

</div>


<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">

        <div id=\"dashboard-recent\" class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <span class=\"panel-title\"><i class=\"panel-title-icon fa fa-fire text-danger\"></i>Recent</span>
                <ul class=\"nav nav-tabs nav-tabs-xs\">
                    <li class=\"active\">
                        <a data-toggle=\"tab\" href=\"#dashboard-recent-comments\">Comments</a>
                    </li>
                    <li>
                        <a data-toggle=\"tab\" href=\"#dashboard-recent-threads\">Forum threads</a>
                    </li>
                </ul>
            </div> <!-- / .panel-heading -->
            <div class=\"tab-content\">

                <!-- Comments widget -->

                <!-- Without padding -->
                <div id=\"dashboard-recent-comments\" class=\"widget-comments panel-body tab-pane no-padding fade active in\">
                    <!-- Panel padding, without vertical padding -->

                    <div class=\"panel-padding no-padding-vr\" style=\"overflow: hidden; width: auto; height: 300px;\">
                        ";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 195
            echo "                            <div class=\"comment\">
                                <img class=\"comment-avatar\" alt=\"\" src=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/5.jpg"), "html", null, true);
            echo "\">
                                <div class=\"comment-body\">
                                    <div class=\"comment-by\">
                                        <a title=\"\" href=\"#\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "lastname", array()), "html", null, true);
            echo "</a> commented on <a title=\"\" href=\"#\">Article Name</a>
                                    </div>
                                    <div class=\"comment-text\">
                                        ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"comment-actions\">
                                        <a href=\"#\"><i class=\"fa fa-pencil\"></i>Edit</a>
                                        <a href=\"#\"><i class=\"fa fa-times\"></i>Remove</a>
                                        <span class=\"pull-right\">2 hours ago</span>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                    </div>
                </div> <!-- / .widget-comments -->

                <!-- Threads widget -->

                <!-- Without padding -->
                <div id=\"dashboard-recent-threads\" class=\"widget-threads panel-body tab-pane no-padding fade\">
                    <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 300px;\"><div class=\"panel-padding no-padding-vr\" style=\"overflow: hidden; width: auto; height: 300px;\">
                            <div class=\"thread\">
                                <img class=\"thread-avatar\" alt=\"\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/2.jpg"), "html", null, true);
        echo "\">
                                <div class=\"thread-body\">
                                    <span class=\"thread-time\">14h</span>
                                    <a class=\"thread-title\" href=\"#\">Lorem ipsum dolor sit amet</a>
                                    <div class=\"thread-info\">started by <a title=\"\" href=\"#\">Robert Jang</a> in <a title=\"\" href=\"#\">Forum name</a></div>
                                </div> <!-- / .thread-body -->
                            </div> <!-- / .thread -->

                        </div><div class=\"slimScrollBar\" style=\"background: none repeat scroll 0% 0% rgb(136, 136, 136); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
                </div> <!-- / .panel-body -->
            </div>
        </div> <!-- / .widget-threads -->
    </div>


    <div class=\"col-md-6 col-sm-12\">
        <div class=\"panel widget-support-tickets\">
            <div class=\"panel-heading\">
                <span class=\"panel-title\"><i class=\"panel-title-icon fa fa-bullhorn\"></i> Orders</span>
            </div> <!-- / .panel-heading -->
            <div class=\"panel-body\">

                ";
        // line 243
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 244
            echo "                    <div class=\"ticket\">
                        ";
            // line 245
            if ($this->getAttribute($context["order"], "state", array())) {
                echo "<span class=\"label label-success ticket-label\"> Completed </span>
                        ";
            } else {
                // line 247
                echo "                            <span class=\"label label-danger ticket-label\">
                        In Progress
                    </span>
                        ";
            }
            // line 251
            echo "                        <a class=\"ticket-title\" title=\"\" href=\"#\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "user", array()), "lastname", array()), "html", null, true);
            echo " </a>
                        <div>
                        <span class=\"ticket-info\">
\t\t\t\t\t\t\t\tTotal order  <a title=\"\" href=\"#\">";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "total", array()), "html", null, true);
            echo " €</a>
\t\t\t\t\t\t\t</span>
                        </div>

                        <div>
                        <span class=\"ticket-info\">
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</span>
                        </div>

                    </div> <!-- / .ticket -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "
            </div> <!-- / .panel-body -->
        </div>
    </div>
</div>









";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 266,  395 => 260,  386 => 254,  377 => 251,  371 => 247,  366 => 245,  363 => 244,  359 => 243,  334 => 221,  323 => 212,  307 => 202,  299 => 199,  293 => 196,  290 => 195,  286 => 194,  191 => 102,  172 => 86,  168 => 84,  154 => 76,  150 => 74,  146 => 73,  132 => 61,  124 => 50,  117 => 46,  111 => 43,  104 => 39,  97 => 35,  90 => 31,  74 => 17,  71 => 16,  61 => 13,  57 => 12,  54 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
