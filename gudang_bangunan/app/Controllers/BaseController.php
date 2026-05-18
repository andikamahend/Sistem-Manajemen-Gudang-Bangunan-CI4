<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{
    /**
     * Instance dari request
     *
     * @var \CodeIgniter\HTTP\RequestInterface
     */
    protected $request;

    /**
     * Data yang akan dikirim ke view
     *
     * @var array
     */
    protected $data = [];

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Panggil constructor parent
        parent::initController($request, $response, $logger);

        // Tambahkan logic inisialisasi yang diperlukan di sini
        $this->request = $request;
    }
}
