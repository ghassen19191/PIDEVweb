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

/* vendors/linericon/style.css */
class __TwigTemplate_66d048e724a3a10a6ca8fd76ade6a56729bc0ad0d9d59b43a57b9c6b80f69a00 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/linericon/style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/linericon/style.css"));

        // line 1
        echo "@font-face {
\tfont-family: 'Linearicons-Free';
\tsrc:url('fonts/Linearicons-Free.eot?w118d');
\tsrc:url('fonts/Linearicons-Free.eot?#iefixw118d') format('embedded-opentype'),
\t\turl('fonts/Linearicons-Free.woff2?w118d') format('woff2'),
\t\turl('fonts/Linearicons-Free.woff?w118d') format('woff'),
\t\turl('fonts/Linearicons-Free.ttf?w118d') format('truetype'),
\t\turl('fonts/Linearicons-Free.svg?w118d#Linearicons-Free') format('svg');
\tfont-weight: normal;
\tfont-style: normal;
}

.lnr {
\tfont-family: 'Linearicons-Free';
\tspeak: none;
\tfont-style: normal;
\tfont-weight: normal;
\tfont-variant: normal;
\ttext-transform: none;
\tline-height: 1;

\t/* Better Font Rendering =========== */
\t-webkit-font-smoothing: antialiased;
\t-moz-osx-font-smoothing: grayscale;
}

