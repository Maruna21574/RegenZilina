<?php

namespace App\Http\Controllers;

use App\Models\DiscountCode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscountController extends Controller
{
    public function spin(Request $request): JsonResponse
    {
        $sessionKey = 'discount_spun';
        if (session($sessionKey)) {
            return response()->json(['message' => 'Už ste využili svoju šancu.'], 429);
        }

        $percent = rand(1, 100) <= 40 ? 10 : 5;

        $code = 'REGEN' . $percent . '-' . strtoupper(Str::random(6));

        DiscountCode::create([
            'code' => $code,
            'percent' => $percent,
            'expires_at' => now()->addDays(7),
        ]);

        session([$sessionKey => true]);

        return response()->json([
            'percent' => $percent,
            'code' => $code,
        ]);
    }

    public function validate(Request $request): JsonResponse
    {
        $request->validate(['code' => 'required|string']);

        $discount = DiscountCode::where('code', $request->code)->first();

        if (!$discount) {
            return response()->json(['valid' => false, 'message' => 'Neplatný kód.']);
        }

        if (!$discount->isValid()) {
            return response()->json(['valid' => false, 'message' => 'Kód vypršal alebo bol už použitý.']);
        }

        return response()->json([
            'valid' => true,
            'percent' => $discount->percent,
            'message' => "Zľava {$discount->percent}% bola aplikovaná!",
        ]);
    }
}
