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

/* llistar/llistar_cliente.html.twig */
class __TwigTemplate_596c97c432cebbb045d35511b3ea46913212147e4838722a573e1d6557050cbf extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "llistar/llistar_cliente.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_cliente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "llistar/llistar_cliente.html.twig"));

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

        echo "Lista de clientes";
        
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
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de clientes</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Clientes</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de cliente</th>
                            <th>Nombre de cliente</th>
                            <th>Nombre de contacto</th>
                            <th>Telefon de contacto</th>
                            <th>CIF</th>
                            <th>Direccion</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Provincia</th>
                            <th>Pais</th>
                            <th>Telefono 1</th>
                            <th>Telefono 2</th>
                            <th>Telefono movil</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Direccion de envio</th>
                            <th>CP de envio</th>
                            <th>Ciudad de envio</th>
                            <th>Provincia de envio</th>
                            <th>Pais de envio</th>
                            <th>Descuento de cliente</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de cliente</th>
                            <th>Nombre de cliente</th>
                            <th>Nombre de contacto</th>
                            <th>Telefon de contacto</th>
                            <th>CIF</th>
                            <th>Direccion</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Provincia</th>
                            <th>Pais</th>
                            <th>Telefono 1</th>
                            <th>Telefono 2</th>
                            <th>Telefono movil</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Direccion de envio</th>
                            <th>CP de envio</th>
                            <th>Ciudad de envio</th>
                            <th>Provincia de envio</th>
                            <th>Pais de envio</th>
                            <th>Descuento de cliente</th>
                        </tr>
                        </tfoot>
                        <tbody id=\"app\">
                        <tr v-for=\"client in clients\">
                            <td>
                                <span class=\" d-flex justify-content-center align-items-center\">
                                    <span class=\"mr-1\" @click=\"eliminar(client.id)\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-trash\"></i></span></span>
                                    <span class=\"ml-1\" @click=\"seleccionar(client.id)\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><span class=\"btn btn-info btn-circle\"><i class=\"fas fa-fw fa-edit\"></i></span></span>
                                </span>
                            </td>
                            <td>";
        // line 85
        echo "{{ client.id }}";
        echo "</td>
                            <td>";
        // line 86
        echo "{{ client._codigo__cliente }}";
        echo "</td>
                            <td>";
        // line 87
        echo "{{ client._nombre__cliente }}";
        echo "</td>
                            <td>";
        // line 88
        echo "{{ client._nombre__contacto }}";
        echo "</td>
                            <td>";
        // line 89
        echo "{{ client._telefono__contacto }}";
        echo "</td>
                            <td>";
        // line 90
        echo "{{ client._cif__dni__nie }}";
        echo "</td>
                            <td>";
        // line 91
        echo "{{ client._direccion }}";
        echo "</td>
                            <td>";
        // line 92
        echo "{{ client._cp }}";
        echo "</td>
                            <td>";
        // line 93
        echo "{{ client._ciudad }}";
        echo "</td>
                            <td>";
        // line 94
        echo "{{ client._provincia }}";
        echo "</td>
                            <td>";
        // line 95
        echo "{{ client._pais }}";
        echo "</td>
                            <td>";
        // line 96
        echo "{{ client._telefono1 }}";
        echo "</td>
                            <td>";
        // line 97
        echo "{{ client._telefono2 }}";
        echo "</td>
                            <td>";
        // line 98
        echo "{{ client._movil }}";
        echo "</td>
                            <td>";
        // line 99
        echo "{{ client._fax }}";
        echo "</td>
                            <td>";
        // line 100
        echo "{{ client._email }}";
        echo "</td>
                            <td>";
        // line 101
        echo "{{ client._direccion__envio }}";
        echo "</td>
                            <td>";
        // line 102
        echo "{{ client._cp__envio }}";
        echo "</td>
                            <td>";
        // line 103
        echo "{{ client._ciudad__envio }}";
        echo "</td>
                            <td>";
        // line 104
        echo "{{ client._provincia__envio }}";
        echo "</td>
                            <td>";
        // line 105
        echo "{{ client._pais__envio }}";
        echo "</td>
                            <td>";
        // line 106
        echo "{{ client._descuento__cliente }}";
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-xl\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Editar cliente</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Nombre</label>
                                    <input type=\"text\" v-model=\"clientSelecte._nombre__cliente\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">CIF</label>
                                    <input type=\"text\" v-model=\"clientSelecte._cif__dni__nie\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Descuento</label>
                                    <input type=\"text\" v-model=\"clientSelecte._descuento__cliente\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Nombre de contacto</label>
                                    <input type=\"text\" v-model=\"clientSelecte._nombre__contacto\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono de contacto</label>
                                    <input type=\"text\" v-model=\"clientSelecte._telefono__contacto\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Direccion</label>
                                    <input type=\"text\" v-model=\"clientSelecte._direccion\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo postal</label>
                                    <input type=\"text\" v-model=\"clientSelecte._cp\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Ciudad</label>
                                    <input type=\"text\" v-model=\"clientSelecte._ciudad\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Provincia</label>
                                    <input type=\"text\" v-model=\"clientSelecte._provincia\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Pais</label>
                                    <input type=\"text\" v-model=\"clientSelecte._pais\" class=\"form-control mb-1\" placeholder=\"Aviso \">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono 1</label>
                                    <input type=\"text\" v-model=\"clientSelecte._telefono1\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono 2</label>
                                    <input type=\"text\" v-model=\"clientSelecte._telefono2\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono movil</label>
                                    <input type=\"text\" v-model=\"clientSelecte._movil\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono fax</label>
                                    <input type=\"text\" v-model=\"clientSelecte._fax\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Email</label>
                                    <input type=\"text\" v-model=\"clientSelecte._email\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Direccion envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._direccion__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo postal envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._cp__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Ciudad envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._ciudad__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Provincia envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._provincia__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Pais envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._pais__envio\" class=\"form-control mb-1\">
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" @click=\"guardar(clientSelecte.id)\" class=\"btn btn-primary\" data-dismiss=\"modal\">Guardar cambios</button>
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

    // line 224
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 225
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listClientVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "llistar/llistar_cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 225,  398 => 224,  270 => 106,  266 => 105,  262 => 104,  258 => 103,  254 => 102,  250 => 101,  246 => 100,  242 => 99,  238 => 98,  234 => 97,  230 => 96,  226 => 95,  222 => 94,  218 => 93,  214 => 92,  210 => 91,  206 => 90,  202 => 89,  198 => 88,  194 => 87,  190 => 86,  186 => 85,  110 => 11,  101 => 10,  86 => 4,  77 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Lista de clientes{% endblock %}
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
        <h1 class=\"h3 mb-2 text-gray-800\">Listado de clientes</h1>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Clientes</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de cliente</th>
                            <th>Nombre de cliente</th>
                            <th>Nombre de contacto</th>
                            <th>Telefon de contacto</th>
                            <th>CIF</th>
                            <th>Direccion</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Provincia</th>
                            <th>Pais</th>
                            <th>Telefono 1</th>
                            <th>Telefono 2</th>
                            <th>Telefono movil</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Direccion de envio</th>
                            <th>CP de envio</th>
                            <th>Ciudad de envio</th>
                            <th>Provincia de envio</th>
                            <th>Pais de envio</th>
                            <th>Descuento de cliente</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width=\"100px\">Funcions</th>
                            <th>Id</th>
                            <th>Codigo de cliente</th>
                            <th>Nombre de cliente</th>
                            <th>Nombre de contacto</th>
                            <th>Telefon de contacto</th>
                            <th>CIF</th>
                            <th>Direccion</th>
                            <th>CP</th>
                            <th>Ciudad</th>
                            <th>Provincia</th>
                            <th>Pais</th>
                            <th>Telefono 1</th>
                            <th>Telefono 2</th>
                            <th>Telefono movil</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Direccion de envio</th>
                            <th>CP de envio</th>
                            <th>Ciudad de envio</th>
                            <th>Provincia de envio</th>
                            <th>Pais de envio</th>
                            <th>Descuento de cliente</th>
                        </tr>
                        </tfoot>
                        <tbody id=\"app\">
                        <tr v-for=\"client in clients\">
                            <td>
                                <span class=\" d-flex justify-content-center align-items-center\">
                                    <span class=\"mr-1\" @click=\"eliminar(client.id)\"><span class=\"btn btn-danger btn-circle\"><i class=\"fas fa-fw fa-trash\"></i></span></span>
                                    <span class=\"ml-1\" @click=\"seleccionar(client.id)\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><span class=\"btn btn-info btn-circle\"><i class=\"fas fa-fw fa-edit\"></i></span></span>
                                </span>
                            </td>
                            <td>{{\"{{ client.id }}\"}}</td>
                            <td>{{\"{{ client._codigo__cliente }}\"}}</td>
                            <td>{{\"{{ client._nombre__cliente }}\"}}</td>
                            <td>{{\"{{ client._nombre__contacto }}\"}}</td>
                            <td>{{\"{{ client._telefono__contacto }}\"}}</td>
                            <td>{{\"{{ client._cif__dni__nie }}\"}}</td>
                            <td>{{\"{{ client._direccion }}\"}}</td>
                            <td>{{\"{{ client._cp }}\"}}</td>
                            <td>{{\"{{ client._ciudad }}\"}}</td>
                            <td>{{\"{{ client._provincia }}\"}}</td>
                            <td>{{\"{{ client._pais }}\"}}</td>
                            <td>{{\"{{ client._telefono1 }}\"}}</td>
                            <td>{{\"{{ client._telefono2 }}\"}}</td>
                            <td>{{\"{{ client._movil }}\"}}</td>
                            <td>{{\"{{ client._fax }}\"}}</td>
                            <td>{{\"{{ client._email }}\"}}</td>
                            <td>{{\"{{ client._direccion__envio }}\"}}</td>
                            <td>{{\"{{ client._cp__envio }}\"}}</td>
                            <td>{{\"{{ client._ciudad__envio }}\"}}</td>
                            <td>{{\"{{ client._provincia__envio }}\"}}</td>
                            <td>{{\"{{ client._pais__envio }}\"}}</td>
                            <td>{{\"{{ client._descuento__cliente }}\"}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-xl\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Editar cliente</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Nombre</label>
                                    <input type=\"text\" v-model=\"clientSelecte._nombre__cliente\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">CIF</label>
                                    <input type=\"text\" v-model=\"clientSelecte._cif__dni__nie\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Descuento</label>
                                    <input type=\"text\" v-model=\"clientSelecte._descuento__cliente\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Nombre de contacto</label>
                                    <input type=\"text\" v-model=\"clientSelecte._nombre__contacto\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono de contacto</label>
                                    <input type=\"text\" v-model=\"clientSelecte._telefono__contacto\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Direccion</label>
                                    <input type=\"text\" v-model=\"clientSelecte._direccion\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo postal</label>
                                    <input type=\"text\" v-model=\"clientSelecte._cp\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Ciudad</label>
                                    <input type=\"text\" v-model=\"clientSelecte._ciudad\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Provincia</label>
                                    <input type=\"text\" v-model=\"clientSelecte._provincia\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Pais</label>
                                    <input type=\"text\" v-model=\"clientSelecte._pais\" class=\"form-control mb-1\" placeholder=\"Aviso \">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono 1</label>
                                    <input type=\"text\" v-model=\"clientSelecte._telefono1\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono 2</label>
                                    <input type=\"text\" v-model=\"clientSelecte._telefono2\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono movil</label>
                                    <input type=\"text\" v-model=\"clientSelecte._movil\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Telefono fax</label>
                                    <input type=\"text\" v-model=\"clientSelecte._fax\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Email</label>
                                    <input type=\"text\" v-model=\"clientSelecte._email\" class=\"form-control mb-1\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Direccion envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._direccion__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Codigo postal envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._cp__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Ciudad envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._ciudad__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Provincia envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._provincia__envio\" class=\"form-control mb-1\">
                                </div>
                                <div class=\"col-sm-2 mb-2 mb-sm-0\">
                                    <label class=\"font-weight-bolder text-label\">Pais envio</label>
                                    <input type=\"text\" v-model=\"clientSelecte._pais__envio\" class=\"form-control mb-1\">
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" @click=\"guardar(clientSelecte.id)\" class=\"btn btn-primary\" data-dismiss=\"modal\">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/lists/listClientVue.js\"></script>
{% endblock %}
", "llistar/llistar_cliente.html.twig", "/var/www/html/AiMi/App/templates/llistar/llistar_cliente.html.twig");
    }
}
