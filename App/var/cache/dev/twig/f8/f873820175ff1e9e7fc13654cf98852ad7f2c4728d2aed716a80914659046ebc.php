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

/* llistar/llistar_comercial.html.twig */
class __TwigTemplate_5e646458300bb7d63b89c718fc27b0d89f4a2c27efba2a2ba4795af264997f55 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "llistar/llistar_comercial.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'cssInline' => [$this, 'block_cssInline'],
            'main' => [$this, 'block_main'],
            'customjs' => [$this, 'block_customjs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_comercial.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_comercial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de comerciales";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_cssInline($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssInline"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssInline"));

        // line 4
        echo "    <style>
        table{
            white-space:nowrap;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    <div class=\"container-fluid\" id=\"app\">
        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de comerciales</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Comerciales</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de comercial</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de comercial</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr v-for=\"comercial in comercials\">
                            <td>
                                <span class=\" d-flex justify-content-center align-items-center\">
                                    <span class=\"mr-1\" @click=\"eliminar(comercial.id)\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-trash\"></i></span></span>
                                    <span class=\"ml-1\" @click=\"seleccionar(comercial.id)\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><span class=\"btn btn-info btn-circle\"><i class=\"fas fa-fw fa-edit\"></i></span></span>
                                </span>
                            </td>
                            <td>";
        // line 49
        echo "{{ comercial.id }}";
        echo "</td>
                            <td>";
        // line 50
        echo "{{ comercial._codigo__comercio }}";
        echo "</td>
                            <td>";
        // line 51
        echo "{{ comercial._nombre__comercial }}";
        echo "</td>
                            <td>";
        // line 52
        echo "{{ comercial._telefono__comercial }}";
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Editar comercial</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <label class=\"font-weight-bolder text-label\">Nombre</label>
                            <input type=\"text\" v-model=\"comercialSelecte._nombre__comercial\" class=\"form-control mb-1\">
                            <label class=\"font-weight-bolder text-label\">Telefono</label>
                            <input type=\"text\" v-model=\"comercialSelecte._telefono__comercial\" class=\"form-control mb-1\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" @click=\"guardar(comercialSelecte.id)\" class=\"btn btn-primary\" data-dismiss=\"modal\">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 85
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listComerVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "llistar/llistar_comercial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 85,  204 => 84,  162 => 52,  158 => 51,  154 => 50,  150 => 49,  110 => 11,  101 => 10,  86 => 4,  77 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Lista de comerciales{% endblock %}
{% block cssInline %}
    <style>
        table{
            white-space:nowrap;
        }
    </style>
{% endblock %}
{% block main %}
    <div class=\"container-fluid\" id=\"app\">
        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de comerciales</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Comerciales</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de comercial</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de comercial</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr v-for=\"comercial in comercials\">
                            <td>
                                <span class=\" d-flex justify-content-center align-items-center\">
                                    <span class=\"mr-1\" @click=\"eliminar(comercial.id)\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-trash\"></i></span></span>
                                    <span class=\"ml-1\" @click=\"seleccionar(comercial.id)\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><span class=\"btn btn-info btn-circle\"><i class=\"fas fa-fw fa-edit\"></i></span></span>
                                </span>
                            </td>
                            <td>{{\"{{ comercial.id }}\"}}</td>
                            <td>{{\"{{ comercial._codigo__comercio }}\"}}</td>
                            <td>{{\"{{ comercial._nombre__comercial }}\"}}</td>
                            <td>{{\"{{ comercial._telefono__comercial }}\"}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Editar comercial</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <label class=\"font-weight-bolder text-label\">Nombre</label>
                            <input type=\"text\" v-model=\"comercialSelecte._nombre__comercial\" class=\"form-control mb-1\">
                            <label class=\"font-weight-bolder text-label\">Telefono</label>
                            <input type=\"text\" v-model=\"comercialSelecte._telefono__comercial\" class=\"form-control mb-1\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" @click=\"guardar(comercialSelecte.id)\" class=\"btn btn-primary\" data-dismiss=\"modal\">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listComerVue.js\"></script>
{% endblock %}
", "llistar/llistar_comercial.html.twig", "/var/www/html/AiMi/App/templates/llistar/llistar_comercial.html.twig");
    }
}