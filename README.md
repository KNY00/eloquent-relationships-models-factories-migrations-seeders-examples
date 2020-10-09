<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Eloquent: Relationships
# Migrations, Factories, Models, Seeders examples

This package contains migrations, factories, seeders, and Eloquent models that facilitate the testing of different Eloquent Relationships.
All the tables available there are made according to the current Documentation Page [Available here](https://laravel.com/docs/8.x/eloquent-relationships).


## Migration

For each type of relationship, a migration scenario has been set up in a different folder (adopts ```snake_case``` naming convention).

For example, for "one to one" relationship, all the migrations are located into ```database\migrations\one_to_one```

You should run a fresh migration every time you want to test a specific relationship, for example:


```shell
php artisan migrate:fresh --path=database/migrations/one_to_one
```

## Seeder

For each type of relationship, seeders have been placed in a different folder (adopts ```UpperCamelCase``` naming convention).`

For example, for "many to many" relationship, all the seeders for the tables are located into ```database\seeders\ManyToMany```

Each folder contains at least one seeder, called ScenarioSeeder.  This seeder will generate the data specific to a certain type of relation.

```bash
php artisan db:seed --class=Database\\Seeders\\ManyToMany\\ScenarioSeeder
```

## License

Licensed under the [MIT license](https://opensource.org/licenses/MIT).
