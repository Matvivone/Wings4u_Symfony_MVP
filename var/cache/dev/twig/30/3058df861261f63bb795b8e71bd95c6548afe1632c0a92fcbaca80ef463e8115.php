<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menu.html.twig */
class __TwigTemplate_13e9671de924076363aa9e390a1caf90343567e6d8d5fcd4ccb721ffeacec91e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"\" />
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 80
        echo "</head>
<body class=\"app\">
<!-- @TOC -->
<!-- =================================================== -->
<!--
  + @Page Loader
  + @App Content
      - #Left Sidebar
          > \$Sidebar Header
          > \$Sidebar Menu

      - #Main
          > \$Topbar
          > \$App Screen Content
-->

<!-- @Page Loader -->
<!-- =================================================== -->
<div id='loader'>
    <div class=\"spinner\"></div>
</div>

<!-- @App Content -->
<!-- =================================================== -->
<div>
    <!-- #Left Sidebar ==================== -->
    <div class=\"sidebar\">
        <div class=\"sidebar-inner\">
            <!-- ### \$Sidebar Header ### -->
            <div class=\"sidebar-logo\">
                <div class=\"peers ai-c fxw-nw\">
                    <div class=\"peer peer-greed\">
                        <a class=\"sidebar-link td-n\" href=\"\">
                            <div class=\"peers ai-c fxw-nw\">
                                <div class=\"peer\">

                                    <div class=\"logo\" style=\" height: 25px;      /* equals max image height */
   width: 140px;
    white-space: nowrap;

    text-align: center; margin: 1em 0;\" ><span style=\"  display: inline-block;
    height: 100%;
    vertical-align: middle;\"></span>
                                        <img style=\"vertical-align: middle;max-height: 25px;
    max-width: 160px;\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/w4ulogo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
                                     </div>
                                </div>
                                <div class=\"peer peer-greed\">
                                    <h5 class=\"lh-1 mB-0 logo-text\">Wings4U Portal</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"peer\">
                        <div class=\"mobile-toggle sidebar-toggle\">
                            <a href=\"\" class=\"td-n\">
                                <i class=\"ti-arrow-circle-left\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ### \$Sidebar Menu ### -->
            <ul class=\"sidebar-menu scrollable pos-r\">

                <li class=\"nav-item mT-30 active\">
                    <a class=\"sidebar-link\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_content", ["pageName" => "home"]);
        echo "\">
                <span class=\"icon-holder\">
                  <i class=\"c-blue-500 ti-home\"></i>
                </span>
                        <span class=\"title\">Home</span>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"sidebar-link\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_content", ["pageName" => "projects"]);
        echo "\">
                <span class=\"icon-holder\">
                  <i class=\"c-light-blue-500 ti-pencil\"></i>
                </span>
                        <span class=\"title\">Projects</span>
                    </a>
                </li>




            </ul>
        </div>
    </div>

    <!-- #Main ============================ -->
    <div class=\"page-container\">
        <!-- ### \$Topbar ### -->
        <div class=\"header navbar\">
            <div class=\"header-container\">
                <ul class=\"nav-left\">
                    <li>
                        <a id='sidebar-toggle' class=\"sidebar-toggle\" href=\"javascript:void(0);\">
                            <i class=\"ti-menu\"></i>
                        </a>
                    </li>
                    <li class=\"search-box\">
                        <a class=\"search-toggle no-pdd-right\" href=\"javascript:void(0);\">
                            <i class=\"search-icon ti-search pdd-right-10\"></i>
                            <i class=\"search-icon-close ti-close pdd-right-10\"></i>
                        </a>
                    </li>
                    <li class=\"search-input\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Search...\">
                    </li>
                </ul>
                <ul class=\"nav-right\">
                    <li class=\"notifications dropdown\">
                        <span class=\"counter bgc-red\">3</span>
                        <a href=\"\" class=\"dropdown-toggle no-after\" data-toggle=\"dropdown\">
                            <i class=\"ti-bell\"></i>
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li class=\"pX-20 pY-15 bdB\">
                                <i class=\"ti-bell pR-10\"></i>
                                <span class=\"fsz-sm fw-600 c-grey-900\">Notifications</span>
                            </li>
                            <li>
                                <ul class=\"ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm\">
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/1.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                            <span>
                              <span class=\"fw-500\">John Doe</span>
                              <span class=\"c-grey-600\">liked your <span class=\"text-dark\">post</span>
                              </span>
                            </span>
                                                <p class=\"m-0\">
                                                    <small class=\"fsz-xs\">5 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                            <span>
                              <span class=\"fw-500\">Moo Doe</span>
                              <span class=\"c-grey-600\">liked your <span class=\"text-dark\">cover image</span>
                              </span>
                            </span>
                                                <p class=\"m-0\">
                                                    <small class=\"fsz-xs\">7 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/3.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                            <span>
                              <span class=\"fw-500\">Lee Doe</span>
                              <span class=\"c-grey-600\">commented on your <span class=\"text-dark\">video</span>
                              </span>
                            </span>
                                                <p class=\"m-0\">
                                                    <small class=\"fsz-xs\">10 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"pX-20 pY-15 ta-c bdT\">
                    <span>
                      <a href=\"\" class=\"c-grey-600 cH-blue fsz-sm td-n\">View All Notifications <i class=\"ti-angle-right fsz-xs mL-10\"></i></a>
                      <a href=\"\" class=\"c-grey-600 cH-blue fsz-sm td-n\">View All Notifications <i class=\"ti-angle-right fsz-xs mL-10\"></i></a>
                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class=\"notifications dropdown\">
                        <span class=\"counter bgc-blue\">3</span>
                        <a href=\"\" class=\"dropdown-toggle no-after\" data-toggle=\"dropdown\">
                            <i class=\"ti-email\"></i>
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li class=\"pX-20 pY-15 bdB\">
                                <i class=\"ti-email pR-10\"></i>
                                <span class=\"fsz-sm fw-600 c-grey-900\">Emails</span>
                            </li>
                            <li>
                                <ul class=\"ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm\">
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/1.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                                                <div>
                                                    <div class=\"peers jc-sb fxw-nw mB-5\">
                                                        <div class=\"peer\">
                                                            <p class=\"fw-500 mB-0\">John Doe</p>
                                                        </div>
                                                        <div class=\"peer\">
                                                            <small class=\"fsz-xs\">5 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class=\"c-grey-600 fsz-sm\">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                                                <div>
                                                    <div class=\"peers jc-sb fxw-nw mB-5\">
                                                        <div class=\"peer\">
                                                            <p class=\"fw-500 mB-0\">Moo Doe</p>
                                                        </div>
                                                        <div class=\"peer\">
                                                            <small class=\"fsz-xs\">15 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class=\"c-grey-600 fsz-sm\">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/3.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                                                <div>
                                                    <div class=\"peers jc-sb fxw-nw mB-5\">
                                                        <div class=\"peer\">
                                                            <p class=\"fw-500 mB-0\">Lee Doe</p>
                                                        </div>
                                                        <div class=\"peer\">
                                                            <small class=\"fsz-xs\">25 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class=\"c-grey-600 fsz-sm\">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"pX-20 pY-15 ta-c bdT\">
                    <span>
                      <a href=\"\" class=\"c-grey-600 cH-blue fsz-sm td-n\">View All Email <i class=\"fs-xs ti-angle-right mL-10\"></i></a>
                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle no-after peers fxw-nw ai-c lh-1\" data-toggle=\"dropdown\">
                            <div class=\"peer mR-10\">
                                <img class=\"w-2r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/10.jpg\" alt=\"\">
                            </div>
                            <div class=\"peer\">
                                <span class=\"fsz-sm c-grey-900\"></span>
                            </div>
                        </a>
                        <ul class=\"dropdown-menu fsz-sm\">
                            <li>
                                <a href=\"\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-settings mR-10\"></i>
                                    <span>Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-user mR-10\"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-email mR-10\"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li>
                                <a href=\"";
        // line 385
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-power-off mR-10\"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 396, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 396));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 397
            echo "            <div class=\"alert alert-success\" id=\"flashes\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "   </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "
        ";
        // line 400
        $this->displayBlock('body', $context, $blocks);
        // line 401
        echo "
        <!-- ### \$App Screen Footer ### -->
        <footer class=\"bdT ta-c p-30 lh-0 fsz-sm c-grey-600\">
            <span>Copyright © 2017 Designed by <a href=\"https://colorlib.com\" target='_blank' title=\"Colorlib\">Colorlib</a>. All rights reserved.</span>
        </footer>
    </div>

