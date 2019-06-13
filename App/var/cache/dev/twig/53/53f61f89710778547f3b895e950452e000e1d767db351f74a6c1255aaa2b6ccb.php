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

/* llistar/llistar_producte.html.twig */
class __TwigTemplate_6f45f0cbff72dfe0be05b9352f62308542e0ed78480230313e2010ecde865dde extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "llistar/llistar_producte.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_producte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_producte.html.twig"));

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

        echo "Lista de productos";
        
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

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "    <div class=\"container-fluid\" id=\"app\">
        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de productos</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Productos</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de barras</th>
                            <th>Codigo de producto</th>
                            <th>Nombre</th>
                            <th>Descuento</th>
                            <th>Precio de compra</th>
                            <th>PVP</th>
                            <th>Cantidad/pack</th>
                            <th>Categoria</th>
                            <th>Stock</th>
                            <th>Aviso de stock</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de barras</th>
                            <th>Codigo de producto</th>
                            <th>Nombre</th>
                            <th>Descuento</th>
                            <th>Precio de compra</th>
                            <th>PVP</th>
                            <th>Cantidad/pack</th>
                            <th>Categoria</th>
                            <th>Stock</th>
                            <th>Aviso de stock</th>
                        </tr>
                        </tfoot>
                        <tbody id=\"app\">
                        <tr v-for=\"producte in productes\">
                            <td>
                                <span class=\" d-flex justify-content-center align-items-center\">
                                    <span class=\"mr-1\" @click=\"eliminar(producte.id)\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-trash\"></i></span></span>
                                    <span class=\"ml-1\" @click=\"seleccionar(producte.id)\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><span class=\"btn btn-info btn-circle\"><i class=\"fas fa-fw fa-edit\"></i></span></span>
                                </span>
                            </td>
                            <td>";
        // line 64
        echo "{{ producte.id }}";
        echo "</td>
                            <td>";
        // line 65
        echo "{{ producte._codigo__barra }}";
        echo "</td>
                            <td>";
        // line 66
        echo "{{ producte._codigo__producto }}";
        echo "</td>
                            <td>";
        // line 67
        echo "{{ producte._nombre__producto }}";
        echo "</td>
                            <td>";
        // line 68
        echo "{{ producte._descuento__producto }}";
        echo "</td>
                            <td>";
        // line 69
        echo "{{ producte._precio__compra }}";
        echo "</td>
                            <td>";
        // line 70
        echo "{{ producte._pvp }}";
        echo "</td>
                            <td>";
        // line 71
        echo "{{ producte._cantidad__pack }}";
        echo "</td>
                            <td>";
        // line 72
        echo "{{ producte._categoria }}";
        echo "</td>
                            <td>";
        // line 73
        echo "{{ producte._stock }}";
        echo "</td>
                            <td>";
        // line 74
        echo "{{ producte._aviso__stock }}";
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Editar producto</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo barra</label>
                                    <input type=\"text\" v-model=\"productoSelecte._codigo__barra\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo producto</label>
                                    <input type=\"text\" v-model=\"productoSelecte._codigo__producto\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Nombre</label>
                                    <input type=\"text\" v-model=\"productoSelecte._nombre__producto\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Precio de compra</label>
                                    <input type=\"text\" v-model=\"productoSelecte._precio__compra\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">PVP</label>
                                    <input type=\"text\" v-model=\"productoSelecte._pvp\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Descuento</label>
                                    <input type=\"text\" v-model=\"productoSelecte._descuento__producto\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Categoria</label>
                                    <input type=\"text\" v-model=\"productoSelecte._categoria\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Candidad por pack</label>
                                    <input type=\"text\" v-model=\"productoSelecte._cantidad__pack\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Stock</label>
                                    <input type=\"text\" v-model=\"productoSelecte._stock\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Aviso de stock</label>
                                    <input type=\"text\" v-model=\"productoSelecte._aviso__stock\" class=\"form-control mb-1\">
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" @click=\"guardar(productoSelecte.id)\" class=\"btn btn-primary\" data-dismiss=\"modal\">Guardar cambios</button>
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

    // line 147
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 148
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listProducVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "llistar/llistar_producte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 148,  287 => 147,  204 => 74,  200 => 73,  196 => 72,  192 => 71,  188 => 70,  184 => 69,  180 => 68,  176 => 67,  172 => 66,  168 => 65,  164 => 64,  110 => 12,  101 => 11,  86 => 4,  77 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Lista de productos{% endblock %}
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
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de productos</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Productos</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de barras</th>
                            <th>Codigo de producto</th>
                            <th>Nombre</th>
                            <th>Descuento</th>
                            <th>Precio de compra</th>
                            <th>PVP</th>
                            <th>Cantidad/pack</th>
                            <th>Categoria</th>
                            <th>Stock</th>
                            <th>Aviso de stock</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de barras</th>
                            <th>Codigo de producto</th>
                            <th>Nombre</th>
                            <th>Descuento</th>
                            <th>Precio de compra</th>
                            <th>PVP</th>
                            <th>Cantidad/pack</th>
                            <th>Categoria</th>
                            <th>Stock</th>
                            <th>Aviso de stock</th>
                        </tr>
                        </tfoot>
                        <tbody id=\"app\">
                        <tr v-for=\"producte in productes\">
                            <td>
                                <span class=\" d-flex justify-content-center align-items-center\">
                                    <span class=\"mr-1\" @click=\"eliminar(producte.id)\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-trash\"></i></span></span>
                                    <span class=\"ml-1\" @click=\"seleccionar(producte.id)\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><span class=\"btn btn-info btn-circle\"><i class=\"fas fa-fw fa-edit\"></i></span></span>
                                </span>
                            </td>
                            <td>{{\"{{ producte.id }}\"}}</td>
                            <td>{{\"{{ producte._codigo__barra }}\"}}</td>
                            <td>{{\"{{ producte._codigo__producto }}\"}}</td>
                            <td>{{\"{{ producte._nombre__producto }}\"}}</td>
                            <td>{{\"{{ producte._descuento__producto }}\"}}</td>
                            <td>{{\"{{ producte._precio__compra }}\"}}</td>
                            <td>{{\"{{ producte._pvp }}\"}}</td>
                            <td>{{\"{{ producte._cantidad__pack }}\"}}</td>
                            <td>{{\"{{ producte._categoria }}\"}}</td>
                            <td>{{\"{{ producte._stock }}\"}}</td>
                            <td>{{\"{{ producte._aviso__stock }}\"}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Editar producto</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo barra</label>
                                    <input type=\"text\" v-model=\"productoSelecte._codigo__barra\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo producto</label>
                                    <input type=\"text\" v-model=\"productoSelecte._codigo__producto\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Nombre</label>
                                    <input type=\"text\" v-model=\"productoSelecte._nombre__producto\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Precio de compra</label>
                                    <input type=\"text\" v-model=\"productoSelecte._precio__compra\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">PVP</label>
                                    <input type=\"text\" v-model=\"productoSelecte._pvp\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Descuento</label>
                                    <input type=\"text\" v-model=\"productoSelecte._descuento__producto\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Categoria</label>
                                    <input type=\"text\" v-model=\"productoSelecte._categoria\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Candidad por pack</label>
                                    <input type=\"text\" v-model=\"productoSelecte._cantidad__pack\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Stock</label>
                                    <input type=\"text\" v-model=\"productoSelecte._stock\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-3 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Aviso de stock</label>
                                    <input type=\"text\" v-model=\"productoSelecte._aviso__stock\" class=\"form-control mb-1\">
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" @click=\"guardar(productoSelecte.id)\" class=\"btn btn-primary\" data-dismiss=\"modal\">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listProducVue.js\"></script>
{% endblock %}
", "llistar/llistar_producte.html.twig", "/var/www/html/AiMi/App/templates/llistar/llistar_producte.html.twig");
    }
}
