## CO2 Backend
Laravel backend for [co2app](https://github.com/CodeforKarlsruhe/co2app)

### Files of interest
|File|Description|
|:---|:---|
|[migration](./database/migrations/2022_06_21_162548_create_co2_data_table.php)| The migration file of the database structure.|
|[model](./app/Models/CO2Data.php)| The CO2 app data model.|
|[controller](./app/Http/Controllers/CO2DataController.php)| The controller that responds to the api requests.|
|[routes](./routes/api.php)| API routes definition. *All routes will be available under `/api`.* |

### API
Send a JSON `POST` request with the co2 app data to `http://localhost/api/co2data`.

Look at the [data validator](./app/Http/Controllers/CO2DataController.php) if you encounter problems.