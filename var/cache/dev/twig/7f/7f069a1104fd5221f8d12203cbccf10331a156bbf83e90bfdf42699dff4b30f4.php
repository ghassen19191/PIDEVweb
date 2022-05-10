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

/* vendors/lightbox/simpleLightbox.min.js */
class __TwigTemplate_3bf62da9689ddd5be5019607b75cd0c1d0567c7e45c6eb397a1d1d1faa7515ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/lightbox/simpleLightbox.min.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/lightbox/simpleLightbox.min.js"));

        // line 1
        echo "!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=a(require(\"jquery\")):a(jQuery)}(function(a){function b(a){this.init.apply(this,arguments)}var c=0,d=a(\"html\"),e=a(document),f=a(window);return b.defaults={elementClass:\"\",elementLoadingClass:\"slbLoading\",htmlClass:\"slbActive\",closeBtnClass:\"\",nextBtnClass:\"\",prevBtnClass:\"\",loadingTextClass:\"\",closeBtnCaption:\"Close\",nextBtnCaption:\"Next\",prevBtnCaption:\"Previous\",loadingCaption:\"Loading...\",bindToItems:!0,closeOnOverlayClick:!0,closeOnEscapeKey:!0,nextOnImageClick:!0,showCaptions:!0,captionAttribute:\"title\",urlAttribute:\"href\",startAt:0,loadingTimeout:100,appendTarget:\"body\",beforeSetContent:null,beforeClose:null,beforeDestroy:null,videoRegex:new RegExp(/youtube.com|vimeo.com/)},a.extend(b.prototype,{init:function(d){this.options=a.extend({},b.defaults,d),this.ens=\".slb\"+ ++c,this.items=[],this.captions=[];var e=this;this.options.\$items?(this.\$items=this.options.\$items,this.\$items.each(function(){var b=a(this);e.items.push(b.attr(e.options.urlAttribute)),e.captions.push(b.attr(e.options.captionAttribute))}),this.options.bindToItems&&this.\$items.on(\"click\"+this.ens,function(b){b.preventDefault(),e.showPosition(e.\$items.index(a(b.currentTarget)))})):this.options.items&&(this.items=this.options.items),this.options.captions&&(this.captions=this.options.captions)},next:function(){return this.showPosition(this.currentPosition+1)},prev:function(){return this.showPosition(this.currentPosition-1)},normalizePosition:function(a){return a>=this.items.length?a=0:a<0&&(a=this.items.length-1),a},showPosition:function(a){return this.currentPosition=this.normalizePosition(a),this.setupLightboxHtml().prepareItem(this.currentPosition,this.setContent).show()},loading:function(a){var b=this;a?this.loadingTimeout=setTimeout(function(){b.\$el.addClass(b.options.elementLoadingClass),b.\$content.html('<p class=\"slbLoadingText '+b.options.loadingTextClass+'\">'+b.options.loadingCaption+\"</p>\"),b.show()},this.options.loadingTimeout):(this.\$el&&this.\$el.removeClass(this.options.elementLoadingClass),clearTimeout(this.loadingTimeout))},prepareItem:function(b,c){var d=this,e=this.items[b];if(this.loading(!0),this.options.videoRegex.test(e))c.call(d,a('<div class=\"slbIframeCont\"><iframe class=\"slbIframe\" frameborder=\"0\" allowfullscreen src=\"'+e+'\"></iframe></div>'));else{var f=a('<div class=\"slbImageWrap\"><img class=\"slbImage\" src=\"'+e+'\" /></div>');this.\$currentImage=f.find(\".slbImage\"),this.options.showCaptions&&this.captions[b]&&f.append('<div class=\"slbCaption\">'+this.captions[b]+\"</div>\"),this.loadImage(e,function(){d.setImageDimensions(),c.call(d,f),d.loadImage(d.items[d.normalizePosition(d.currentPosition+1)])})}return this},loadImage:function(a,b){if(!this.options.videoRegex.test(a)){var c=new Image;b&&(c.onload=b),c.src=a}},setupLightboxHtml:function(){var b=this.options;return this.\$el||(this.\$el=a('<div class=\"slbElement '+b.elementClass+'\"><div class=\"slbOverlay\"></div><div class=\"slbWrapOuter\"><div class=\"slbWrap\"><div class=\"slbContentOuter\"><div class=\"slbContent\"></div><button type=\"button\" title=\"'+b.closeBtnCaption+'\" class=\"slbCloseBtn '+b.closeBtnClass+'\">×</button></div></div></div></div>'),this.items.length>1&&a('<div class=\"slbArrows\"><button type=\"button\" title=\"'+b.prevBtnCaption+'\" class=\"prev slbArrow'+b.prevBtnClass+'\">'+b.prevBtnCaption+'</button><button type=\"button\" title=\"'+b.nextBtnCaption+'\" class=\"next slbArrow'+b.nextBtnClass+'\">'+b.nextBtnCaption+\"</button></div>\").appendTo(this.\$el.find(\".slbContentOuter\")),this.\$content=this.\$el.find(\".slbContent\")),this.\$content.empty(),this},show:function(){return this.modalInDom||(this.\$el.appendTo(a(this.options.appendTarget)),d.addClass(this.options.htmlClass),this.setupLightboxEvents(),this.modalInDom=!0),this},setContent:function(b){var c=a(b);return this.loading(!1),this.setupLightboxHtml(),this.options.beforeSetContent&&this.options.beforeSetContent(c,this),this.\$content.html(c),this},setImageDimensions:function(){this.\$currentImage&&this.\$currentImage.css(\"max-height\",f.height()+\"px\")},setupLightboxEvents:function(){var b=this;this.lightboxEventsSetuped||(this.\$el.on(\"click\"+this.ens,function(c){var d=a(c.target);d.is(\".slbCloseBtn\")||b.options.closeOnOverlayClick&&d.is(\".slbWrap\")?b.close():d.is(\".slbArrow\")?d.hasClass(\"next\")?b.next():b.prev():b.options.nextOnImageClick&&b.items.length>1&&d.is(\".slbImage\")&&b.next()}),e.on(\"keyup\"+this.ens,function(a){b.options.closeOnEscapeKey&&27===a.keyCode&&b.close(),b.items.length>1&&((39===a.keyCode||68===a.keyCode)&&b.next(),(37===a.keyCode||65===a.keyCode)&&b.prev())}),f.on(\"resize\"+this.ens,function(){b.setImageDimensions()}),this.lightboxEventsSetuped=!0)},close:function(){this.modalInDom&&(this.options.beforeClose&&this.options.beforeClose(this),this.\$el&&this.\$el.off(this.ens),e.off(this.ens),f.off(this.ens),this.lightboxEventsSetuped=!1,this.\$el.detach(),d.removeClass(this.options.htmlClass),this.modalInDom=!1)},destroy:function(){this.close(),this.options.beforeDestroy&&this.options.beforeDestroy(this),this.\$items&&this.\$items.off(this.ens),this.\$el&&this.\$el.remove()}}),b.open=function(a){var c=new b(a);return a.content?c.setContent(a.content).show():c.showPosition(c.options.startAt)},a.fn.simpleLightbox=function(c){var d,e=this;return this.each(function(){a.data(this,\"simpleLightbox\")||(d=d||new b(a.extend({},c,{\$items:e})),a.data(this,\"simpleLightbox\",d))})},a.simpleLightbox=a.SimpleLightbox=b,a});";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/lightbox/simpleLightbox.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=a(require(\"jquery\")):a(jQuery)}(function(a){function b(a){this.init.apply(this,arguments)}var c=0,d=a(\"html\"),e=a(document),f=a(window);return b.defaults={elementClass:\"\",elementLoadingClass:\"slbLoading\",htmlClass:\"slbActive\",closeBtnClass:\"\",nextBtnClass:\"\",prevBtnClass:\"\",loadingTextClass:\"\",closeBtnCaption:\"Close\",nextBtnCaption:\"Next\",prevBtnCaption:\"Previous\",loadingCaption:\"Loading...\",bindToItems:!0,closeOnOverlayClick:!0,closeOnEscapeKey:!0,nextOnImageClick:!0,showCaptions:!0,captionAttribute:\"title\",urlAttribute:\"href\",startAt:0,loadingTimeout:100,appendTarget:\"body\",beforeSetContent:null,beforeClose:null,beforeDestroy:null,videoRegex:new RegExp(/youtube.com|vimeo.com/)},a.extend(b.prototype,{init:function(d){this.options=a.extend({},b.defaults,d),this.ens=\".slb\"+ ++c,this.items=[],this.captions=[];var e=this;this.options.\$items?(this.\$items=this.options.\$items,this.\$items.each(function(){var b=a(this);e.items.push(b.attr(e.options.urlAttribute)),e.captions.push(b.attr(e.options.captionAttribute))}),this.options.bindToItems&&this.\$items.on(\"click\"+this.ens,function(b){b.preventDefault(),e.showPosition(e.\$items.index(a(b.currentTarget)))})):this.options.items&&(this.items=this.options.items),this.options.captions&&(this.captions=this.options.captions)},next:function(){return this.showPosition(this.currentPosition+1)},prev:function(){return this.showPosition(this.currentPosition-1)},normalizePosition:function(a){return a>=this.items.length?a=0:a<0&&(a=this.items.length-1),a},showPosition:function(a){return this.currentPosition=this.normalizePosition(a),this.setupLightboxHtml().prepareItem(this.currentPosition,this.setContent).show()},loading:function(a){var b=this;a?this.loadingTimeout=setTimeout(function(){b.\$el.addClass(b.options.elementLoadingClass),b.\$content.html('<p class=\"slbLoadingText '+b.options.loadingTextClass+'\">'+b.options.loadingCaption+\"</p>\"),b.show()},this.options.loadingTimeout):(this.\$el&&this.\$el.removeClass(this.options.elementLoadingClass),clearTimeout(this.loadingTimeout))},prepareItem:function(b,c){var d=this,e=this.items[b];if(this.loading(!0),this.options.videoRegex.test(e))c.call(d,a('<div class=\"slbIframeCont\"><iframe class=\"slbIframe\" frameborder=\"0\" allowfullscreen src=\"'+e+'\"></iframe></div>'));else{var f=a('<div class=\"slbImageWrap\"><img class=\"slbImage\" src=\"'+e+'\" /></div>');this.\$currentImage=f.find(\".slbImage\"),this.options.showCaptions&&this.captions[b]&&f.append('<div class=\"slbCaption\">'+this.captions[b]+\"</div>\"),this.loadImage(e,function(){d.setImageDimensions(),c.call(d,f),d.loadImage(d.items[d.normalizePosition(d.currentPosition+1)])})}return this},loadImage:function(a,b){if(!this.options.videoRegex.test(a)){var c=new Image;b&&(c.onload=b),c.src=a}},setupLightboxHtml:function(){var b=this.options;return this.\$el||(this.\$el=a('<div class=\"slbElement '+b.elementClass+'\"><div class=\"slbOverlay\"></div><div class=\"slbWrapOuter\"><div class=\"slbWrap\"><div class=\"slbContentOuter\"><div class=\"slbContent\"></div><button type=\"button\" title=\"'+b.closeBtnCaption+'\" class=\"slbCloseBtn '+b.closeBtnClass+'\">×</button></div></div></div></div>'),this.items.length>1&&a('<div class=\"slbArrows\"><button type=\"button\" title=\"'+b.prevBtnCaption+'\" class=\"prev slbArrow'+b.prevBtnClass+'\">'+b.prevBtnCaption+'</button><button type=\"button\" title=\"'+b.nextBtnCaption+'\" class=\"next slbArrow'+b.nextBtnClass+'\">'+b.nextBtnCaption+\"</button></div>\").appendTo(this.\$el.find(\".slbContentOuter\")),this.\$content=this.\$el.find(\".slbContent\")),this.\$content.empty(),this},show:function(){return this.modalInDom||(this.\$el.appendTo(a(this.options.appendTarget)),d.addClass(this.options.htmlClass),this.setupLightboxEvents(),this.modalInDom=!0),this},setContent:function(b){var c=a(b);return this.loading(!1),this.setupLightboxHtml(),this.options.beforeSetContent&&this.options.beforeSetContent(c,this),this.\$content.html(c),this},setImageDimensions:function(){this.\$currentImage&&this.\$currentImage.css(\"max-height\",f.height()+\"px\")},setupLightboxEvents:function(){var b=this;this.lightboxEventsSetuped||(this.\$el.on(\"click\"+this.ens,function(c){var d=a(c.target);d.is(\".slbCloseBtn\")||b.options.closeOnOverlayClick&&d.is(\".slbWrap\")?b.close():d.is(\".slbArrow\")?d.hasClass(\"next\")?b.next():b.prev():b.options.nextOnImageClick&&b.items.length>1&&d.is(\".slbImage\")&&b.next()}),e.on(\"keyup\"+this.ens,function(a){b.options.closeOnEscapeKey&&27===a.keyCode&&b.close(),b.items.length>1&&((39===a.keyCode||68===a.keyCode)&&b.next(),(37===a.keyCode||65===a.keyCode)&&b.prev())}),f.on(\"resize\"+this.ens,function(){b.setImageDimensions()}),this.lightboxEventsSetuped=!0)},close:function(){this.modalInDom&&(this.options.beforeClose&&this.options.beforeClose(this),this.\$el&&this.\$el.off(this.ens),e.off(this.ens),f.off(this.ens),this.lightboxEventsSetuped=!1,this.\$el.detach(),d.removeClass(this.options.htmlClass),this.modalInDom=!1)},destroy:function(){this.close(),this.options.beforeDestroy&&this.options.beforeDestroy(this),this.\$items&&this.\$items.off(this.ens),this.\$el&&this.\$el.remove()}}),b.open=function(a){var c=new b(a);return a.content?c.setContent(a.content).show():c.showPosition(c.options.startAt)},a.fn.simpleLightbox=function(c){var d,e=this;return this.each(function(){a.data(this,\"simpleLightbox\")||(d=d||new b(a.extend({},c,{\$items:e})),a.data(this,\"simpleLightbox\",d))})},a.simpleLightbox=a.SimpleLightbox=b,a});", "vendors/lightbox/simpleLightbox.min.js", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\lightbox\\simpleLightbox.min.js");
    }
}