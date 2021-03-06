<?php
 
$vertlabel = "CPU";
 
$opt[1] = '';
$def[1] = '';
 
$opt[1] .= " --imgformat=PNG --title=\" $hostname / " . $this->MACRO['DISP_SERVICEDESC'] . "\" --base=1024 --upper-limit=100 --vertical-label=\"$vertlabel\" --slope-mode -l 0 ";
 
$def[1] .= "DEF:ds1=$RRDFILE[1]:$DS[1]:AVERAGE " ;
$def[1] .= "DEF:ds2=$RRDFILE[2]:$DS[2]:AVERAGE " ;
$def[1] .= "DEF:ds3=$RRDFILE[3]:$DS[3]:AVERAGE " ;
$def[1] .= "DEF:ds4=$RRDFILE[4]:$DS[4]:AVERAGE " ;
$def[1] .= "DEF:ds5=$RRDFILE[5]:$DS[5]:AVERAGE " ;
$def[1] .= "DEF:ds6=$RRDFILE[6]:$DS[6]:AVERAGE " ;
$def[1] .= "DEF:ds7=$RRDFILE[7]:$DS[7]:AVERAGE " ;
$def[1] .= "CDEF:user=ds1 ";
$def[1] .= "CDEF:nice=ds2 ";
$def[1] .= "CDEF:system=ds3 ";
$def[1] .= "CDEF:idle=ds4 ";
$def[1] .= "CDEF:iowait=ds5 ";
$def[1] .= "CDEF:irq=ds6 ";
$def[1] .= "CDEF:softirq=ds7 ";


$def[1] .= "AREA:user" . "#ff6e7e" . "FF:\"".str_pad($NAME[1],8)."\t\" " ;
$def[1] .= "GPRINT:user:LAST:\"Cur\\:%8.2lf $UNIT[1]\" ";
$def[1] .= "GPRINT:user:AVERAGE:\"Avg\\:%8.2lf $UNIT[1]\" ";
$def[1] .= "GPRINT:user:MAX:\"Max\\:%8.2lf $UNIT[1]\\n\" ";
 
$def[1] .= "AREA:nice" . "#7fff6e" . "FF:\"".str_pad($NAME[2],8)."\t\":STACK " ;
$def[1] .= "GPRINT:nice:LAST:\"Cur\\:%8.2lf $UNIT[2]\" ";
$def[1] .= "GPRINT:nice:AVERAGE:\"Avg\\:%8.2lf $UNIT[2]\" ";
$def[1] .= "GPRINT:nice:MAX:\"Max\\:%8.2lf $UNIT[2]\\n\" ";

$def[1] .= "AREA:system" . "#6e7fff" . "FF:\"".str_pad($NAME[3],8)."\t\":STACK " ;
$def[1] .= "GPRINT:system:LAST:\"Cur\\:%8.2lf $UNIT[3]\" ";
$def[1] .= "GPRINT:system:AVERAGE:\"Avg\\:%8.2lf $UNIT[3]\" ";
$def[1] .= "GPRINT:system:MAX:\"Max\\:%8.2lf $UNIT[3]\\n\" ";

$def[1] .= "AREA:iowait" . "#b83140" . "FF:\"".str_pad($NAME[5],8)."\t\":STACK " ;
$def[1] .= "GPRINT:iowait:LAST:\"Cur\\:%8.2lf $UNIT[5]\" ";
$def[1] .= "GPRINT:iowait:AVERAGE:\"Avg\\:%8.2lf $UNIT[5]\" ";
$def[1] .= "GPRINT:iowait:MAX:\"Max\\:%8.2lf $UNIT[5]\\n\" ";
 
$def[1] .= "AREA:irq" . "#41b832" . "FF:\"".str_pad($NAME[6],8)."\t\":STACK " ;
$def[1] .= "GPRINT:irq:LAST:\"Cur\\:%8.2lf $UNIT[6]\" ";
$def[1] .= "GPRINT:irq:AVERAGE:\"Avg\\:%8.2lf $UNIT[6]\" ";
$def[1] .= "GPRINT:irq:MAX:\"Max\\:%8.2lf $UNIT[6]\\n\" ";
 
$def[1] .= "AREA:softirq" . "#3241b8" . "FF:\"".str_pad($NAME[7],8)."\t\":STACK " ;
$def[1] .= "GPRINT:softirq:LAST:\"Cur\\:%8.2lf $UNIT[7]\" ";
$def[1] .= "GPRINT:softirq:AVERAGE:\"Avg\\:%8.2lf $UNIT[7]\" ";
$def[1] .= "GPRINT:softirq:MAX:\"Max\\:%8.2lf $UNIT[7]\\n\" ";
 
$def[1] .= "AREA:idle" . "#ffffff" . "00:\"".str_pad($NAME[4],8)."\t\" " ;
$def[1] .= "GPRINT:idle:LAST:\"Cur\\:%8.2lf $UNIT[4]\" ";
$def[1] .= "GPRINT:idle:AVERAGE:\"Avg\\:%8.2lf $UNIT[4]\" ";
$def[1] .= "GPRINT:idle:MAX:\"Max\\:%8.2lf $UNIT[4]\\n\" ";

# warning and critial thresholds not implemented in check yet
 
#if (isset($WARN[1]) &amp;&amp; $WARN[1] != "") {
#$def[1] .= "HRULE:$WARN[1]#FFFF00:\"Warning ($NAME[1])\: " . $WARN[1] . " " . $UNIT[1] . " \\n\" " ;
#}
#
#if (isset($CRIT[1]) &amp;&amp; $CRIT[1] != "") {
#$def[1] .= "HRULE:$CRIT[1]#FF0000:\"Critical ($NAME[1])\: " . $CRIT[1] . " " . $UNIT[1] . " \\n\" " ;
#}

?>