.lnr-home:before {
\tcontent: \"\\e800\";
}
.lnr-apartment:before {
\tcontent: \"\\e801\";
}
.lnr-pencil:before {
\tcontent: \"\\e802\";
}
.lnr-magic-wand:before {
\tcontent: \"\\e803\";
}
.lnr-drop:before {
\tcontent: \"\\e804\";
}
.lnr-lighter:before {
\tcontent: \"\\e805\";
}
.lnr-poop:before {
\tcontent: \"\\e806\";
}
.lnr-sun:before {
\tcontent: \"\\e807\";
}
.lnr-moon:before {
\tcontent: \"\\e808\";
}
.lnr-cloud:before {
\tcontent: \"\\e809\";
}
.lnr-cloud-upload:before {
\tcontent: \"\\e80a\";
}
.lnr-cloud-download:before {
\tcontent: \"\\e80b\";
}
.lnr-cloud-sync:before {
\tcontent: \"\\e80c\";
}
.lnr-cloud-check:before {
\tcontent: \"\\e80d\";
}
.lnr-database:before {
\tcontent: \"\\e80e\";
}
.lnr-lock:before {
\tcontent: \"\\e80f\";
}
.lnr-cog:before {
\tcontent: \"\\e810\";
}
.lnr-trash:before {
\tcontent: \"\\e811\";
}
.lnr-dice:before {
\tcontent: \"\\e812\";
}
.lnr-heart:before {
\tcontent: \"\\e813\";
}
.lnr-star:before {
\tcontent: \"\\e814\";
}
.lnr-star-half:before {
\tcontent: \"\\e815\";
}
.lnr-star-empty:before {
\tcontent: \"\\e816\";
}
.lnr-flag:before {
\tcontent: \"\\e817\";
}
.lnr-envelope:before {
\tcontent: \"\\e818\";
}
.lnr-paperclip:before {
\tcontent: \"\\e819\";
}
.lnr-inbox:before {
\tcontent: \"\\e81a\";
}
.lnr-eye:before {
\tcontent: \"\\e81b\";
}
.lnr-printer:before {
\tcontent: \"\\e81c\";
}
.lnr-file-empty:before {
\tcontent: \"\\e81d\";
}
.lnr-file-add:before {
\tcontent: \"\\e81e\";
}
.lnr-enter:before {
\tcontent: \"\\e81f\";
}
.lnr-exit:before {
\tcontent: \"\\e820\";
}
.lnr-graduation-hat:before {
\tcontent: \"\\e821\";
}
.lnr-license:before {
\tcontent: \"\\e822\";
}
.lnr-music-note:before {
\tcontent: \"\\e823\";
}
.lnr-film-play:before {
\tcontent: \"\\e824\";
}
.lnr-camera-video:before {
\tcontent: \"\\e825\";
}
.lnr-camera:before {
\tcontent: \"\\e826\";
}
.lnr-picture:before {
\tcontent: \"\\e827\";
}
.lnr-book:before {
\tcontent: \"\\e828\";
}
.lnr-bookmark:before {
\tcontent: \"\\e829\";
}
.lnr-user:before {
\tcontent: \"\\e82a\";
}
.lnr-users:before {
\tcontent: \"\\e82b\";
}
.lnr-shirt:before {
\tcontent: \"\\e82c\";
}
.lnr-store:before {
\tcontent: \"\\e82d\";
}
.lnr-cart:before {
\tcontent: \"\\e82e\";
}
.lnr-tag:before {
\tcontent: \"\\e82f\";
}
.lnr-phone-handset:before {
\tcontent: \"\\e830\";
}
.lnr-phone:before {
\tcontent: \"\\e831\";
}
.lnr-pushpin:before {
\tcontent: \"\\e832\";
}
.lnr-map-marker:before {
\tcontent: \"\\e833\";
}
.lnr-map:before {
\tcontent: \"\\e834\";
}
.lnr-location:before {
\tcontent: \"\\e835\";
}
.lnr-calendar-full:before {
\tcontent: \"\\e836\";
}
.lnr-keyboard:before {
\tcontent: \"\\e837\";
}
.lnr-spell-check:before {
\tcontent: \"\\e838\";
}
.lnr-screen:before {
\tcontent: \"\\e839\";
}
.lnr-smartphone:before {
\tcontent: \"\\e83a\";
}
.lnr-tablet:before {
\tcontent: \"\\e83b\";
}
.lnr-laptop:before {
\tcontent: \"\\e83c\";
}
.lnr-laptop-phone:before {
\tcontent: \"\\e83d\";
}
.lnr-power-switch:before {
\tcontent: \"\\e83e\";
}
.lnr-bubble:before {
\tcontent: \"\\e83f\";
}
.lnr-heart-pulse:before {
\tcontent: \"\\e840\";
}
.lnr-construction:before {
\tcontent: \"\\e841\";
}
.lnr-pie-chart:before {
\tcontent: \"\\e842\";
}
.lnr-chart-bars:before {
\tcontent: \"\\e843\";
}
.lnr-gift:before {
\tcontent: \"\\e844\";
}
.lnr-diamond:before {
\tcontent: \"\\e845\";
}
.lnr-linearicons:before {
\tcontent: \"\\e846\";
}
.lnr-dinner:before {
\tcontent: \"\\e847\";
}
.lnr-coffee-cup:before {
\tcontent: \"\\e848\";
}
.lnr-leaf:before {
\tcontent: \"\\e849\";
}
.lnr-paw:before {
\tcontent: \"\\e84a\";
}
.lnr-rocket:before {
\tcontent: \"\\e84b\";
}
.lnr-briefcase:before {
\tcontent: \"\\e84c\";
}
.lnr-bus:before {
\tcontent: \"\\e84d\";
}
.lnr-car:before {
\tcontent: \"\\e84e\";
}
.lnr-train:before {
\tcontent: \"\\e84f\";
}
.lnr-bicycle:before {
\tcontent: \"\\e850\";
}
.lnr-wheelchair:before {
\tcontent: \"\\e851\";
}
.lnr-select:before {
\tcontent: \"\\e852\";
}
.lnr-earth:before {
\tcontent: \"\\e853\";
}
.lnr-smile:before {
\tcontent: \"\\e854\";
}
.lnr-sad:before {
\tcontent: \"\\e855\";
}
.lnr-neutral:before {
\tcontent: \"\\e856\";
}
.lnr-mustache:before {
\tcontent: \"\\e857\";
}
.lnr-alarm:before {
\tcontent: \"\\e858\";
}
.lnr-bullhorn:before {
\tcontent: \"\\e859\";
}
.lnr-volume-high:before {
\tcontent: \"\\e85a\";
}
.lnr-volume-medium:before {
\tcontent: \"\\e85b\";
}
.lnr-volume-low:before {
\tcontent: \"\\e85c\";
}
.lnr-volume:before {
\tcontent: \"\\e85d\";
}
.lnr-mic:before {
\tcontent: \"\\e85e\";
}
.lnr-hourglass:before {
\tcontent: \"\\e85f\";
}
.lnr-undo:before {
\tcontent: \"\\e860\";
}
.lnr-redo:before {
\tcontent: \"\\e861\";
}
.lnr-sync:before {
\tcontent: \"\\e862\";
}
.lnr-history:before {
\tcontent: \"\\e863\";
}
.lnr-clock:before {
\tcontent: \"\\e864\";
}
.lnr-download:before {
\tcontent: \"\\e865\";
}
.lnr-upload:before {
\tcontent: \"\\e866\";
}
.lnr-enter-down:before {
\tcontent: \"\\e867\";
}
.lnr-exit-up:before {
\tcontent: \"\\e868\";
}
.lnr-bug:before {
\tcontent: \"\\e869\";
}
.lnr-code:before {
\tcontent: \"\\e86a\";
}
.lnr-link:before {
\tcontent: \"\\e86b\";
}
.lnr-unlink:before {
\tcontent: \"\\e86c\";
}
.lnr-thumbs-up:before {
\tcontent: \"\\e86d\";
}
.lnr-thumbs-down:before {
\tcontent: \"\\e86e\";
}
.lnr-magnifier:before {
\tcontent: \"\\e86f\";
}
.lnr-cross:before {
\tcontent: \"\\e870\";
}
.lnr-menu:before {
\tcontent: \"\\e871\";
}
.lnr-list:before {
\tcontent: \"\\e872\";
}
.lnr-chevron-up:before {
\tcontent: \"\\e873\";
}
.lnr-chevron-down:before {
\tcontent: \"\\e874\";
}
.lnr-chevron-left:before {
\tcontent: \"\\e875\";
}
.lnr-chevron-right:before {
\tcontent: \"\\e876\";
}
.lnr-arrow-up:before {
\tcontent: \"\\e877\";
}
.lnr-arrow-down:before {
\tcontent: \"\\e878\";
}
.lnr-arrow-left:before {
\tcontent: \"\\e879\";
}
.lnr-arrow-right:before {
\tcontent: \"\\e87a\";
}
.lnr-move:before {
\tcontent: \"\\e87b\";
}
.lnr-warning:before {
\tcontent: \"\\e87c\";
}
.lnr-question-circle:before {
\tcontent: \"\\e87d\";
}
.lnr-menu-circle:before {
\tcontent: \"\\e87e\";
}
.lnr-checkmark-circle:before {
\tcontent: \"\\e87f\";
}
.lnr-cross-circle:before {
\tcontent: \"\\e880\";
}
.lnr-plus-circle:before {
\tcontent: \"\\e881\";
}
.lnr-circle-minus:before {
\tcontent: \"\\e882\";
}
.lnr-arrow-up-circle:before {
\tcontent: \"\\e883\";
}
.lnr-arrow-down-circle:before {
\tcontent: \"\\e884\";
}
.lnr-arrow-left-circle:before {
\tcontent: \"\\e885\";
}
.lnr-arrow-right-circle:before {
\tcontent: \"\\e886\";
}
.lnr-chevron-up-circle:before {
\tcontent: \"\\e887\";
}
.lnr-chevron-down-circle:before {
\tcontent: \"\\e888\";
}
.lnr-chevron-left-circle:before {
\tcontent: \"\\e889\";
}
.lnr-chevron-right-circle:before {
\tcontent: \"\\e88a\";
}
.lnr-crop:before {
\tcontent: \"\\e88b\";
}
.lnr-frame-expand:before {
\tcontent: \"\\e88c\";
}
.lnr-frame-contract:before {
\tcontent: \"\\e88d\";
}
.lnr-layers:before {
\tcontent: \"\\e88e\";
}
.lnr-funnel:before {
\tcontent: \"\\e88f\";
}
.lnr-text-format:before {
\tcontent: \"\\e890\";
}
.lnr-text-format-remove:before {
\tcontent: \"\\e891\";
}
.lnr-text-size:before {
\tcontent: \"\\e892\";
}
.lnr-bold:before {
\tcontent: \"\\e893\";
}
.lnr-italic:before {
\tcontent: \"\\e894\";
}
.lnr-underline:before {
\tcontent: \"\\e895\";
}
.lnr-strikethrough:before {
\tcontent: \"\\e896\";
}
.lnr-highlight:before {
\tcontent: \"\\e897\";
}
.lnr-text-align-left:before {
\tcontent: \"\\e898\";
}
.lnr-text-align-center:before {
\tcontent: \"\\e899\";
}
.lnr-text-align-right:before {
\tcontent: \"\\e89a\";
}
.lnr-text-align-justify:before {
\tcontent: \"\\e89b\";
}
.lnr-line-spacing:before {
\tcontent: \"\\e89c\";
}
.lnr-indent-increase:before {
\tcontent: \"\\e89d\";
}
.lnr-indent-decrease:before {
\tcontent: \"\\e89e\";
}
.lnr-pilcrow:before {
\tcontent: \"\\e89f\";
}
.lnr-direction-ltr:before {
\tcontent: \"\\e8a0\";
}
.lnr-direction-rtl:before {
\tcontent: \"\\e8a1\";
}
.lnr-page-break:before {
\tcontent: \"\\e8a2\";
}
.lnr-sort-alpha-asc:before {
\tcontent: \"\\e8a3\";
}
.lnr-sort-amount-asc:before {
\tcontent: \"\\e8a4\";
}
.lnr-hand:before {
\tcontent: \"\\e8a5\";
}
.lnr-pointer-up:before {
\tcontent: \"\\e8a6\";
}
.lnr-pointer-right:before {
\tcontent: \"\\e8a7\";
}
.lnr-pointer-down:before {
\tcontent: \"\\e8a8\";
}
.lnr-pointer-left:before {
\tcontent: \"\\e8a9\";
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/linericon/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@font-face {
\tfont-family: 'Linearicons-Free';
\tsrc:url('fonts/Linearicons-Free.eot?w118d');
\tsrc:url('fonts/Linearicons-Free.eot?#iefixw118d') format('embedded-opentype'),
\t\turl('fonts/Linearicons-Free.woff2?w118d') format('woff2'),
\t\turl('fonts/Linearicons-Free.woff?w118d') format('woff'),
\t\turl('fonts/Linearicons-Free.ttf?w118d') format('truetype'),
\t\turl('fonts/Linearicons-Free.svg?w118d#Linearicons-Free') format('svg');
\tfont-weight: normal;
\tfont-style: normal;
}

.lnr {
\tfont-family: 'Linearicons-Free';
\tspeak: none;
\tfont-style: normal;
\tfont-weight: normal;
\tfont-variant: normal;
\ttext-transform: none;
\tline-height: 1;

\t/* Better Font Rendering =========== */
\t-webkit-font-smoothing: antialiased;
\t-moz-osx-font-smoothing: grayscale;
}

.lnr-home:before {
\tcontent: \"\\e800\";
}
.lnr-apartment:before {
\tcontent: \"\\e801\";
}
.lnr-pencil:before {
\tcontent: \"\\e802\";
}
.lnr-magic-wand:before {
\tcontent: \"\\e803\";
}
.lnr-drop:before {
\tcontent: \"\\e804\";
}
.lnr-lighter:before {
\tcontent: \"\\e805\";
}
.lnr-poop:before {
\tcontent: \"\\e806\";
}
.lnr-sun:before {
\tcontent: \"\\e807\";
}
.lnr-moon:before {
\tcontent: \"\\e808\";
}
.lnr-cloud:before {
\tcontent: \"\\e809\";
}
.lnr-cloud-upload:before {
\tcontent: \"\\e80a\";
}
.lnr-cloud-download:before {
\tcontent: \"\\e80b\";
}
.lnr-cloud-sync:before {
\tcontent: \"\\e80c\";
}
.lnr-cloud-check:before {
\tcontent: \"\\e80d\";
}
.lnr-database:before {
\tcontent: \"\\e80e\";
}
.lnr-lock:before {
\tcontent: \"\\e80f\";
}
.lnr-cog:before {
\tcontent: \"\\e810\";
}
.lnr-trash:before {
\tcontent: \"\\e811\";
}
.lnr-dice:before {
\tcontent: \"\\e812\";
}
.lnr-heart:before {
\tcontent: \"\\e813\";
}
.lnr-star:before {
\tcontent: \"\\e814\";
}
.lnr-star-half:before {
\tcontent: \"\\e815\";
}
.lnr-star-empty:before {
\tcontent: \"\\e816\";
}
.lnr-flag:before {
\tcontent: \"\\e817\";
}
.lnr-envelope:before {
\tcontent: \"\\e818\";
}
.lnr-paperclip:before {
\tcontent: \"\\e819\";
}
.lnr-inbox:before {
\tcontent: \"\\e81a\";
}
.lnr-eye:before {
\tcontent: \"\\e81b\";
}
.lnr-printer:before {
\tcontent: \"\\e81c\";
}
.lnr-file-empty:before {
\tcontent: \"\\e81d\";
}
.lnr-file-add:before {
\tcontent: \"\\e81e\";
}
.lnr-enter:before {
\tcontent: \"\\e81f\";
}
.lnr-exit:before {
\tcontent: \"\\e820\";
}
.lnr-graduation-hat:before {
\tcontent: \"\\e821\";
}
.lnr-license:before {
\tcontent: \"\\e822\";
}
.lnr-music-note:before {
\tcontent: \"\\e823\";
}
.lnr-film-play:before {
\tcontent: \"\\e824\";
}
.lnr-camera-video:before {
\tcontent: \"\\e825\";
}
.lnr-camera:before {
\tcontent: \"\\e826\";
}
.lnr-picture:before {
\tcontent: \"\\e827\";
}
.lnr-book:before {
\tcontent: \"\\e828\";
}
.lnr-bookmark:before {
\tcontent: \"\\e829\";
}
.lnr-user:before {
\tcontent: \"\\e82a\";
}
.lnr-users:before {
\tcontent: \"\\e82b\";
}
.lnr-shirt:before {
\tcontent: \"\\e82c\";
}
.lnr-store:before {
\tcontent: \"\\e82d\";
}
.lnr-cart:before {
\tcontent: \"\\e82e\";
}
.lnr-tag:before {
\tcontent: \"\\e82f\";
}
.lnr-phone-handset:before {
\tcontent: \"\\e830\";
}
.lnr-phone:before {
\tcontent: \"\\e831\";
}
.lnr-pushpin:before {
\tcontent: \"\\e832\";
}
.lnr-map-marker:before {
\tcontent: \"\\e833\";
}
.lnr-map:before {
\tcontent: \"\\e834\";
}
.lnr-location:before {
\tcontent: \"\\e835\";
}
.lnr-calendar-full:before {
\tcontent: \"\\e836\";
}
.lnr-keyboard:before {
\tcontent: \"\\e837\";
}
.lnr-spell-check:before {
\tcontent: \"\\e838\";
}
.lnr-screen:before {
\tcontent: \"\\e839\";
}
.lnr-smartphone:before {
\tcontent: \"\\e83a\";
}
.lnr-tablet:before {
\tcontent: \"\\e83b\";
}
.lnr-laptop:before {
\tcontent: \"\\e83c\";
}
.lnr-laptop-phone:before {
\tcontent: \"\\e83d\";
}
.lnr-power-switch:before {
\tcontent: \"\\e83e\";
}
.lnr-bubble:before {
\tcontent: \"\\e83f\";
}
.lnr-heart-pulse:before {
\tcontent: \"\\e840\";
}
.lnr-construction:before {
\tcontent: \"\\e841\";
}
.lnr-pie-chart:before {
\tcontent: \"\\e842\";
}
.lnr-chart-bars:before {
\tcontent: \"\\e843\";
}
.lnr-gift:before {
\tcontent: \"\\e844\";
}
.lnr-diamond:before {
\tcontent: \"\\e845\";
}
.lnr-linearicons:before {
\tcontent: \"\\e846\";
}
.lnr-dinner:before {
\tcontent: \"\\e847\";
}
.lnr-coffee-cup:before {
\tcontent: \"\\e848\";
}
.lnr-leaf:before {
\tcontent: \"\\e849\";
}
.lnr-paw:before {
\tcontent: \"\\e84a\";
}
.lnr-rocket:before {
\tcontent: \"\\e84b\";
}
.lnr-briefcase:before {
\tcontent: \"\\e84c\";
}
.lnr-bus:before {
\tcontent: \"\\e84d\";
}
.lnr-car:before {
\tcontent: \"\\e84e\";
}
.lnr-train:before {
\tcontent: \"\\e84f\";
}
.lnr-bicycle:before {
\tcontent: \"\\e850\";
}
.lnr-wheelchair:before {
\tcontent: \"\\e851\";
}
.lnr-select:before {
\tcontent: \"\\e852\";
}
.lnr-earth:before {
\tcontent: \"\\e853\";
}
.lnr-smile:before {
\tcontent: \"\\e854\";
}
.lnr-sad:before {
\tcontent: \"\\e855\";
}
.lnr-neutral:before {
\tcontent: \"\\e856\";
}
.lnr-mustache:before {
\tcontent: \"\\e857\";
}
.lnr-alarm:before {
\tcontent: \"\\e858\";
}
.lnr-bullhorn:before {
\tcontent: \"\\e859\";
}
.lnr-volume-high:before {
\tcontent: \"\\e85a\";
}
.lnr-volume-medium:before {
\tcontent: \"\\e85b\";
}
.lnr-volume-low:before {
\tcontent: \"\\e85c\";
}
.lnr-volume:before {
\tcontent: \"\\e85d\";
}
.lnr-mic:before {
\tcontent: \"\\e85e\";
}
.lnr-hourglass:before {
\tcontent: \"\\e85f\";
}
.lnr-undo:before {
\tcontent: \"\\e860\";
}
.lnr-redo:before {
\tcontent: \"\\e861\";
}
.lnr-sync:before {
\tcontent: \"\\e862\";
}
.lnr-history:before {
\tcontent: \"\\e863\";
}
.lnr-clock:before {
\tcontent: \"\\e864\";
}
.lnr-download:before {
\tcontent: \"\\e865\";
}
.lnr-upload:before {
\tcontent: \"\\e866\";
}
.lnr-enter-down:before {
\tcontent: \"\\e867\";
}
.lnr-exit-up:before {
\tcontent: \"\\e868\";
}
.lnr-bug:before {
\tcontent: \"\\e869\";
}
.lnr-code:before {
\tcontent: \"\\e86a\";
}
.lnr-link:before {
\tcontent: \"\\e86b\";
}
.lnr-unlink:before {
\tcontent: \"\\e86c\";
}
.lnr-thumbs-up:before {
\tcontent: \"\\e86d\";
}
.lnr-thumbs-down:before {
\tcontent: \"\\e86e\";
}
.lnr-magnifier:before {
\tcontent: \"\\e86f\";
}
.lnr-cross:before {
\tcontent: \"\\e870\";
}
.lnr-menu:before {
\tcontent: \"\\e871\";
}
.lnr-list:before {
\tcontent: \"\\e872\";
}
.lnr-chevron-up:before {
\tcontent: \"\\e873\";
}
.lnr-chevron-down:before {
\tcontent: \"\\e874\";
}
.lnr-chevron-left:before {
\tcontent: \"\\e875\";
}
.lnr-chevron-right:before {
\tcontent: \"\\e876\";
}
.lnr-arrow-up:before {
\tcontent: \"\\e877\";
}
.lnr-arrow-down:before {
\tcontent: \"\\e878\";
}
.lnr-arrow-left:before {
\tcontent: \"\\e879\";
}
.lnr-arrow-right:before {
\tcontent: \"\\e87a\";
}
.lnr-move:before {
\tcontent: \"\\e87b\";
}
.lnr-warning:before {
\tcontent: \"\\e87c\";
}
.lnr-question-circle:before {
\tcontent: \"\\e87d\";
}
.lnr-menu-circle:before {
\tcontent: \"\\e87e\";
}
.lnr-checkmark-circle:before {
\tcontent: \"\\e87f\";
}
.lnr-cross-circle:before {
\tcontent: \"\\e880\";
}
.lnr-plus-circle:before {
\tcontent: \"\\e881\";
}
.lnr-circle-minus:before {
\tcontent: \"\\e882\";
}
.lnr-arrow-up-circle:before {
\tcontent: \"\\e883\";
}
.lnr-arrow-down-circle:before {
\tcontent: \"\\e884\";
}
.lnr-arrow-left-circle:before {
\tcontent: \"\\e885\";
}
.lnr-arrow-right-circle:before {
\tcontent: \"\\e886\";
}
.lnr-chevron-up-circle:before {
\tcontent: \"\\e887\";
}
.lnr-chevron-down-circle:before {
\tcontent: \"\\e888\";
}
.lnr-chevron-left-circle:before {
\tcontent: \"\\e889\";
}
.lnr-chevron-right-circle:before {
\tcontent: \"\\e88a\";
}
.lnr-crop:before {
\tcontent: \"\\e88b\";
}
.lnr-frame-expand:before {
\tcontent: \"\\e88c\";
}
.lnr-frame-contract:before {
\tcontent: \"\\e88d\";
}
.lnr-layers:before {
\tcontent: \"\\e88e\";
}
.lnr-funnel:before {
\tcontent: \"\\e88f\";
}
.lnr-text-format:before {
\tcontent: \"\\e890\";
}
.lnr-text-format-remove:before {
\tcontent: \"\\e891\";
}
.lnr-text-size:before {
\tcontent: \"\\e892\";
}
.lnr-bold:before {
\tcontent: \"\\e893\";
}
.lnr-italic:before {
\tcontent: \"\\e894\";
}
.lnr-underline:before {
\tcontent: \"\\e895\";
}
.lnr-strikethrough:before {
\tcontent: \"\\e896\";
}
.lnr-highlight:before {
\tcontent: \"\\e897\";
}
.lnr-text-align-left:before {
\tcontent: \"\\e898\";
}
.lnr-text-align-center:before {
\tcontent: \"\\e899\";
}
.lnr-text-align-right:before {
\tcontent: \"\\e89a\";
}
.lnr-text-align-justify:before {
\tcontent: \"\\e89b\";
}
.lnr-line-spacing:before {
\tcontent: \"\\e89c\";
}
.lnr-indent-increase:before {
\tcontent: \"\\e89d\";
}
.lnr-indent-decrease:before {
\tcontent: \"\\e89e\";
}
.lnr-pilcrow:before {
\tcontent: \"\\e89f\";
}
.lnr-direction-ltr:before {
\tcontent: \"\\e8a0\";
}
.lnr-direction-rtl:before {
\tcontent: \"\\e8a1\";
}
.lnr-page-break:before {
\tcontent: \"\\e8a2\";
}
.lnr-sort-alpha-asc:before {
\tcontent: \"\\e8a3\";
}
.lnr-sort-amount-asc:before {
\tcontent: \"\\e8a4\";
}
.lnr-hand:before {
\tcontent: \"\\e8a5\";
}
.lnr-pointer-up:before {
\tcontent: \"\\e8a6\";
}
.lnr-pointer-right:before {
\tcontent: \"\\e8a7\";
}
.lnr-pointer-down:before {
\tcontent: \"\\e8a8\";
}
.lnr-pointer-left:before {
\tcontent: \"\\e8a9\";
}
", "vendors/linericon/style.css", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\linericon\\style.css");
    }
}
