<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;  // ContactRequestを用いるために修正
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        // return view('/index');  解答見ずに記述。/不要だった。
        return view('index');
    }
    // public function confirm(Request $request)  // バリデーション実装のため修正
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        // return view('confirm', [$contact->'contact']);   // 解答見ずに記述。
        // return view('confirm', ['contact' => $contact]);
        return view('confirm', compact('contact'));   // 1段上をcompact関数で記述
    }
    // public function store(Request $request)  // バリデーション実装のため修正
    public function store(ContactRequest $request)
    {
        // return view('thanks');   // 解答見ずに記述。多分後で書く
        $contact = $request->only('name', 'email', 'tel', 'content');
        Contact::create($contact);   // この記述全然わかんなかった
        // return view('thanks', compact('contact'));  // 解答見ずに記述
        return view('thanks');
    }
}