</div>

<script>
    (function() {
        if('serviceWorker' in navigator) {
            navigator.serviceWorker.register('assets/service-worker.js');
        }
    })();

    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>

";
        // line 425
        $this->displayBlock('javascripts', $context, $blocks);
        // line 426
        echo "

</body>

<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function () {
        \$('#flashes').fadeOut(5000);
    });
</script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Wings4U Portal";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
        <style>

            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }
            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            #loader {
                transition: all 0.3s ease-in-out;
                opacity: 1;
                visibility: visible;
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 90000;
            }
            #loader.fadeOut {
                opacity: 0;
                visibility: hidden;
            }
            .spinner {
                width: 40px;
                height: 40px;
                position: absolute;
                top: calc(50% - 20px);
                left: calc(50% - 20px);
                background-color: #333;
                border-radius: 100%;
                -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
                animation: sk-scaleout 1.0s infinite ease-in-out;
            }
            @-webkit-keyframes sk-scaleout {
                0% { -webkit-transform: scale(0) }
                100% {
                    -webkit-transform: scale(1.0);
                    opacity: 0;
                }
            }
            @keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                } 100% {
                      -webkit-transform: scale(1.0);
                      transform: scale(1.0);
                      opacity: 0;
                  }
            }
        </style>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 400
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 425
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 425,  580 => 400,  568 => 78,  564 => 77,  495 => 10,  485 => 9,  466 => 6,  447 => 430,  441 => 426,  439 => 425,  413 => 401,  411 => 400,  408 => 399,  399 => 397,  395 => 396,  381 => 385,  149 => 156,  137 => 147,  111 => 124,  65 => 80,  63 => 9,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Wings4U Portal{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/app.css') }}\" />
    <link rel=\"stylesheet\" href=\"\" />
    {% block stylesheets %}

        <style>

            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }
            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            #loader {
                transition: all 0.3s ease-in-out;
                opacity: 1;
                visibility: visible;
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 90000;
            }
            #loader.fadeOut {
                opacity: 0;
                visibility: hidden;
            }
            .spinner {
                width: 40px;
                height: 40px;
                position: absolute;
                top: calc(50% - 20px);
                left: calc(50% - 20px);
                background-color: #333;
                border-radius: 100%;
                -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
                animation: sk-scaleout 1.0s infinite ease-in-out;
            }
            @-webkit-keyframes sk-scaleout {
                0% { -webkit-transform: scale(0) }
                100% {
                    -webkit-transform: scale(1.0);
                    opacity: 0;
                }
            }
            @keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                } 100% {
                      -webkit-transform: scale(1.0);
                      transform: scale(1.0);
                      opacity: 0;
                  }
            }
        </style>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    {% endblock %}
