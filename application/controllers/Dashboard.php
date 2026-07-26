<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard');
        $this->load->view('templates/footer');
    }

    public function simpan_transaksi()
    {
        $id_order = rand(11111111, 99999999);
        $nama_customer = $this->input->post('nama_customer', true);
        $status_order = $this->input->post('status_order', true);
        $durasi = $this->input->post('durasi', true);
        $berat_input = $this->input->post('berat', true);
        $nominal = $this->input->post('nominal', true);
        $berat = $this->normalize_berat_to_kg($berat_input);

        $data = array(
            'id_order' => $id_order,
            'nama_customer' => $nama_customer,
            'status_order' => $status_order,
            'durasi' => $durasi,
            'berat' => $berat,
            'nominal' => $nominal,
            'status_transaksi' => 'Belum Lunas',
            'keterangan' => 'Transaksi baru',
            'timestamp' => date('Y-m-d H:i:s')
        );

        $this->db->insert('transaksi', $data);
        redirect('dashboard');
    }

    private function normalize_berat_to_kg($value)
    {
        if ($value === null || $value === '') {
            return 0;
        }

        $value = trim(str_replace(',', '.', $value));
        if (preg_match('/^([0-9]+(?:\.[0-9]+)?)\s*(kg|g|gram|gr)?$/i', $value, $matches)) {
            $number = (float) $matches[1];
            $unit = strtolower($matches[2] ?? 'kg');

            if (in_array($unit, array('g', 'gram', 'gr'), true)) {
                $number = $number / 1000;
            }

            return round($number, 2);
        }

        return round((float) $value, 2);
    }
}
