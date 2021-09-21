<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function sendPaidInvoiceNotification(){
        $user = User::first();
        Notification::send($user, new InvoicePaid());
    }
}
