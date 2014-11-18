<?php
include_once 'dbconn.php';

$model = M("user");
print_r( $model->where("user!='root'")->select() );
