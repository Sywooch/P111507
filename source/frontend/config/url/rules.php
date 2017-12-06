<?php
$rules = [
    // ...
    MyBasicUrlRuleHelper::index(),
    MyBasicUrlRuleHelper::view(),
    // ...
];

return array_merge(
    $rules, require(__DIR__.'/rules-local.php')
);
?>