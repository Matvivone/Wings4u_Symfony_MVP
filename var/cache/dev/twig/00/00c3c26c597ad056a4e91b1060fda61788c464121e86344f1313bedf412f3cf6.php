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

/* projects.html.twig */
class __TwigTemplate_f2614d673379010de479617fdbbf4cfcd5c3fae64f0978df52626a9a595f95e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "projects.html.twig", 1);
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
        echo "        <!-- ### \$App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class=\"container-fluid\">


              <div class=\"table-title\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <h2>Data table</h2>
                  </div>
                  <div class=\"col-sm-6\">
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project", []);
        echo "\" class=\"btn btn-success\" ><i class=\"material-icons\">&#xE147;</i> <span>Add new project</span></a>

                  </div>
                </div>
              </div>
                  <div class=\"bgc-white bd bdrs-3 p-20 mB-20\">";
        // line 22
        echo "

                    <table id=\"dataTable\" class=\"table table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Country</th>
                            <th>Responsible</th>
                            <th>Content status</th>
                            <th>Video status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>

                        <tbody>

                          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "
                          <tr class=\"datarow\"   data-whatever=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "country", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "responsible", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "contentstatus", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "videostatus", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td><a class=\"sidebar-link\" href=  \"http://127.0.0.1:8000/project/edit/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo " \">Edit</a></td>
                            <td><a class=\"sidebar-link\" href=  \"http://127.0.0.1:8000/project/delete/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo " \">Delete</a></td>
                          </tr>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                        </tbody>
                      </table>

                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                <div class=\"modal-dialog\" role=\"document\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                    </div>

                    <div class=\"modal-body\">
                      <form>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"col-form-label\">Title:</label>
                          <input type=\"text\" class=\"form-control\" id=\"project-title\">
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Country:</label>
                          <textarea class=\"form-control\" id=\"project-country\"></textarea>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Responsible:</label>
                          <textarea class=\"form-control\" id=\"project-responsible\"></textarea>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Content status:</label>
                          <textarea class=\"form-control\" id=\"project-content-status\"></textarea>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Video status:</label>
                          <textarea class=\"form-control\" id=\"project-video-status\"></textarea>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"submit\" name=\"updateData\" class=\"btn btn-primary\">Save</button>
                        </div>
                      </form>
                    </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <script>
    \$(document).ready(function () {
      //=================================================================
      //click on table body
      \$(\"#dataTable tbody tr\").click(function () {

        //get row contents into an array
        var tableData = \$(this).children(\"td\").map(function() {
          return \$(this).text();
        }).get();

        \$('#project-title').val(tableData[1]);
        \$('#project-country').val(tableData[2]);
        \$('#project-responsible').val(tableData[3]);
        \$('#project-content-status').val(tableData[4]);
        \$('#project-video-status').val(tableData[5]);


        \$.ajax({
          type: \"POST\",
          url: \"http://127.0.0.1:8000/project/edit/\" + tableData[0],
          data: {},
          contentType: \"application/json; charset=utf-8\"
        });


      });
    });
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  149 => 50,  145 => 49,  141 => 48,  137 => 47,  133 => 46,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  114 => 41,  110 => 40,  90 => 22,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"menu.html.twig\" %}

{% block body %}
        <!-- ### \$App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class=\"container-fluid\">


              <div class=\"table-title\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <h2>Data table</h2>
                  </div>
                  <div class=\"col-sm-6\">
                    <a href=\"{{ path('project', {})}}\" class=\"btn btn-success\" ><i class=\"material-icons\">&#xE147;</i> <span>Add new project</span></a>

                  </div>
                </div>
              </div>
                  <div class=\"bgc-white bd bdrs-3 p-20 mB-20\">{#                    <h4 class=\"c-grey-900 mB-20\">Projects</h4>#}


                    <table id=\"dataTable\" class=\"table table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Country</th>
                            <th>Responsible</th>
                            <th>Content status</th>
                            <th>Video status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>

                        <tbody>

                          {% for item in projects %}

                          <tr class=\"datarow\"   data-whatever=\"{{ item.id }}\">
                            <td>{{ item.id }}</td>
                            <td>{{ item.title }}</td>
                            <td>{{ item.country }}</td>
                            <td>{{ item.responsible }}</td>
                            <td>{{ item.contentstatus }}</td>
                            <td>{{ item.videostatus }}</td>
                            <td><a class=\"sidebar-link\" href=  \"http://127.0.0.1:8000/project/edit/{{ item.id }} \">Edit</a></td>
                            <td><a class=\"sidebar-link\" href=  \"http://127.0.0.1:8000/project/delete/{{ item.id }} \">Delete</a></td>
                          </tr>

                          {% endfor %}

                        </tbody>
                      </table>

                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                <div class=\"modal-dialog\" role=\"document\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                    </div>

                    <div class=\"modal-body\">
                      <form>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"col-form-label\">Title:</label>
                          <input type=\"text\" class=\"form-control\" id=\"project-title\">
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Country:</label>
                          <textarea class=\"form-control\" id=\"project-country\"></textarea>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Responsible:</label>
                          <textarea class=\"form-control\" id=\"project-responsible\"></textarea>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Content status:</label>
                          <textarea class=\"form-control\" id=\"project-content-status\"></textarea>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"message-text\" class=\"col-form-label\">Video status:</label>
                          <textarea class=\"form-control\" id=\"project-video-status\"></textarea>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"submit\" name=\"updateData\" class=\"btn btn-primary\">Save</button>
                        </div>
                      </form>
                    </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <script>
    \$(document).ready(function () {
      //=================================================================
      //click on table body
      \$(\"#dataTable tbody tr\").click(function () {

        //get row contents into an array
        var tableData = \$(this).children(\"td\").map(function() {
          return \$(this).text();
        }).get();

        \$('#project-title').val(tableData[1]);
        \$('#project-country').val(tableData[2]);
        \$('#project-responsible').val(tableData[3]);
        \$('#project-content-status').val(tableData[4]);
        \$('#project-video-status').val(tableData[5]);


        \$.ajax({
          type: \"POST\",
          url: \"http://127.0.0.1:8000/project/edit/\" + tableData[0],
          data: {},
          contentType: \"application/json; charset=utf-8\"
        });


      });
    });
  </script>

{% endblock body %}", "projects.html.twig", "C:\\Users\\matia\\Desktop\\Symphony\\login_test_project\\templates\\projects.html.twig");
    }
}
