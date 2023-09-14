<?php

namespace PurpleSpider\CarDatabase;

use PageController;
use SilverStripe\Forms\Form;
use PurpleSpider\CarDatabase\Vehicle;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Control\HTTPRequest;

class VehicleHoldingPageController extends PageController
{

	private static $allowed_actions = [
		'enquire',
		'EnquiryForm'
	];

	public function enquire(HTTPRequest $request)
	{
		$vehicle = Vehicle::get()->byID($request->param('ID'));

		if (!$vehicle) {
			return $this->httpError(404, 'That vehicle could not be found');
		}

		return [
			'Vehicle' => $vehicle,
			'IsEnquiry' => true,
		];
	}

	public function EnquiryForm()
	{
		$fields = FieldList::create(
			TextField::create('Name', 'Name'),
			EmailField::create('Email', 'Email Address'),
			DateField::create('PickupDate', 'Pickup Date'),
			DateField::create('ReturnDate', 'Return Date'),
		);

		$actions = FieldList::create(
			FormAction::create('doEnquiryForm')->setTitle('Send')
		);

		$form = Form::create($this, __FUNCTION__, $fields, $actions);

		return $form;
	}

	public function doEnquiryForm($data, Form $form)
	{
		return [
			'Message' => "Thanks for your enquiry, we'll get back to you ASAP.",
			'EnquiryForm' => false,
		];
	}
}
