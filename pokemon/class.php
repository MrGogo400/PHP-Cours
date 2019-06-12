<?php

    class Pokemon {

        public $name;
        public $level;
        public $max_life;
        public $life;
        public $type;
        public $strength;

        public function __construct($name, $level, $life, $type, $strength) {
            $this->name = $name;
            $this->level = $level;
            $this->life = $life;
            $this->max_life = $life;
            $this->type = $type;
            $this->strength = $strength;
        }

        public function level_up() {
            $this->level += 1;
            $this->life += 5;
            $this->strength += 8;

            $str = $this->name . ' est maintenant au niveau '. $this->level;

            $str2 = 'Sa vie augmenté de ' . $this->life . ' et sa force à augmenté de ' . $this->strength;

            echo $str;
            echo $str2;

            return true;

        }

        public function take_damages($damages) {

            $this->life -= $damages;

        }

        public function attack(Pokemon $pokemon) {

            $value = $this->strength * ceil(rand(900, 1100) / 1000);

            $pokemon->take_damages($value);

            $str = $this->name . ' à infligé ' . $value . ' points de dégats à ' . $pokemon->name . ' !';

            $str2 = $pokemon->name . ' à maintenant ' . $pokemon->life . ' HP !';

            echo $str;
            echo $str2;

            return true;

        }



    }

?>