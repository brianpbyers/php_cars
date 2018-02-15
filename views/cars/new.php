<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Car</title>
</head>
<body>
    <h1>New Car</h1>
    <section>
        <form action="create" method="POST">
            <input type="text" name = "car" placeholder="car type" required><br>
            <input type="text" name = "owner" placeholder="owner" required><br>
            <input type="submit" value="Add Car">
        </form>
    </section>
</body>
</html>