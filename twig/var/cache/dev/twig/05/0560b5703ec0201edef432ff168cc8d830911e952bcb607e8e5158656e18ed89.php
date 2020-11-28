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

/* default/restaurant.html.twig */
class __TwigTemplate_6367983325fda22d05974df6314cfccf321017bb0bed5fcdb7e59cf073175022 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/restaurant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/restaurant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset=\"UTF-8\" />

        <!-- Bootstrap CSS and CSS FILE -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/restaurant.css\" />

        <!-- TITLE -->
        <title>SPEAT</title>
    </head>

    <body>
        <!-- Header -->
        <header class=\"page-header\">
            <div class=\"trigger-menu-wrapper\">
                <a href=\"#\">
                    <img src=\"img/arrow.png\" id=\"arrow\" alt=\"back png\" />
                </a>
                <img class=\"logo\" src=\"img/logoS.png\" id=\"lS\" alt=\"logo speat\" />
            </div>


            <div class=\"nav-bar1\">
                <div class=\"bord1\">
                    <input type=\"search\" id=\"search-bar\">
                    <p id=\"search\">Rechercher :</p>
                </div>
            </div>

            <div class=\"nav-bar2\">
                <a href=\"#\">
                    <div class=\"bord2\">
                        <p id=\"r1\">Fast food</p>
                    </div>
                </a>

                <a href=\"#\">
                    <p id=\"r2\">Pizzeria</p>
                </a>

                <a href=\"#\">
                    <p id=\"r3\">Kebab</p>
                </a>

                <a href=\"#\">
                    <p id=\"r4\">Burger</p>
                </a>

                <a href=\"#\">
                    <p id=\"r5\">Tacos</p>
                </a>
            </div>
        </header>

        <!-- Code à améliorer -->
        <section>
            <div class=\"bar1\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo snack\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar2\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo snack\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar3\">
                <p id=\"pub1\">PUBLICITÉ</p>
            </div>

            <div class=\"bar4\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo speat\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar5\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo speat\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar6\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo speat\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class=\"static-bar\">
            <img src=\"img/bigline1.png\" id=\"line\" alt=\"line\" />
            <p id=\"pub2\">PUBLICITÉ</p>
        </footer>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/restaurant.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset=\"UTF-8\" />

        <!-- Bootstrap CSS and CSS FILE -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/restaurant.css\" />

        <!-- TITLE -->
        <title>SPEAT</title>
    </head>

    <body>
        <!-- Header -->
        <header class=\"page-header\">
            <div class=\"trigger-menu-wrapper\">
                <a href=\"#\">
                    <img src=\"img/arrow.png\" id=\"arrow\" alt=\"back png\" />
                </a>
                <img class=\"logo\" src=\"img/logoS.png\" id=\"lS\" alt=\"logo speat\" />
            </div>


            <div class=\"nav-bar1\">
                <div class=\"bord1\">
                    <input type=\"search\" id=\"search-bar\">
                    <p id=\"search\">Rechercher :</p>
                </div>
            </div>

            <div class=\"nav-bar2\">
                <a href=\"#\">
                    <div class=\"bord2\">
                        <p id=\"r1\">Fast food</p>
                    </div>
                </a>

                <a href=\"#\">
                    <p id=\"r2\">Pizzeria</p>
                </a>

                <a href=\"#\">
                    <p id=\"r3\">Kebab</p>
                </a>

                <a href=\"#\">
                    <p id=\"r4\">Burger</p>
                </a>

                <a href=\"#\">
                    <p id=\"r5\">Tacos</p>
                </a>
            </div>
        </header>

        <!-- Code à améliorer -->
        <section>
            <div class=\"bar1\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo snack\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar2\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo snack\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar3\">
                <p id=\"pub1\">PUBLICITÉ</p>
            </div>

            <div class=\"bar4\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo speat\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar5\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo speat\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>

            <div class=\"bar6\">
                <p id=\"t1\">L' ENK</p>
                <img class=\"logoright\" src=\"img/logoR.png\" id=\"lR\" alt=\"logo speat\" />
                <div class=\"point\">
                    <p id=\"ad1\">50 Av vauban 57100</p>
                    <p id=\"ad2\">Thionville</p>
                </div>
                <div class=\"greenbar\">
                    <p id=\"m\">300M</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class=\"static-bar\">
            <img src=\"img/bigline1.png\" id=\"line\" alt=\"line\" />
            <p id=\"pub2\">PUBLICITÉ</p>
        </footer>
    </body>
</html>
", "default/restaurant.html.twig", "/home/rilong/speat2/templates/default/restaurant.html.twig");
    }
}
