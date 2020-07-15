<?php
//
// Converts Bashoutput to colored HTML
//
function convertBash($code) {
    $dictionary = array(

        'Exiting.' => ' ',
        '                          (chainz) : '   => '',
        'ghostscan.io) :' => '(ghostscan.io)     :',
        '--> checking wallet ...' => '</div> <div class="column"> ',   //outcomment for 1 Columb
        'gathering info, please wait...' => ' ',
        'done!' => ' ',
        '[K' => '[',
        '[30m' => '<span style="color:black">',
        '[31m' => '<span style="color:red">',
        '[32m' => '<span style="color:lime">',
        '[33m' => '<span style="color:yellow">',
        '[34m' => '<span style="color:blue">',
        '[35m' => '<span style="color:purple">',
        '[36m' => '<span style="color:cyan">',
        '[37m' => '<span style="color:white">',
        '[m'   => '</span>',
        '[0m'   => '</span>',
        ' "'   => '<span style="color:yellow"> "        ',
        '":'   => '":</span>',
        '  0  ' => '<span style="color:red">  0  </span>',
        '  1  ' => '<span style="color:yellow">  1  </span>',
        '  2  ' => '<span style="color:lime">  2  </span>',
        '  3  ' => '<span style="color:lightgreen">  3  </span>',
        '  4  ' => '<span style="color:lightgreen">  4  </span>',
        '  4.02  ' => '<span style="color:yellow">  4.02  </span>',
        '  8.04  ' => '<span style="color:lime">  8.04  </span>',
        '  12.06  ' => '<span style="color:lightgreen">  12.06  </span>',
        '  16.08  ' => '<span style="color:lightgreen">   16.08  </span>',
//        '[32mExiting.^[[0m' => '</span>'
        );
    $htmlString = str_replace(array_keys($dictionary), $dictionary, $code);
    return preg_replace('/[^0-9!$?#*&\',\-.\/A-Za-z\n\(\)%:<>"= ]/', '', $htmlString);
}

$status = convertBash(file_get_contents('ghostman-status.tmp', FILE_USE_INCLUDE_PATH));

?>

<html>
<meta http-equiv="refresh" content="600">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
//  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<head>
  <title>Staking McGhost</title>
</head>
<body style="white-space: pre;font-family: monospace;background: black;color: white;">
<div class="row">
<div class="column">
<?php echo $status; ?>
</div>
</div>
</body>
</html>
