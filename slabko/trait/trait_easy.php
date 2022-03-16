<?php
    trait trait1
    {
        public function method1() {
            return 1;
        }
    }

    trait trait2
    {
        public function method2() {
            return 2;
        }
    }

    trait trait3
    {
        public function method3() {
            return 3;
        }
    }

    interface TraitInterface
    {
        public function method1();
        public function method2();
        public function method3();
    }

    class Test implements TraitInterface
    {
        use trait1;
        use trait2;
        use trait3;

        public function getSum()
        {
            return $this->method1()+$this->method2()+$this->method3();
        }
    }

    $test= new Test();
    echo 'The sum of traits equals '.$test->getSum();
?>