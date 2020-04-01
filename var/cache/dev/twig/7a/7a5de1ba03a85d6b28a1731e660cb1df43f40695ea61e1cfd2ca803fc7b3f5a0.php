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

/* home.html.twig */
class __TwigTemplate_ef7e4fe59be6580e9ecf7e9e0bed68d35568f5cddf33e8a62168d3d71655e438 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- ### \$App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class=\"row gap-20 masonry pos-r\">
              <div class=\"masonry-sizer col-md-6\"></div>
              <div class=\"masonry-item  w-100\">
                <div class=\"row gap-20\">
                  <!-- #Toatl Visits ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Billing profit</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500\">73.65%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Total Page Views ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Gross profit</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash2\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500\">89%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Unique Visitors ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Started videos</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash3\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500\">11</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Bounce Rate ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Started content</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash4\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500\">25</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"masonry-item col-12\">
                <!-- #Site Visits ==================== -->
                <div class=\"bd bgc-white\">
                  <div class=\"peers fxw-nw@lg+ ai-s\">
                    <div class=\"peer peer-greed w-70p@lg+ w-100@lg- p-20\">
                      <div class=\"layers\">
                        <div class=\"layer w-100 mB-10\">
                          <h6 class=\"lh-1\">Site Visits</h6>
                        </div>
                        <div class=\"layer w-100\">
                          <div id=\"world-map-marker\"></div>
                        </div>
                      </div>
                    </div>
                    <div class=\"peer bdL p-20 w-30p@lg+ w-100p@lg-\">
                      <div class=\"layers\">
                        <div class=\"layer w-100\">
                          <!-- Progress Bars -->
                          <div class=\"layers\">
                            <div class=\"layer w-100\">
                              <h5 class=\"mB-5\">100k</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From USA</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">50%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-deep-purple-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:50%;\"> <span class=\"sr-only\">50% Complete</span></div>
                              </div>
                            </div>
                            <div class=\"layer w-100 mT-15\">
                              <h5 class=\"mB-5\">1M</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From Europe</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">80%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-green-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%;\"> <span class=\"sr-only\">80% Complete</span></div>
                              </div>
                            </div>
                            <div class=\"layer w-100 mT-15\">
                              <h5 class=\"mB-5\">450k</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From Australia</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">40%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-light-blue-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:40%;\"> <span class=\"sr-only\">40% Complete</span></div>
                              </div>
                            </div>
                            <div class=\"layer w-100 mT-15\">
                              <h5 class=\"mB-5\">1B</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From India</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">90%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-blue-grey-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%;\"> <span class=\"sr-only\">90% Complete</span></div>
                              </div>
                            </div>
                          </div>

                          <!-- Pie Charts -->
                          <div class=\"peers pT-20 mT-20 bdT fxw-nw@lg+ jc-sb ta-c gap-10\">
                            <div class=\"peer\">
                              <div class=\"easy-pie-chart\" data-size='80' data-percent=\"75\" data-bar-color='#f44336'>
                                <span></span>
                              </div>
                              <h6 class=\"fsz-sm\">New Users</h6>
                            </div>
                            <div class=\"peer\">
                              <div class=\"easy-pie-chart\" data-size='80' data-percent=\"50\" data-bar-color='#2196f3'>
                                <span></span>
                              </div>
                              <h6 class=\"fsz-sm\">New Purchases</h6>
                            </div>
                            <div class=\"peer\">
                              <div class=\"easy-pie-chart\" data-size='80' data-percent=\"90\" data-bar-color='#ff9800'>
                                <span></span>
                              </div>
                              <h6 class=\"fsz-sm\">Bounce Rate</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {%  extends \"menu.html.twig\" %}

 {% block body %}
