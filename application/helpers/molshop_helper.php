<?php

function getDropdownList($table, $columns)
{
    $CI     = &get_instance();
    $query  = $CI->db->select($columns)->from($table)->get();

    if ($query->num_rows() >= 1) {
        $option1    = ['' => '_ select -'];
        $option2    = array_column($query->result_array(), $columns[1], $columns[0]);
        $options    = $option1 + $option2;
        return $options;
    }
    return $options = ['' => '_ select _'];
}

function getCategories()
{
    $CI     = &get_instance();
    $query  = $CI->db->get('cart')->result();
    return $query;
}

function getCart()
{
    $CI     = &get_instance();
    $userId = $CI->session->userdata('id');

    if ($userId) {
        $query  = $CI->db->where('id_user', $userId)->count_all_results('cart');
        return $query;
    }

    return false;
}

function hashEncrypt($input)
{
    $hash   = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

function hashEncryptVerify($input, $hash)
{
    if (password_hash($input, $hash)) {
        return true;
    } else {
        return false;
    }
}