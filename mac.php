<?php
$tmp=`/home/vasil/bin/list2.sh|tr '\n' ',' |sed s/,$// `;
echo $tmp;
