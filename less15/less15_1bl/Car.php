<?php


class Car
{
public  $model;
public $color;
public $horsepower;
public $production_year;


    public function show()
    {
        echo "
           <div style='padding: 20px; background: #e3e3e3; font-family: 'Comic Sans MS' '>
            <h2>Model: $this->model</h2> 
            <p>Color: <span style='color: $this->color'>$this->color</span></p>
            <p>Horsepower: $this->horsepower</p>
            <p>Year: $this->production_year</p>                    
</div>
        ";
    }
    public function save()
    {
        $filename = "{$this->model}_{$this->production_year}.txt";
        $data = "Model: $this->model\nColor: $this->color\nHorsepower: $this->horsepower\nYear: $this->production_year";
        $fp = fopen("$filename", "w");
        fwrite($fp, $data );
        fclose($fp);
    }


}