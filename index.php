<?php
error_reporting(-1);
session_start();

$url = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$host = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$uri = trim($_SERVER['REQUEST_URI']);

if ($uri === '/') {
    // Do nothing because there is no path.
    echo 'No data requested.';
} else {
    // Split the request to see what data is being requested.
    $path = explode('/', trim($uri, '/'));
}
?>

<html>
    <head></head>

    <body>
        <h2>URL/URI Information</h2>
        <table>
            <tr>
                <td>Full URL</td>
                <td><?php echo $url; ?></td>
            </tr>
            <tr>
                <td>HOST</td>
                <td><?php echo $host; ?></td>
            </tr>
            <tr>
                <td>URI</td>
                <td><?php echo $uri; ?></td>
            </tr>
        </table>

        <br>

        <?php
        if ($path[1] == 'customer') {
            if (count($path) > 2) {
                echo '<h2>This page would show the customer with cust. no. ' . $path[2] . ', and all of their information.</h2>';
            } else {
                echo '<h2>This page would show a list of all of the customers.</h2>';
            }
        } elseif ($path[1] == 'product') {
            if (count($path) > 2) {
                echo '<h2>This page would show the product with prod. no. ' . $path[2] . ', and all of the info about that product.</h2>';
            } else {
                echo '<h2>This page would show a list of all of the products.</h2>';
            }
        } else {
            echo '<h2>Error, no information returned.</h2>';
        }
        ?>
    </body>
</html>
