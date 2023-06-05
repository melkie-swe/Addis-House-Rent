<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Booking;
use App\Models\House;
use App\Models\RequestResponse;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Psy\Command\WhereamiCommand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $houses = House::where('status', 1)->latest()->where('isaproved', 'aproved')->paginate(6);
        $areas = Area::all();
        return view('welcome', compact('houses', 'areas'));
    }
    public function highToLow()
    {
        $houses = House::where('status', 1)->where('isaproved', 'aproved')->orderBy('rent', 'DESC')->paginate(6);
        $areas = Area::all();
        return view('welcome', compact('houses', 'areas'));
    }
    public function lowToHigh()
    {
        $houses = House::where('status', 1)->where('isaproved', 'aproved')->orderBy('rent', 'ASC')->paginate(6);
        $areas = Area::all();
        return view('welcome', compact('houses', 'areas'));
    }
    public function details($id){
        $house = House::findOrFail($id);
        $property_type = DB::table('property_type')->where('id',$house->property_type_id)->first();

        return view('houseDetails', compact('house','property_type'));
    }
    public function allHouses(){
        $houses = House::latest()->where('status', 1)->where('isaproved', 'aproved')->paginate(12);
        return view('allHouses', compact('houses'));
    }

    public function areaWiseShow($id){
        $area = Area::findOrFail($id);
        $houses = House::where('area_id', $id)->where('isaproved', 'aproved')->get();

        return view('areaWiseShow', compact('houses', 'area'));
    }

    public function search(Request $request){

        $room = $request->room;
        $bathroom = $request->bathroom;
        $rent = $request->rent;
        $address = $request->address;


        if( $room == null && $bathroom == null && $rent == null && $address == null){
            session()->flash('search', 'Your have to fill up minimum one field for search');
            return redirect()->back();
        }

        $houses = House::where('rent', 'LIKE', $rent)
            ->where('number_of_toilet', 'LIKE', $bathroom)
            ->where('number_of_room', 'LIKE',  $room)
            ->where('address', 'LIKE', "%$address%")
            ->get();
        return view('search', compact('houses'));
    }

    public function searchByRange(Request $request){
        $digit1 =  $request->digit1;
        $digit2 =  $request->digit2;
        if($digit1 > $digit2){
            $temp = $digit1;
            $digit1 =  $digit2;
            $digit2 = $temp;
        }
        $houses = House::whereBetween('rent', [$digit1, $digit2])
                        ->orderBy('rent', 'ASC')->get();
        return view('searchByRange', compact('houses'));
    }


    public function booking($house){

        // if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
        //     session()->flash('danger', 'Sorry admin and landlord are not able to book any houses. Please login with renter account');
        //     return redirect()->back();
        // }


        $house = House::findOrFail($house);
        $landlord = User::where('id', $house->user_id)->first();

        if(Booking::where('address', $house->address)->where('booking_status', "booked")->count() > 0){
            session()->flash('danger', 'This house has already been booked!');
            return redirect()->back();
        }



        if(Booking::where('address', $house->address)->where('renter_id', Auth::id())->where('booking_status', "requested")->count() > 0){
            session()->flash('danger', 'Your have already sent booking request of this home');
            return redirect()->back();
        }





        //find current date month year
        // $now = Carbon::now();
        // $now = $now->format('F d, Y');


        $booking = new Booking();
        $booking->address = $house->address;
        $booking->rent = $house->rent;
        $booking->landlord_id = $landlord->id;
        $booking->renter_id = Auth::id();
        $booking->save();


        session()->flash('success', 'House Booking Request Send Successfully');
        return redirect()->back();


    }

     public function aboutus(){
    return view('footer.aboutus');
    }
     public function sendRequest($id)
    {
     $data = User::find($id);
       return view('renter.booking.sendRequest', compact('data'));
    }


      public function send_request(Request $request)
    {
        $appoint = new RequestResponse();
        $appoint->landlord_id = $request->id;
        $appoint->landlord_contact = $request->contact;
        $appoint->landlord_email = $request->email;
        $appoint->mentenance_type = $request->mentenance_type;
        $appoint->message = $request->message;

        if (Auth::id()) {
            $appoint->renter_id = Auth::user()->id;

            $appoint->renter_name = Auth::user()->name;
        }
        $appoint->status = "submited";
        $appoint->save();
        return redirect()->back()->with('message', 'Succsessfully sent please visit the page 10 minute later ?');
    }
    public function see_requests(){
        $requests = RequestResponse::where('landlord_id', Auth::id())
                                    ->where('type','Request')
                                       ->get();
       return view('landlord.booking.seeRequest', compact('requests'));
    }
  public function send_response($id)
    {
     $data = RequestResponse::find($id);
       return view('landlord.booking.send_response', compact('data'));
    }
     public function post_response(Request $request)
    {
     $appoint = new RequestResponse();
        if (Auth::id()) {
            $appoint->landlord_id = Auth::user()->id;
            $appoint->landlord_contact = Auth::user()->contact;
        }
        $appoint->landlord_email = $request->email;
        $appoint->message = $request->message;

        $appoint->mentenance_type = $request->mentenance_type;
        $appoint->renter_id =$request->renter_id;
        $appoint->renter_name = $request->renter_name;
        $appoint->type = "Response";
        $appoint->status = "Accepted";
        $appoint->save();
        return redirect()->back()->with('message', 'Succsessfully Send ?');
      }

 public function see_responce(){
        $requests = RequestResponse::where('renter_id', Auth::id())
                                    ->where('type','Response')
                                       ->get();
       return view('renter.booking.seeResponse', compact('requests'));
    }
public function back_renter(){
        $books = booking::all();
    return view('renter.booking.history',compact('books'));
}
// public function back_renter(){
//         $areas = Area::all();
//         $houses = House::all();
//         $renters = User::all();
//         $landlords =User::all();
//     return view('renter.dashboard',compact('areas','houses','renters','landlords'));
// }

   public function approve_post($id)
    {
        $approved = House::find($id);
        $approved->isaproved = 'aproved';
        $approved->save();
        return redirect()->back();
    }
      public function disapprove_post($id)
    {
        $approved = House::find($id);
        $approved->isaproved = 'pending';
        $approved->save();
        return redirect()->back();
    }

}

