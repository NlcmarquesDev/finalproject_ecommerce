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
        $userId = Auth::id();
        $cart = Cart::firstOrNew(['user_id' => $userId]);

        $productId = $request->input('id');
        $productName = $request->input('name');
        $productImage = $request->input('image');
        $productPrice = $request->input('price');
        $productQuantity = $request->input('quantity');


        // dd($productQuantity);

        $cart->expires_at = now()->addDay();

        $products = $cart->products ?? [];

        // Verificar se o produto já existe no carrinho
        $existingProduct = null;

        foreach ($products as $key => $product) {
            if ($product['id'] == $productId) {
                $existingProduct = $key;
                break;
            }
        }

        if ($existingProduct !== null) {
            // O produto já existe no carrinho, então incrementar a quantidade
            $products[$existingProduct]['quantity'] += 1;
        } else {
            // Adicionar um novo produto ao carrinho
            $newProduct = [
                'id' => $productId,
                'name' => $productName,
                'image' => $productImage,
                'price' => $productPrice,
                'quantity' => $productQuantity
            ];

            $products[] = $newProduct;
        }

        $cart->products = $products;
        $cart->save();


        //REMOVE FROM WISHLIST PRODUCT
        $wish = Wishlist::where('user_id', $userId)->first();

        // Verifique se o objeto Cart existe e se a coluna 'products' contém JSON válido
        if ($wish && $wish->products) {
            // Crie um novo array para armazenar os produtos atualizados
            $updatedProducts = [];

            // Percorra os produtos do carrinho e adicione apenas os produtos que não correspondem ao ID fornecido
            foreach ($wish->products as $wishproduct) {
                if ($wishproduct['id'] != $productId) {
                    $updatedProducts[] = $wishproduct;
                }
            }

            // Atribua o novo array de produtos atualizados à propriedade "products" do objeto "Cart"
            $wish->products = $updatedProducts;
            $wish->save();
        }
        return redirect()->back()->with('success', 'Produto adicionado ao carrinho com sucesso!');
    }

    public function removeProduct(Request $request, $productId)

    {
        // Recupere o objeto Cart correspondente ao usuário atual
        $userId = Auth::id();
        $cart = Cart::where('user_id', $userId)->first();

        // Verifique se o objeto Cart existe e se a coluna 'products' contém JSON válido
        if ($cart && $cart->products) {
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
            $cart->save();
        }
        return redirect()->back()->with('success', 'Produto removido ao carrinho com sucesso!');
    }

    public function updateCart(Request $request)
    {
        $userId = Auth::id();
        $cart = Cart::where('user_id', $userId)->first();

        if ($cart && $cart->products) {
            $products = $cart->products; // Obtém os produtos como uma string JSON diretamente do modelo Cart

            $productsArray = []; // Inicializa um array vazio para os produtos

            // Decodifica cada produto individualmente e atualiza as quantidades
            foreach ($products as $product) {
                $productId = $product['id'];
                $quantity = $request->input('quantity_' . $productId);

                if ($quantity) {
                    $product['quantity'] = $quantity;
                }

                $productsArray[] = $product; // Adiciona o produto atualizado ao array
            }

            $cart->products = $productsArray; // Salva o array de produtos de volta no modelo Cart
            $cart->save();
        }
        return redirect()->back()->with('success', 'Produto updated ao carrinho com sucesso!');
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
