<?php

/* StoreBackendBundle:Partial:main_navigation.html.twig */
class __TwigTemplate_80ab31750b51d9945a87cf91cde7dd43f62936128c2b50f8964a0b3a232bb045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_navigation' => array($this, 'block_main_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('main_navigation', $context, $blocks);
    }

    public function block_main_navigation($context, array $blocks = array())
    {
        // line 2
        echo "
    <!-- 2. \$MAIN_NAVIGATION ===========================================================================

        Main navigation
    -->
    <div id=\"main-navbar\" class=\"navbar navbar-inverse\" role=\"navigation\">
        <!-- Main menu toggle -->
        <button type=\"button\" id=\"main-menu-toggle\"><i class=\"navbar-icon fa fa-bars icon\"></i><span class=\"hide-menu-text\">HIDE MENU</span>
        </button>

        <div class=\"navbar-inner\">
            <!-- Main navbar header -->
            <div class=\"navbar-header\">

                <!-- Logo -->
                <a href=\"index.html\" class=\"navbar-brand\">
                    <div><img alt=\"Pixel Admin\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/images/main-navbar-logo.png"), "html", null, true);
        echo "\"></div>
                    ALittleJewerly
                </a>

                <!-- Main navbar toggle -->
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#main-navbar-collapse\"><i class=\"navbar-icon fa fa-bars\"></i></button>

            </div>
            <!-- / .navbar-header -->

            <div id=\"main-navbar-collapse\" class=\"collapse navbar-collapse main-navbar-collapse\">
                <div>
                    <ul class=\"nav navbar-nav\">
                        <li class=\"";
        // line 32
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "store_backend_index")) ? ("active") : (""));
        echo "\">
                            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("store_backend_index");
        echo "\">Home</a>
                        </li>

                        <li class=\"";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "store_backend_product_list")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("store_backend_product_list");
        echo "\">Products</a>
                        </li>

                        <li class=\"";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "store_backend_category_list")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("store_backend_category_list");
        echo "\">Categories</a>
                        </li>

                        <li class=\"";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "store_backend_cms_list")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("store_backend_cms_list");
        echo "\">CMS</a>
                        </li>

                        <li class=\"";
        // line 48
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "store_backend_supplier_list")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("store_backend_supplier_list");
        echo "\">Suppliers</a>
                        </li>
                    </ul>
                    <div class=\"right clearfix\">
                    <ul class=\"nav navbar-nav pull-right right-navbar-nav\">

                    <!-- 3. \$NAVBAR_ICON_BUTTONS =======================================================================

                                                Navbar Icon Buttons

                                                NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                                                Classes:
                                                * 'nav-icon-btn-info'
                                                * 'nav-icon-btn-success'
                                                * 'nav-icon-btn-warning'
                                                * 'nav-icon-btn-danger'
                    -->
                    <li class=\"nav-icon-btn nav-icon-btn-danger dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#notifications\">
                            <span class=\"label\">5</span>
                            <i class=\"nav-icon fa fa-bullhorn\"></i>
                            <span class=\"small-screen-text\">Notifications</span>
                        </a>

                        <!-- NOTIFICATIONS -->

                        <!-- Javascript -->
                        <script>
                            init.push(function () {
                                \$('#main-navbar-notifications').slimScroll({ height: 250 });
                            });
                        </script>
                        <!-- / Javascript -->

                        <div style=\"width: 300px\" class=\"dropdown-menu widget-notifications no-padding\">
                            <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 250px;\"><div id=\"main-navbar-notifications\" class=\"notifications-list\" style=\"overflow: hidden; width: auto; height: 250px;\">

                                    <div class=\"notification\">
                                        <div class=\"notification-title text-danger\">SYSTEM</div>
                                        <div class=\"notification-description\"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                                        <div class=\"notification-ago\">12h ago</div>
                                        <div class=\"notification-icon fa fa-hdd-o bg-danger\"></div>
                                    </div> <!-- / .notification -->

                                    <div class=\"notification\">
                                        <div class=\"notification-title text-info\">STORE</div>
                                        <div class=\"notification-description\">You have <strong>9</strong> new orders.</div>
                                        <div class=\"notification-ago\">12h ago</div>
                                        <div class=\"notification-icon fa fa-truck bg-info\"></div>
                                    </div> <!-- / .notification -->

                                    <div class=\"notification\">
                                        <div class=\"notification-title text-default\">CRON DAEMON</div>
                                        <div class=\"notification-description\">Job <strong>\"Clean DB\"</strong> has been completed.</div>
                                        <div class=\"notification-ago\">12h ago</div>
                                        <div class=\"notification-icon fa fa-clock-o bg-default\"></div>
                                    </div> <!-- / .notification -->

                                    <div class=\"notification\">
                                        <div class=\"notification-title text-success\">SYSTEM</div>
                                        <div class=\"notification-description\">Server <strong>up</strong>.</div>
                                        <div class=\"notification-ago\">12h ago</div>
                                        <div class=\"notification-icon fa fa-hdd-o bg-success\"></div>
                                    </div> <!-- / .notification -->

                                    <div class=\"notification\">
                                        <div class=\"notification-title text-warning\">SYSTEM</div>
                                        <div class=\"notification-description\"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                                        <div class=\"notification-ago\">12h ago</div>
                                        <div class=\"notification-icon fa fa-hdd-o bg-warning\"></div>
                                    </div> <!-- / .notification -->

                                </div><div class=\"slimScrollBar\" style=\"background: none repeat scroll 0% 0% rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\"></div></div> <!-- / .notifications-list -->
                            <a class=\"notifications-link\" href=\"#\">MORE NOTIFICATIONS</a>
                        </div> <!-- / .dropdown-menu -->
                    </li>
                    <li class=\"nav-icon-btn nav-icon-btn-success dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#messages\">
                            <span class=\"label\">10</span>
                            <i class=\"nav-icon fa fa-envelope\"></i>
                            <span class=\"small-screen-text\">Income messages</span>
                        </a>

                        <!-- MESSAGES -->

                        <!-- Javascript -->
                        <script>
                            init.push(function () {
                                \$('#main-navbar-messages').slimScroll({ height: 250 });
                            });
                        </script>
                        <!-- / Javascript -->

                        <div style=\"width: 300px;\" class=\"dropdown-menu widget-messages-alt no-padding\">
                            <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 250px;\"><div id=\"main-navbar-messages\" class=\"messages-list\" style=\"overflow: hidden; width: auto; height: 250px;\">

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/2.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Robert Jang</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/3.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Michelle Bortz</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/4.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Timothy Owens</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/5.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Denise Steiner</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/2.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Robert Jang</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/2.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Robert Jang</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/3.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Michelle Bortz</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/4.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Timothy Owens</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/5.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Denise Steiner</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                    <div class=\"message\">
                                        <img class=\"message-avatar\" alt=\"\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/2.jpg"), "html", null, true);
        echo "\">
                                        <a class=\"message-subject\" href=\"#\">Lorem ipsum dolor sit amet.</a>
                                        <div class=\"message-description\">
                                            from <a href=\"#\">Robert Jang</a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            2h ago
                                        </div>
                                    </div> <!-- / .message -->

                                </div><div class=\"slimScrollBar\" style=\"background: none repeat scroll 0% 0% rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\"></div></div> <!-- / .messages-list -->
                            <a class=\"messages-link\" href=\"#\">MORE MESSAGES</a>
                        </div> <!-- / .dropdown-menu -->
                    </li>
                    <!-- /3. \$END_NAVBAR_ICON_BUTTONS -->

                    <li>
                        <form class=\"navbar-form pull-left\">
                            <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
                        </form>
                    </li>

                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle user-menu\" href=\"#\">
                            <img alt=\"\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storebackend/demo/avatars/1.jpg"), "html", null, true);
        echo "\">
                            <span>John Doe</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\"><span class=\"label label-warning pull-right\">New</span>Profile</a></li>
                            <li><a href=\"#\"><span class=\"badge badge-primary pull-right\">New</span>Account</a></li>
                            <li><a href=\"#\"><i class=\"dropdown-icon fa fa-cog\"></i>&nbsp;&nbsp;Settings</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"pages-signin.html\"><i class=\"dropdown-icon fa fa-power-off\"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
                    </li>
                    </ul> <!-- / .navbar-nav -->
                    </div>
                    <!-- / .navbar-nav -->
                </div>
            </div>
            <!-- / #main-navbar-collapse -->
        </div>
        <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. \$END_MAIN_NAVIGATION -->

";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Partial:main_navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  357 => 260,  331 => 237,  318 => 227,  305 => 217,  292 => 207,  279 => 197,  266 => 187,  253 => 177,  240 => 167,  227 => 157,  214 => 147,  113 => 49,  107 => 48,  101 => 45,  95 => 44,  89 => 41,  83 => 40,  77 => 37,  71 => 36,  65 => 33,  61 => 32,  44 => 18,  26 => 2,  20 => 1,);
    }
}
