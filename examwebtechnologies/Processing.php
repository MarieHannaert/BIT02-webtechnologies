<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
    <link rel="stylesheet" href="stylesheet.css">

</head>
<body>
<?php
        require('navigationbar.html');
?> 
<h1>Process Protein Sequences</h1> 
<div class = 'content'>
<?php

if(!isset($_POST['submit'])){
    die("<a class='errorbutton' href='SubmitDataPage.php'>No Amino Acid sequences submitted yet</a>");
} 
else if(isset($_POST['submit'])){

    if($_POST['selection'] == 'Paste'){
        $content = $_POST['paste_seq'];
    }
    else if ($_POST['selection']== 'Uploade'){
        $content = file_get_contents($_FILES['uploaded_file']['tmp_name']);
    }  

    $lines = explode("\n", $content);              
    $sequences =  [];                               
    foreach($lines as $line){                       
        $line = trim($line);                        
        if(preg_match("/^>/", $line)){              
            $currentHeader = $line;
        } else if(!empty($line)){                   
            $sequences[$currentHeader] = $line;   
        }
    }
    
    foreach(array_keys($sequences) as $header){  
        echo "<div class = 'seqviz'>";                 
      echo "<h4>$header<h4><br>"; 
      echo $sequences[$header];
      echo "</div>";
      echo"<br>";
    }
    $aminoAcidGroups = ['A' => 'nonpolar', 'R' => 'positive', 'N' => 'polar', 'D' => 'negative', 'C' => 'nonpolar', 'Q' => 'polar', 'E' => 'negative', 'G' => 'nonpolar', 'H' => 'positive', 'I' => 'nonpolar', 'L' => 'nonpolar', 'K' => 'positive', 'M' => 'nonpolar', 'F' => 'nonpolar', 'P' => 'nonpolar', 'S' => 'polar', 'T' => 'polar', 'W' => 'nonpolar', 'Y' => 'polar', 'V' => 'nonpolar'];
    
    foreach(str_split($sequences) as $aminoacid){
    if(isset($_POST['color'])){
            if (in_array($aminoAcidGroups)){
                if($aminoacid == 'polar'){
                $sequences = str_replace("<span bachground:#3498db>"$aminoacid"</span>");
                }
                if($aminoacid == 'non-polar'){
                    $sequences = str_replace("<span bachground:#f39c12>"$aminoacid"</span>");
                    }
                if($aminoacid == 'positive'){
                        $sequences = str_replace("<span bachground:#27ae60>"$aminoacid"</span>");
                        }
                if($aminoacid == 'negative'){
                            $sequences = str_replace("<span bachground:#e74c3c>"$aminoacid"</span>");
                            }
    

            }}
            
    }}

    foreach(str_split($sequence) as $aminoacid){ 
    if($_POST['invalid'] == 'remove' and in_array($aminoAcidGroups)){
      $acceptedamino[] = "<span class='nuc' style='background: white; color: red; font-family: monospace;'>$aminoacid</span>";
      }

      
      else if($_POST['invalid'] == 'highlight'){

          
          if(in_array($aminoAcidGroups)){
              
              $acceptedamino[] = "<span class='nuc' style='background: white; color: red; font-family: monospace;'>$aminoacid</span>";

          } 
          else{
              $acceptedamino[] = "<span class='nuc' style='font-family: monospace; font-weight: bold; bachground: firebrick; color: white'>$nucelotide</span>";
          } 
      }


   }


    foreach($sequences as $index => $aminoacid){
        if($index % 40 == 0 and $index !=0){
            echo "<br>";
        }

        else if(isset($_POST['group']) and $index % 10 == 0 and $index != 0){
            echo " ";
        }
        echo $aminoacid;
     }
     echo "<br>";   foreach($sequences as $index => $aminoacid){
    if($index % 40 == 0 and $index !=0){
        echo "<br>";
    }

    else if(isset($_POST['group']) and $index % 10 == 0 and $index != 0){
        echo " ";
    }
    echo $aminoacid;
    echo "<br>";  
 }
}
else if((isset($_POST['submit'])) and (empty($_POST['past_seq']['name']))){
    die("<a class='errorbutton' href='SubmitDataPage.php'>No pasted (multi)fasta detected</a>");
    }
else if((isset($_POST['submit']))and (empty($_FILES['uploaded_file']['name']))){
    die("<a class='errorbutton' href='SubmitDataPage.php'>No uploaded (multi)fasta detected</a>");
    } 
?>
</div>
</body>
</html>