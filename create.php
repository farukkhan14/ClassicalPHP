<!DOCTYPE html>
<html>
<head>
    <title>create</title>
</head>
<body>

<form action="store.php" method="get">

    <label for="email">Email:</label>
    <input type="text" name="email" value="admin@admin.com" />

    <input type="checkbox" name="hobby[]" value="Cycling" />Cycling
    <input type="checkbox" name="hobby[]" value="Singing" />Singing
    <input type="checkbox" name="hobby[]" value="Painting" />Painting

    <input type="submit" value="Submit"/>
</form>

</body>
</html>