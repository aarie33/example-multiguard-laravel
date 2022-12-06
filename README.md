# Laravel - Example Auth With Multiple Guard
Possibly you need to create multiple guard for your application. <br>
This is example for create multiple guard with laravel 8.x

## Dependencies
- laravel/ui (composer require `laravel/ui`)

## Steps
### 1. Model
```
User.class
protected $guard_name = 'web';

Employee.class
protected $guard_name = 'web';
```
<br>
should extends `Illuminate\Foundation\Auth\User` <br>
ex :

```
use Illuminate\Foundation\Auth\User;
class Employee extends User
```

### 2. config/auth.php
Check the example

### 3. Manage Route Provider 
`app/Providers/RouteServiceProvider.php` <br>
Check the example

### 4. Create Custom Route
- routes/admin.php
- routes/employee.php

### 5. Setup Middleware
`app/Middleware/RedirectIfAuthenticated` <br>
Check the example <br>
<br>
`app/Middleware/Authenticate` <br>
Check the example
