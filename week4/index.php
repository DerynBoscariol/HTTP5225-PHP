<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loops - PHP</title>
        <!--Adding bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
      <div class="row">
        <?php
        function getUsers(){
            $url = "users.json"; //could use the api url
            $data = file_get_contents($url);
            //echo gettype($data);
            return json_decode($data, true);
        }

        $users = getUsers();
        if(!empty($users)){  //if $users is not empty loop through data
            for($i = 0; $i < count($users); $i++){ //count() will give us the count of users
                echo
                '<div class="col-md-3">
                <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title">'. $users[$i]['name'] . '</h5>
                    <p class="card-text">' . $users[$i]['email'] . '</p>
                    <p class="card-text">Lives at ' . $users[$i]['address']['suite'] . ", " . $users[$i]['address']['street'] . ' in ' . $users[$i]['address']['city']. '</p>
                 </div>   
                </div>
                </div>';
            } 
        }
        if(!empty($users)){  //if $users is not empty loop through data
            foreach ($users as $x) { //count() will give us the count of users
                echo
                '<div class="col-md-3">
                <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title">'. $x['name'] . '</h5>
                    <p class="card-text">' . $x['email'] . '</p>
                    <p class="card-text">Lives at ' . $x['address']['suite'] . ", " . $x['address']['street'] . ' in ' . $x['address']['city']. '</p>
                 </div>   
                </div>
                </div>';
            } 
        }
        ?> 
        </div>
        </div>

        <?php
       

        ?>
    </body>
</html>