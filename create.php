<!DOCTYPE html>
<html>
<head>
    <title>create</title>
</head>
<body>

<form action="store.php" method="post" enctype="multipart/form-data">

    <label for="email">Email:</label>
    <input type="text" name="email" value="admin@admin.com" />

    <input type="checkbox" name="hobby[]" value="Cycling" />Cycling
    <input type="checkbox" name="hobby[]" value="Singing" />Singing
    <input type="checkbox" name="hobby[]" value="Painting" />Painting


    <input type="radio" name="hobby" value="Cycling" checked="checked" />Cycling
    <input type="radio" name="hobby" value="Singing" />Singing
    <input type="radio" name="hobby" value="Painting" />Painting


    <select name="options">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>

    </select>


    <select name="multioptions[]" multiple="multiple">
        <option value="option1">Option 1</option>
        <option value="option2" selected="selected">Option 2</option>
        <option value="option3">Option 3</option>
        <option value="option4">Option 4</option>
        <option value="option5">Option 5</option>

    </select>

     <input type="file" name="aFile" />

    <input type="submit" value="Submit"/>
</form>

</body>
</html>