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

/* forms/form_factura.html.twig */
class __TwigTemplate_42a81662a1d0690f693177d1f0be5e2c09aa2f5d6e5db02c353395e49b905ae2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forms/form_factura.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_factura.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_factura.html.twig"));

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

        echo "Crear factura";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Crear Factura</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-6 col-md-6 mb-4\">
                <div class=\"card border-bottom-success shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-3 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>COMERCIAL</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-9\">
                                <input type=\"text\" v-model=\"searchComercial\" class=\"form-control bg-white border-0 small dropdown-toggle\" placeholder=\"Nombre del comercial\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"dropdown-menu card-body\" aria-labelledby=\"dropdownMenuButton\">
                                    <p v-for=\"comercial in filteredComercials\" @click=\"SelectComercial(comercial.id)\">";
        // line 19
        echo "{{comercial._nombre__comercial}}";
        echo "</p>
                                </div>
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"button\">
                                        <i class=\"fas fa-search fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div v-if=\"comercialSeleccionat\">
                            <p><span class=\"font-weight-bold\">Codigo: </span>";
        // line 31
        echo "{{ comercialSeleccionat._codigo__comercio}}";
        echo "</p>
                            <p><span class=\"font-weight-bold\">Nombre: </span>";
        // line 32
        echo "{{ comercialSeleccionat._nombre__comercial}}";
        echo "</p>
                            <p><span class=\"font-weight-bold\">Telefono: </span>";
        // line 33
        echo "{{ comercialSeleccionat._telefono__comercial}}";
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-md-6 mb-4\">
                <div class=\"card border-bottom-primary shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-3 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>CLIENTE</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-9\">
                                <input type=\"text\" v-model=\"searchCliente\" class=\"form-control bg-white border-0 small dropdown-toggle\" placeholder=\"Nombre del cliente\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"dropdown-menu card-body\" aria-labelledby=\"dropdownMenuButton\">
                                    <p v-for=\"cliente in filteredCliente\" @click=\"SelectCliente(cliente.id)\">";
        // line 46
        echo "{{cliente._nombre__cliente}}";
        echo "</p>
                                </div>
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"button\">
                                        <i class=\"fas fa-search fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div v-if=\"clientSeleccionat\">
                            <p><span class=\"font-weight-bold\">CIF: </span>";
        // line 58
        echo "{{ clientSeleccionat._cif__dni__nie}}";
        echo "</p>
                            <p><span class=\"font-weight-bold\">Nombre: </span>";
        // line 59
        echo "{{ clientSeleccionat._nombre__cliente}}";
        echo "</p>
                            <p><span class=\"font-weight-bold\">Direccion: </span>";
        // line 60
        echo "{{ clientSeleccionat._direccion}}";
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card o-hidden border-0 shadow-lg my-1\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-9 p-3\">
                        <table class=\"table table-striped  ml-2\">
                            <thead>
                            <tr>
                                <th scope=\"col\">Codigo</th>
                                <th scope=\"col\">Descripcion</th>
                                <th scope=\"col\">Uds/pack</th>
                                <th scope=\"col\">Pack</th>
                                <th scope=\"col\">Precio</th>
                                <th scope=\"col\">D.%</th>
                                <th scope=\"col\">subTotal</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for=\"producto in productesAfegides\">
                                <th scope=\"row\">";
        // line 86
        echo "{{ producto.codi}}";
        echo "</th>
                                <td>";
        // line 87
        echo "{{ producto.descripcion}}";
        echo "</td>
                                <td>";
        // line 88
        echo "{{ producto.quantitatpack}}";
        echo "</td>
                                <td><input v-model=\"producto.Unds\" @keyup=\"modifUnd(producto.codi)\" class=\"form-control\" maxlength=\"2\" size=\"5\"></td>
                                <td><input v-model=\"producto.preu\" @keyup=\"modifPreu(producto.codi)\" class=\"form-control\" maxlength=\"6\" size=\"10\"></td>
                                <td>";
        // line 91
        echo "{{ clientSeleccionat._descuento__cliente}}";
        echo "</td>
                                <td>";
        // line 92
        echo "{{ producto.subtotal}}";
        echo "€</td>
                                <td>
                                    <span href=\"#\" class=\"btn btn-danger btn-circle btn-sm\" @click=\"Eliminar(producto.codi)\">
                                        <i class=\"fas fa-trash\"></i>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"col-lg-3 p-3\">
                        <div class=\"pl-2 pr-2\">
                            <form class=\"user\">
                                <div class=\"form-group\">
                                    <input ref=\"focus\" type=\"text\" class=\"form-control\" id=\"nombreCategoria\" placeholder=\"Código de Barra\" v-model=\"codibarra\" @input=\"CodiIntroduit()\">
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12  text-center mb-3\">
                                        <span class=\"h5 mb-0 font-weight-bold text-gray-700\" v-if=\"producteSeleccionat\">";
        // line 110
        echo "{{ producteSeleccionat._codigo__producto}}";
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input ref=\"focuspreu\" type=\"text\" class=\"form-control\" id=\"nombreCategoria\" placeholder=\"Precio\" v-model=\"preu\">
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-sm-4 mb-3 mb-sm-0 d-flex justify-content-end p-1\">
                                        <span href=\"#\" class=\"btn btn-danger btn-circle\"  @click=\"disminuirQuantitat()\">
                                            <i class=\"fas fa-minus\"></i>
                                        </span>
                                    </div>
                                    <div class=\"col-sm-4 d-flex justify-content-center align-items-center p-1\">
                                        <span>";
        // line 123
        echo "{{quantitat}}";
        echo "</span>
                                    </div>
                                    <div class=\"col-sm-4 d-flex justify-content-start p-1\">
                                        <span href=\"#\" class=\"btn btn-success btn-circle\"  @click=\"aumentarQuantitat()\">
                                            <i class=\"fas fa-plus\"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class=\"btn btn-primary btn-user btn-block\" @click=\"afegirProducte()\">
                                    Añadir
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 mb-4\">
                <div class=\"card border-bottom-success shadow h-100 py-2\">
                    <div class=\"row\">
                        <div class=\"col-xl-9 col-md-9 d-flex align-items-center justify-content-end \">
                            <span class=\"font-weight-bold\">TOTAL</span><span class=\"h5 mb-0 font-weight-bold text-gray-800 ml-3 mr-3\">";
        // line 147
        echo "{{ preutotal }}";
        echo "</span><span class=\"font-weight-bold\">€</span>
                        </div>
                        <div class=\"col-xl-3 col-md-3\">
                            <div class=\"p-2\">
                                <form class=\"user\">
                                    <div class=\"btn btn-primary btn-user btn-block\" @click=\"CrearFactura()\">
                                        Crear Factura
                                    </div>
                                </form>
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

    // line 166
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 167
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/adds/addFacturaVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forms/form_factura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 167,  304 => 166,  275 => 147,  248 => 123,  232 => 110,  211 => 92,  207 => 91,  201 => 88,  197 => 87,  193 => 86,  164 => 60,  160 => 59,  156 => 58,  141 => 46,  125 => 33,  121 => 32,  117 => 31,  102 => 19,  85 => 4,  76 => 3,  58 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Crear factura{% endblock %}
{% block main %}
    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Crear Factura</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-6 col-md-6 mb-4\">
                <div class=\"card border-bottom-success shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-3 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>COMERCIAL</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-9\">
                                <input type=\"text\" v-model=\"searchComercial\" class=\"form-control bg-white border-0 small dropdown-toggle\" placeholder=\"Nombre del comercial\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"dropdown-menu card-body\" aria-labelledby=\"dropdownMenuButton\">
                                    <p v-for=\"comercial in filteredComercials\" @click=\"SelectComercial(comercial.id)\">{{ \"{{comercial._nombre__comercial}}\" }}</p>
                                </div>
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"button\">
                                        <i class=\"fas fa-search fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div v-if=\"comercialSeleccionat\">
                            <p><span class=\"font-weight-bold\">Codigo: </span>{{ \"{{ comercialSeleccionat._codigo__comercio}}\" }}</p>
                            <p><span class=\"font-weight-bold\">Nombre: </span>{{ \"{{ comercialSeleccionat._nombre__comercial}}\" }}</p>
                            <p><span class=\"font-weight-bold\">Telefono: </span>{{ \"{{ comercialSeleccionat._telefono__comercial}}\" }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-md-6 mb-4\">
                <div class=\"card border-bottom-primary shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-3 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>CLIENTE</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-9\">
                                <input type=\"text\" v-model=\"searchCliente\" class=\"form-control bg-white border-0 small dropdown-toggle\" placeholder=\"Nombre del cliente\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"dropdown-menu card-body\" aria-labelledby=\"dropdownMenuButton\">
                                    <p v-for=\"cliente in filteredCliente\" @click=\"SelectCliente(cliente.id)\">{{ \"{{cliente._nombre__cliente}}\" }}</p>
                                </div>
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"button\">
                                        <i class=\"fas fa-search fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div v-if=\"clientSeleccionat\">
                            <p><span class=\"font-weight-bold\">CIF: </span>{{ \"{{ clientSeleccionat._cif__dni__nie}}\" }}</p>
                            <p><span class=\"font-weight-bold\">Nombre: </span>{{ \"{{ clientSeleccionat._nombre__cliente}}\" }}</p>
                            <p><span class=\"font-weight-bold\">Direccion: </span>{{ \"{{ clientSeleccionat._direccion}}\" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card o-hidden border-0 shadow-lg my-1\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-9 p-3\">
                        <table class=\"table table-striped  ml-2\">
                            <thead>
                            <tr>
                                <th scope=\"col\">Codigo</th>
                                <th scope=\"col\">Descripcion</th>
                                <th scope=\"col\">Uds/pack</th>
                                <th scope=\"col\">Pack</th>
                                <th scope=\"col\">Precio</th>
                                <th scope=\"col\">D.%</th>
                                <th scope=\"col\">subTotal</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for=\"producto in productesAfegides\">
                                <th scope=\"row\">{{ \"{{ producto.codi}}\" }}</th>
                                <td>{{ \"{{ producto.descripcion}}\" }}</td>
                                <td>{{ \"{{ producto.quantitatpack}}\" }}</td>
                                <td><input v-model=\"producto.Unds\" @keyup=\"modifUnd(producto.codi)\" class=\"form-control\" maxlength=\"2\" size=\"5\"></td>
                                <td><input v-model=\"producto.preu\" @keyup=\"modifPreu(producto.codi)\" class=\"form-control\" maxlength=\"6\" size=\"10\"></td>
                                <td>{{ \"{{ clientSeleccionat._descuento__cliente}}\" }}</td>
                                <td>{{ \"{{ producto.subtotal}}\" }}€</td>
                                <td>
                                    <span href=\"#\" class=\"btn btn-danger btn-circle btn-sm\" @click=\"Eliminar(producto.codi)\">
                                        <i class=\"fas fa-trash\"></i>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"col-lg-3 p-3\">
                        <div class=\"pl-2 pr-2\">
                            <form class=\"user\">
                                <div class=\"form-group\">
                                    <input ref=\"focus\" type=\"text\" class=\"form-control\" id=\"nombreCategoria\" placeholder=\"Código de Barra\" v-model=\"codibarra\" @input=\"CodiIntroduit()\">
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12  text-center mb-3\">
                                        <span class=\"h5 mb-0 font-weight-bold text-gray-700\" v-if=\"producteSeleccionat\">{{ \"{{ producteSeleccionat._codigo__producto}}\" }}</span>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input ref=\"focuspreu\" type=\"text\" class=\"form-control\" id=\"nombreCategoria\" placeholder=\"Precio\" v-model=\"preu\">
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-sm-4 mb-3 mb-sm-0 d-flex justify-content-end p-1\">
                                        <span href=\"#\" class=\"btn btn-danger btn-circle\"  @click=\"disminuirQuantitat()\">
                                            <i class=\"fas fa-minus\"></i>
                                        </span>
                                    </div>
                                    <div class=\"col-sm-4 d-flex justify-content-center align-items-center p-1\">
                                        <span>{{ \"{{quantitat}}\" }}</span>
                                    </div>
                                    <div class=\"col-sm-4 d-flex justify-content-start p-1\">
                                        <span href=\"#\" class=\"btn btn-success btn-circle\"  @click=\"aumentarQuantitat()\">
                                            <i class=\"fas fa-plus\"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class=\"btn btn-primary btn-user btn-block\" @click=\"afegirProducte()\">
                                    Añadir
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 mb-4\">
                <div class=\"card border-bottom-success shadow h-100 py-2\">
                    <div class=\"row\">
                        <div class=\"col-xl-9 col-md-9 d-flex align-items-center justify-content-end \">
                            <span class=\"font-weight-bold\">TOTAL</span><span class=\"h5 mb-0 font-weight-bold text-gray-800 ml-3 mr-3\">{{ \"{{ preutotal }}\" }}</span><span class=\"font-weight-bold\">€</span>
                        </div>
                        <div class=\"col-xl-3 col-md-3\">
                            <div class=\"p-2\">
                                <form class=\"user\">
                                    <div class=\"btn btn-primary btn-user btn-block\" @click=\"CrearFactura()\">
                                        Crear Factura
                                    </div>
                                </form>
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
    <script type=\"module\" src=\"/build/js/adds/addFacturaVue.js\"></script>
{% endblock %}


", "forms/form_factura.html.twig", "/var/www/html/AiMi/App/templates/forms/form_factura.html.twig");
    }
}
