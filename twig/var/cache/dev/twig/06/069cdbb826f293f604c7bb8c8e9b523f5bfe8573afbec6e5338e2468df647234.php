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

/* default/panier.html.twig */
class __TwigTemplate_4c1cc8c37f4c65873b91c3214f9000d87a30761c953b2eca8908fec33fc5a20c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/panier.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset=\"UTF-8\" />

        <!-- Bootstrap CSS and CSS FILE -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/panier.css\" />

        <!-- TITLE -->
        <title>SPEAT</title>
    </head>

    <body>
        <!-- Header -->
        <header class=\"page-header\">
            <div class=\"trigger-menu-wrapper\">
                <a href=\"restaurant.html\">
                    <img src=\"img/arrow.png\" id=\"arrow\" alt=\"back png\" />
                </a>
                <img class=\"logo\" src=\"img/logoS.png\" id=\"lS\" alt=\"logo speat\" />
            </div>
        </header>

        <!-- Code à améliorer -->
        <section>
            <div class=\"static-content\">
                <img class=\"logo\" src=\"img/logoR.png\" id=\"lR\" alt=\"snack logo\" />
                <img class=\"logo\" src=\"img/logoC.png\" id=\"lC\" alt=\"command logo\" />
                <p align=\"center\" id=\"com\">MA COMMANDE</p>
                <img src=\"img/line.png\" id=\"l1\" alt=\"lign\" />
            </div>

            <div class=\"no-static-content\">
                <p id=\"t1\">TACOS</p>
                <p id=\"ing1\">* Oignons x2, Tomates, Mayonnaise</p>
                <p id=\"ing2\">x2</p>
                <img src=\"img/close.png\" id=\"del1\" alt=\"close button\" />
                <img src=\"img/tacos.png\" id=\"tacos\" alt=\"tacos png\" />
                <p id=\"pr1\" align=\"center\">4,65€</p>
                <p id=\"sp1\" align=\"center\">Total suppléments : 0,10€</p>
                <img src=\"img/line.png\" id=\"l2\" alt=\"lign\" />
                <p id=\"t2\">CHEESEBURGER</p>
                <img src=\"img/close.png\" id=\"del2\" alt=\"close button\" />
                <img src=\"img/burger.png\" id=\"chsbrgr\" alt=\"cheeseburger png\" />
                <p id=\"pr2\" align=\"center\">3,35€</p>
                <p id=\"sp2\" align=\"center\">Total suppléments : 0,00€</p>
                <img src=\"img/line.png\" id=\"l3\" alt=\"line\" />
                <a href=\"restaurant.html\">
                    <div class=\"add-bar\">
                        <p id=\"add\"><span id=\"plus\">+</span> Ajouter autre chose</p>
                    </div>
                </a>
                <p id=\"sugg\">Suggestions</p>
                <img src=\"img/line.png\" id=\"l4\" alt=\"line\" />
                <p id=\"total_cmd\">Total de la commande : <span id=\"tpr\">8,00€</span></p>
                <div class=\"lr-arrow\">
                    <a href=\"#\">
                        <img src=\"img/left-arrow.png\" id=\"arr1\" alt=\"left-arrow\" />
                    </a>
                    <a href=\"#\">
                        <img src=\"img/right-arrow.png\" id=\"arr2\" alt=\"right-arrow\" />
                    </a>
                </div>

                <a href=\"#\">
                    <div class=\"border1\">
                        <img src=\"img/fries1.png\" id=\"supp1\" alt=\"fries\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border2\">
                        <img src=\"img/fries2.png\" id=\"supp2\" alt=\"fries\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border3\">
                        <img src=\"img/icecream1.png\" id=\"supp3\" alt=\"icecream\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border4\">
                        <img src=\"img/icecream2.png\" id=\"supp4\" alt=\"icecream\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border5\">
                        <img src=\"img/ham.png\" id=\"supp5\" alt=\"ham\" />
                    </div>
                </a>
                <p id=\"ing3\">Barquette de frites 2,00€</p>
                <a href=\"#\">
                    <div class=\"add-bar1\">
                        <p id=\"add1\">Ajouter</p>
                    </div>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class=\"static-bar\">
            <img src=\"img/bigline.png\" id=\"l5\" alt=\"lign\" />
            <p id=\"total\">TOTAL : <span id=\"sum\">8,00€</span></p>
            <a href=\"paiement.html\">
                <img src=\"img/valid.png\" id=\"valid\" alt=\"lign\" />
            </a>
        </footer>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/panier.html.twig";
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
        <link rel=\"stylesheet\" href=\"css/panier.css\" />

        <!-- TITLE -->
        <title>SPEAT</title>
    </head>

    <body>
        <!-- Header -->
        <header class=\"page-header\">
            <div class=\"trigger-menu-wrapper\">
                <a href=\"restaurant.html\">
                    <img src=\"img/arrow.png\" id=\"arrow\" alt=\"back png\" />
                </a>
                <img class=\"logo\" src=\"img/logoS.png\" id=\"lS\" alt=\"logo speat\" />
            </div>
        </header>

        <!-- Code à améliorer -->
        <section>
            <div class=\"static-content\">
                <img class=\"logo\" src=\"img/logoR.png\" id=\"lR\" alt=\"snack logo\" />
                <img class=\"logo\" src=\"img/logoC.png\" id=\"lC\" alt=\"command logo\" />
                <p align=\"center\" id=\"com\">MA COMMANDE</p>
                <img src=\"img/line.png\" id=\"l1\" alt=\"lign\" />
            </div>

            <div class=\"no-static-content\">
                <p id=\"t1\">TACOS</p>
                <p id=\"ing1\">* Oignons x2, Tomates, Mayonnaise</p>
                <p id=\"ing2\">x2</p>
                <img src=\"img/close.png\" id=\"del1\" alt=\"close button\" />
                <img src=\"img/tacos.png\" id=\"tacos\" alt=\"tacos png\" />
                <p id=\"pr1\" align=\"center\">4,65€</p>
                <p id=\"sp1\" align=\"center\">Total suppléments : 0,10€</p>
                <img src=\"img/line.png\" id=\"l2\" alt=\"lign\" />
                <p id=\"t2\">CHEESEBURGER</p>
                <img src=\"img/close.png\" id=\"del2\" alt=\"close button\" />
                <img src=\"img/burger.png\" id=\"chsbrgr\" alt=\"cheeseburger png\" />
                <p id=\"pr2\" align=\"center\">3,35€</p>
                <p id=\"sp2\" align=\"center\">Total suppléments : 0,00€</p>
                <img src=\"img/line.png\" id=\"l3\" alt=\"line\" />
                <a href=\"restaurant.html\">
                    <div class=\"add-bar\">
                        <p id=\"add\"><span id=\"plus\">+</span> Ajouter autre chose</p>
                    </div>
                </a>
                <p id=\"sugg\">Suggestions</p>
                <img src=\"img/line.png\" id=\"l4\" alt=\"line\" />
                <p id=\"total_cmd\">Total de la commande : <span id=\"tpr\">8,00€</span></p>
                <div class=\"lr-arrow\">
                    <a href=\"#\">
                        <img src=\"img/left-arrow.png\" id=\"arr1\" alt=\"left-arrow\" />
                    </a>
                    <a href=\"#\">
                        <img src=\"img/right-arrow.png\" id=\"arr2\" alt=\"right-arrow\" />
                    </a>
                </div>

                <a href=\"#\">
                    <div class=\"border1\">
                        <img src=\"img/fries1.png\" id=\"supp1\" alt=\"fries\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border2\">
                        <img src=\"img/fries2.png\" id=\"supp2\" alt=\"fries\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border3\">
                        <img src=\"img/icecream1.png\" id=\"supp3\" alt=\"icecream\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border4\">
                        <img src=\"img/icecream2.png\" id=\"supp4\" alt=\"icecream\" />
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"border5\">
                        <img src=\"img/ham.png\" id=\"supp5\" alt=\"ham\" />
                    </div>
                </a>
                <p id=\"ing3\">Barquette de frites 2,00€</p>
                <a href=\"#\">
                    <div class=\"add-bar1\">
                        <p id=\"add1\">Ajouter</p>
                    </div>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class=\"static-bar\">
            <img src=\"img/bigline.png\" id=\"l5\" alt=\"lign\" />
            <p id=\"total\">TOTAL : <span id=\"sum\">8,00€</span></p>
            <a href=\"paiement.html\">
                <img src=\"img/valid.png\" id=\"valid\" alt=\"lign\" />
            </a>
        </footer>
    </body>
</html>
", "default/panier.html.twig", "/home/rilong/speat2/templates/default/panier.html.twig");
    }
}
