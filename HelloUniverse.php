<?php
/**
 * Yet Another Hello World Class
 * This just demonstrates a bunch of OOP concepts
 *
 * @author Andrew Samuels < andrew@ananzze.com
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */

namespace Ananzze\HelloWorld;


class HelloUniverse {
    public function __construct(){
        parent :: __construct();
        echo 'The newly constructed class "', __CLASS__, '" was initiated!' . "\n";
    }

    public function newMethod(){
        echo "From a new method in " . __CLASS__ . ".\n";
    }

    public function callGetGreeting(){
        return $this->getGreeting();
    }

}
?>
