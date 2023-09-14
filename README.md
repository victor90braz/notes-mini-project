````markdown
# Laracasts Course - Session 3

GitHub Repository: [Notes Mini Project](https://github.com/victor90braz/notes-mini-project)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select the version that suits your needs:
   - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

- **Check Available PHP Commands:**
  ```sh
  php -h
  ```
````

- **Start a Local PHP Server:**
  ```sh
  php -S localhost:8888
  ```

## Database Query Example:

```php
$dataBase = new DataBase();
$posts = $dataBase->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";
```

## Some MySQL Commands:

```sql
DROP TABLE users;
```

or

```sql
CREATE TABLE `users` (
`id` INT NOT NULL,
`username` VARCHAR(100) NOT NULL,
`admin` TINYINT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

SELECT * FROM users WHERE id=2 OR admin=1;
SELECT * FROM posts WHERE id=2 OR id=1;
```

### Important Security Note:

When working with user input in SQL queries, always use parameterized queries to prevent SQL injection attacks. For example:

```php
$query = "SELECT * FROM posts WHERE id=?";
$id = $_GET['id'];
$posts = $dataBase->query($query, [$id])->fetch();
```

By using parameterized queries, you ensure that user input is properly sanitized, enhancing the security of your application.

```php
public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
}
```
