# Live Belt Example

This is a simple example of how to use the [Live Belt](https://github.com/Jacked-PHP/live-belt) library to create a simple realtime connection to Conveyor WebSocket Server, making it trivial to have secure realtime functionalities in your Laravel application.

> **Important:** you need OpenSwoole PHP Extension installed. (https://openswoole.com)

Video where I built this: 

Simply clone this repository and run the common steps:

```bash  
composer install # php dependencies
npm install # js dependencies

cd conveyor && composer install && ../ # php dependencies for conveyor
```

Then, run on 3 different terminals:

Terminal 1: Run the PHP HTTP Server

```bash
php artisan serve --port 8080
```

Terminal 2: Run the Vite Bundle

```bash
npm run dev
```

Terminal 3: Run Conveyor WebSocket Server

```bash
cd conveyor && php server.php
```

Terminal 4: Run Tinker and dispatch events!

```bash
php artisan tinker
```

Then...

```php
event(new \App\Events\NotificationReady( message: 'Message from Conveyor 2', channel: 'notifications-'));
```

> **Notice** that this channel has a dash (-) at the end, it is there because in this example we don't have anybody logged in, and in our live-belt component the channel specification won't add anything there.

