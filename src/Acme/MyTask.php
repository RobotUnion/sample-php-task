<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 12/12/16
 * Time: 12:19 AM
 */

namespace Acme;

use RobotUnion\Integration\RobotTask;

class MyTask extends RobotTask {

    public function getTestInput(){
        $input = new \stdClass();
        $input->param1 = "test1";
        $input->param2 = "test2 polla";
        return $input;
    }

    /**
     * @return mixed
     */
    function mock(){
        return [];
    }

    /**
     * @return mixed
     */
    function run() {
        $input = $this->getTestInput();

        $this->getLogger()->debug("START");

        $this->getLogger()->debug(['input' => $input]);

        $this->getLogger()->debug("END");

        return ['polla' => ['caca' => 'jeje aa ok', 'random' => rand(0,20)]];
    }

}