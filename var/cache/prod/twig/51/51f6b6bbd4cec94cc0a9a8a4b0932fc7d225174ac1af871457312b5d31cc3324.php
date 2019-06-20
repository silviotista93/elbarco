<?php

/* __string_template__d0bcce680cb56063a321961e5eda6c30a0e049f6d3abdd4644e0fb410ff9d804 */
class __TwigTemplate_d2cad8e19baf57a820a6930449a013d878fd438688ada31074cb1ea6480159c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"cb\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/elbarco/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/elbarco/img/app_icon.png\" />

<title>Productos • EL BARCO DEL PELUQUERO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'cb';
    var lang_is_rtl = '0';
    var full_language_code = 'es-co';
    var full_cldr_language_code = 'es-CO';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Un cliente ha realizado un pedido en el Front Office. ';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en su tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje fue enviado en su tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'f852446dac188888333bd3815c171006';
    var token_admin_orders = '4462aa09be4ac47660f28791e3f81963';
    var token_admin_customers = '628f33a3171e115172df041fb5f27434';
    var token_admin_customer_threads = 'b25115f756a3a807982134f0ea1cafb4';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '039eaf0a21516d40959d373a0991e2b0';
    var choose_language_translate = 'Elige idioma';
    var default_language = '2';
    var admin_modules_link = '/elbarco/elbarcoad/index.php/improve/modules/catalog/recommended?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Actualización exitosa';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons.  Por favor verifique sus datos de acceso y su conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/elbarco/elbarcoad/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/elbarco/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/elbarco/elbarcoad/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/elbarco\\/elbarcoad\\/\";
