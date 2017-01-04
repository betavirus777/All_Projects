<?php
    
    echo
<<<_END
    <table class="table table-striped">
    <tr>
        <td><b>Symbol</b></td>
        <td><b>Name</b></td>
        <td><b>Shares</b></td>
        <td><b>Price</b></td>
        <td><b>TOTAL</b></td>
    </tr>
_END;

    foreach($positions as $row)
    {
        $symbol = $row['symbol'];
        $name = $row['name'];
        $shares = $row['shares'];
        $price = $row['price'];
        $price = number_format($price, 2, '.', '');
        $total = $shares * $price;
        $total = number_format($total, 2,'.', '');
        echo
<<<_END

    <tr>
        <td>$symbol</td>
        <td>$name</td>
        <td>$shares</td>
        <td>$price</td>
        <td>$total</td>
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
        <td><b>$cash</b></td>
    </tr>
    </table>
_END;
    
?>

           
</table>