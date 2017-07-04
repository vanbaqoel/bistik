<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

        /* Load database model */
        $this->load->model('mjadwal');

        /* Initialize minifier */
        // $this->ci_minifier->set_domparser(2);
	}

	public function index()
	{
		$this->load->view('vheader');
	}

	public function populate_kota()
	{
		$list = $this->mjadwal->getKota();
		$dat = array();
		foreach ($list as $row) {
			$rows = array();
			$rows['kd_kota'] = $row->kd_kota;
			$rows['nm_kota'] = $row->nm_kota;
			$rows['kd_provinsi'] = $row->kd_provinsi;
			$rows['nm_provinsi'] = $row->nm_provinsi;

			$dat[] = $rows;
		}

		$output = array("data" => $dat);
        $this->output->set_output(json_encode($output));
	}

	public function cari_jadwal()
	{
		$tgl_berangkat = $this->input->post('dtp-tanggal');
		$tgl = date("Y-m-d", strtotime($tgl_berangkat));
		$kota_asal = $this->input->post('cbo-asal');
		$kota_tujuan = $this->input->post('cbo-tujuan');
		$jml_penumpang = $this->input->post('txt-penumpang');
		
		$list = $this->mjadwal->getJadwal($tgl, $kota_asal, $kota_tujuan, $jml_penumpang);
		$datas = array();
        foreach($list as $row){
            $rows = array();
            $rows[] = $row->kd_tiket; 
			$rows[] = $row->nm_kota_asal; 
			$rows[] = $row->bpoint_asal; 
			$rows[] = $row->nm_kota_tujuan; 
			$rows[] = $row->bpoint_tujuan; 
			$rows[] = $row->via; 
			$rows[] = $row->kelas; 
			$rows[] = $row->pergi; 
			$rows[] = $row->lama_jalan; 
			$rows[] = $row->harga; 
			$rows[] = $row->seat; 
			$rows[] = $row->fasilitas;

            $datas[] = $rows;
        }

        $data = array(
            "datas" => $datas,
			"tgl_berangkat" => $tgl,
			"kota_asal" => $kota_asal,
			"kota_tujuan" => $kota_tujuan,
			"jml_penumpang" => $jml_penumpang
        );

        $this->load->view("vjadwal", $data);
		// $this->output->set_output(json_encode($output));
	}

	public function pesan_tiket($kd_tiket, $berangkat, $tiba, $jml_penumpang)
	{
		$list = $this->mjadwal->insertBooking($kd_tiket, $berangkat, $tiba, $jml_penumpang);
		$data = array(
			"kd_booking" => $list->kd_booking,
			"expired" => $list->expired,
			"jml_penumpang" => $list->jml_penumpang
		);

		$this->session->set_userdata($data);

		redirect('pemesanan/manifest');
	}

	public function manifest()
	{
		$this->load->view("vmanifest");
	}
}
