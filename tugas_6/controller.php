<?php
include './../config/helper.php';
$datas = [];

if (!empty($_POST)) {
    $data = $_POST;

    if ($data['action'] === 'Tambah Barang') {
        $datas['temp_data'] = $data;
    } elseif ($data['action'] === 'Selesai') {
        if (!empty($data)) {
            $datas['data'] = [
                'item' => [],
                'subtotal' => 0,
                'discount' => 0,
                'total' => 0,
            ];
            foreach ($data['code'] as $key => $value) {
                $value = strtoupper($value);
                $total = 0;
                if (!empty($dt_items[$value])) {
                    $total = $dt_items[$value]['price'] * $data['qty'][$key];
                    $datas['data']['subtotal'] = $datas['data']['subtotal'] + $total;
                    $datas['data']['item'][] = [
                        'code' => $value,
                        'title' => $dt_items[$value]['title'],
                        'price' => $dt_items[$value]['price'],
                        'qty' => $data['qty'][$key],
                        'total' => $total
                    ];
                }
            }

            if ($datas['data']['subtotal'] > 500000) {
                $datas['data']['discount'] = 5;
                $datas['data']['total'] = $datas['data']['subtotal'] - (($datas['data']['subtotal'] * $datas['data']['discount']) / 100);
            } else {
                $datas['data']['total'] = $datas['data']['subtotal'];
            }
        }

        $datas['temp_data'] = [];
    }

    function idr($value = 0)
    {
        return "Rp " . number_format($value, 2, ",", ".");
    }
}
