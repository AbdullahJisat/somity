<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaction;
use App\Services\TransactionService;

class TransactionController extends Controller
{
    private $transaction;

    /**
     * __construct
     *
     * @param  mixed $transactionService
     * @return void
     */
    public function __construct(TransactionService $transactionService)
    {
        $this->transaction = $transactionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(!auth()->user()->can('transaction-view'), 401);
        return view('transaction.index', ['depositTransactions' => $this->transaction->depositTransaction(['*'], ['user']), 'withdrawTransactions' => $this->transaction->withdrawTransaction(['*'], ['user'])]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaction $request)
    {
        try {
            abort_if(!auth()->user()->can('transaction-create'), 401);
            $this->transaction->store($request->all());
            return back()->with('success', actionMessage('save'));
        } catch (\Throwable $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            abort_if(!auth()->user()->can('transaction-edit'), 401);
            return $this->transaction->edit($id);
        } catch (\Throwable $e) {
            return $e;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTransaction $request)
    {
        try {
            abort_if(!auth()->user()->can('transaction-edit'), 401);
            $this->transaction->update($request->id, $request->all());
            return back()->with('success', actionMessage('update'));
        } catch (\Throwable $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
