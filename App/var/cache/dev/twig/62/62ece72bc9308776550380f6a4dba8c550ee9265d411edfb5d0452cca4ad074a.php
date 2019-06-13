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

/* pages/aumentarStock.html.twig */
class __TwigTemplate_608f4a37764d704aad6323abf05b1b6e63a79a4b76fbf7d52076d77e64602ad5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/aumentarStock.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/aumentarStock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/aumentarStock.html.twig"));

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

        echo "Stocks";
        
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
            <h1 class=\"h3 mb-0 text-gray-800\">Stocks</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-6 col-md-10 col-sm-12 mb-4\">
                <div class=\"card border-bottom-success shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-3 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>Producto</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-9\">
                                <input ref=\"focus\" type=\"text\" v-model=\"codibarra\" @input=\"BuscarProducte()\" class=\"form-control bg-white border-0 small\" placeholder=\"Codigo de barra\" aria-label=\"Search\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"button\" @click=\"Reset\">
                                        <i class=\"fas fa-trash fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div v-if=\"producteSeleccionat\">
                            <p><span class=\"font-weight-bold\">Nom: </span>";
        // line 28
        echo "{{ producteSeleccionat._nombre__producto }}";
        echo "</p>
                            <p><span class=\"font-weight-bold\">Codigo producto: </span>";
        // line 29
        echo "{{ producteSeleccionat._codigo__producto }}";
        echo "</p>
                            <p><span class=\"font-weight-bold\">Stock actual: </span>";
        // line 30
        echo "{{ producteSeleccionat._stock }}";
        echo "</p>
                            <div class=\"row\">
                                <div class=\"col-8 d-flex justify-content-end\">
                                    <input type=\"number\" min=\"1\" class=\"form-control col-5\" placeholder=\"Stocks\" v-model=\"stock\">
                                </div>
                                <div class=\"col-4 d-flex align-items-center\">
                                    <button @click=\"aumentar()\" class=\"d-none d-sm-inline-block  btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Aumentar stock</button>
                                </div>
                            </div>
                        </div>
                        <div v-else-if=\"codibarra!='' && producteSeleccionat==null\">
                            <h3 class=\"text-danger\">Producto no encontrado</h3>
                        </div>
                        <div v-else>
                            <h4><span class=\"text-info\">Buscar por codigo de barra el producto que quieres sumar stock</span></h4>
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

    // line 53
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 54
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/stockVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/aumentarStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  152 => 53,  119 => 30,  115 => 29,  111 => 28,  85 => 4,  76 => 3,  58 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Stocks{% endblock %}
{% block main %}
    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Stocks</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-6 col-md-10 col-sm-12 mb-4\">
                <div class=\"card border-bottom-success shadow\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-3 text-gray-800 d-flex align-items-center font-weight-bolder\"><span>Producto</span></div>
                            <div class=\"input-group dropdown no-arrow col-md-9\">
                                <input ref=\"focus\" type=\"text\" v-model=\"codibarra\" @input=\"BuscarProducte()\" class=\"form-control bg-white border-0 small\" placeholder=\"Codigo de barra\" aria-label=\"Search\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\" type=\"button\" @click=\"Reset\">
                                        <i class=\"fas fa-trash fa-sm\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div v-if=\"producteSeleccionat\">
                            <p><span class=\"font-weight-bold\">Nom: </span>{{ \"{{ producteSeleccionat._nombre__producto }}\" }}</p>
                            <p><span class=\"font-weight-bold\">Codigo producto: </span>{{ \"{{ producteSeleccionat._codigo__producto }}\" }}</p>
                            <p><span class=\"font-weight-bold\">Stock actual: </span>{{ \"{{ producteSeleccionat._stock }}\" }}</p>
                            <div class=\"row\">
                                <div class=\"col-8 d-flex justify-content-end\">
                                    <input type=\"number\" min=\"1\" class=\"form-control col-5\" placeholder=\"Stocks\" v-model=\"stock\">
                                </div>
                                <div class=\"col-4 d-flex align-items-center\">
                                    <button @click=\"aumentar()\" class=\"d-none d-sm-inline-block  btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Aumentar stock</button>
                                </div>
                            </div>
                        </div>
                        <div v-else-if=\"codibarra!='' && producteSeleccionat==null\">
                            <h3 class=\"text-danger\">Producto no encontrado</h3>
                        </div>
                        <div v-else>
                            <h4><span class=\"text-info\">Buscar por codigo de barra el producto que quieres sumar stock</span></h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/stockVue.js\"></script>
{% endblock %}


", "pages/aumentarStock.html.twig", "/var/www/html/AiMi/App/templates/pages/aumentarStock.html.twig");
    }
}
