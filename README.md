## About Employee Attendance

Employee Attendance is a web application used for tracking attendance of employees with robust authentication and access manangement system made in Laravel 7.25 Framework and MySQL.

### Configuration

Install Composer after Cloning the repository

```console
composer install
```

Make sure that this project has proper file permissions.
To run this project, you will need to set up a database and a smtp server for password reset and add it to your .env file

After that, you run migration to get it running.

```console
php artisan migrate
```

And link public folder to storage for file uploads

```console
php artisan storage:link
```

To get initial test data in database

```console
php artisan db:seed
```

## Themes, plugins, packages used for developement
Following are the assets used for this project
-	[AdminLTE](https://adminlte.io/) a bootstrap and jquery based admin dashboard theme
-	[DataRangePicker](https://www.daterangepicker.com/) for date pickers
-	[DataTables](https://datatables.net/) for responsive table
-	[Intervention/Image](http://image.intervention.io/getting_started/installation) package in laravel for image upload optimisaton
-	[HTML Geolocation API](https://www.w3schools.com/html/html5_geolocation.asp) which works only on SSL, for using make sure your domain is SSL certified.
-	[Nominatim](https://nominatim.org/) an open source geocoding API for reverse geocoding.
