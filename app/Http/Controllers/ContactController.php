<?php



namespace App\Http\Controllers;



use App\Models\Contact;

use App\Models\ContactUs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller

{

    public function index()

    {

        $response = Contact::all();

        return view('contact.contact', ['contact' => $response]);
    }



    public function add_new()

    {

        return view('contact.add_new_contact');
    }



    public function insert(Request $request)

    {



        $data = [

            'name' => $request->name,

            'address' => $request->address,

            'station' => $request->station,

            'telephone' => $request->telephone,

            'fax' => $request->fax,

            'email' => $request->email,

        ];

        $response = Contact::create($data);

        if ($response) {

            return redirect('/admin/contact')->with('success', 'Your contact has been created.');
        } else {

            return redirect('/admin/contact')->with('error', 'Something Went Wrong');
        }
    }



    public function edit($id)

    {

        $response = Contact::where('id', $id)->first();
        return view('contact/edit', ['id' => $id, 'value' => $response]);
    }

    public function update(Request $request)

    {

        $data = [

            'name' => $request->name,

            'address' => $request->address,

            'station' => $request->station,

            'telephone' => $request->telephone,

            'fax' => $request->fax,

            'email' => $request->email,

        ];

        $response = Contact::where('id', $request->id)->update($data);

        if ($response) {

            return redirect('/admin/contact')->with('success', 'Your contact has been Updated.');
        } else {

            return redirect('/admin/contact')->with('error', 'Something Went Wrong');
        }
    }



    // teams



    public function destroy($id)

    {

        Contact::where('id', '=', $id)->delete();

        return redirect('admin/contact');
    }



    public function contact_us()

    {

        $response = ContactUs::where('type', '0')->get();

        return view('contact.contact_us', ['contact' => $response]);
    }
    public function apply_us()

    {

        $response = ContactUs::where('type', '1')->get();

        return view('contact.apply', ['contact' => $response]);
    }
    public function emergency_contact()
    {
        $emergency_contact = DB::table('emergency_contact')->get();
        return view('contact.emergency_contact', ['contact' => $emergency_contact]);
    }
}
