<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Task;
use App\Models\Visitor;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($category)
    {
        // Ambil satu produk per kategori
        $products = Product::where('category', $category)->get();

        // Jika tidak ada produk yang ditemukan dalam kategori yang dipilih
        if (empty($products)) {
            return view('order', [
                'category' => $category,
                'products' => [],
            ]);
        }

        return view('order', [
            'title' => 'Home',
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function order2()
    {
        return view('order2', [
            'title' => 'Home',
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Ambil produk berdasarkan ID

        $product->title = $request->title;
        $product->category = $request->category;
        $product->package = $request->package;
        $product->price = $request->price;

        if ($product->save()) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin.product.home'));
        } else {
            session()->flash('error', 'Some Problem Occure');
            return redirect(route('admin.product.update'));
        }
    }

    public function detailOrder($id)
    {
        $product = Product::findOrFail($id);

        return view('order2', [
            'title' => 'Home',
            'product' => $product,
        ]);
    }

    public function checkout(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'user_id' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'payment_method' => 'required|string|max:255',
            'product_id' => 'required|integer|exists:products,id',
            'username' => 'required|string|max:255',
        ]);

        // Verifikasi username dan user_id
        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return back()->withErrors(['username' => 'Invalid username']);
        }

        // Ambil data produk
        $product = Product::find($request->product_id);

        // Buat pesanan baru
        $order = new Order();
        $order->username = $request->username;
        $order->user_id = $request->user_id;
        $order->product_id = $product->id;
        $order->quantity = $request->quantity;
        $order->payment_method = $request->payment_method;
        $order->total_price = $product->price * $request->quantity;
        $order->status = 'pending'; // Status default pesanan
        $order->save();

        // Balek ke halaman konfirmasi atau halaman lain yang diinginkan
        return redirect()->route('orderConfirmation')->with('success', 'Order placed successfully!');
    }

    public function confirmation()
    {
        return view('OrderConfirmation', [
            'title' => 'Home',
        ]);
    }

    public function orderHistory()
    {
        $orders = Order::all();
        return view('orderHistory', compact(['orders']), [
            'title' => 'Orders',
        ]);
    }

    public function totalOrder()
    {
        $orders = Order::latest()->take(5)->get();
        $totalOrders = Order::count();
        $totalVisitors = Visitor::count();
        $totalSales = Order::sum('total_price');
        $tasks = Task::all(); // Misalnya, Anda juga menampilkan ToDoList di dashboard
        $recentOrders = Order::latest()->limit(5)->get();

        return view('admin.dashboard', compact('orders', 'totalOrders', 'totalVisitors', 'totalSales', 'tasks', 'recentOrders'), [
            'title' => 'Dashboard',
        ]);
    }
}
