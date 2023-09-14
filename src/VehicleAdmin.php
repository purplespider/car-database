<?php

namespace PurpleSpider\CarDatabase;

use PurpleSpider\CarDatabase\Vehicle;
use SilverStripe\Admin\ModelAdmin;

class VehicleAdmin extends ModelAdmin
{

    private static $managed_models = array(
        Vehicle::class => array('title' => 'Vehicles')
    );

    private static $url_segment = 'vehicles';
    private static $menu_title = 'Vehicles';
    private static $menu_icon_class = 'font-icon-dashboard';
}
