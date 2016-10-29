
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8" />
<title>Project Tables</title>

<style type="text/css">

<style type="text/css">
table.profileTbl {
    border-collapse: collapse;
}

table.profileTbl td, table.profileTbl th {
    padding: 6px 8px;
    border:1px solid #000;
}

table.profileTbl th {
    text-align:left;
}
table.profileTbl td.num {
    text-align:right;
}
    
table.profileTbl td.foot {
    text-align: center;
}
</style>
</head>
<body>
    
<h1> UserProfile</h1>


<?php
require ('includes/table.class.php');

$PROFILES = array(
    'Teresa' => array('Female', '44', 'multi-media designer'),
    'Elysha' => array('Female', '20', 'student'),
    'Sky' => array('Male', '22', 'student')
);

// id, class
$tbl = new Table('', 'profileTbl');

$tbl->addRow();
    // cell content, class, type (default is 'data' for td, pass 'header' for th)
    $tbl->addCell('Gender', 'first', 'header');
    $tbl->addCell('Age', '', 'header');
    $tbl->addCell('Occupation', '', 'header');
    
    foreach($PROFILES as $profile) {
        list($gender, $age, $occupation ) = $profile;
        $tbl->addRow();
            $tbl->addCell($gender);
            $tbl->addCell($age);
            $tbl->addCell($occupation);
    }
    
    
echo $tbl->display();

?>
</html>