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

/* editProject.html.twig */
class __TwigTemplate_35b10cdad95dd6b7b9e04990529f28d132df6510b74be6408fe38be274e1a897 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editProject.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editProject.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "editProject.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

    <main class='main-content bgc-grey-100'>
        <div id='mainContent'>
            <div class=\"row gap-20 masonry pos-r\">
                <div class=\"masonry-sizer col-md-6\"></div>
                <div class=\"masonry-item col-md-6\">
                    <div class=\"bgc-white p-20 bd\">
                        <h6 class=\"c-grey-900\">Edit project</h6>
                        <div class=\"mT-30\">

                                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

                                        <div class=\"form-group\">
                                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 23, $this->source); })()), "Title", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>

                                        <div class=\"form-group\">
                                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 27, $this->source); })()), "Country", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                        </div>

                                        <div class=\"form-group\">
                                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 32, $this->source); })()), "Responsible", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>

                                        <div class=\"form-group\">
                                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 36, $this->source); })()), "Content_status", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>

                                        <div class=\"form-group\">
                                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 40, $this->source); })()), "Video_status", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>

                                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 43, $this->source); })()), 'widget');
        echo "
                                        <button type=\"submit\" class=\"btn btn-primary\">Edit</button>

                                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 46, $this->source); })()), 'form_end');
        echo "

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
        return "editProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  125 => 43,  119 => 40,  112 => 36,  105 => 32,  97 => 27,  90 => 23,  84 => 20,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"menu.html.twig\" %}



{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

    <main class='main-content bgc-grey-100'>
        <div id='mainContent'>
            <div class=\"row gap-20 masonry pos-r\">
                <div class=\"masonry-sizer col-md-6\"></div>
                <div class=\"masonry-item col-md-6\">
                    <div class=\"bgc-white p-20 bd\">
                        <h6 class=\"c-grey-900\">Edit project</h6>
                        <div class=\"mT-30\">

                                {{ form_start(projectForm) }}

                                        <div class=\"form-group\">
                                            {{ form_row(projectForm.Title, {'attr': {'class': 'form-control'}}) }}
                                        </div>

                                        <div class=\"form-group\">
                                            {{ form_row(projectForm.Country, {'attr': {'class': 'form-control'}}) }}

                                        </div>

                                        <div class=\"form-group\">
                                            {{ form_row(projectForm.Responsible, {'attr': {'class': 'form-control'}}) }}
                                        </div>

                                        <div class=\"form-group\">
                                            {{ form_row(projectForm.Content_status, {'attr': {'class': 'form-control'}}) }}
                                        </div>

                                        <div class=\"form-group\">
                                            {{ form_row(projectForm.Video_status, {'attr': {'class': 'form-control'}}) }}
                                        </div>

                                        {{ form_widget(projectForm) }}
                                        <button type=\"submit\" class=\"btn btn-primary\">Edit</button>

                                {{ form_end(projectForm) }}

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </main>
{% endblock body %}
", "editProject.html.twig", "C:\\Users\\matia\\Desktop\\Symphony\\login_test_project\\templates\\editProject.html.twig");
    }
}
