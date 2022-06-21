## CO2 Backend
Laravel backend for [co2app](https://github.com/CodeforKarlsruhe/co2app). The used template is directly from the [Laravel Docs](https://laravel.com/docs/9.x/installation#getting-started-on-linux).

### Setup
1. Clone this repo
2. Copy [.env.example](./.env.example) to `.env`
3. Run `./vendor/bin/sail up` *let that terminal run in the background*
4. In a second terminal run `./vendor/bin/sail php artisan key:generate`
5. Run `./vendor/bin/sail php artisan migrate`

*You can use `sail` for all Laravel commands e.g. `./vendor/bin/sail php artisan migrate`.*

#### Production
Use the following commands to get a working CO2 Backend on your machine:

1. Terminal:
```
./vendor/bin/sail up
```

2. Terminal
```
./vendor/bin/sail php artisan migrate
```

#### Development
Set `APP_ENV` in [.env](./.env) from `production` to `local`. Then run:

1. Terminal:
```
./vendor/bin/sail up
```

2. Terminal
```
./vendor/bin/sail php artisan migrate
npm install
npm run dev
```

The path in the [app.blade file](./resources/views/app.blade.php) will automatically use vite on port 3000.

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
