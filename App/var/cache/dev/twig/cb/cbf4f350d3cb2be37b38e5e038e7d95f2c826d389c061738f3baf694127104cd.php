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

/* pages/login.html.twig */
class __TwigTemplate_f9a4774f399bb5aed32e32d77fc920bf76fa875eda27e90e7ca48161fe88af90 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/login.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-6 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                </div>
                                <form  action=\"http://localhost:81/login\" method=\"post\" class=\"user\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" name=\"user_name\" placeholder=\"Enter Email Address...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\"  name=\"user_password\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"custom-control custom-checkbox small\">
                                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                                            <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
                                        </div>
                                    </div>
                                    <input  class=\"btn btn-primary btn-user btn-block\" type=\"submit\" value=\"Submit\">

                                    <a href=\"index.html\" class=\"btn btn-primary btn-user btn-block\">
                                        Login
                                    </a>
                                    <hr>
                                    <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                        <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                    </a>
                                    <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                        <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"register.html\">Create an Account!</a>
                                </div>
                            </div>
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

    // line 64
    public function block_customjs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjs"));

        // line 65
        echo "<!-- Page level custom scripts -->

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
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  136 => 64,  66 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-6 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                </div>
                                <form  action=\"http://localhost:81/login\" method=\"post\" class=\"user\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" name=\"user_name\" placeholder=\"Enter Email Address...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\"  name=\"user_password\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"custom-control custom-checkbox small\">
                                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                                            <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
                                        </div>
                                    </div>
                                    <input  class=\"btn btn-primary btn-user btn-block\" type=\"submit\" value=\"Submit\">

                                    <a href=\"index.html\" class=\"btn btn-primary btn-user btn-block\">
                                        Login
                                    </a>
                                    <hr>
                                    <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                        <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                    </a>
                                    <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                        <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"register.html\">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
{% endblock %}
{% block customjs %}
<!-- Page level custom scripts -->

<script type=\"module\" src=\"/build/js/config.js\"></script>
<script type=\"module\" src=\"/build/js/dashboard/grafic.js\"></script>

<script type=\"module\" src=\"/build/js/dashboard/chart-area.js\"></script>
<!--script src=\"/build/js/demo/chart-pie-demo.js\"></script-->
{% endblock %}
", "pages/login.html.twig", "/var/www/html/AiMi/App/templates/pages/login.html.twig");
    }
}
