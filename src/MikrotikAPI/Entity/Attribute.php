<?php
/*
*
 * @author      Ariyan Shipu 
 * @email ariyanshipuoffical@gmail.com 
 * @url <https://github.com/ariyanshipuofficial>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 * 
 */

namespace MikrotikAPI\Entity;


class Attribute {

    private $clause;
    private $name;
    private $value;

    public function __construct($clause = '', $name = '', $value = '') {
        $this->clause = $clause;
        $this->name = $name;
        $this->value = $value;
    }

    public function setClause($clause) {
        $this->clause = $clause;
    }

    public function getClause() {
        return $this->clause;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

}
