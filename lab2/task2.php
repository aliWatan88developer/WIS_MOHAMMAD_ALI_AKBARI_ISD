<?php

class StudentCounter
{
    public static $count = 0;      // public static property that the value is setet zero

    public static function addStudent()
    {
        self::$count++;
    }
}

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count;

?>
