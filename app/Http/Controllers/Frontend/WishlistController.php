<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    public function addToWishlist(Request $request)
    {
        // Obtenha os detalhes do produto do request...
        $productId = $request->input('id');
        $productName = $request->input('name');
        $productImage = $request->input('image');
        $productPrice = $request->input('price');


        // Recupere o carrinho da sessão ou crie um novo objeto Wishlist se ainda não existir
        $wishlist = session()->get('wishlist') ?? new Wishlist();

        // Verifique se o $wishlist é um objeto Wishlist
        if (!$wishlist instanceof Wishlist) {
            $wishlist = new Wishlist();
        }

        // Adicione o produto ao carrinho usando o método addProduct()
        $wishlist->addToWishlist($productId, $productName, $productImage, $productPrice);

        // Armazene o objeto Wishlist atualizado na sessão
        session()->put('wishlist', $wishlist);

        return redirect()->back()->with('success', 'Produto adicionado a sua wishlist com sucesso!');
    }

    public function removeFromWishlist(Request $request, $productId)
    {
        // Recupere o objeto Cart da sessão
        $wishlist = session('wishlist');

        if ($wishlist instanceof Wishlist) {
            // Crie um novo array para armazenar os produtos atualizados
            $updatedProducts = [];

            // Percorra os produtos do carrinho e adicione apenas os produtos que não correspondem ao ID fornecido
            foreach ($wishlist->products as $product) {
                if ($product['id'] != $productId) {
                    $updatedProducts[] = $product;
                }
            }

            // Atribua o novo array de produtos atualizados à propriedade "products" do objeto "Cart"
            $wishlist->products = $updatedProducts;

            // Armazene o objeto Cart atualizado na sessão
            session(['wishlist' => $wishlist]);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho com sucesso!');
    }
}
