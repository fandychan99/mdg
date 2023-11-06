<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
    function echo_array($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    function rupiah_format($angka)
    {
        return "Rp " . number_format($angka, 0, ',', '.');
    }

    function commaToDot($angka)
    {
        return str_replace(",", ".", $angka);
    }

    function remove_number_format($angka)
    {
        $angka = str_replace(".", "", $angka);
        $angka = str_replace(",", "", $angka);
        return $angka;
    }

    function remove_rupiah_format($angka)
    {
        $angka = str_replace("Rp ", "", $angka);
        $angka = str_replace(".", "", $angka);
        $angka = str_replace(",00", "", $angka);
        return $angka;
    }

    function word_cut($text, $num_char)
    {

        return '<div title="' . $text . '">' . substr($text, 0, $num_char) . '...' . '</div>';
    }

    function str_cut($text, $num)
    {
        return '<div title="' . $text . '">' . word_limiter($text, $num) . '</div>';
    }

    function cut_word($text, $num)
    {
        return '<div>' . word_limiter($text, $num) . '</div>';
    }

    function first_char($word)
    {
        $x = strip_tags(str_replace('...', '', word_cut($word, 1)));
        return $x[0];
    }

    function gathered_data($th = array())
    {
        for ($i = 0; $i < count($th); $i++) {
            $row[]  = $th[$i];
        }
        return $row;
    }

    function number_format_decimal($angka)
    {
        return number_format($angka, 2, '.', ',');
    }

    function number_format_satuan($angka)
    {
        return number_format($angka, 0, ',', '.');
    }

    
    function check_empty_form($data, $exclude_list = array())
    {
        $empty = 0;
        foreach ($data as $key => $val) {
            if (!$val && !in_array($key, $exclude_list))
                $empty++;
        }
        return $empty;
    }
