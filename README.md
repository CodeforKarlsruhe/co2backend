## CO2 Backend
Laravel backend for [co2app](https://github.com/CodeforKarlsruhe/co2app).

### Setup
To run Laravel in the docker container use `./vendor/bin/sail up`. Then you can use `sail` for all Laravel commands e.g. `./vendor/bin/sail php artisan migrate`.

Use the following commands to get a working CO2 Backend on your machine:
```
./vendor/bin/sail up
./vendor/bin/sail php artisan migrate
```

### Files of interest
|File|Description|
|:---|:---|
|[migration](./database/migrations/2022_06_21_162548_create_co2_data_table.php)| The migration file of the database structure.|
|[model](./app/Models/CO2Data.php)| The CO2 app data model.|
|[controller](./app/Http/Controllers/CO2DataController.php)| The controller that responds to the api requests.|
|[routes](./routes/api.php)| API routes definition. *All routes will be available under `/api`.* |

### API
Send a JSON `POST` request with the co2 app data to `http://localhost/api/co2data`. Don't forget to set `accept: application/json` in the header to get a proper validation failed response instead of a redirect.

Look at the [data validator](./app/Http/Controllers/CO2DataController.php) if you encounter problems.
