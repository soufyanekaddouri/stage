<?php

interface BerekenInterface {
    public function berekenen($percentage, $bedrag);
}

class Table implements BerekenInterface   {
    public function save(array $data) {
        return 'foo';
    }


    public function berekenen($percentage, $bedrag) {
        return ($percentage / $bedrag) * 100;
    }

}


class Table2 implements BerekenInterface   {
    public function save(array $data) {
        return 'foo';
    }


    public function berekenen($percentage, $bedrag) {
        return $percentage * $bedrag;
    }

}

class Table3 implements BerekenInterface  {
    public function save(array $data) {
        return 'foo';
    }


    public function berekenen($percentage, $bedrag) {
        return $percentage * $bedrag;
    }

}


$table = new Table();
BerekenDit($table);


function BerekenDit(BerekenInterface $i) {
    echo "Uw BTW bedraagt: €".$i->berekenen(21, 900). "\n";

}