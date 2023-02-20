<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;
use App\Http\Controllers\MailController;

class CustomerController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Customer::class, 'customer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('first_name', 'last_name', 'job_title', 'city', 'country'), Customer::class);

        return CustomerResource::collection($registros->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = json_decode($request->getContent(), true);
        $customerData = $customer['data']['attributes'];
        $customerData['user_id'] = $customerData['userId'];
        unset($customerData['userId']);

        $customer = Customer::create($customerData);

        //Envia un email cuando se crea un nuevo customer a partir de cualquier user ya creado
        //no se pueden crear user nuevos
        MailController::getMail();

        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customerData = json_decode($request->getContent(), true);
        $customer->update($customerData['data']['attributes']);

        return new CustomerResource($customer);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
    }
}
