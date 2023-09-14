# Kalkulator

## Project setup
1. ```bin/task start```
2. ```bin/task enter-php```
3. ```composer install```

### Additional setup
You can change the port in the docker-compose.yml file. Default port is 8080.

## Usage
After starting the project, you can access the calculator at http://localhost:8080/ function/{a}/{b} (or other port if you changed it). 

A and B are numbers that you want to calculate. The function is the operation you want to perform.
The calculator supports the following operations:
- addition ```add/{a}/{b}```
- subtraction ```sub/{a}/{b}```
- multiplication ```mul/{a}/{b}```
- division ```div/{a}/{b}```

Path example: http://localhost:8080/add/1/2

As {a} and {b} you can use both integers and floats.
Example: http://localhost:8080/add/1.5/2.5

Response example (JSON): ```{"result":4}```

## Tests
While in the container, simply ```composer test``` to run phpunit tests.

## Other commands
- ```bin/task start``` - starts the project
- ```bin/task stop``` - stops the project
- ```bin/task enter-php``` - enters the php container
- ```composer test``` - runs phpunit tests (while in the container)
- ```composer phpcsfixer``` - runs php-cs-fixer on .src (while in the container)
- ```composer lint``` - runs phpstan on .src (while in the container)