<?php
    class person {
        var $name;
        function setName($newName) {
            $this->name = $newName;
        }
        function getName() {
            return $this->name;
        }
    }
?>