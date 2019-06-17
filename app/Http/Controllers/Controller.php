<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function insert(Request $req)
    {
        $name = $req->input('name');
        if(empty($name))
        {
            echo "Name must not be empty!";
            die();
        }
        $email = $req->input("email"); 
        $phoneNumber = $req->input("phoneNumber");
        if(empty($phoneNumber))
        {
            echo "Phone number must not be empty!";
            die();
        }
        $address = $req->input("address");
        
        $data = array('name' => $name,'email' => $email, 'phoneNumber'=>$phoneNumber, 'address'=>$address);
        DB::table('users')->insert($data);
        
        return redirect('/');
    }
    
    public function getData()
    {
        $data['data'] = DB::table('users')->get();
        
        if(count($data) > 0)
        {
            return view('pages.messages.insertForm',$data);
        }
        else 
        {
            return view('pages.messages.insertForm');
        }
    }
    
    public function delete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/');

    }
    
    public function edit($id)
    {
        $user = \App\Models\User::find($id);
        return view('pages.messages.edit', compact('user','id'));
    }
    
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phoneNumber' =>'required'
        ]);
        $user = \App\Models\User::find($id);
        $user -> name = $request->get('name');
        $user -> email = $request->get('email');
        $user -> phoneNumber = $request->get('phoneNumber');
        $user -> address = $request->get('address');
        $user->save();
        return redirect('/');
    }
}
?>