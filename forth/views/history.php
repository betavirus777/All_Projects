<?php
    
    echo
<<<_END
    <table class="table table-striped">
    <tr>
        <td><b>Type</b></td>
        <td><b>Symbol</b></td>
        <td><b>Shares</b></td>
        <td><b>Price</b></td>
        <td><b>Date</b></td>
    </tr>
_END;

    foreach($rows as $row)
    {
        $type = $row['type'];
        if($type == 1)
        	$type = "BOUGHT";
        else if($type == 2)
        	$type = "SOLD";
        else $type = "Invaid";
        $symbol = $row['symbol'];
        $shares = $row['shares'];
        $price = $row['price'];
        $date = $row['date'];
        echo
<<<_END

    <tr>
        <td>$type</td>
        <td>$symbol</td>
        <td>$shares</td>
        <td>$price</td>
        <td>$date</td>
    </tr>
_END;
    }
   
echo
<<<_END
    </table>
_END;
    
?>