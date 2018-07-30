<?php
//declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
//ini_set('display_errors', 1);
//ini_set('display_errors', 'TRUE');
//ini_set('display_errors', '1');
//ini_set('display_errors', 'hooray');
ini_set('display_startup_errors', TRUE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Structures</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <h1>DS</h1>
  <hr>
  <h3>PHP Version:<?php print phpversion(); ?></h3>
  <table class="table table-striped table-hover table-sm">
    <thead>
    <tr>
      <th scope="col">Var Name</th>
      <th scope="col">Var Dump</th>
      <th scope="col">Type</th>
      <th scope="col">Int Val</th>
      <th scope="col">String Val</th>
    </tr>
    </thead>
    <tr scope="row">
      <td>
        <?php
        const FOO_CONST = 'bar';
        print "const FOO_CONST = 'bar';";
        ?>
      </td>
      <td><?php var_dump(FOO_CONST); ?></td>
      <td><?php print gettype(FOO_CONST); ?></td>
      <td><?php print intval(FOO_CONST); ?></td>
      <td><?php print strval(FOO_CONST); ?></td>
    </tr>

    <tr scope="row">
      <td>
        <?php
        define('FOO_DEFINE', '123bar');
        print "define('FOO_DEFINE', '123bar');";
        ?>
      </td>
      <td><?php var_dump(FOO_DEFINE); ?></td>
      <td><?php print gettype(FOO_DEFINE); ?></td>
      <td><?php print intval(FOO_DEFINE); ?></td>
      <td><?php print strval(FOO_DEFINE); ?></td>
    </tr>
    <?php
    //FOO = 'bar';
    //$FOO_CONST = 'bar';
    //FOO_CONST = FOO_DEFINE;
    //FOO_DEFINE = 'bar';

    print FOO . "\n";
    ?>
    <tr scope="row">
      <td>
        <?php
        $foo_string = 'bar';
        print "\$foo_string = 'bar'";
        ?>
      </td>
      <td><?php var_dump($foo_string); ?></td>
      <td><?php print gettype($foo_string); ?></td>
      <td><?php print intval($foo_string); ?></td>
      <td><?php print strval($foo_string); ?></td>
    </tr>
    <tr scope="row">
      <td>
        <?php
        $foo_int_string = 'bar123';
        print "\$foo_int_string = 'bar123'";
        //$foo_int_string = 2;
        ?>
      </td>
      <td><?php var_dump($foo_int_string); ?></td>
      <td><?php print gettype($foo_int_string); ?></td>
      <td><?php print intval($foo_int_string); ?></td>
      <td><?php print strval($foo_int_string); ?></td>
    </tr>
    <tr scope="row">
      <td>
        <?php
        $foo_int_string = 2;
        print '$foo_int_string = 2';
        ?>
      </td>
      <td><?php var_dump($foo_int_string); ?></td>
      <td><?php print gettype($foo_int_string); ?></td>
      <td><?php print (int) $foo_int_string; ?></td>
      <td><?php print (string) $foo_int_string; ?></td>
    </tr>
    <tr scope="row">
      <td>
        <?php
        $foo_int_string = (object) 2;
        print '$foo_int_string = (object) 2';
        //$foo_int_string = (object) '2';
        //$foo_int_string = (object) array(1, 2, 3);
        ?>
      </td>
      <td><?php var_dump($foo_int_string); ?></td>
      <td><?php print gettype($foo_int_string); ?></td>
      <td><?php
        print (int) $foo_int_string;
        // @todo go over the different error types here.
        ?></td>
      <td><?php print (string) $foo_int_string; ?></td>
    </tr>
    <tr scope="row">
      <td>
        <?php
        $foo_int_string->two = 2;
        print '$foo_int_string->two = 2';
        //$foo_int_string = (object) '2';
        //$foo_int_string = (object) array(1, 2, 3);
        ?>
      </td>
      <td><?php var_dump($foo_int_string); ?></td>
      <td><?php print gettype($foo_int_string); ?></td>
      <td><?php
        print (int) $foo_int_string;
        // @todo go over the different error types here.
        ?></td>
      <td><?php print (string) $foo_int_string; ?></td>
    </tr>
  </table>
</div>
</body>
</html>
