# Car Database Module for Silverstripe CMS

Provides a basic structure for a car rental database, with the ability to manage multiple vehicles that are displayed on a page with links to an Enquiry form.

## Installation

```sh
composer require purplespider/car-database
```

Then run `dev/build`

## Documentation

Use the `Vehicles` admin screen to add multiple vehicles.

Create a new page of the type "Vehicle Holding Page" to display the vehicle details along with a button to enquire.

## Configuration

You can disable the enquiry form by setting `enable_form` to `false`:

```yml
PurpleSpider\CarDatabase\VehicleHoldingPage:
    enable_form: false
```
