<?php
function createfilepath(){
    $dir = 'categories/';
    $f1 = scandir($dir);
    $mma = array();
$t = 0;
    for ($i =0; $i <count($f1); $i++){
if ( $f1[$i] != '.'){
    if ($f1[$i] != '..'){
        $dir = "categories/{$f1[$i]}";
        $f2 = scandir($dir);
        for ($j =0; $j <count($f2); $j++){
            if ( $f2[$j] != '.'){
                if ($f2[$j] != '..'){
                    $dir = "categories/{$f1[$i]}/$f2[$j]/";
                    $f3 = scandir($dir);
                    for ($z =0; $z <count($f3); $z++){
                        if ( $f3[$z] != '.'){
                            if ($f3[$z] != '..'){
                                $l = file_get_contents("categories/{$f1[$i]}/$f2[$j]/$f3[$z]");
                        $mma[$t] = $f1[$i];
                       $t = $t+1;
                       $mma[$t] = $f2[$j];
                       $t = $t+1;
                       $mma[$t] = $f3[$z];
                       $t = $t+1;
                       $mma[$t] =  $l;
                       $t = $t+1;
                            }
                        }
                    }
                }
            }
        }
    }
}
    }
    return ($mma);
}?>
<!doctype html>
<html lang = "en">
    <meta charset = "UTF-8">
    <meta name = "viewport"
    content ="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="form">
    <form action ="index(32).php" method= "post">
    <label for = "Email">Email</label>
        <input type = "Email" name = "Email" required>
    <label for = "Category">Category</label>
<?php
$dir= "categories/";
$masq = array();
$i =0;
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
          if ($file != '.' && $file != '..'){
            $masq[$i] = $file; 
            $i=$i+1;
          }
        }
        closedir($dh);
    }
}
?>
<select name = "Category" required>
    <?php foreach ($masq as $s): ?>
        <option value = <?php echo $s; ?>><?php echo $s; ?></option>
    <?php endforeach; ?>
 </select>
    <label for = "Title">Title</label>
    <input type = "Text" name = "Title" required>
    <label for = "Description">Description</label>
    <textarea rows = "3" name = "Description"></textarea>
    <input type = "Submit" value = "Save">
      </form>
<div id = "table">
    <table>
        <thead>
        <th>Category</th>
        <th>Email</th>
            <th>Title</th>
            <th>Description</th>
</thead>
<?php  $errt =0; $ma = createfilepath();?>
<?php for($i =0; $i< count ($ma); $i = $i+4): ?>
<tbody>
    <tr>
        <td><?php echo $ma[$i];
        ?></td>
        <td><?php echo $ma[$i+1];
        ?></td>
        <td><?php echo $ma[$i+2];
        ?></td>
        <td><?php echo $ma[$i+3];
        ?></td>
    <?php endfor; ?>
</tr>
</tbody>
</table>
    </div >
</body>
</html>
