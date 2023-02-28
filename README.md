<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Newton Car Maintenance

This web application was made for iO as an assignment for a technical assessment. 
The numbers I used for the price calculations are completely arbitrary as I have 0 knowledge on cars.
I've been short on time the past few days so I did cut a few corners(No real API for the part prices being the biggest missing feature)

Assumptions I made:

-Working with a framework I'm familiar with will make it easier for me to make the calculations needed.

-I'll need atleast 2 tables on the database. ScheduledMaintenanceJob and SparePart have been made, 
 I'd foregone the need for MaintenanceJob for having a more compiled database.
 
-Having 0 knowledge on cars, I'll just assume the average part prices from google are a good guideline.

-I'll need 2 blades, 1 as a general overview of all scheduled maintenance jobs, and another for more information + price calculation individually.

-I'll also need 2 functions in my controller. The index function will load all scheduled jobs and output them in a datatable for easy viewing.
 The second function will be used when viewing an individual job. This will also do the price calculation.
 
-I'll need to make migrations and seeders to populate the database.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
