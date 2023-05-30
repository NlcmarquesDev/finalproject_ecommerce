<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function addProduct(Request $request)
    {
        // Obtenha os detalhes do produto do request...
        $productId = $request->input('id');
        $productName = $request->input('name');
        $productImage = $request->input('image');
        $productPrice = $request->input('price');
        $productQuantity = $request->input('quantity');

        // Recupere o carrinho da sessão ou crie um novo objeto Cart se ainda não existir
        $cart = session()->get('cart') ?? new Cart();

        // Verifique se o $cart é um objeto Cart
        if (!$cart instanceof Cart) {
            $cart = new Cart();
        }

        // Adicione o produto ao carrinho usando o método addProduct()
        $cart->addProduct($productId, $productName, $productImage, $productPrice, $productQuantity);

        // Armazene o objeto Cart atualizado na sessão
        session()->put('cart', $cart);

        // ... (o restante do seu código)

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho com sucesso!');
    }

    public function removeProduct(Request $request, $productId)
    {
        // Recupere o objeto Cart da sessão
        $cart = session('cart');

        if ($cart instanceof Cart) {
            // Crie um novo array para armazenar os produtos atualizados
            $updatedProducts = [];

            // Percorra os produtos do carrinho e adicione apenas os produtos que não correspondem ao ID fornecido
            foreach ($cart->products as $product) {
                if ($product['id'] != $productId) {
                    $updatedProducts[] = $product;
                }
            }

            // Atribua o novo array de produtos atualizados à propriedade "products" do objeto "Cart"
            $cart->products = $updatedProducts;

            // Armazene o objeto Cart atualizado na sessão
            session(['cart' => $cart]);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho com sucesso!');
    }

    public function updateCart(Request $request)
    {
        $cart = session('cart');

        if ($cart instanceof Cart) {
            $products = $cart->products;

            foreach ($products as $index => $product) {
                $productId = $product['id'];
                $quantity = $request->input('quantity_' . $productId);

                if ($quantity) {
                    $products[$index]['quantity'] = $quantity;
                }
            }

            $cart->products = $products;
            session(['cart' => $cart]);
        }

        return redirect()->back()->with('success', 'Produto atualizado no carrinho com sucesso!');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //


        $products = Product::findOrFail($id);
        return view("ecommerce.single-product", compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    //
    public function destroy(Request $request, $id)
    {
    }
}