<?php
    session_start();
    if($_POST['submit']){
        $salary = $_POST['salary'];
        
        $needs = $salary * (50/100);
        $wants = $salary * (10/100);
        $savingsAndInvestment = $salary * (40/100);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Management Rule</title>
    <style type="text/css">
        .container{
            display: flex;
            width: 1000px;
            height: 200px;
        }
        .row{

        }
        .col{
            width: 30%;
            margin: 3%;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <center>
        <form method="post">
            <input type="text" name="salary" placeholder="Salary" />
            <input type="submit" name="submit" />
        </form>
        <div class="container">
            <div class="col">
                <h2>Needs</h2><hr>
                <h3 id="needs"></h3>
            </div>
            <div class="col">
                <h2>Wants</h2><hr>
                <h3 id="wants"></h3>
            </div>
            <div class="col">
                <h2>Savings/ Investment</h2><hr>
                <h3 id="savings-investment"></h3>
            </div>
        </div>
    </center>
    <script type="text/javascript">
        document.getElementById('needs').innerHTML = '<?php print($needs); ?>';
        document.getElementById('wants').innerHTML = '<?php print($wants); ?>';
        document.getElementById('savings-investment').innerHTML = '<?php print($savingsAndInvestment); ?>';
    </script>
</body>
</html>