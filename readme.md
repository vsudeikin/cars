Installation:

From GitHub:

    git clone https://github.com/vsudeikin/cars.git

From composer:

    composer require suval/cars

After installation:
1)    create DB "cars"
2)    .env: - DB_DATABASE=cars
            - DB_USERNAME=your's db user name
            - DB_PASSWORD=your's db password
3) On poject folder: php artisan migrate --seed
4) Register new user. http://project.name/register            