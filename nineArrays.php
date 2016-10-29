
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
$files = glob('../images/a*.jpg');
 
print_r($files);
/* output looks like:
Array
(
    [0] => ../images/apple.jpg
    [1] => ../images/art.jpg
)
*/

$files = glob('../images/a*.jpg');
 
// applies the function to each array element
$files = array_map('realpath',$files);
 
print_r($files);
/* output looks like:
Array
(
    [0] => C:\wamp\www\images\apple.jpg
    [1] => C:\wamp\www\images\art.jpg
)
*/

echo "Initial: ".memory_get_usage()." bytes \n";
/* prints
Initial: 361400 bytes
*/
 
// let's use up some memory
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
 
// let's remove half of the array
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
 
echo "Final: ".memory_get_usage()." bytes \n";
/* prints
Final: 885912 bytes
*/
 
echo "Peak: ".memory_get_peak_usage()." bytes \n";
/* prints
Peak: 13687072 bytes
*/

// sleep for 3 seconds (non-busy)
sleep(3);
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
 
/* prints
User time: 0.011552
System time: 0
*/

// loop 10 million times (busy)
for($i=0;$i<10000000;$i++) {
 
}
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
 
/* prints
User time: 1.424592
System time: 0.004204
*/

// generate unique string
echo uniqid();
/* prints
4bd67c947233e
*/
 
// generate another unique string
echo uniqid();
/* prints
4bd67c9472340
*/

// with prefix
echo uniqid('foo_');
/* prints
foo_4bd67d6cd8b8f
*/
 
// with more entropy
echo uniqid('',true);
/* prints
4bd67d6cd8b926.12135106
*/
 
// both
echo uniqid('bar_',true);
/* prints
bar_4bd67da367b650.43684647
*/
</body>
</html>