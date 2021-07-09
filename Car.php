<?php


abstract class Car {
    protected $color;
    protected $speed;
    protected $gearbox;
    protected $releaseDate;
    public function __construct($col = 'white', $sp = 60, $gbox = 'auto', $relDate = '2021') {
        $this->color = $col;
        $this->speed = $sp;
        $this->gearbox = $gbox;
        $this->releaseDate = $relDate;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getGearbox()
    {
        return $this->gearbox;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setGearbox($gearbox)
    {
        $this->gearbox = $gearbox;
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    abstract protected function brake();
    abstract protected function accelerate();
}

class BMW extends Car {
    private $model;

    public function __construct($mod, $col, $sp, $gbox, $relDate)
    {
        parent::__construct($col, $sp, $gbox, $relDate);
        $this->model = $mod;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function brake()
    {
        if($this->speed >= 15) {
            $this->speed -= 15;
        }
        return $this->speed;
    }

    public function accelerate()
    {
        if($this->speed <= 250) {
            $this->speed += 15;
        }
        return $this->speed;
    }
}

class Mercedes extends Car {
    private $model;

    public function __construct($mod, $col, $sp, $gbox, $relDate)
    {
        parent::__construct($col, $sp, $gbox, $relDate);
        $this->model = $mod;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function brake()
    {
        if($this->speed >= 10) {
            $this->speed -= 10;
        }
        return $this->speed;
    }

    public function accelerate()
    {
        if($this->speed <= 250) {
            $this->speed += 10;
        }
        return $this->speed;
    }
}

$bmw = new BMW('M3', 'black', 220, 'auto', '2020');
echo $bmw->accelerate();
$mercedes = new Mercedes('AMG GT', 'white', 220, 'auto', '2021');
echo $mercedes->brake();