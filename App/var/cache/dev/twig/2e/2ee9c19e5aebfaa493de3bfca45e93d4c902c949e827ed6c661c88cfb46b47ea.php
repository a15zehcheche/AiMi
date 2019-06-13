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

/* forms/form_producte.html.twig */
class __TwigTemplate_632831e930796660188d88018d24e9c45480c1edb5dd23f3d403d28b3115399c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forms/form_producte.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_producte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_producte.html.twig"));

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

        echo "Añadir producto";
        
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
        .mylist {
            height: 150px;
            overflow: auto;
            padding-left: 0px;
        }
        .mylist li{
            margin-bottom: 5px;
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
            <h1 class=\"h3 mb-0 text-gray-800\">Añadir producto</h1>
        </div>

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input ref=\"focus\" type=\"text\" class=\"form-control form-control-user\" id=\"codi_barra\" placeholder=\"Codigo de Barra\" v-model=\"codi_barra\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"codi_producto\" placeholder=\"Codigo de producto\" v-model=\"codi_producto\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control form-control-user\" id=\"nombreProducto\" placeholder=\"Nombre y descripcion\" v-model=\"nombre\">
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"descuento\" placeholder=\"Descuento\" v-model=\"descuento\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"cantidad\" placeholder=\"Cantidad por pack\" v-model=\"cantidad\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"precio_compra\" placeholder=\"Precio de compra\" v-model=\"precio_compra\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"pvp\" placeholder=\"PvP\" v-model=\"pvp\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"stock\" placeholder=\"Stock\" v-model=\"stock\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"aviso\" placeholder=\"Aviso de stock\" v-model=\"aviso\">
                                    </div>
                                </div>
                                <div class=\"form-group row \">
                                    <div class=\"col-sm-12\">
                                        <span v-for=\"categoria in categoriaSelect\">";
        // line 67
        echo "{{categoria}}";
        echo ", </span>
                                    </div>
                                </div>
                                <div class=\"form-group row \">
                                    <div class=\"col-sm-12 mb-3 mb-sm-0\">
                                        <ul class=\"mylist\">
                                            <li class=\"form-control\" v-for=\"(categoria, index ) in categorias\">
                                                <div class=\"custom-control custom-checkbox small\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\"  :id=\"categoria.name\" :value=\"categoria.name\" v-model=\"categoriaSelect\" >
                                                    <label class=\"custom-control-label\" :for=\"categoria.name\">";
        // line 76
        echo "{{categoria.name}}";
        echo "</label>
                                                </div>
                                              
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span @click=\"addProduc()\" class=\"btn btn-primary btn-user btn-block\">
                                    Añadir
                                </span>
                                <hr>
                            </form>
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

    // line 95
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 96
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/adds/addProducVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forms/form_producte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 96,  209 => 95,  180 => 76,  168 => 67,  115 => 16,  106 => 15,  86 => 4,  77 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Añadir producto{% endblock %}
{% block cssInline %}
    <style>
        .mylist {
            height: 150px;
            overflow: auto;
            padding-left: 0px;
        }
        .mylist li{
            margin-bottom: 5px;
        }
    </style>
{% endblock %}
{% block main %}
    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Añadir producto</h1>
        </div>

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input ref=\"focus\" type=\"text\" class=\"form-control form-control-user\" id=\"codi_barra\" placeholder=\"Codigo de Barra\" v-model=\"codi_barra\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"codi_producto\" placeholder=\"Codigo de producto\" v-model=\"codi_producto\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control form-control-user\" id=\"nombreProducto\" placeholder=\"Nombre y descripcion\" v-model=\"nombre\">
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"descuento\" placeholder=\"Descuento\" v-model=\"descuento\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"cantidad\" placeholder=\"Cantidad por pack\" v-model=\"cantidad\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"precio_compra\" placeholder=\"Precio de compra\" v-model=\"precio_compra\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"pvp\" placeholder=\"PvP\" v-model=\"pvp\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"stock\" placeholder=\"Stock\" v-model=\"stock\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"aviso\" placeholder=\"Aviso de stock\" v-model=\"aviso\">
                                    </div>
                                </div>
                                <div class=\"form-group row \">
                                    <div class=\"col-sm-12\">
                                        <span v-for=\"categoria in categoriaSelect\">{{\"{{categoria}}\"}}, </span>
                                    </div>
                                </div>
                                <div class=\"form-group row \">
                                    <div class=\"col-sm-12 mb-3 mb-sm-0\">
                                        <ul class=\"mylist\">
                                            <li class=\"form-control\" v-for=\"(categoria, index ) in categorias\">
                                                <div class=\"custom-control custom-checkbox small\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\"  :id=\"categoria.name\" :value=\"categoria.name\" v-model=\"categoriaSelect\" >
                                                    <label class=\"custom-control-label\" :for=\"categoria.name\">{{\"{{categoria.name}}\"}}</label>
                                                </div>
                                              
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span @click=\"addProduc()\" class=\"btn btn-primary btn-user btn-block\">
                                    Añadir
                                </span>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/adds/addProducVue.js\"></script>
{% endblock %}", "forms/form_producte.html.twig", "/var/www/html/AiMi/App/templates/forms/form_producte.html.twig");
    }
}
