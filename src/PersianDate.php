<?php
/**
 * Created by PhpStorm.
 * User: setali
 */

namespace Drupal\persian_date;


class PersianDate {

    public function getJalali($format, $timestamp = NULL, $tr_num = 'en', $time_zone = 'Asia/Tehran') {
        if ($timestamp == NULL)
            $timestamp = time();

        module_load_include('php', 'persian_date', 'jdf');

        return jdate($format, $timestamp, '', $time_zone, $tr_num);
    }
}