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

/* pages/dashboard.html.twig */
class __TwigTemplate_7a30c28e5cd35b190e70e8474a46318511ee74f397e30b160936742e26a06f63 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/dashboard.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <!-- Main Content -->
    <div id=\"content\">
        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class=\"row\" id=\"resumen\">

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-primary shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Ganancias (Mesual)</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 23
        echo "{{ gananciaMesual }}";
        echo "€</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-success shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Ganancias (Anual)</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 40
        echo "{{ gananciaAnual }}";
        echo "€</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-info shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Cant.Factura</div>
                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 57
        echo "{{ quantitatF }}";
        echo "</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-file-invoice-dollar fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-warning shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Cant.Devolucion</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 74
        echo "{{ quantitatD }}";
        echo "</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-receipt fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class=\"row\" id=\"grafic\">



                <!-- Content Column -->
                <div class=\"col-lg-8 mb-4\">

                    <!-- Project Card Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Top 5</h6>
                        </div>
                        <div class=\"card-body\" v-if=\"top5[0]\">
                            <!--div v-for=\"(product, index) in top5\" :key=\"index\">
                                <h4 class=\"small font-weight-bold\">";
        // line 101
        echo "{{ product.nombre}}";
        echo "<span class=\"float-right\">";
        echo "{{ product.porcentage }}";
        echo "%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" :style=\"{ 'width' : product.porcentage + '%' }\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div-->


                            <h4 class=\"small font-weight-bold\">";
        // line 108
        echo "{{top5[0].nombre }}";
        echo " <span class=\"float-right\">";
        echo "{{ top5[0].porcentage }}";
        echo "%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-success\" role=\"progressbar\" :style=\"{ 'width' : top5[0].porcentage + '%' }\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">";
        // line 113
        echo "{{top5[1].nombre }}";
        echo "  <span class=\"float-right\">";
        echo "{{ top5[1].porcentage }}";
        echo "%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-info\" role=\"progressbar\" :style=\"{ 'width' : top5[1].porcentage + '%' }\"  aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">";
        // line 118
        echo "{{top5[2].nombre }}";
        echo "  <span class=\"float-right\">";
        echo "{{ top5[2].porcentage }}";
        echo "%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-primary\" role=\"progressbar\" :style=\"{ 'width' : top5[2].porcentage + '%' }\"  aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">";
        // line 123
        echo "{{top5[3].nombre }}";
        echo "  <span class=\"float-right\">";
        echo "{{ top5[3].porcentage }}";
        echo "%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" :style=\"{ 'width' : top5[3].porcentage + '%' }\"  aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">";
        // line 128
        echo "{{top5[4].nombre }}";
        echo "  <span class=\"float-right\">";
        echo "{{ top5[4].porcentage }}";
        echo "%</span></h4>
                            <divDirect class=\"progress\">
                                <div class=\"progress-bar bg-danger\" role=\"progressbar\"  :style=\"{ 'width' : top5[4].porcentage + '%' }\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </divDirect>
                        </div>
                    </div>

                </div>


                <!-- Pie Chart -->
                <div class=\"col-xl-4 col-lg-5\">
                    <div class=\"card shadow mb-4\">
                        <!-- Card Header - Dropdown -->
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Ganacias / Devoluciones</h6>
                        </div>
                        <!-- Card Body -->
                        <div class=\"card-body\">
                            <div class=\"chart-pie pt-4 pb-2\">
                                <canvas id=\"myPieChart\"></canvas>
                            </div>
                            <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-devolucio\"></i> Devolucion
                    </span>
                                <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-ganancias\"></i> Ganancia
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class=\"row\" >
                <!-- Area Chart -->
                <div class=\"col-xl-12 col-lg-7\">
                    <div class=\"card shadow mb-4\">
                        <!-- Card Header - Dropdown -->
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Ganancias por mes</h6>
                        </div>
                        <!-- Card Body -->
                        <div class=\"card-body\">
                            <div class=\"chart-area\">
                                <canvas id=\"myAreaChart\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 188
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 189
        echo "    <!-- Page level custom scripts -->

    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/dashboard/grafic.js\"></script>

    <script type=\"module\" src=\"/build/js/dashboard/chart-area.js\"></script>
    <!--script src=\"/build/js/demo/chart-pie-demo.js\"></script-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 189,  302 => 188,  230 => 128,  220 => 123,  210 => 118,  200 => 113,  190 => 108,  178 => 101,  148 => 74,  128 => 57,  108 => 40,  88 => 23,  66 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block main %}
    <!-- Main Content -->
    <div id=\"content\">
        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class=\"row\" id=\"resumen\">

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-primary shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Ganancias (Mesual)</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ \"{{ gananciaMesual }}\" }}€</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-success shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Ganancias (Anual)</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ \"{{ gananciaAnual }}\" }}€</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-info shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Cant.Factura</div>
                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ \"{{ quantitatF }}\" }}</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-file-invoice-dollar fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class=\"col-xl-3 col-md-6 mb-4\">
                    <div class=\"card border-left-warning shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Cant.Devolucion</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ \"{{ quantitatD }}\" }}</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-receipt fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class=\"row\" id=\"grafic\">



                <!-- Content Column -->
                <div class=\"col-lg-8 mb-4\">

                    <!-- Project Card Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Top 5</h6>
                        </div>
                        <div class=\"card-body\" v-if=\"top5[0]\">
                            <!--div v-for=\"(product, index) in top5\" :key=\"index\">
                                <h4 class=\"small font-weight-bold\">{{ \"{{ product.nombre}}\" }}<span class=\"float-right\">{{ \"{{ product.porcentage }}\" }}%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" :style=\"{ 'width' : product.porcentage + '%' }\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div-->


                            <h4 class=\"small font-weight-bold\">{{ \"{{top5[0].nombre }}\" }} <span class=\"float-right\">{{ \"{{ top5[0].porcentage }}\" }}%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-success\" role=\"progressbar\" :style=\"{ 'width' : top5[0].porcentage + '%' }\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">{{ \"{{top5[1].nombre }}\" }}  <span class=\"float-right\">{{ \"{{ top5[1].porcentage }}\" }}%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-info\" role=\"progressbar\" :style=\"{ 'width' : top5[1].porcentage + '%' }\"  aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">{{ \"{{top5[2].nombre }}\" }}  <span class=\"float-right\">{{ \"{{ top5[2].porcentage }}\" }}%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-primary\" role=\"progressbar\" :style=\"{ 'width' : top5[2].porcentage + '%' }\"  aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">{{ \"{{top5[3].nombre }}\" }}  <span class=\"float-right\">{{ \"{{ top5[3].porcentage }}\" }}%</span></h4>
                            <div class=\"progress mb-4\">
                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" :style=\"{ 'width' : top5[3].porcentage + '%' }\"  aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>

                            <h4 class=\"small font-weight-bold\">{{ \"{{top5[4].nombre }}\" }}  <span class=\"float-right\">{{ \"{{ top5[4].porcentage }}\" }}%</span></h4>
                            <divDirect class=\"progress\">
                                <div class=\"progress-bar bg-danger\" role=\"progressbar\"  :style=\"{ 'width' : top5[4].porcentage + '%' }\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </divDirect>
                        </div>
                    </div>

                </div>


                <!-- Pie Chart -->
                <div class=\"col-xl-4 col-lg-5\">
                    <div class=\"card shadow mb-4\">
                        <!-- Card Header - Dropdown -->
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Ganacias / Devoluciones</h6>
                        </div>
                        <!-- Card Body -->
                        <div class=\"card-body\">
                            <div class=\"chart-pie pt-4 pb-2\">
                                <canvas id=\"myPieChart\"></canvas>
                            </div>
                            <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-devolucio\"></i> Devolucion
                    </span>
                                <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-ganancias\"></i> Ganancia
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class=\"row\" >
                <!-- Area Chart -->
                <div class=\"col-xl-12 col-lg-7\">
                    <div class=\"card shadow mb-4\">
                        <!-- Card Header - Dropdown -->
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Ganancias por mes</h6>
                        </div>
                        <!-- Card Body -->
                        <div class=\"card-body\">
                            <div class=\"chart-area\">
                                <canvas id=\"myAreaChart\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
{% endblock %}
{% block customjs %}
    <!-- Page level custom scripts -->

    <script type=\"module\" src=\"/build/js/config.js\"></script>
    <script type=\"module\" src=\"/build/js/dashboard/grafic.js\"></script>

    <script type=\"module\" src=\"/build/js/dashboard/chart-area.js\"></script>
    <!--script src=\"/build/js/demo/chart-pie-demo.js\"></script-->
{% endblock %}", "pages/dashboard.html.twig", "/var/www/html/AiMi/App/templates/pages/dashboard.html.twig");
    }
}
