FASE 1
Creiamo una tabella trains e relativa Migration

Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...

Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

FASE 2
Dopo averne definito la struttura inserite dei dati pseudo-reali tramite la classe Faker.
Inseritene molti e poi paginateli.

1. **Determine the DB Structure**
    - *trains*
        - id | bigint
        - company | string(100)
        - departure_station | string(100)
        - arrival_station | string(100)
        - departure_time | time
        - arrival_time | time
        - date | date
        - train_code | string(20)
        - number_carriages | tinyint
        - is_in_time | boolean
        - is_deleted | boolean
        - created_at | date
        - modified_at | date

2. **Create the DB in mySQL**

3. **.env file**
    - if .env exists:
        - update the fields about the db
    - id .env does not exist:
        - copy the .env.example file in the same folder
        - rename it to .env
        - execute command: php artisan key:generate
        - update the fields about the db

4. **php artisan make:model --all Train**
    - Model
        - Train
        - (php artisan make:model Train)
    - Controller
        - TrainController
        - (php artisan make:controller TrainController)
    - Migration
        - create_trains_table
        - (php artisan make:migration create_Trains_table)
    - Seeder
        - TrainSeeder
        - (php artisan make:seeder TrainSeeder)

5. In the migration define the database structure in the up method (and define the down method for the rollback).

6. Only for Laravel <= 7
    - composer remove fzaninotto/faker
    - composer require fakerphp/faker

7. In the seeder define the run method to populate the table from an array of values or using Faker.

8. **php artisan migrate**

9. **php artisan db:seed --class=TrainSeeder**

10. **Create the route in web.php**

11. **Create the views (blade files)**

12. If you wish to use the laravel-debugbar
    - composer require barryvdh/laravel-debugbar --dev
