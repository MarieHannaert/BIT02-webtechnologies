<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reading files</title>
</head>
<body>

<!-- To upload files, we will need the form tag once again. -->
<!-- We now have to add an extra attribute to the form tag: enctype="multipart/form-data", which allows us to upload files. -->

    <form action="#" method="POST" enctype="multipart/form-data">
        <!-- To upload files, we will create an input tag with the type "file". -->
        <!-- The name attribute will be used to identify the file on the server side. -->
        <input type="files" name="uploaded_file">

        <!-- We will also need a submit button. -->
        <input type="submit" name="submit" value="Upload file">
    </form>

    <?php
        // We will now check if the form has been submitted.
        if(isset($_POST['submit'])){
        
            # To read in uploaded files, we need to use the $_FILES array.

            ######################
            ## READING IN FILES ##
            ######################
            
            ## METHOD 1
            ###########

            // Extract the contents of the file
            $contents = file_get_contents($_FILES['uploaded_file']['tmp_name']);

            // Split the contents into an array of lines
            $lines = explode("\n", $contents);


            ## METHOD 2
            ###########

            // Directly split the contents into an array of lines
            $lines = file($_FILES['uploaded_file']['tmp_name']);

            // The only difference between method 1 and 2 is that method 2 still has newlines at the end of each line.
            // These can be removed (line by line) using the trim() function.

        }
    ?>

</body>
</html>