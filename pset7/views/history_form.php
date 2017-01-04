<?php
    
    echo
<<<_END
    <table class="table table-striped">
    <tr>
        <td><b>Type</b></td>
        <td><b>Symbol</b></td>
        <td><b>Shares</b></td>
        <td><b>Price of 1 share</b></td>
        <td><b>Total Price</b></td>
        <td><b>TimeStamp</b></td>
    </tr>
_END;

    foreach($data as $row)
    {
        $type = $row['Type'];
        $symbol = $row['Symbol'];
        $shares = $row['Shares'];
        $price1 = $row['Price of 1 share'];
        $date = $row['Date and Time'];
        $price = $shares*$price1;
        echo
<<<_END

    <tr>
        <td>$type</td>
        <td>$symbol</td>
        <td>$shares</td>
        <td>$price1</td>
        <td>$price</td>
        <td>$date</td>
    </tr>
_END;
    }
    
 $cash = number_format($cash, 2, '.', '');
echo
<<<_END
    <tr>
        <td><b>CASH</b></td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td><b>$cash</b></td>
    </tr>
    </table>
_END;
    
?>

           
</table>