<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 12/12/16
 * Time: 12:19 AM
 */

namespace Acme;

use RALLF\Integration\Task;

class MyTask extends Task {

    /**
     * @return mixed
     */
    function mock(){
        return [
            'info' => [
                'test' => true,
                'random' => rand(0,20),
                "comment" => "This is a testing response (mock)"
            ]
        ];
    }

    /**
     * @return mixed
     */
    function run() {

        $this->getLogger()->debug("START");

        $this->getLogger()->debug(['input' => $this->getInput()]);

        $this->getLogger()->debug("END");

        return [
            'info' => [
                'test' => true,
                'random' => rand(0,20),
                "comment" => "This is a testing response (run)"
            ]
        ];
    }

}