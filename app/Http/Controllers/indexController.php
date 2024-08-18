<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\User;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Exception;
use Laravel\Socialite\Facades\Socialite;


class indexController extends Controller
{
public function Topwatch()
{
    $now = Carbon::now('Asia/Karachi');
    $endTime = $now->copy()->setTime(16, 0, 0);

    if ($now->greaterThan($endTime)) {
        $endTime->addDay();
    }

    // Watches logic
    $rubberWatch = Watch::where('type', 'rubber')->first();
    $chainWatch = Watch::where('type', 'chain')->first();
    $smartWatch = Watch::where('type', 'smart')->first();
    $digitalWatch = Watch::where('type', 'digital')->first();
    $strapWatch = Watch::where('type', 'strap')->first();
    $latestWatch = Watch::latest()->first();

    return view('index', compact('rubberWatch', 'chainWatch', 'smartWatch', 'digitalWatch', 'strapWatch', 'endTime', 'latestWatch'));
}
public function cart(Request $request, $id)
{
    // Ensure the user is authenticated
    $authUser = Auth::user();
    if (!$authUser) {
        return redirect('login')->with('error', 'You need to login first.');
    }

    $watch = Watch::find($id);

    if (!$watch) {
        return redirect('shop')->with('error', 'Watch not found.');
    }

    // Create a new order
    $order = new Order();
    $order->Uname = $authUser->name;
    $order->contact = $authUser->contact;
    $order->shift = 'default_shift'; // Set default shift or logic to determine it
    $order->name = $watch->name;
    $order->type = $watch->type;
    $order->brand = $watch->brand;
    $order->orderId = $authUser->id;
    $order->quantity = $request->quantity;
    $order->total = $request->total;
    $order->image = $watch->image;
    $order->save();

    return redirect('shop');
}



    public function shop()
    {
        $rubberWatches = Watch::where('type', 'rubber')->get();
        $chainWatches = Watch::where('type', 'chain')->get();
        $smartWatches = Watch::where('type', 'smart')->get();
        $digitalWatches = Watch::where('type', 'digital')->get();
        $strapWatches = Watch::where('type', 'strap')->get();
        $latestWatches = Watch::latest()->get();

        return view('shop', compact('rubberWatches', 'chainWatches', 'smartWatches', 'digitalWatches', 'strapWatches', 'latestWatches'));
    }
    public function product($id)
    {
        $watch['watch'] = Watch::find($id);
        return view('product_details', $watch);
    }
    public function GoogleLogin()
    {
        return Socialite::driver('google')->with(['prompt' => 'select_account'])->redirect();
    }
    public function GoogleHandle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();
            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->contact = $user->phone ?? 'default_contact'; // Handle if contact is not available
                $findUser->image = $user->avatar;
                $findUser->password = bcrypt("123456");
                $findUser->save();
            }
    
            session()->put('user', $findUser);
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/GoogleLogin')->with('error', 'Unable to login using Google. Please try again.');
        }
    }
    
    
    public function userlogout($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            session()->forget('user');
        }

        return redirect('/');
    }



    public function card($id)
    {
        $orders = Order::where('orderId', $id)->get();
        $totalQuantity = $orders->sum('quantity');
        $totalPrice = $orders->sum('total');
        return view('cart', [
            'orders' => $orders,
            'totalPrice' => $totalPrice,
            'totalQuantity' => $totalQuantity
        ]);
    }
     
    

 
        public function cardDelete($id)
        {
            $order = Order::find($id);
            
            if ($order) {
                $order->delete();
            }
    
            return redirect()->back();
        }
    }
    

