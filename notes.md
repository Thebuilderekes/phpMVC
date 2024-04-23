The model view controller (MVC) is used to manage the flow of page displayed depending on the database.

- Every view has it's on controller.

## The model:

Responsible for handling the application's data and business logic. This is the part that is linked to the database and acts as an intermediary between the database and the controller.

### setup

In the `model.php` file. We use the Database which is a `Trait` to promote code reuse in the file. Traits are used
when you what to use multiple code in a single file, which is something that `extends` with classes cannot do. one thing to note is that a trait cannot run on its own unless it is used within another class.

## The controller

Acts as an intermediary between the Model and View, processing user input and managing the application's core logic.

## The view

The view responds the logic of of the controller and in turn handles what is displayed to the user at everyt given point in time. The view also determines what is going to be fed to the model so it can make the necessary changes to the database if need be.

## Process

The router needs to be acknowledged by a controller that determines

## Practices and conventions

- The core folder contains files that will always be loaded.
- The `init.php` file has all the files in the core folder that are require through out the project.
- The `_404.php` file in the `app/controllers`folder starts with an underscore because that is a valid naming convention for a class.

- In the app/controller.php file we create a conroller class and logic to be used to decide what view is to be loaded
- All asset paths for CSS, images and JS files will be loaded using the `ROOT` constant defined in the `config.php` file

## In the `database` file

###Steps:
It calls the private connect function (assuming it's within the same class) to get a connection to the database.
It prepares the query using $con->prepare($query). This creates a prepared statement, which is a secure way to execute queries by separating the query itself from the data.
If data is provided in the $data parameter, the function likely binds the data to the prepared statement using PDO methods (not shown in this code snippet).
It executes the prepared statement with $stmt->execute($data).
It checks if the execution was successful ($check).
If successful:
It fetches all results from the statement using $stmt->fetchall(PDO::FETCH_OBJ). This retrieves all rows as objects.
It checks if the retrieved results are an array and have elements.
If valid, it returns the results ($result).
Otherwise, it returns false.
If execution fails: (Not explicitly shown but assumed)
Handle the error appropriately (e.g., log the error, throw an exception).


- We want to be able to query the database and get one single row. So we create a `get_row` method for that. And since the database is a trait that can be reused, there will be times when other files would want to get a single row using the get_row method in database.

## View fetching process

- Each view file is paired with a controller file of identical name, determining the displayed view based on the URL path entered into the browser's search bar. The URL correlates to the position of the filename in the controller. Since the filenames in the controller match those in the view folder, the logic is designed to retrieve the corresponding view file and present it in the browser.

- Your asset folder containing CSS, images and JavaScript folders containing files should be always put in the public folder.

### Note

- It makes sense to put folder in views and have multiple view folders and files but not so much for the controllers.
  you can run your conditional routing code to check for file views in subfolders of the views that have the same name as their parent folders and this would still work.
- All assets will be loaded u
