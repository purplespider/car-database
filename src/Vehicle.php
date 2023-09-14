<?php

namespace PurpleSpider\CarDatabase;

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\RequiredFields;

class Vehicle extends DataObject
{

    private static $db = [
        'Available' => 'Boolean',
        'Title' => 'Varchar(255)',
        'Overview' => 'Text',
        'Type' => "Enum('Saloon,Estate,SUV,Minibus','Saloon')",
        'Seats' => 'Int',
        'Doors' => 'Int',
        'Transmission' => "Enum('Manual,Automatic','Manual')",
        'Suitcases' => 'Int',
    ];

    private static $has_one = [
        "PrimaryImage" => Image::class,
    ];

    private static $owns = [
        "PrimaryImage",
    ];

    private static $defaults = [
        'Available' => true,
    ];

    private static $summary_fields = [
        "CMSThumb" => "",
        "Title" => "Name",
        "Type" => "Type",
        "Transmission" => "Transmission",
        "Seats" => "Seats",
        "Doors" => "Doors",
        "Suitcases" => "Suitcases",

    ];

    private static $default_sort = "Title ASC";
    private static $table_name = "Vehicle";

    // function getCMSFields() {

    //     $fields = FieldList::create(
    //         TextField::create('Title')
    //     );
    //     return $fields;		
    // }

    function getCMSValidator()
    {
        return new RequiredFields(array('Title'));
    }

    public function EnquiryLink()
    {
        return VehicleHoldingPage::get()->First()->Link('enquire/' . $this->ID);
    }

    function getCMSThumb()
    {
        return $this->PrimaryImageID ? $this->PrimaryImage()->Fill(70, 50) : false;
    }

    function canCreate($member = null, $context = array())
    {
        return true;
    }

    function canEdit($members = null)
    {
        return true;
    }

    function canDelete($members = null)
    {
        return true;
    }

    function canView($members = null)
    {
        return true;
    }
}
