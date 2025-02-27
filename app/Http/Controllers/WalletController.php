<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        // Se asume que el usuario tiene el campo 'balance'. De lo contrario, usar 0.
        $balance = Auth::user()->balance ?? 0;
        return view('front.wallet', compact('balance'));
    }

    public function updateBalance(Request $request)
    {
        $request->validate([
            'action' => 'required|in:add,withdraw',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = Auth::user();
        $amount = $request->input('amount');

        if ($request->input('action') === 'add') {
            $user->balance += $amount;
        } else {
            if ($user->balance < $amount) {
                return back()->withErrors('Saldo insuficiente');
            }
            $user->balance -= $amount;
        }

        $user->save();
        return redirect()->route('wallet');
    }
}
