<?php

echo <<<_END
<form action="sell.php" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" name="symbol">
                <option disabled selected value="">Symbol</option>
_END;

    $id = $_SESSION['id'];
    $rows = CS50::query("SELECT symbol FROM portfolios WHERE user_id = ?", $id);
    foreach($rows as $row)
    {
        $sym = $row['symbol'];
        echo "<option value='{$sym}'>{$sym}</option>";
    }

echo <<<_END
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Sell</button>
        </div>
    </fieldset>
</form>
_END;


    

?>