<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSV to HTML Table</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, tr, td {
            border: solid 1px black;
            padding: 0.5em;
            text-align: center;
        }

    </style>
</head>
<body>

    <h1>CSV to HTML Table</h1>
    
    <!-- Form for user input -->
    <form action="#" method="POST">
        CSV:<br> 
        <!-- Text area for CSV input, pre-filled with the submitted CSV data if available -->
        <textarea name="csv" cols="30" rows="10"><?php echo $_POST['csv'] ?? ''; ?></textarea><br>
        <!-- Input field for delimiter, pre-filled with a comma if available -->
        Delimiter: <input type="text" name="delimiter" value="<?php echo $_POST['delimiter'] ?? ','; ?>"><br>
        <!-- Submit button for form submission -->
        <input type="submit" name="submit">
    </form>

    <hr>

    <?php
        // Check if form is submitted
        if(isset($_POST['submit'])){
            // Get CSV data and delimiter from form submission
            $csvData = $_POST['csv'];
            $delimiter = $_POST['delimiter'] ?? ',';

            // Check if CSV data is empty
            if(empty(trim($csvData))){
                die("No valid CSV was provided");
            }

            // Explode lines and check field consistency
            $lines = explode("\n", trim($csvData));
            $itemsOnLine1 = count(explode($delimiter, trim($lines[0])));

            // Iterate through lines and check the number of fields in each line
            foreach($lines as $key => $line){
                $line = trim($line);
                $itemsOnLine = count(explode($delimiter, $line));

                // If the number of fields in a line does not match the first line, display an error and terminate
                if($itemsOnLine != $itemsOnLine1){
                    die("Number of fields is incorrect");
                }
            }

            // Output HTML table
            echo "<table>";
            foreach($lines as $key => $line){
                $line = trim($line);
                $items = explode($delimiter, $line);

                echo "<tr>";
                // Output table headers for the first line, and table data for subsequent lines
                foreach($items as $item){
                    echo ($key == 0) ? "<th>$item</th>" : "<td>$item</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html> 