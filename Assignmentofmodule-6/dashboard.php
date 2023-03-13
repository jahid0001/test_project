<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"> -->
    <style>
    .container-us100{
        
        justify-content: center;
        display: flex;
              
      }

      .row{
        margin-top: 34px;
        float: left;
        background: #fff;
        padding: 64px;
        margin-left: 30px;
        border-radius: 10px;

      }
      
      .box{

        border-radius: 20px;
        padding: 17px 20px 17px 10px;
        box-sizing: inherit;
        border: 1px solid transparent;
        width: 275px;
        color: blue;
        background: rgba(0, 0, 0, 0.05);
      }

      .btn{

        padding: 0px 20px;
        min-width: 85px;
        height: 38px;
        background-color: 	#454B1B;
        border-radius: 25px;
        font-family: SourceSansPro-SemiBold;
        font-size: 14px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;
      }

      .label1{

        text-transform: uppercase;
        justify-content: center;
        display: flex;
      }

    </style>
</head>

<body style="background-color: #808080;">
    <div class="container-us100">
        <div class="row">
          
                <h2>Dashboard - User Data List</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $file = fopen('users.csv', 'r');
                        while (($row = fgetcsv($file)) !== false) {
                            echo '<tr>';
                            foreach ($row as $data) {
                                if (strpos($data, '.jpg') !== false || strpos($data, '.png') !== false || strpos($data, '.jpeg') !== false) {
                                    echo '<td><img src="./' . htmlspecialchars($data) . '" width="50" height="50" ></td>';
                                } else {
                                    echo '<td>' . htmlspecialchars($data) . '</td>';
                                }
                            }
                            echo '</tr>';
                        }
                        fclose($file);
                        ?>
                    </tbody>
                </table>
                <h4><a href="./index.html">Back</a></h4>
        </div>
    </div>
</body>

</html>