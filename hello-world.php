<?php
namespace PMVC\PlugIns;

// \PMVC\l(__DIR__.'/xxx.php');

${_INIT_CONFIG}[_CLASS] = 'PMVC\PlugIns\PMVC_PLUGIN_HelloWorld';

class PMVC_PLUGIN_HelloWorld extends \PMVC\PLUGIN
{
    function init(){
        echo "<div>I'm init</div>";
    }

    function echo($s){
        echo '<div>'.$s.'</div>';
    }
}
?>
