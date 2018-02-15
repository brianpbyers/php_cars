<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars Index</title>
</head>
<body>
    <h1>Cars Index Page</h1>
    <a href="./new">Add a Car</a>
    <section>
        <ul>
            <?php while($row = $cars->fetch_object()): ?>
            <li>
                Look at <?= $row->owner?>'s car, the glorious <?= $row->car?>!
            </li>
            <?php endwhile; ?>
        </ul>
    </section>
</body>
</html>