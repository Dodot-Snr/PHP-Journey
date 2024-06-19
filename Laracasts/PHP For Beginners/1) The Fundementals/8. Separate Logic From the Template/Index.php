<?php

    $semuabuku = [
      [
        'nama' => 'Managing Effectively Academia',
        'penulis' => 'Graeme Wilkinson',
        'dari' => 'Sunway University Press',
        'tahun' => '1990'
      ],[
        'nama' => 'Dont Believe Everything You Think',
        'penulis' => 'Joseph Nguyen',
        'dari' => 'MPH',
        'tahun' => '1985'
      ],[
        'nama' => 'Log Book',
        'penulis' => 'Latihan Industri',
        'dari' => 'Politeknik Merlimau',
        'tahun' => '1954'
      ],[
        'nama' => 'Jurnal Refleksi',
        'penulis' => 'Latihan Industri',
        'dari' => 'Politeknik Dunggun',
        'tahun' => '2002'
      ]];

  function filter($items, $fn){
    $filteritem = [];
    foreach ($items as $item){
      if ($fn($item)){
        $filteritem[] = $item;
      }
    }return $filteritem;
  };

  $filterbuku = array_filter($semuabuku, function($buku){
    return $buku['tahun'] >= 1990;
  });
  
  require "Index_views.php"
?>