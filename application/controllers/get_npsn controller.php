function get_npsn()
  {
    $npsn = $this->input->post('npsn');
    $url = "https://referensi.data.kemdikbud.go.id/tabs.php?npsn=" . $npsn;
    $ch = curl_init($url);
    curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER => true]);
    $get = curl_exec($ch);
    $res = checkNPSN($get);
    $sekolah = $res['nama'];
    $alamat = $res['alamat'];
    $jenjang = $res['jenjang'];
    if ($jenjang == 'SMA') {
      $jenjang = 1;
    } elseif ($jenjang == 'SMK') {
      $jenjang = 2;
    } elseif ($jenjang == 'MA') {
      $jenjang = 3;
    } else {
      $jenjang = 4;
    }
    $status = $res['status'];
    if ($status == 'NEGERI') {
      $status = 1;
    } else {
      $status = 2;
    }
    curl_close($ch);
    if ($res = '') {
      echo "Data tidak ditemukan";
      exit;
    } else {
      $hasil = array(
        'npsn' => $npsn,
        'nama_sekolah' => $sekolah,
        'alamat_sekolah' => $alamat,
        'status_sekolah' => $status,
        'jenis_sekolah' => $jenjang,
      );
    }
    echo json_encode($hasil);
  }
}