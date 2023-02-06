<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation applied here
        $request->validate([

            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required|min:10|max:10",
            "subject"=>"required",
            "message"=>"required" 
        ]);

         // insert data in contacts table
         $data=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "mobile"=>$request->phone,
            "subject"=>$request->subject,
            "message"=>$request->message
        );
        //elequent query builder using ORM(object relational mapping model)
        ContactModel::create($data);

        // sending email from mail package from package name
        Mail::to('amikhunt91@gmail.com')->send(new SendMail($data));
        //return view('crudapp.contact');
        return redirect('contact-us')->with('success','Thanks for contact with us our one of admin contact with you Soon!'); 

    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=ContactModel::all();
        return view('crudapp.admin.managecontact',["data"=>$data]);

    }

    /**k
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete from tablename where id='id';
        ContactModel::where('id',$id)->delete();
        return redirect('admin-login/managecontact')->with('del','your contact successfully deleted');
    }
}
