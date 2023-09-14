<?php

namespace PurpleSpider\CarDatabase;

use Page;
use PurpleSpider\CarDatabase\Vehicle;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\EmailField;

class VehicleHoldingPage extends Page
{
	private static $table_name = 'VehicleHoldingPage';
	private static $icon_class = 'font-icon-p-list';

	private static $db = [
		'EnquiryEmail' => 'Text'
	];

	// Only allow one VehicleHoldingPage to exist at once
	function canCreate($member = null, $context = array())
	{
		return !DataObject::get_one($this->ClassName);
	}

	function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Main", EmailField::create('EnquiryEmail', 'Enquiry Form Email'), 'Content');
		return $fields;
	}

	public function AvailableVehicles()
	{
		return Vehicle::get()->filter('Available', true);
	}

	function getDisplayForm()
	{
		// if ($this->config()->exists('enable_form')) {
		return $this->config()->get('enable_form');
		// }
		// return true;
	}
}
