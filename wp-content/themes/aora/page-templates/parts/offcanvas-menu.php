<?php 
    $location = 'mobile-menu';
    $tbay_location  = '';
    if ( has_nav_menu( $location ) ) {
        $tbay_location = $location;
    }

    $menu_mobile_select    =  aora_tbay_get_config('menu_mobile_select');
?>
  


<div id="tbay-mobile-menu" class="tbay-offcanvas d-xl-none"> 
    <div class="tbay-offcanvas-body">

        <div class="offcanvas-head">
            <button type="button" class="btn btn-toggle-canvas btn-danger" data-toggle="offcanvas">x</button>
        </div>
        

        <nav id="tbay-mobile-menu-navbar-treeview" class="navbar navbar-offcanvas navbar-static">
            <?php


                $args = array(
                    'fallback_cb' => '',
                );

                if( empty($menu_mobile_select) ) {
                    $args['theme_location']     = $tbay_location;
                } else {
                    $args['menu']               = $menu_mobile_select;
                }

                $args['menu_class']         =   'menu treeview nav navbar-nav';
                $args['container_class']    =   'navbar-collapse navbar-offcanvas-collapse';
                $args['menu_id']            =   'main-mobile-menu';
                $args['walker']             =   new Aora_Tbay_Nav_Menu();

                wp_nav_menu($args);
            ?>
        </nav>


    </div>
</div>