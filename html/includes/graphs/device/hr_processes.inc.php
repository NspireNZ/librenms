<?php

$scale_min = "0";

include("includes/graphs/common.inc.php");

$rrd_filename   = $config['rrd_dir'] . "/" . $device['hostname'] . "/hr_processes.rrd";

$ds = "procs";

$colour_line = "008C00";
$colour_area = "CDEB8B";

$colour_area_max = "cc9999";

$graph_max = 1;
$graph_min = 0;

$unit_text = "Processes";

include("includes/graphs/generic_simplex.inc.php");



?>