var baseDir = \"\\/elbarco\\/\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"peso colombiano\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/elbarco/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/elbarcoad/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/elbarco/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/elbarco/elbarcoad/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/elbarco/elbarcoad/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 74
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-cb adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminDashboard&amp;token=d9cf0bd394a3234fbb58f298b54d0938\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=845daebba263e78fa4cd7c73aab581e2\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php/improve/modules/manage?token=3bf716132327e97b144cf1a473b9decf\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCategories&amp;addcategory&amp;token=657a000f2731fbebb7826856c1cc2f33\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=be3e406e1a0c1a34634752af42cdc1c7\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php/sell/catalog/products/new?token=3bf716132327e97b144cf1a473b9decf\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminOrders&amp;token=4462aa09be4ac47660f28791e3f81963\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=38edbd15c9c0bf7e4985502b3c070820\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"45\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products?-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\"
        data-post-link=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminQuickAccesses&token=a4998336a12d3233ed1e6598c730034c\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminQuickAccesses&token=a4998336a12d3233ed1e6598c730034c\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/elbarco/elbarcoad/index.php?controller=AdminSearch&amp;token=2b547ab2612870e0aa1f94434e10d1c2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué busca?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Correo, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:5050/elbarco/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver tienda
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ede76b42d3af125e9292440641318a50\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Te has planteado vender en marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              ¡Eso significa más tiempo para otras cosas!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/elbarcodelpeluquero11%40gmail.com.jpg\" />
      <span>El Barco</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=039eaf0a21516d40959d373a0991e2b0\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminLogin&amp;logout=1&amp;token=97d27c08fbe9a5ffba97694a0d324d33\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminDashboard&amp;token=d9cf0bd394a3234fbb58f298b54d0938\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tablero</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminOrders&amp;token=4462aa09be4ac47660f28791e3f81963\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminOrders&amp;token=4462aa09be4ac47660f28791e3f81963\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/elbarco/elbarcoad/index.php/sell/orders/invoices/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminSlip&amp;token=2aaedf4b19940a364a4a9bede4d61b70\" class=\"link\"> Notas Crédito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/elbarco/elbarcoad/index.php/sell/orders/delivery-slips/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Remisiones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCarts&amp;token=ede76b42d3af125e9292440641318a50\" class=\"link\"> Carritos de Compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/elbarco/elbarcoad/index.php/sell/catalog/products?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/elbarco/elbarcoad/index.php/sell/catalog/products?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCategories&amp;token=657a000f2731fbebb7826856c1cc2f33\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminTracking&amp;token=f0306907a11b4d0542514d175c4e1261\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminAttributesGroups&amp;token=00cd10febeda47a99b1c720460ecf28d\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminManufacturers&amp;token=3fece7a673bbcbc24a9809bb98e9edd1\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminAttachments&amp;token=bdeb15f80854d4444e66ace74d23ff4a\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCartRules&amp;token=be3e406e1a0c1a34634752af42cdc1c7\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/elbarco/elbarcoad/index.php/sell/stocks/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCustomers&amp;token=628f33a3171e115172df041fb5f27434\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCustomers&amp;token=628f33a3171e115172df041fb5f27434\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminAddresses&amp;token=39f08022726950a0e506198b45b18e7b\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCustomerThreads&amp;token=b25115f756a3a807982134f0ea1cafb4\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCustomerThreads&amp;token=b25115f756a3a807982134f0ea1cafb4\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminOrderMessage&amp;token=4007a5cf02e929b0b6cd9e3e828c544f\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminReturn&amp;token=e15705cd0af2200a2b988878f177f00e\" class=\"link\"> Devoluciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminStats&amp;token=845daebba263e78fa4cd7c73aab581e2\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminPsMboModule&amp;token=113563d5b074babc0707d75d69a6b0ee\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminPsMboModule&amp;token=113563d5b074babc0707d75d69a6b0ee\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/modules/manage?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminThemes&amp;token=e499feeb75b5278e550592ebf1a3a39d\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminThemes&amp;token=e499feeb75b5278e550592ebf1a3a39d\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminPsMboTheme&amp;token=c7f301c029f4ca28a2db333fb4247999\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCmsContent&amp;token=4f7d7975048680758cc5212ccbc22b91\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/design/modules/positions/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminImages&amp;token=6bf81b796a3222d54d6ce3b1694d1010\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminLinkWidget&amp;token=38949db6f9a79c91b6655231498828b4\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCarriers&amp;token=5ff24649a238fd6985956f26126e0a0d\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminCarriers&amp;token=5ff24649a238fd6985956f26126e0a0d\" class=\"link\"> Transportadoras
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/shipping/preferences?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/elbarco/elbarcoad/index.php/improve/payment/payment_methods?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/payment/payment_methods?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/payment/preferences?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/elbarco/elbarcoad/index.php/improve/international/localization/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/international/localization/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminZones&amp;token=6f9691b347048339f5b457b86156253f\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminTaxes&amp;token=6dba72d3be784f7f49105d02acce081e\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/elbarco/elbarcoad/index.php/improve/international/translations/settings?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"137\" id=\"subtab-Adminxprtdashboard\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=Adminxippost&amp;token=31db2503effa52ba3062c0f85a780e1b\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Xpert Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-137\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"138\" id=\"subtab-Adminxippost\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=Adminxippost&amp;token=31db2503effa52ba3062c0f85a780e1b\" class=\"link\"> Blog Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-Adminxipcategory\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=Adminxipcategory&amp;token=3b058f5ea0865e0881d8c7c27f39025d\" class=\"link\"> Blog Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-Adminxipcomment\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=Adminxipcomment&amp;token=bf1754aa42b120af4f563d9bcf7a1e97\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-Adminxipimagetype\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=Adminxipimagetype&amp;token=59de985432ace3b4c6a8ef144a638ac2\" class=\"link\"> Blog Image Type
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/elbarco/elbarcoad/index.php/configure/shop/preferences/preferences?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/shop/preferences/preferences?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/shop/order-preferences/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/shop/product-preferences/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/shop/customer-preferences/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminContacts&amp;token=d57fc43d5f0b31950c5a348cfc136054\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/shop/seo-urls/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminSearchConf&amp;token=697e72f0106aac44aa4401045f74ad9f\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminGamification&amp;token=5eb089cce23526cafc0f223a5ba94a5a\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/system-information/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/system-information/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/performance/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/administration/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/emails/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Correo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/import/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminEmployees&amp;token=039eaf0a21516d40959d373a0991e2b0\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminRequestSql&amp;token=6e2af62a7dc3111eefa05368d0d90635\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/elbarco/elbarcoad/index.php/configure/advanced/logs/?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" class=\"link\"> Registros
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminWebservice&amp;token=d787a6489b3fa27a1bf431ef54b4004c\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"132\" id=\"tab-AdminPosMenu\">
              <span class=\"title\">PosExtentions</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"133\" id=\"subtab-AdminPosLogo\">
                  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminPosLogo&amp;token=6abeedd0cf458bf02b1dd82b71675ae6\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Manage Logo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catálogo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/elbarco/elbarcoad/index.php/sell/catalog/products?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\" aria-current=\"page\">Productos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Productos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminPsMboModule&token=113563d5b074babc0707d75d69a6b0ee';
    var controller = 'AdminProducts';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/elbarco/elbarcoad/index.php/sell/catalog/products/new?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\"                  title=\"Crear un nuevo producto: CTRL + P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>
                  Nuevo producto
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/elbarco/elbarcoad/index.php/improve/modules/catalog?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/elbarco/elbarcoad/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fcb%252Fdoc%252FAdminProducts%253Fversion%253D1.7.5.2%2526country%253Dcb/Ayuda?_token=hEUJd6zDkOuM-t8EZVL4MV5E1TkadgiazTNQX_CrcGg\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1191
        $this->displayBlock('content_header', $context, $blocks);
        // line 1192
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1193
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1194
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1195
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos y Servicios recomendados</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:5050/elbarco/elbarcoad/index.php?controller=AdminDashboard&amp;token=d9cf0bd394a3234fbb58f298b54d0938\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Volver
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-CB&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/cb/login?email=elbarcodelpeluquero11%40gmail.com&amp;firstname=El&amp;lastname=Barco&amp;website=http%3A%2F%2Flocalhost%3A5050%2Felbarco%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-CB&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/elbarco/elbarcoad/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tiene una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/cb/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/cb/login?email=elbarcodelpeluquero11%40gmail.com&amp;firstname=El&amp;lastname=Barco&amp;website=http%3A%2F%2Flocalhost%3A5050%2Felbarco%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-CB&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1318
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 74
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1191
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1192
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1193
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1194
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1318
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__d0bcce680cb56063a321961e5eda6c30a0e049f6d3abdd4644e0fb410ff9d804";
    }

    public function getDebugInfo()
    {
        return array (  1397 => 1318,  1392 => 1194,  1387 => 1193,  1382 => 1192,  1377 => 1191,  1368 => 74,  1360 => 1318,  1235 => 1195,  1232 => 1194,  1229 => 1193,  1226 => 1192,  1224 => 1191,  103 => 74,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d0bcce680cb56063a321961e5eda6c30a0e049f6d3abdd4644e0fb410ff9d804", "");
    }
}
