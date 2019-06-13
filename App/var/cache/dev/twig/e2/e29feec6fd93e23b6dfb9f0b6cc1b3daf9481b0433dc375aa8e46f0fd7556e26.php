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

/* forms/form_cliente.html.twig */
class __TwigTemplate_7b62336cfe691df95a1497df0ac54b3ebe85c6d25df99afa6d41ea4a19824f70 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forms/form_cliente.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_cliente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form_cliente.html.twig"));

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

        echo "Añadir cliente";
        
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
        echo "    <div
        class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Añadir client</h1>
        </div>

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div
                class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"codi_client\" placeholder=\"Codigo de cliente\" ref=\"focus\" type=\"text\" v-model=\"codi_client\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"nom_client\" placeholder=\"Nombre de cliente\" type=\"text\" v-model=\"nom_client\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"cif\" placeholder=\"CIF/NIE/DNI\" type=\"text\" v-model=\"cif\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"nom_contacte\" placeholder=\"Nombre de contacto\" type=\"text\" v-model=\"nom_contacte\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"telefon_contacte\" placeholder=\"Telefono de contacto\" type=\"text\" v-model=\"telefon_contacte\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"descompte\" placeholder=\"Descuento del cliente\" type=\"text\" v-model=\"descompte\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"adreça\" placeholder=\"Direccion\" type=\"text\" v-model=\"adreça\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"cp\" placeholder=\"Codigo postal\" type=\"text\" v-model=\"cp\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"ciutat\" placeholder=\"Ciudad\" type=\"text\" v-model=\"ciutat\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"provincia\" placeholder=\"Provincia\" type=\"text\" v-model=\"provincia\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"pais\" placeholder=\"Pais\" type=\"text\" v-model=\"pais\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"telefon1\" placeholder=\"Telefono 1\" type=\"text\" v-model=\"telefon1\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"telefon2\" placeholder=\"Telefono 2\" type=\"text\" v-model=\"telefon2\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"movil\" placeholder=\"Telefono movil\" type=\"text\" v-model=\"movil\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"fax\" placeholder=\"Fax\" ref=\"focus\" type=\"text\" v-model=\"fax\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"email\" placeholder=\"Correo electronico\" type=\"text\" v-model=\"email\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"custom-control custom-checkbox small\">
                                        <input class=\"custom-control-input\" v-model=\"addressFequalAddressE\" id=\"customCheck\" type=\"checkbox\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Direccion de facturació es igual a la direccion de envio</label>
                                    </div>
                                </div>
                                <div v-if=\"!addressFequalAddressE\" class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"adreça_enviament\" placeholder=\"Direccion de envio\" type=\"text\" v-model=\"adreça_enviament\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"cp_enviament\" placeholder=\"Codigo postal de envio\" type=\"text\" v-model=\"cp_enviament\">
                                    </div>
                                </div>
                                <div v-if=\"!addressFequalAddressE\" class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"ciutat_enviament\" placeholder=\"Ciudad de envio\" type=\"text\" v-model=\"ciutat_enviament\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"provincia_enviament\" placeholder=\"Provincia de envio\" type=\"text\" v-model=\"provincia_enviament\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"pais_enviament\" placeholder=\"Pais de envio\" type=\"text\" v-model=\"pais_enviament\">
                                    </div>
                                </div>

                                <span @click=\"addClient()\" class=\"btn btn-primary btn-user btn-block\">
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

    // line 119
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 120
        echo "    <script src=\"/build/js/config.js\" type=\"module\"></script>
    <script src=\"/build/js/adds/addClientVue.js\" type=\"module\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forms/form_cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 120,  209 => 119,  85 => 4,  76 => 3,  58 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Añadir cliente{% endblock %}
{% block main %}
    <div
        class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Añadir client</h1>
        </div>

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div
                class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"codi_client\" placeholder=\"Codigo de cliente\" ref=\"focus\" type=\"text\" v-model=\"codi_client\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"nom_client\" placeholder=\"Nombre de cliente\" type=\"text\" v-model=\"nom_client\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"cif\" placeholder=\"CIF/NIE/DNI\" type=\"text\" v-model=\"cif\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"nom_contacte\" placeholder=\"Nombre de contacto\" type=\"text\" v-model=\"nom_contacte\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"telefon_contacte\" placeholder=\"Telefono de contacto\" type=\"text\" v-model=\"telefon_contacte\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"descompte\" placeholder=\"Descuento del cliente\" type=\"text\" v-model=\"descompte\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"adreça\" placeholder=\"Direccion\" type=\"text\" v-model=\"adreça\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"cp\" placeholder=\"Codigo postal\" type=\"text\" v-model=\"cp\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"ciutat\" placeholder=\"Ciudad\" type=\"text\" v-model=\"ciutat\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"provincia\" placeholder=\"Provincia\" type=\"text\" v-model=\"provincia\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"pais\" placeholder=\"Pais\" type=\"text\" v-model=\"pais\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"telefon1\" placeholder=\"Telefono 1\" type=\"text\" v-model=\"telefon1\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"telefon2\" placeholder=\"Telefono 2\" type=\"text\" v-model=\"telefon2\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"movil\" placeholder=\"Telefono movil\" type=\"text\" v-model=\"movil\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"fax\" placeholder=\"Fax\" ref=\"focus\" type=\"text\" v-model=\"fax\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"email\" placeholder=\"Correo electronico\" type=\"text\" v-model=\"email\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"custom-control custom-checkbox small\">
                                        <input class=\"custom-control-input\" v-model=\"addressFequalAddressE\" id=\"customCheck\" type=\"checkbox\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Direccion de facturació es igual a la direccion de envio</label>
                                    </div>
                                </div>
                                <div v-if=\"!addressFequalAddressE\" class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"adreça_enviament\" placeholder=\"Direccion de envio\" type=\"text\" v-model=\"adreça_enviament\">
                                    </div>
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"cp_enviament\" placeholder=\"Codigo postal de envio\" type=\"text\" v-model=\"cp_enviament\">
                                    </div>
                                </div>
                                <div v-if=\"!addressFequalAddressE\" class=\"form-group row\">
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"ciutat_enviament\" placeholder=\"Ciudad de envio\" type=\"text\" v-model=\"ciutat_enviament\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"provincia_enviament\" placeholder=\"Provincia de envio\" type=\"text\" v-model=\"provincia_enviament\">
                                    </div>
                                    <div class=\"col-sm-4 mb-2 mb-sm-0\">
                                        <input class=\"form-control form-control-user\" id=\"pais_enviament\" placeholder=\"Pais de envio\" type=\"text\" v-model=\"pais_enviament\">
                                    </div>
                                </div>

                                <span @click=\"addClient()\" class=\"btn btn-primary btn-user btn-block\">
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
    <script src=\"/build/js/config.js\" type=\"module\"></script>
    <script src=\"/build/js/adds/addClientVue.js\" type=\"module\"></script>
{% endblock %}
", "forms/form_cliente.html.twig", "/var/www/html/AiMi/App/templates/forms/form_cliente.html.twig");
    }
}
