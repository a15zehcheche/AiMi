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

/* pages/download.html.twig */
class __TwigTemplate_ff56f39145071fdf07082eb6a9e2efde5a490f8bc866a6dff92d06adc703545b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/download.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/download.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/download.html.twig"));

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

        echo "Download";
        
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
            <h1 class=\"h3 mb-0 text-gray-800\">Factura Nº- <span class=\"numFactura\" data-num-factura=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["numFactura"]) || array_key_exists("numFactura", $context) ? $context["numFactura"] : (function () { throw new RuntimeError('Variable "numFactura" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["numFactura"]) || array_key_exists("numFactura", $context) ? $context["numFactura"] : (function () { throw new RuntimeError('Variable "numFactura" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</span></h1>
        </div>
        <a href=\"http://192.168.205.224:8000/facturaPdf/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["numFactura"]) || array_key_exists("numFactura", $context) ? $context["numFactura"] : (function () { throw new RuntimeError('Variable "numFactura" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "/download\" class=\"btn btn-primary btn-icon-split btn-sm\">
                    <span class=\"icon text-white-50\">
                      <i class=\"fas fa-file-download\"></i>
                    </span>
            <span class=\"text\">Descarregar</span>
        </a>
        <a href=\"http://192.168.205.224:8000/facturaPdf/";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["numFactura"]) || array_key_exists("numFactura", $context) ? $context["numFactura"] : (function () { throw new RuntimeError('Variable "numFactura" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "/view\"  target=\"blank\" class=\"btn btn-primary btn-icon-split btn-sm\">
                    <span class=\"icon text-white-50\">
                      <i class=\"fas fa-eye\"></i>
                    </span>
            <span class=\"text\">Visualitzar</span>
        </a>
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"card shadow mb-4 mt-5 border-bottom-info\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary text-uppercase\">Imprimir direccio d'enviament</h6>
                    </div>
                    <div class=\"card-body\">
                        <p><span class=\"font-weight-bold\">Direccio: </span>";
        // line 28
        echo "{{ client._direccion__envio }}";
        echo "</p>
                        <p><span class=\"font-weight-bold\">Codi Postal: </span>";
        // line 29
        echo "{{ client._cp }}";
        echo "</p>
                        <p><span class=\"font-weight-bold\">Ciutat: </span>";
        // line 30
        echo "{{ client._ciudad__envio }}";
        echo "</p>
                        <p><span class=\"font-weight-bold\">Provincia: </span>";
        // line 31
        echo "{{ client._provincia__envio }}";
        echo "</p>
                        <div class=\"row\">
                            <div class=\"col-8 d-flex justify-content-end\">
                                <input type=\"number\" min=\"1\" class=\"form-control col-5\" placeholder=\"Embalums\" v-model=\"bultos\">
                            </div>
                            <div class=\"col-4 d-flex align-items-center\">
                                <button @click=\"imprimirDireccio()\" class=\"d-none d-sm-inline-block  btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-print fa-sm text-white-50\"></i> Generar direccio</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card shadow mb-4 mt-5 border-bottom-info\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary text-uppercase\">Imprimir direccio d'enviament personalizat</h6>
                    </div>
                    <div class=\"card-body\">
                        <form :action=\"url\">
                            <input type=\"text\" name=\"direccio\" class=\"form-control mb-3\" placeholder=\"Direccio...\">
                            <input type=\"text\" name=\"cp\" class=\"form-control mb-3\" placeholder=\"Codi Postal...\">
                            <input type=\"text\" name=\"ciutat\" class=\"form-control mb-3\" placeholder=\"Ciutat...\">
                            <input type=\"text\" name=\"provincia\" class=\"form-control mb-3\" placeholder=\"Provincia...\">
                            <div class=\"row\">
                                <div class=\"col-8 d-flex justify-content-end\">
                                    <input type=\"number\" min=\"1\" class=\"form-control col-5\" placeholder=\"Embalums\" v-model=\"bultos\">
                                </div>
                                <div class=\"col-4 d-flex align-items-center\">
                                    <button @click=\"imprimir()\" type=\"submit\" class=\"d-none d-sm-inline-block  btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-print fa-sm text-white-50\"></i> Generar direccio</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-9\"></div>
            <div class=\"col-3\">
                <a href=\"/crearFactura\" class=\"btn btn-primary btn-icon-split mt-5\">
                    <span class=\"icon text-white-50\">
                      <i class=\"fas fa-arrow-right\"></i>
                    </span>
                    <span class=\"text\">Finalitzar factura</span>
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 81
        echo "    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/downloadVue.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 81,  193 => 80,  134 => 31,  130 => 30,  126 => 29,  122 => 28,  106 => 15,  97 => 9,  90 => 7,  85 => 4,  76 => 3,  58 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Download{% endblock %}
{% block main %}
    <div class=\"container\" id=\"app\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Factura Nº- <span class=\"numFactura\" data-num-factura=\"{{ numFactura }}\">{{ numFactura }}</span></h1>
        </div>
        <a href=\"http://192.168.205.224:8000/facturaPdf/{{ numFactura }}/download\" class=\"btn btn-primary btn-icon-split btn-sm\">
                    <span class=\"icon text-white-50\">
                      <i class=\"fas fa-file-download\"></i>
                    </span>
            <span class=\"text\">Descarregar</span>
        </a>
        <a href=\"http://192.168.205.224:8000/facturaPdf/{{ numFactura }}/view\"  target=\"blank\" class=\"btn btn-primary btn-icon-split btn-sm\">
                    <span class=\"icon text-white-50\">
                      <i class=\"fas fa-eye\"></i>
                    </span>
            <span class=\"text\">Visualitzar</span>
        </a>
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"card shadow mb-4 mt-5 border-bottom-info\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary text-uppercase\">Imprimir direccio d'enviament</h6>
                    </div>
                    <div class=\"card-body\">
                        <p><span class=\"font-weight-bold\">Direccio: </span>{{ \"{{ client._direccion__envio }}\" }}</p>
                        <p><span class=\"font-weight-bold\">Codi Postal: </span>{{ \"{{ client._cp }}\" }}</p>
                        <p><span class=\"font-weight-bold\">Ciutat: </span>{{ \"{{ client._ciudad__envio }}\" }}</p>
                        <p><span class=\"font-weight-bold\">Provincia: </span>{{ \"{{ client._provincia__envio }}\" }}</p>
                        <div class=\"row\">
                            <div class=\"col-8 d-flex justify-content-end\">
                                <input type=\"number\" min=\"1\" class=\"form-control col-5\" placeholder=\"Embalums\" v-model=\"bultos\">
                            </div>
                            <div class=\"col-4 d-flex align-items-center\">
                                <button @click=\"imprimirDireccio()\" class=\"d-none d-sm-inline-block  btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-print fa-sm text-white-50\"></i> Generar direccio</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card shadow mb-4 mt-5 border-bottom-info\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary text-uppercase\">Imprimir direccio d'enviament personalizat</h6>
                    </div>
                    <div class=\"card-body\">
                        <form :action=\"url\">
                            <input type=\"text\" name=\"direccio\" class=\"form-control mb-3\" placeholder=\"Direccio...\">
                            <input type=\"text\" name=\"cp\" class=\"form-control mb-3\" placeholder=\"Codi Postal...\">
                            <input type=\"text\" name=\"ciutat\" class=\"form-control mb-3\" placeholder=\"Ciutat...\">
                            <input type=\"text\" name=\"provincia\" class=\"form-control mb-3\" placeholder=\"Provincia...\">
                            <div class=\"row\">
                                <div class=\"col-8 d-flex justify-content-end\">
                                    <input type=\"number\" min=\"1\" class=\"form-control col-5\" placeholder=\"Embalums\" v-model=\"bultos\">
                                </div>
                                <div class=\"col-4 d-flex align-items-center\">
                                    <button @click=\"imprimir()\" type=\"submit\" class=\"d-none d-sm-inline-block  btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-print fa-sm text-white-50\"></i> Generar direccio</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-9\"></div>
            <div class=\"col-3\">
                <a href=\"/crearFactura\" class=\"btn btn-primary btn-icon-split mt-5\">
                    <span class=\"icon text-white-50\">
                      <i class=\"fas fa-arrow-right\"></i>
                    </span>
                    <span class=\"text\">Finalitzar factura</span>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/downloadVue.js\"></script>
{% endblock %}


", "pages/download.html.twig", "/var/www/html/AiMi/App/templates/pages/download.html.twig");
    }
}
