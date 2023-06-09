<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsController extends Controller
{
    //

    public function favicon()
    {
        return view('admin.settings-admin');
    }

    public function addFavicon(Request $request)
    {

        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon');

            // Defina o diretório de destino onde o arquivo será salvo
            $destinationPath = public_path();

            // Gere um nome único para o arquivo
            $fileName = 'favicon.' . $image->getClientOriginalExtension();

            // dd($image);
            // Mova o arquivo para o diretório de destino com o nome gerado
            $image->move($destinationPath, $fileName);

            // Salve o caminho do arquivo no banco de dados ou faça qualquer outra operação necessária

            // Exemplo de retorno de uma resposta de sucesso
            Alert::success('Favicon added successfully');
            return view('admin.settings-admin');
        }
    }
}
