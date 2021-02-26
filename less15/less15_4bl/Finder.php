<?php



class Finder

{


public function find($email) {

    foreach ($this->workers as $worker) {
        if($worker["email"] === $email) {
            return $worker;

        };

    }
}
}