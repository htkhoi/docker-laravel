### Step 1
    docker-compose up -d --build

### Step 2
    docker-compose exec php php -v
    docker-compose run composer -v
    docker-compose run npm -v
    docker-compose run mysql -v

### Step 3
    cd src 
    docker-compose run composer create-project laravel/laravel .