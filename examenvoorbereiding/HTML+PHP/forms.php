<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms</title>
</head>
<body>

    <h1>Forms</h1>

    <!--------------->
    <!-- FORMS TAG -->
    <!--------------->

    <!-- The form tag is what we need to send data to the web server and has 2 required attributes: action and method -->
    

        <!-- Action Attribute -->
        <!---------------------->

        <!-- The action attribute specifies where we want to send the data -->


        <!-- Method Attribute -->
        <!---------------------->

        <!-- The method attribute specifies how we want to send the data -->
        <!-- There are 2 ways to send data: the GET method and  the POST method -->
    

            <!-- GET METHOD -->
            <!---------------->

            <!-- The GET method sends the data in the URL -->
            <!-- The GET method is most commonly used for small amounts of data and non-sensitive data -->


            <!-- POST METHOD -->
            <!----------------->

            <!-- The POST method sends the data in the HTTP request body -->
            <!-- The POST method is most commonly used for large amounts of data and sensitive data -->
     
            
    <form action="#" method="GET">
        
        <!------------------>
        <!-- INPUT FIELDS -->
        <!------------------>

        <!-- input fields allow you to get data from the user and can be of many types -->
        <!-- they must all have a type attribute (fixed) and a name attribute (custom; used to identify the data in the $_GET or $_POST magic arrays) -->
        <!-- they can also have a value attribute which will be the default value of the input field -->


        <!----------------------->
        <!-- INPUT FIELD TYPES -->
        <!----------------------->

        <!-- input type text is used for single line text input -->
        First name: <input type="text" name="firstname" value="enter name"><br>

        <!-- input type password is used for single line password input -->
        Password: <input type="password" name="password"><br>

        <!-- input type email is used for single line email input -->
        email: <input type="email" name="email"><br>

        <!-- input type number is used for single line number input -->
        number: <input type="number" name="number"><br>

        <!-- input type checkbox is used to create a checkbox -->
        checkbox1: <input type="checkbox" name="cb1"><br>
        checkbox2: <input type="checkbox" name="cb2"><br>
        
        <!-- input type radio is used to create radio buttons -->
        <!-- NOTE: all radio buttons with the same name will be grouped together -->
        Gender: <input type="radio" name="rb" value="Male">Male
                <input type="radio" name="rb" value="Female">Female
                <input type="radio" name="rb" value="Other">Other<br>

        Profession: <input type="radio" name="rb2" value="Student">Student
                    <input type="radio" name="rb2" value="Teacher">Teacher
                    <input type="radio" name="rb2" value="Retired">Retired
                    <input type="radio" name="rb2" value="Other">Other<br>
        
        <!-- Hidden is often used to send data that the user doesn't need to see -->
        hidden: <input type="hidden" name="hidden" value="This is hidden"><br>
        
        <!---------------------->
        <!-- OTHER INPUT TAGS -->
        <!---------------------->

        <!-- To create a list of options to select from, use the select tag -->
        <!-- To create an option, use the option tag within the select tag -->
        Select: <select name="color">
            <option value="red">red</option>
            <option value="green">green</option>
        </select><br>


        <!-- To create a list of options to select from, use the select tag -->
        <!-- To create an option, use the option tag within the select tag -->
        <!-- To create a group of options, use the optgroup tag within the select tag and wrap the options within it -->
        Select with groups: <select name="color">
            <optgroup label="primary">
                <option value="red">red</option>
                <option value="green">green</option>
                <option value="blue">blue</option>
            </optgroup>
            <optgroup label="secondary">
                <option value="yellow">yellow</option>
                <option value="orange">orange</option>
                <option value="purple">purple</option>
            </optgroup>
        </select><br>

        <!-- To create a list of options to select from, use the select tag -->
        <!-- To create an option, use the option tag within the select tag -->
        <!-- To be able to select multiple options, add the multiple attribute to the select tag and add [] to the name attribute -->
        Select multiple: <select name="colors[]" multiple>
            <option value="red">red</option>
            <option value="green">green</option>
        </select><br>
        

        <!-- To create a text area, use the textarea tag -->
        <textarea name="textarea" cols="30" rows="10"></textarea>
        
        <!-- input type submit is used to create a submit button -->
        submit: <input type="submit" name="submit">
    </form>


    <!-- To print the data that was sent, use the $_GET or $_POST magic arrays -->
    <pre>
    <?php
        print_r($_GET);
        print_r($_POST);
    ?>
    </pre>
    
</body>
</html>