<?php 
function longestCommonPrefix($strs) {
    if (empty($strs)) {
    return '';
}

$prefix = $strs[0];
$count = count($strs);

for ($i = 1; $i < $count; $i++) {
    $current = $strs[$i];
    $len = min(strlen($prefix), strlen($current));
    $j = 0;

    while ($j < $len && $prefix[$j] === $current[$j]) {
        $j++;
    }

    $prefix = substr($prefix, 0, $j);

    if ($prefix === '') {
        // If prefix becomes empty, no need to continue
        break;
    }
}

return $prefix;
}

$strs = ["flower","flow","flight"];
print_r(longestCommonPrefix($strs));