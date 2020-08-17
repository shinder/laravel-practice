<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
//use Illuminate\Validation\Rule;
//use Illuminate\Validation\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        // $c = Customer::orderBy('客戶編號', 'desc')->paginate(5);
        $c = Customer::where('姓名', 'LIKE', "%{$search}%")->orderBy('客戶編號', 'desc')->paginate(5);

        return view('customer.index', [
           'customers' => $c,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('customer.create', [
            'session' => $request->session()->all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. 驗證資料

        $validatedData = $request->validate([
            '姓名' => 'required',
            '手機' => 'nullable|regex:/^09\d{2}-?\d{3}-?\d{3}$/', // 非必填
        ], [
            '姓名.required' => '姓名欄位必填',
            '手機.regex' => '手機號碼請符合格式 09XX-XXX-XXX',
        ]);

        // 2. 儲存
        $cs = new Customer();
        $cs->姓名 = $request->姓名;
        $cs->電話 = $request->電話;
        $cs->手機 = $request->手機;
        $cs->傳真 = $request->傳真;
        $cs->電郵 = $request->電郵;
        $cs->地址 = $request->地址;
        $cs->save();

        // 3. 轉向
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = Customer::findOrFail($id);
        return view('customer.show', [
            'customer' => $c,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Customer::findOrFail($id);
        return view('customer.edit', [
            'customer' => $c,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            '姓名' => 'required',
            '手機' => 'nullable|regex:/^09\d{2}-?\d{3}-?\d{3}$/', // 非必填
        ], [
            '姓名.required' => '姓名欄位必填',
            '手機.regex' => '手機號碼請符合格式 09XX-XXX-XXX',
        ]);

        Customer::where('客戶編號', $id)
            ->update([
                '姓名' => $request->姓名,
                '電話' => $request->電話,
                '手機' => $request->手機,
                '傳真' => $request->傳真,
                '電郵' => $request->電郵,
                '地址' => $request->地址,
            ]);

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