<!-- ### \$App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class=\"row gap-20 masonry pos-r\">
              <div class=\"masonry-sizer col-md-6\"></div>
              <div class=\"masonry-item  w-100\">
                <div class=\"row gap-20\">
                  <!-- #Toatl Visits ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Billing profit</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500\">73.65%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Total Page Views ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Gross profit</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash2\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500\">89%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Unique Visitors ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Started videos</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash3\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500\">11</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Bounce Rate ==================== -->
                  <div class='col-md-3'>
                    <div class=\"layers bd bgc-white p-20\">
                      <div class=\"layer w-100 mB-10\">
                        <h6 class=\"lh-1\">Started content</h6>
                      </div>
                      <div class=\"layer w-100\">
                        <div class=\"peers ai-sb fxw-nw\">
                          <div class=\"peer peer-greed\">
                            <span id=\"sparklinedash4\"></span>
                          </div>
                          <div class=\"peer\">
                            <span class=\"d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500\">25</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"masonry-item col-12\">
                <!-- #Site Visits ==================== -->
                <div class=\"bd bgc-white\">
                  <div class=\"peers fxw-nw@lg+ ai-s\">
                    <div class=\"peer peer-greed w-70p@lg+ w-100@lg- p-20\">
                      <div class=\"layers\">
                        <div class=\"layer w-100 mB-10\">
                          <h6 class=\"lh-1\">Site Visits</h6>
                        </div>
                        <div class=\"layer w-100\">
                          <div id=\"world-map-marker\"></div>
                        </div>
                      </div>
                    </div>
                    <div class=\"peer bdL p-20 w-30p@lg+ w-100p@lg-\">
                      <div class=\"layers\">
                        <div class=\"layer w-100\">
                          <!-- Progress Bars -->
                          <div class=\"layers\">
                            <div class=\"layer w-100\">
                              <h5 class=\"mB-5\">100k</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From USA</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">50%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-deep-purple-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:50%;\"> <span class=\"sr-only\">50% Complete</span></div>
                              </div>
                            </div>
                            <div class=\"layer w-100 mT-15\">
                              <h5 class=\"mB-5\">1M</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From Europe</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">80%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-green-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%;\"> <span class=\"sr-only\">80% Complete</span></div>
                              </div>
                            </div>
                            <div class=\"layer w-100 mT-15\">
                              <h5 class=\"mB-5\">450k</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From Australia</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">40%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-light-blue-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:40%;\"> <span class=\"sr-only\">40% Complete</span></div>
                              </div>
                            </div>
                            <div class=\"layer w-100 mT-15\">
                              <h5 class=\"mB-5\">1B</h5>
                              <small class=\"fw-600 c-grey-700\">Visitors From India</small>
                              <span class=\"pull-right c-grey-600 fsz-sm\">90%</span>
                              <div class=\"progress mT-10\">
                                <div class=\"progress-bar bgc-blue-grey-500\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%;\"> <span class=\"sr-only\">90% Complete</span></div>
                              </div>
                            </div>
                          </div>

                          <!-- Pie Charts -->
                          <div class=\"peers pT-20 mT-20 bdT fxw-nw@lg+ jc-sb ta-c gap-10\">
                            <div class=\"peer\">
                              <div class=\"easy-pie-chart\" data-size='80' data-percent=\"75\" data-bar-color='#f44336'>
                                <span></span>
                              </div>
                              <h6 class=\"fsz-sm\">New Users</h6>
                            </div>
                            <div class=\"peer\">
                              <div class=\"easy-pie-chart\" data-size='80' data-percent=\"50\" data-bar-color='#2196f3'>
                                <span></span>
                              </div>
                              <h6 class=\"fsz-sm\">New Purchases</h6>
                            </div>
                            <div class=\"peer\">
                              <div class=\"easy-pie-chart\" data-size='80' data-percent=\"90\" data-bar-color='#ff9800'>
                                <span></span>
                              </div>
                              <h6 class=\"fsz-sm\">Bounce Rate</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </main>
{%  endblock body %}
", "home.html.twig", "C:\\Users\\matia\\Desktop\\Symphony\\login_test_project\\templates\\home.html.twig");
    }
}
