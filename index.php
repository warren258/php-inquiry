<?php?>
<!DOCTYPE html>
<html>

<head>
    <title>Inquies</title>
</head>

<body>
    <form>
        <label>Name</label><br>
        <input type="text" name="fn" placeholder="John" required><br>
        <label>email</label><br>
        <input type="email" name="emailaddress" placeholder="John@gmail.com" required><br>
    <h2>Project Type</h2>
        <label>
            <input type="radio" name="St" value="Short Term">
            <input type="radio" name="Lt" value="Long Term">
        </label>
        <h2>Description</h2>
        <textarea name="description"></textarea>
        <input type="submit">
    </form>
    
</body>

</html>
