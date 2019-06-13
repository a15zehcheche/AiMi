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

/* llistar/llistar_factura.html.twig */
class __TwigTemplate_ba9bf110ca841735685cac036809f37e1de94c7cd8b5854b5b7e2a99ec5029f3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "llistar/llistar_factura.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_factura.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_factura.html.twig"));

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

        echo "Lista de facturas";
        
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
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de facturas</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Facturas</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"50px\">Visualitzar</th>
                            <th>Numero de factura</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Comercial</th>
                            <th>Precio Total</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"50px\">Visualitzar</th>
                            <th>Numero de factura</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Comercial</th>
                            <th>Precio Total</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr v-for=\"factura in facturas\">
                            <td><a :href=\"'http://192.168.205.224:8000/facturaPdf/' + factura.facturaNumero + '/view'\" target=\"_blank\" class=\"d-flex justify-content-center align-items-center\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-file-pdf\"></i></span></a></td>
                            <td>";
        // line 46
        echo "{{ factura.facturaNumero }}";
        echo "</td>
                            <td>";
        // line 47
        echo "{{ factura.fecha }}";
        echo "</td>
                            <td>";
        // line 48
        echo "{{ factura.client.NOMBRE_CLIENTE }}";
        echo "</td>
                            <td>";
        // line 49
        echo "{{ factura.comercial.NOMBRE_COMERCIAL }}";
        echo "</td>
                            <td>";
        // line 50
        echo "{{ factura.preuTotal }}";
        echo "€</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 61
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listFactVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "llistar/llistar_factura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  183 => 60,  163 => 50,  159 => 49,  155 => 48,  151 => 47,  147 => 46,  110 => 11,  101 => 10,  86 => 4,  77 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Lista de facturas{% endblock %}
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
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de facturas</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Facturas</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"50px\">Visualitzar</th>
                            <th>Numero de factura</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Comercial</th>
                            <th>Precio Total</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"50px\">Visualitzar</th>
                            <th>Numero de factura</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Comercial</th>
                            <th>Precio Total</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr v-for=\"factura in facturas\">
                            <td><a :href=\"'http://192.168.205.224:8000/facturaPdf/' + factura.facturaNumero + '/view'\" target=\"_blank\" class=\"d-flex justify-content-center align-items-center\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-file-pdf\"></i></span></a></td>
                            <td>{{\"{{ factura.facturaNumero }}\"}}</td>
                            <td>{{\"{{ factura.fecha }}\"}}</td>
                            <td>{{\"{{ factura.client.NOMBRE_CLIENTE }}\"}}</td>
                            <td>{{\"{{ factura.comercial.NOMBRE_COMERCIAL }}\"}}</td>
                            <td>{{\"{{ factura.preuTotal }}\"}}€</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listFactVue.js\"></script>
{% endblock %}
", "llistar/llistar_factura.html.twig", "/var/www/html/AiMi/App/templates/llistar/llistar_factura.html.twig");
    }
}