</head>
<body class=\"app\">
<!-- @TOC -->
<!-- =================================================== -->
<!--
  + @Page Loader
  + @App Content
      - #Left Sidebar
          > \$Sidebar Header
          > \$Sidebar Menu

      - #Main
          > \$Topbar
          > \$App Screen Content
-->

<!-- @Page Loader -->
<!-- =================================================== -->
<div id='loader'>
    <div class=\"spinner\"></div>
</div>

<!-- @App Content -->
<!-- =================================================== -->
<div>
    <!-- #Left Sidebar ==================== -->
    <div class=\"sidebar\">
        <div class=\"sidebar-inner\">
            <!-- ### \$Sidebar Header ### -->
            <div class=\"sidebar-logo\">
                <div class=\"peers ai-c fxw-nw\">
                    <div class=\"peer peer-greed\">
                        <a class=\"sidebar-link td-n\" href=\"\">
                            <div class=\"peers ai-c fxw-nw\">
                                <div class=\"peer\">

                                    <div class=\"logo\" style=\" height: 25px;      /* equals max image height */
   width: 140px;
    white-space: nowrap;

    text-align: center; margin: 1em 0;\" ><span style=\"  display: inline-block;
    height: 100%;
    vertical-align: middle;\"></span>
                                        <img style=\"vertical-align: middle;max-height: 25px;
    max-width: 160px;\" src=\"{{ asset('assets/images/w4ulogo.png') }}\" alt=\"logo\" />
                                     </div>
                                </div>
                                <div class=\"peer peer-greed\">
                                    <h5 class=\"lh-1 mB-0 logo-text\">Wings4U Portal</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"peer\">
                        <div class=\"mobile-toggle sidebar-toggle\">
                            <a href=\"\" class=\"td-n\">
                                <i class=\"ti-arrow-circle-left\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ### \$Sidebar Menu ### -->
            <ul class=\"sidebar-menu scrollable pos-r\">

                <li class=\"nav-item mT-30 active\">
                    <a class=\"sidebar-link\" href=\"{{ path('app_home_content', {'pageName': 'home'})}}\">
                <span class=\"icon-holder\">
                  <i class=\"c-blue-500 ti-home\"></i>
                </span>
                        <span class=\"title\">Home</span>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"sidebar-link\" href=\"{{ path('app_home_content', {'pageName': 'projects'})}}\">
                <span class=\"icon-holder\">
                  <i class=\"c-light-blue-500 ti-pencil\"></i>
                </span>
                        <span class=\"title\">Projects</span>
                    </a>
                </li>




            </ul>
        </div>
    </div>

    <!-- #Main ============================ -->
    <div class=\"page-container\">
        <!-- ### \$Topbar ### -->
        <div class=\"header navbar\">
            <div class=\"header-container\">
                <ul class=\"nav-left\">
                    <li>
                        <a id='sidebar-toggle' class=\"sidebar-toggle\" href=\"javascript:void(0);\">
                            <i class=\"ti-menu\"></i>
                        </a>
                    </li>
                    <li class=\"search-box\">
                        <a class=\"search-toggle no-pdd-right\" href=\"javascript:void(0);\">
                            <i class=\"search-icon ti-search pdd-right-10\"></i>
                            <i class=\"search-icon-close ti-close pdd-right-10\"></i>
                        </a>
                    </li>
                    <li class=\"search-input\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Search...\">
                    </li>
                </ul>
                <ul class=\"nav-right\">
                    <li class=\"notifications dropdown\">
                        <span class=\"counter bgc-red\">3</span>
                        <a href=\"\" class=\"dropdown-toggle no-after\" data-toggle=\"dropdown\">
                            <i class=\"ti-bell\"></i>
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li class=\"pX-20 pY-15 bdB\">
                                <i class=\"ti-bell pR-10\"></i>
                                <span class=\"fsz-sm fw-600 c-grey-900\">Notifications</span>
                            </li>
                            <li>
                                <ul class=\"ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm\">
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/1.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                            <span>
                              <span class=\"fw-500\">John Doe</span>
                              <span class=\"c-grey-600\">liked your <span class=\"text-dark\">post</span>
                              </span>
                            </span>
                                                <p class=\"m-0\">
                                                    <small class=\"fsz-xs\">5 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                            <span>
                              <span class=\"fw-500\">Moo Doe</span>
                              <span class=\"c-grey-600\">liked your <span class=\"text-dark\">cover image</span>
                              </span>
                            </span>
                                                <p class=\"m-0\">
                                                    <small class=\"fsz-xs\">7 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/3.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                            <span>
                              <span class=\"fw-500\">Lee Doe</span>
                              <span class=\"c-grey-600\">commented on your <span class=\"text-dark\">video</span>
                              </span>
                            </span>
                                                <p class=\"m-0\">
                                                    <small class=\"fsz-xs\">10 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"pX-20 pY-15 ta-c bdT\">
                    <span>
                      <a href=\"\" class=\"c-grey-600 cH-blue fsz-sm td-n\">View All Notifications <i class=\"ti-angle-right fsz-xs mL-10\"></i></a>
                      <a href=\"\" class=\"c-grey-600 cH-blue fsz-sm td-n\">View All Notifications <i class=\"ti-angle-right fsz-xs mL-10\"></i></a>
                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class=\"notifications dropdown\">
                        <span class=\"counter bgc-blue\">3</span>
                        <a href=\"\" class=\"dropdown-toggle no-after\" data-toggle=\"dropdown\">
                            <i class=\"ti-email\"></i>
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li class=\"pX-20 pY-15 bdB\">
                                <i class=\"ti-email pR-10\"></i>
                                <span class=\"fsz-sm fw-600 c-grey-900\">Emails</span>
                            </li>
                            <li>
                                <ul class=\"ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm\">
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/1.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                                                <div>
                                                    <div class=\"peers jc-sb fxw-nw mB-5\">
                                                        <div class=\"peer\">
                                                            <p class=\"fw-500 mB-0\">John Doe</p>
                                                        </div>
                                                        <div class=\"peer\">
                                                            <small class=\"fsz-xs\">5 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class=\"c-grey-600 fsz-sm\">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                                                <div>
                                                    <div class=\"peers jc-sb fxw-nw mB-5\">
                                                        <div class=\"peer\">
                                                            <p class=\"fw-500 mB-0\">Moo Doe</p>
                                                        </div>
                                                        <div class=\"peer\">
                                                            <small class=\"fsz-xs\">15 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class=\"c-grey-600 fsz-sm\">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class=\"peer mR-15\">
                                                <img class=\"w-3r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/3.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"peer peer-greed\">
                                                <div>
                                                    <div class=\"peers jc-sb fxw-nw mB-5\">
                                                        <div class=\"peer\">
                                                            <p class=\"fw-500 mB-0\">Lee Doe</p>
                                                        </div>
                                                        <div class=\"peer\">
                                                            <small class=\"fsz-xs\">25 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class=\"c-grey-600 fsz-sm\">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"pX-20 pY-15 ta-c bdT\">
                    <span>
                      <a href=\"\" class=\"c-grey-600 cH-blue fsz-sm td-n\">View All Email <i class=\"fs-xs ti-angle-right mL-10\"></i></a>
                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle no-after peers fxw-nw ai-c lh-1\" data-toggle=\"dropdown\">
                            <div class=\"peer mR-10\">
                                <img class=\"w-2r bdrs-50p\" src=\"https://randomuser.me/api/portraits/men/10.jpg\" alt=\"\">
                            </div>
                            <div class=\"peer\">
                                <span class=\"fsz-sm c-grey-900\"></span>
                            </div>
                        </a>
                        <ul class=\"dropdown-menu fsz-sm\">
                            <li>
                                <a href=\"\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-settings mR-10\"></i>
                                    <span>Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-user mR-10\"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-email mR-10\"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li>
                                <a href=\"{{ path('app_logout') }}\" class=\"d-b td-n pY-5 bgcH-grey-100 c-grey-700\">
                                    <i class=\"ti-power-off mR-10\"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\" id=\"flashes\"> {{ message }}   </div>
        {% endfor %}

        {% block body %}{% endblock %}

        <!-- ### \$App Screen Footer ### -->
        <footer class=\"bdT ta-c p-30 lh-0 fsz-sm c-grey-600\">
            <span>Copyright © 2017 Designed by <a href=\"https://colorlib.com\" target='_blank' title=\"Colorlib\">Colorlib</a>. All rights reserved.</span>
        </footer>
    </div>

</div>

<script>
    (function() {
        if('serviceWorker' in navigator) {
            navigator.serviceWorker.register('assets/service-worker.js');
        }
    })();

    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>

{% block javascripts %}<script src=\"\"></script>{% endblock %}


</body>

<script src=\"{{ asset('assets/app.js') }}\"></script>

<script>
    \$(document).ready(function () {
        \$('#flashes').fadeOut(5000);
    });
</script>
</html>
", "menu.html.twig", "C:\\Users\\matia\\Desktop\\Symphony\\login_test_project\\templates\\menu.html.twig");
    }
}
