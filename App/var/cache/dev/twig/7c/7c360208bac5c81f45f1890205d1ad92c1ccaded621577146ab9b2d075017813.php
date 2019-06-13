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

/* forms/form_devolucion.html.twig */
class __TwigTemplate_b784a32f959819851c7d49ce0199ba28adcc3b5c9655f3893b4564c70b965eb4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forms/form_devolucion.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_devolucion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_devolucion.html.twig"));

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

        echo "Crear devolucion";
        
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
        .table-scrollbar {
            position: relative;
            height: 350px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Crear Devolucion</h1>
        </div>

        <div>
            <div>
                <div class=\"card border-bottom-success shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-5 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>NUMERO DE FACTURA</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-7\">
                                <input type=\"text\" v-model=\"numFactura\"  v-on:keyup.enter=\"BuscarProductos\" class=\"form-control bg-white border-0 small dropdown-toggle\" placeholder=\"Numero de Factura\" aria-label=\"Search\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" @click=\"BuscarProductos\" type=\"button\">
                                        <i class=\"fas fa-search fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body row\">
                        <div v-if=\"FacturaSelecte\" class=\"col-12 p-1\">
                            <div class=\"col-lg-5 p-3\">
                                <div class=\"card bg-aimi text-white shadow\">
                                    <div class=\"card-body\">
                                        <p><span class=\"font-weight-bolder\">Nombre cliente:</span> ";
        // line 43
        echo "{{ FacturaSelecte.client.NOMBRE_CLIENTE}}";
        echo "</p>
                                        <p><span class=\"font-weight-bolder\">Nombre comercial:</span> ";
        // line 44
        echo "{{ FacturaSelecte.comercial.NOMBRE_COMERCIAL}}";
        echo "</p>
                                        <p><span class=\"font-weight-bolder\">Fecha de factura:</span> ";
        // line 45
        echo "{{ FacturaSelecte.fecha }}";
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12 p-3 table-scrollbar table-wrapper-scroll-y\">
                                <table class=\"table table-striped ml-2 d-table\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">Devolucion</th>
                                        <th scope=\"col\">Codigo</th>
                                        <th scope=\"col\">Descripcion</th>
                                        <th scope=\"col\">Uds</th>
                                        <th scope=\"col\">Precio</th>
                                        <th scope=\"col\">D.%</th>
                                        <th scope=\"col\">subTotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for=\"producto in productos\">
                                        <td>
                                            <div class=\"custom-control custom-checkbox small\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" :id=\"producto.codi\" :value=\"producto\" v-model=\"productosDevolucion\">
                                                <label class=\"custom-control-label\" :for=\"producto.codi\">SI / NO?</label>
                                            </div>
                                        </td>
                                        <th scope=\"row\">";
        // line 70
        echo "{{ producto.codi }}";
        echo "</th>
                                        <td>";
        // line 71
        echo "{{ producto.descripcion }}";
        echo "</td>
                                        <td>";
        // line 72
        echo "{{ producto.Unds }}";
        echo "</td>
                                        <td>";
        // line 73
        echo "{{ producto.preu }}";
        echo "€</td>
                                        <td>";
        // line 74
        echo "{{ producto.descompte }}";
        echo "</td>
                                        <td>";
        // line 75
        echo "{{ producto.subtotal }}";
        echo "€</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"btn btn-primary btn-user btn-block mt-4\" @click=\"CrearDevolucion\">
                                <span class=\"text\">Crear Devolucion</span>
                            </div>
                        </div>
                        <div v-else-if=\"!trobat && FacturaSelecte==null\">
                                <div class=\"card-body\">
                                    <div class=\"text-danger text-lg\">Factura no encontrado!</div>
                                    <div class=\"text-danger small\">Numero de factura incorrecta.</div>
                                </div>
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

    // line 97
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 98
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/adds/addDevolVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forms/form_devolucion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 98,  232 => 97,  200 => 75,  196 => 74,  192 => 73,  188 => 72,  184 => 71,  180 => 70,  152 => 45,  148 => 44,  144 => 43,  115 => 16,  106 => 15,  86 => 4,  77 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Crear devolucion{% endblock %}
{% block cssInline %}
    <style>
        .table-scrollbar {
            position: relative;
            height: 350px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
{% endblock %}
{% block main %}
    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Crear Devolucion</h1>
        </div>

        <div>
            <div>
                <div class=\"card border-bottom-success shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-5 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>NUMERO DE FACTURA</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-7\">
                                <input type=\"text\" v-model=\"numFactura\"  v-on:keyup.enter=\"BuscarProductos\" class=\"form-control bg-white border-0 small dropdown-toggle\" placeholder=\"Numero de Factura\" aria-label=\"Search\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" @click=\"BuscarProductos\" type=\"button\">
                                        <i class=\"fas fa-search fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body row\">
                        <div v-if=\"FacturaSelecte\" class=\"col-12 p-1\">
                            <div class=\"col-lg-5 p-3\">
                                <div class=\"card bg-aimi text-white shadow\">
                                    <div class=\"card-body\">
                                        <p><span class=\"font-weight-bolder\">Nombre cliente:</span> {{ \"{{ FacturaSelecte.client.NOMBRE_CLIENTE}}\" }}</p>
                                        <p><span class=\"font-weight-bolder\">Nombre comercial:</span> {{ \"{{ FacturaSelecte.comercial.NOMBRE_COMERCIAL}}\" }}</p>
                                        <p><span class=\"font-weight-bolder\">Fecha de factura:</span> {{ \"{{ FacturaSelecte.fecha }}\" }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12 p-3 table-scrollbar table-wrapper-scroll-y\">
                                <table class=\"table table-striped ml-2 d-table\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">Devolucion</th>
                                        <th scope=\"col\">Codigo</th>
                                        <th scope=\"col\">Descripcion</th>
                                        <th scope=\"col\">Uds</th>
                                        <th scope=\"col\">Precio</th>
                                        <th scope=\"col\">D.%</th>
                                        <th scope=\"col\">subTotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for=\"producto in productos\">
                                        <td>
                                            <div class=\"custom-control custom-checkbox small\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" :id=\"producto.codi\" :value=\"producto\" v-model=\"productosDevolucion\">
                                                <label class=\"custom-control-label\" :for=\"producto.codi\">SI / NO?</label>
                                            </div>
                                        </td>
                                        <th scope=\"row\">{{ \"{{ producto.codi }}\" }}</th>
                                        <td>{{ \"{{ producto.descripcion }}\" }}</td>
                                        <td>{{ \"{{ producto.Unds }}\" }}</td>
                                        <td>{{ \"{{ producto.preu }}\" }}€</td>
                                        <td>{{ \"{{ producto.descompte }}\" }}</td>
                                        <td>{{ \"{{ producto.subtotal }}\" }}€</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"btn btn-primary btn-user btn-block mt-4\" @click=\"CrearDevolucion\">
                                <span class=\"text\">Crear Devolucion</span>
                            </div>
                        </div>
                        <div v-else-if=\"!trobat && FacturaSelecte==null\">
                                <div class=\"card-body\">
                                    <div class=\"text-danger text-lg\">Factura no encontrado!</div>
                                    <div class=\"text-danger small\">Numero de factura incorrecta.</div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/adds/addDevolVue.js\"></script>
{% endblock %}


", "forms/form_devolucion.html.twig", "/var/www/html/AiMi/App/templates/forms/form_devolucion.html.twig");
    }
}
