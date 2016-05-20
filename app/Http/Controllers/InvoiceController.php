<?php

namespace Akela\Http\Controllers;

use Illuminate\Http\Request;

use Akela\Http\Requests;
use Akela\Models\Profile;

class InvoiceController extends Controller
{
    public function index() {
        return view('invoices.main-invoices');
    }
}
