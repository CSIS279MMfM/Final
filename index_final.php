<!DOCTYPE html>
<html>
<head>
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="main.css?version=1"/>
</head>

<body>
    <main>
    <h1>Student Registration Form</h1>
    <form action="display_results.php" method="post">

    <fieldset> 
        <legend>Personal Info</legend>
        
        <h2>Student Info</h2>
        <label>First Name:</label>
        <input type="text" name="fname" value="" class="textbox">
        <br>

        <label>Middle Name:</label>
        <input type="text" name="mname" value="" class="textbox">
        <br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="" class="textbox"><br><br>

        <label>Gender:</label>
        <select name="gender">
            <option value="default" selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
            <option value="none">Prefer Not to Say</option>
        </select><br><br>

        <label>Birthdate:</label>
        <input type="date" name="birthday" value=""><br>

    </fieldset>

    <fieldset>
        <legend>Contact Info</legend>
        <label>Street Address 1:</label>
        <input type="text" name="fname" value="" class="textbox">

        <label>Street Address 2:</label>
        <input type="text" name="mname" value="" class="textbox">

        <label>City:</label>
        <input type="text" name="lname" value="" class="textbox">

        <label>State/Province:</label>
        <input type="text" name="lname" value="" class="textbox">

        <label>Postal/Zip Code:</label>
        <input type="number" name="lname" value="" class="textbox">

        <label>Country:</label><br>

        <label>Student Email:</label>
        <input type="email" name="email" placeholder="ex: myname@example.com"><br><br>

        <label>Mobile Number:</label>
        <input type="tel" name="mobile"><br>

        <label>Work Number:</label>
        <input type="tel" name="mobile"><br><br>

        <label>Company:</label>
        <input type="text" name="company"><br><br>
    </fieldset>
    <fieldset>
        <legend>Course Info</legend>
        <h3>Subject:</h3>
        <select name="subjects">
            <option value="default" selected></option>
            <option value="csis">CSIS</option>
            <option value="eng">ENG</option>
            <option value="sci">SCI</option>
            <option value="hist">HIST</option>
        </select><br><br>

        <h3>Courses:</h3>
        <select name="courses">
            <?php foreach ($courses as $course) : ?>
                <option value="?action=view_product&amp;product_id=<?php 
                          echo $course['course_num']; ?>">
                    <?php echo $course['course_name']; ?>
                </option>
            <?php endforeach; ?>
        </select>   

        <h3>Comments:</h3>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>
    </main>
</body>
</html>