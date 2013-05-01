<?php
class DateModule
{
    public function valiableDate($date = "")
    {
        preg_match('/^([0-9]|[0-9]{2}):[0-9]{2}$/i', $date, $mathes);
        if (empty($mathes)) {
            return false;
        }

        return true;
    }
}
