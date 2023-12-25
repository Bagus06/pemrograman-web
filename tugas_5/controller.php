<?php
include './../config/helper.php';
$datas = [];

if (!empty($_POST)) {
    $data = $_POST;
    if (!empty($data['nim'])) {
        $nim = explode(".", $data['nim']);
    }

    $datas['data'] = [
        'name' => strtoupper(@$data['name']),
        'th_angkatan' => "20" . @$nim[0],
        'dt_fk' => @$dt_fk[@$nim[1]],
        'dt_prodi' => @$dt_prodi[@$nim[1]][@$nim[2]],
        'no_urut' => @$nim[3],
        'ln_nim' => strlen($data['nim']),
    ];

    if (($datas['data']['ln_nim'] !== 13) || (empty($datas['data']['dt_prodi']) || empty($datas['data']['dt_fk']))) {
        $datas['notif'] = "Maaf " . $datas['data']['name'] . ", NIM yang anda masukkan mungkin salah. Mohon untuk memasukkan format NIM dengan benar.";
        $datas['data'] = [];
    }
}
