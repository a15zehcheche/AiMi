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

/* pages/config.html.twig */
class __TwigTemplate_f157bcc8d99f610fd293a7b319d5a6c3d514208d56fc701c4ff2f4351bf18745 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/config.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/config.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/config.html.twig"));

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

        echo "Configuracion";
        
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
            <h1 class=\"h3 mb-0 text-gray-800\">Configuracion</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Empresa</h6>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"user\">
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"nomEmpresa\" v-model=\"empresa.nom\" placeholder=\"Nombre de empresa\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"cif\" v-model=\"empresa.cif\" placeholder=\"CIF de empresa\" class=\"form-control form-control-user\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"direccion\"  v-model=\"empresa.direccion\"placeholder=\"Direccion\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"cp\" v-model=\"empresa.cp\" placeholder=\"CP\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-3 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"ciudad\" v-model=\"empresa.ciudad\" placeholder=\"Ciudad\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-3 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"provincia\" v-model=\"empresa.provincia\" placeholder=\"Provincia\" class=\"form-control form-control-user\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"telefon\" v-model=\"empresa.telefono\" placeholder=\"Numero de telefono\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"mobil\" v-model=\"empresa.mobil\" placeholder=\"Telefono mobil\" class=\"form-control form-control-user\">
                                </div>
                            </div>
                            <span class=\"btn btn-primary btn-user btn-block\" @click=\"updEmpresa()\">
                                    Actualizar informacion empresa
                            </span>
                        </form>
                    </div>
                </div>
                <h4 class=\"text-center\">Impuestos</h4>
                <hr>
            </div>
            <div class=\"col-6\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">IVA</h6>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"user\">
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"iva\" v-model=\"iva.valor\" placeholder=\"Valor de IVA %\" class=\"form-control form-control-user\" @keyup.enter=\"updIva()\">
                                    <input hidden>
                                </div>
                            </div>
                            <span class=\"btn btn-primary btn-user btn-block\" @click=\"updIva()\">
                                    Actualizar % IVA
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">REQ</h6>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"user\">
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" @keyup.enter=\"updIva()\" id=\"req\" v-model=\"req.valor\" placeholder=\"Valor de REQ %\" class=\"form-control form-control-user\">
                                    <input hidden>
                                </div>
                            </div>
                            <span class=\"btn btn-primary btn-user btn-block\" @click=\"updReq()\">
                                    Actualizar % REQ
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 101
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/configuracionVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 101,  190 => 100,  85 => 4,  76 => 3,  58 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Configuracion{% endblock %}
{% block main %}
    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Configuracion</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Empresa</h6>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"user\">
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"nomEmpresa\" v-model=\"empresa.nom\" placeholder=\"Nombre de empresa\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"cif\" v-model=\"empresa.cif\" placeholder=\"CIF de empresa\" class=\"form-control form-control-user\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-4 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"direccion\"  v-model=\"empresa.direccion\"placeholder=\"Direccion\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-2 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"cp\" v-model=\"empresa.cp\" placeholder=\"CP\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-3 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"ciudad\" v-model=\"empresa.ciudad\" placeholder=\"Ciudad\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-3 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"provincia\" v-model=\"empresa.provincia\" placeholder=\"Provincia\" class=\"form-control form-control-user\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"telefon\" v-model=\"empresa.telefono\" placeholder=\"Numero de telefono\" class=\"form-control form-control-user\">
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"mobil\" v-model=\"empresa.mobil\" placeholder=\"Telefono mobil\" class=\"form-control form-control-user\">
                                </div>
                            </div>
                            <span class=\"btn btn-primary btn-user btn-block\" @click=\"updEmpresa()\">
                                    Actualizar informacion empresa
                            </span>
                        </form>
                    </div>
                </div>
                <h4 class=\"text-center\">Impuestos</h4>
                <hr>
            </div>
            <div class=\"col-6\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">IVA</h6>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"user\">
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" id=\"iva\" v-model=\"iva.valor\" placeholder=\"Valor de IVA %\" class=\"form-control form-control-user\" @keyup.enter=\"updIva()\">
                                    <input hidden>
                                </div>
                            </div>
                            <span class=\"btn btn-primary btn-user btn-block\" @click=\"updIva()\">
                                    Actualizar % IVA
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">REQ</h6>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"user\">
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    <input type=\"text\" @keyup.enter=\"updIva()\" id=\"req\" v-model=\"req.valor\" placeholder=\"Valor de REQ %\" class=\"form-control form-control-user\">
                                    <input hidden>
                                </div>
                            </div>
                            <span class=\"btn btn-primary btn-user btn-block\" @click=\"updReq()\">
                                    Actualizar % REQ
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/configuracionVue.js\"></script>
{% endblock %}


", "pages/config.html.twig", "/var/www/html/AiMi/App/templates/pages/config.html.twig");
    }
}
