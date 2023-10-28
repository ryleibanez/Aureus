<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    //
    public function addresspage(){
        return view('dash-address-book');
    }
    
    public function editAddressPage(){
        return view('dash-address-edit');
    }

    public function updateAddress(Request $request){
        $email = auth()->user()->email;
        $user = User::where('email', $email)->first();

        if($user){
            $validator = Validator::make($request->all(), [
                'address' => 'required',
                
            ]);

            if ($validator->fails()) {
                // Validation failed
                return response()->json([
                    'errors' => $validator->errors(),
                ], 422);
            }

            $user->address = $request->address;

            $update = $user->save();

            if($update){
                session()->flash('status', 'success');
                return response()->json(['status' => 'success']);
            }else{
                return response()->json(['status' => 'failed']);
            }
        }

    }

}
