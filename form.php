<?php



    if(isset($_POST['firstname']))
    {$firstName = $_POST['firstname'];}
    if(isset($_POST['lastname']))
    {$lastName = $_POST['lastname'];}
    if(isset($_POST['address']))
    {$address = $_POST['address'];}
    if(isset($_POST['phone']))
    {$phone = $_POST['phone'];}
    if(isset($_POST['email']))
    {$email = $_POST['email'];}
    if(isset($_POST['cookies']))
    {$cookies = $_POST['cookies'];}
    if(isset($_POST['bread'])){
        {$bread = $_POST['bread'];}
        $selectedBread = "";
        foreach($bread as $breads){
            $selectedBread .= $breads . " ";
        }
    }
    if(isset($_POST['cakes']))
    {$cakes = $_POST['cakes'];}
    if(isset($_POST['date']))
    {$date = $_POST['date'];}
    if(isset($_POST['time']))
    {$time = $_POST['time'];}
    if(isset($_POST['feedback']))
    {$comments = $_POST['feedback'];}
    


echo <<<_END

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<pre>
    <h2>Bakery Order Form</h2>

    First Name: $firstName
    Last Name: $lastName
    Address: $address
    Phone: $phone
    E-mail: $email
    Items Ordered: $cookies 
                   $selectedBread
                   $cakes 
    Delivery Date/Time: $date   $time
    Comments: $comments

    <form action='form.php' method='POST' >
    <strong>Please provide basic information so we can process your order.</strong><br>
    <label>
    First Name: <input type='text' name='firstname' placeholder='Required' required autofocus='on'><br>
    Last Name:  <input type='text' name='lastname' placeholder='Required' required><br>
    Address:    <input type='text' name='address' placeholder='Required' required><br>
    Phone:      <input type='text' name='phone' placeholder='Enter a phone number' autocomplete='off' ><br><br>
    Email:      <input type='text' name='email' placeholder='Required' required><br><br>
    </label>

    <strong>What would like to order?</strong><br><br>
    <label><strong>Cookies</strong>
    <input type='radio' name='cookies' value='chocolate chip cookies' checked> Chocolate Chip Cookies
    <input type='radio' name='cookies' value='oatmeal Raisin cookies'> Oatmeal Raisin Cookies
    <input type='radio' name='cookies' value='gingerbread cookies'> Gingerbread Cookies
    <input type='radio' name='cookies' value='peanut butter cookies'> Peanut Butter Cookies
    </label><br><br>

    <label><strong>Bread</strong>
    <input type='checkbox' name='bread[]' value='italian bread'> Italian Bread
    <input type='checkbox' name='bread[]' value='wheat bread'> Wheat Bread
    <input type='checkbox' name='bread[]' value='ciabatta bread'> Ciabatta Bread
    <input type='checkbox' name='bread[]' value='white bread' checked> White Bread
    </label><br><br>

    <label ><strong>Cakes</strong> 
    <select name='cakes' size='3' mulitiple='multiple'>
        <option>Vanilla Cake</option>
        <option>Chocolate Cake</option>
        <option>Strawberry Cake</option>
        <option>Blueberry Cake</option>
    </select></label><br><br>

    <label><strong>When would you like this order?</strong>
    <input type='date' name='date' required><input type='time' name='time' required>
    </label>

    <strong>We would appreciate your feedback!</strong><br>
    <label>
    <textarea name='feedback' cols='50' rows='5' wrap='hard'>
    </textarea>
    </label><br><br>
    <input type='submit' name='submit' value='Submit Order'> 
    <input type='hidden' name='cancel'>
    </form>  
</pre>
</body>
</html>
_END;

?>