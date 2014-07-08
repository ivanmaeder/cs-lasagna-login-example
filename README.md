# A user login example using the Lasagna file structure

1. It all starts in `index.php`. This controller file loads the `html/index.tpl` view
2. The view contains a login form with action set to `login.php`
3. When the user submits the form, `login.php` checks whether the user exists in the database by making a call to a function in `sql/users.php`. If there is a row that matches the username/password combination given, it redirects the user to `welcome.php`. Otherwise, it redirects the user back to the login form (`index.php`)

Notice that the controller files are the entry-point for every action: the browser points to these files, not the view (`.tpl`) files, even if the controller doesn't really have anything to do (like in `index.php`).

#### Model files

- `sql/users.php`

#### View files

- `html/index.tpl`
- `html/welcome.tpl`

#### Controller files

- `index.php`
- `login.php`
- `welcome.php`

For more information visit the main Lasagna project.