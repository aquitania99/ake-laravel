<?php

namespace Minotaur\Http\Controllers;

use Illuminate\Http\Request;

use Minotaur\Http\Requests;
use Minotaur\Models\Profile;

class InvoiceController extends Controller
{
    public function index() {
        return view('invoices.main-invoices');
    }
}
