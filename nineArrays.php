
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv=" ">
    <meta name=" ">
    <title>Class Assignment</title>

 
</head>
<body>
    <h1>9 Useful php functions</h1>
    
// function with 2 optional arguments
function foo($arg1 = '', $arg2 = '') {
 
    echo "arg1: $arg1\n";
    echo "arg2: $arg2\n";
 
}
 
 
foo('hello','world');
/* prints:
arg1: hello
arg2: world
*/
 
foo();
/* prints:
arg1:
arg2:
*/
    
// empty argument
function foo() {
 
// returns an array of all passed arguments
    $args = func_get_args();
 
    foreach ($args as $k => $v) {
        echo "arg".($k+1).": $v\n";
    }
 
}
 
foo();
/* prints nothing */
 
foo('hello');
/* prints
arg1: hello
*/
 
foo('hello', 'world', 'again');
/* prints
arg1: hello
arg2: world
arg3: again
*/    

 // get all php files
$files = glob('*.php');
 
print_r($files);
/* output looks like:
Array
(
    [0] => phptest.php
    [1] => pi.php
    [2] => post_output.php
    [3] => test.php
)
*/

// get all php files AND txt files
$files = glob('*.{php,txt}', GLOB_BRACE);
 
print_r($files);
/* output looks like:
Array
(
    [0] => phptest.php
    [1] => pi.php
    [2] => post_output.php
    [3] => test.php
    [4] => log.txt
    [5] => test.txt
)
*/

</body>
</html>