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
5) Get your api_token. http://project.name/home (autoload)

REST API:
    Car fields: [ id, models, year, color, owner_id, created_at, updated_at]
    Owners fields: [id, name, created_at, updated_at]

You can use: CURL, POSTMAN etc. to make CRUD operations (must use api_token).
Targets here: 
            http://your.project/api/car
            http://your.project/api/owner
CRUD request methods:
CREATE: POST /api/...
READ: GET /api/.../{id}
UPDATE: PUT /api/.../{id} 
DELETE: DELETE /api/.../{id}
