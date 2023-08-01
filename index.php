
<select name="state">
<?php

$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

foreach($states as $x) {
    if($x == 'Georgia') {
    echo '<option value="'.$x.'" selected>' . $x . '</option>';
    } else {
    echo '<option value="'.$x.'">' . $x . '</option>';
    }
}


?>
</select>
$x=5;
$y=3;
echo $x. '+'.$y'=.$x+$y
<?php