<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('checkNPSN')) {
    function getStringBetween($teks, $sebelum, $sesudah)
    {
        $teks = ' ' . $teks;
        $ini = strpos($teks, $sebelum);
        if ($ini == 0) return '';
        $ini += strlen($sebelum);
        $panjang = strpos($teks, $sesudah, $ini) - $ini;
        return substr($teks, $ini, $panjang);
    }
    function checkNPSN($get)
    {
        $tabOne = getStringBetween($get, '<div id="tabs-1">', '</div>');
        $tableOne = getStringBetween($tabOne, '<table>', '</table>');
        $arrTabOne = explode("</tr>", $tableOne);
        $getNama = explode("</td>", $arrTabOne[0])[3];
        $nama = getStringBetween($getNama, '">', '</a>');
        $getNpsn = explode("</td>", $arrTabOne[1])[3];
        $npsn = explode('>', $getNpsn)[1];
        $getAlamat = explode("</td>", $arrTabOne[2])[3];
        $alamat = explode('>', $getAlamat)[1];
        $getKodePos = explode("</td>", $arrTabOne[3])[3];
        $kodePos = explode('>', $getKodePos)[1];
        $getDesKel = explode("</td>", $arrTabOne[5])[3];
        $desKel = explode('>', $getDesKel)[1];
        $getKecKot = explode("</td>", $arrTabOne[6])[3];
        $kecKot = explode('>', $getKecKot)[1];
        $getKabKot = explode("</td>", $arrTabOne[7])[3];
        $kabKot = explode('>', $getKabKot)[1];
        $getProv = explode("</td>", $arrTabOne[8])[3];
        $provinsi = explode('>', $getProv)[1];
        $getStat = explode("</td>", $arrTabOne[9])[3];
        $statusSek = explode('>', $getStat)[1];
        $getWp = explode("</td>", $arrTabOne[11])[3];
        $waktuPen = explode('>', $getWp)[1];
        $getJp = explode("</td>", $arrTabOne[13])[3];
        $jenjangPen = explode('>', $getJp)[1];
        $tabTwo = getStringBetween($get, '<div id="tabs-2">', '</div>');
        $tableTwo = getStringBetween($tabTwo, '<table>', '</table>');
        $arrTabTwo = explode("</tr>", $tableTwo);
        $getNaungan = explode("</td>", $arrTabTwo[0])[3];
        $naungan = explode(">", $getNaungan)[1];
        $getNoSKPendirian = explode("</td>", $arrTabTwo[1])[3];
        $noSKPendirian = strpos($getNoSKPendirian, "Perlu Update") ? "Perlu Update" : explode(">", $getNoSKPendirian)[1];
        $getTglSKPendirian = explode("</td>", $arrTabTwo[2])[3];
        $TglSKPendirian = explode(">", $getTglSKPendirian)[1];
        $getNoSKOperasional = explode("</td>", $arrTabTwo[4])[3];
        $noSKOperasional = strpos($getNoSKOperasional, "Perlu Update") ? "Perlu Update" : explode(">", $getNoSKOperasional)[1];
        $getTglSKOperasional = explode("</td>", $arrTabTwo[5])[3];
        $tglSKOperasional = explode(">", $getTglSKOperasional)[1];
        $getAkreditasi = explode("</td>", $arrTabTwo[8])[3];
        $akreditasi = getStringBetween($getAkreditasi, '<strong>', '</strong>');
        $getNoSKAkreditasi = explode("</td>", $arrTabTwo[10])[3];
        $noSKAkreditasi = explode(">", $getNoSKAkreditasi)[1];
        $getTglSKAkreditasi = explode("</td>", $arrTabTwo[11])[3];
        $tglSKAkreditasi = explode(">", $getTglSKAkreditasi)[1];
        $getNoSerISO = explode("</td>", $arrTabTwo[13])[3];
        $noSerISO = explode(">", $getNoSerISO)[1];
        $res = ['npsn' => trim($npsn), 'nama' => trim($nama), 'alamat' => trim($alamat), 'kode_pos' => trim($kodePos), 'desa_kelurahan' => trim($desKel), 'kecamatan' => trim($kecKot), 'kabupaten_kota' => trim($kabKot), 'provinsi' => trim($provinsi), 'status' => trim($statusSek), 'waktu' => trim($waktuPen), 'jenjang' => trim($jenjangPen), 'naungan' => trim($naungan), 'no_sk_pendirian' => trim($noSKPendirian), 'tgl_sk_pendirian' => trim($TglSKPendirian), 'no_sk_operasional' => trim($noSKOperasional), 'tgl_sk_operasional' => trim($tglSKOperasional), 'akreditasi' => trim($akreditasi), 'no_sk_akreditasi' => trim($noSKAkreditasi), 'tgl_sk_akreditasi' => trim($tglSKAkreditasi), 'no_sertifikat_iso' => trim($noSerISO)];
        if ($res['nama'] == '') {
            $res = '';
        } else {
            return $res;
        }
    }
}