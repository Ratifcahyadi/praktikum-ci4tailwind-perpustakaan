<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use TCPDF;
use App\Controllers\BaseController;


class DashboardController extends BaseController
{

    public function index()
    {
        $sm = new DashboardModel();
        $alldata_semester = $sm->findAll();
        return View('dashboard_rps', ['alldata_semester' => $alldata_semester]);
    }

    public function view($id = false)
    {
        $sm = new DashboardModel();
        $xp = $sm->find($id);
        return View('halaman_rps/rps', ['xp' => $xp]);
    }

    public function unduh_rps($id = false)
    {
        $sm = new DashboardModel();
        $data_c = $sm->find($id);
        // $sm->find($id);
        // return View('halaman_rps/pdf', ['data_c' => $data_c]);
        $html = View('halaman_rps/rps', ['data_c' => $data_c]);
        $pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
        // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        //     // set document information
        $pdf->setCreator(PDF_CREATOR);
        $pdf->setAuthor('Kelompok 2');
        $pdf->setTitle('RPS Mahasiswa');
        $pdf->setSubject('D3 Teknik Informatika');
        $pdf->setKeywords('RPS');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        //     // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        //     // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //     // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->setFont('times', '', 11, '', true);
        $pdf->AddPage();
        //     // output the HTML content
        $pdf->writeHTML($html);

        //     // ---------------------------------------------------------
        $this->response->setContentType('application/pdf');
        //     // Close and output PDF document

        //     // This method has several options, check the source code documentation for more information.
        $pdf->Output('RPS_Amikom.pdf', 'I');
    }


    public function coba($id = false)
    {
        $sm = new DashboardModel();
        $xp = $sm->find($id);
        // return View('halaman_rps/pdf', ['xp' => $xp]);
        $html = view('halaman_rps/pdf', ['xp' => $xp]);
        // create new PDF document
        $pdf = new TCPDF('L', PDF_UNIT, 'A4', false, 'UTF-8', true);


        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // ---------------------------------------------------------

        // set font
        $pdf->SetFont('times', '', 11);

        // add a page
        $pdf->AddPage();
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
        // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

        // create some HTML content
        $this->response->setContentType('application/pdf');

        // output the HTML content
        $pdf->writeHTML($html);

        // reset pointer to the last page
        // $pdf->lastPage();

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }
        // add a page
        $pdf->AddPage();
        // $pdf->setCellHeightRatio(0.8);
        $pdf->Output('RPS_Amikom.pdf', 'I');
    }


    // public function unduh($id = false)
    // {

    //     $sm = new DashboardModel();
    //     $zs = $sm->find($id);
    //     // header('location: halaman_rps/pdf.php');

    //     $pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

    //     // set document information
    //     $pdf->setCreator(PDF_CREATOR);
    //     $pdf->setAuthor('Kelompok 2');
    //     $pdf->setTitle('RPS Mahasiswa');
    //     $pdf->setSubject('D3 Teknik Informatika');
    //     $pdf->setKeywords('RPS');

    //     // set margins
    //     $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    //     $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    //     $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    //     // set auto page breaks
    //     $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    //     // set image scale factor
    //     $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    //     $pdf->setFont('times', '', 11, '', true);
    //     $pdf->AddPage();
    //     // $html = (file_get_contents("/halaman_rps/rps.php"));
    //     $html = view('/halaman_rps/pdf.php', ['zs' => $zs]);

    //     // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    //     // output the HTML content
    //     $pdf->writeHTML($html);

    //     // ---------------------------------------------------------
    //     $this->response->setContentType('application/pdf');
    //     // Close and output PDF document

    //     // This method has several options, check the source code documentation for more information.
    //     $pdf->Output('RPS_Amikom.pdf', 'D');
    // }

    public function add()
    {
        return View('form_input_rps');
    }

    public function proses()
    {
        $sm = new DashboardModel();
        $sm->insert($this->request->getPost());
        return redirect()->to(base_url('dashboard_rps'));
    }

    // public function edit($id)
    // {
    //     $sm = new DashboardModel();
    //     $data_semester['data_semester'] = $sm->find($id);
    //     return view('form_edit', $data_semester);
    // }

    public function edit($id = false)
    {
        $sm = new DashboardModel();
        $data_semester = $sm->find($id);
        return view('form_edit_rps', ['data_semester' => $data_semester]);
    }

    public function edit_rps()
    {
        $sm = new DashboardModel();
        $sm->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url());
    }

    public function delete_rps($id = false)
    {
        $sm = new DashboardModel();
        $sm->delete($id);
        return redirect()->to(base_url());
    }

    public function uppdf()
    {
        return View('upload_rps');
    }

    // public function delete($id = false)
    // {
    //     $sm = new DashboardModel();
    //     $sm->delete($id);
    //     return redirect()->to(base_url());
    // }
}
