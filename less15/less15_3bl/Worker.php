<?php


class Worker
{
    private static $workers = [];
    private $name;
    private $email;
    private $age;
    private $profession;

    public  function create($name, $email, $age, $profession) {
        $worker = [
            "name" => $name,
            "email" => $email,
            "age" => $age,
            "profession" => $profession,
            "date" => date('Y-m-d H:i'),
        ];
        if($worker["name"] === "" || $worker["email"] === "" || $worker["age"] === "" || $worker["profession"] === "") {
            echo "Заполните поля!";

        } else {
            self::$workers[] = $worker;

        }
    }
    public function all() {


        return [
            "workers_count " => count(self::$workers),
            "all_workers" => self::$workers,
        ];
    }
    public function save() {

        foreach (self::$workers as $worker) {
            $name = $worker["name"];
            $email = $worker["email"];
            $age = $worker["age"];
            $profession = $worker["profession"];
            $part =  "Name: $name Email: $email Age: $age  Profession: $profession";
            $content = $content . "-----------------------------------------------------------------------------------------------" . $part;

        }

        $content = $content . "-----------------------------------------------------------------------------------------------";
        $filename = "workers.txt";
        $fp = fopen($filename, "w");
        fwrite($fp, $content );
        fclose($fp);
    }
}