@extends('layouts.app')

@section('content')
    @auth

        <h1 style="text-align: center" class="mt-5 mb-5">Olá, {{ Auth::user()->name }}!</h1>

        <div class="container">
            <div class="row mb-5">

                <div class="col-sm-8">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam massa enim, at pulvinar turpis congue sit amet. In ac eleifend quam, quis imperdiet justo. Pellentesque ut vehicula metus. Nunc convallis eget felis id egestas. Quisque in ante pharetra, pulvinar diam gravida, semper massa. Fusce commodo felis in tempus bibendum. Integer elementum vulputate elit, sit amet iaculis eros molestie id. Maecenas eget nisi a velit faucibus sollicitudin quis vitae magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacus nisi, lobortis quis turpis eleifend, pulvinar suscipit nulla. Ut dui est, bibendum quis mi ac, lobortis laoreet orci. Mauris luctus nibh non leo efficitur, rutrum faucibus enim faucibus. Proin ullamcorper dui elit, a rhoncus lectus consequat eu. Praesent et elementum est. Duis at egestas ante.
                    </p>
                </div>

                <img class="imagem col-sm-4" src="img/produtivo.jpg">
            </div>
            <div class="row">

                <div class="col-sm-8">
                    <p>Sed iaculis fringilla ipsum sed pellentesque. Sed non eros suscipit, dictum magna imperdiet, pharetra risus. Curabitur ipsum nisi, dignissim at ultricies eu, aliquet in ante. Fusce vel massa in erat bibendum vulputate. Ut eu libero id ex convallis ultricies at eget sapien. Sed molestie nisi ut odio euismod convallis. In hendrerit interdum nunc, ac ornare libero aliquam quis. Morbi facilisis blandit justo nec luctus. Mauris facilisis lorem eu porta laoreet. Morbi odio mauris, placerat vel massa et, sollicitudin porttitor ligula. Nullam convallis vulputate lectus tristique auctor. Maecenas malesuada dui id ligula ornare, a pulvinar leo blandit. Nullam tellus quam, aliquam quis sapien sit amet, facilisis semper sapien. Nunc congue pretium volutpat. Nulla pharetra, lacus nec imperdiet porttitor, urna purus tincidunt metus, vel bibendum sapien libero id sem.</p>
                </div>

                <img class="imagem col-sm-4" src="img/ppl.jpg">
            </div>
        </div>

    @endauth


    @guest

        <h1 style="text-align: center" class="mt-5 mb-5">Olá visitante, conheça nosso app!</h1>

        <div class="container">
            <div class="row mb-5">
                <img class="imagem col-sm-4" src="img/produtividade.jpg">

                <div class="col-sm-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam massa enim, at pulvinar turpis congue sit amet. In ac eleifend quam, quis imperdiet justo. Pellentesque ut vehicula metus. Nunc convallis eget felis id egestas. Quisque in ante pharetra, pulvinar diam gravida, semper massa. Fusce commodo felis in tempus bibendum. Integer elementum vulputate elit, sit amet iaculis eros molestie id. Maecenas eget nisi a velit faucibus sollicitudin quis vitae magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacus nisi, lobortis quis turpis eleifend, pulvinar suscipit nulla. Ut dui est, bibendum quis mi ac, lobortis laoreet orci. Mauris luctus nibh non leo efficitur, rutrum faucibus enim faucibus. Proin ullamcorper dui elit, a rhoncus lectus consequat eu. Praesent et elementum est. Duis at egestas ante.</p>
                </div>
            </div>
            <div class="row">
                <img class="imagem col-sm-4" src="img/ppl.jpg">

                <div class="col-sm-8">
                    <p>Sed iaculis fringilla ipsum sed pellentesque. Sed non eros suscipit, dictum magna imperdiet, pharetra risus. Curabitur ipsum nisi, dignissim at ultricies eu, aliquet in ante. Fusce vel massa in erat bibendum vulputate. Ut eu libero id ex convallis ultricies at eget sapien. Sed molestie nisi ut odio euismod convallis. In hendrerit interdum nunc, ac ornare libero aliquam quis. Morbi facilisis blandit justo nec luctus. Mauris facilisis lorem eu porta laoreet. Morbi odio mauris, placerat vel massa et, sollicitudin porttitor ligula. Nullam convallis vulputate lectus tristique auctor. Maecenas malesuada dui id ligula ornare, a pulvinar leo blandit. Nullam tellus quam, aliquam quis sapien sit amet, facilisis semper sapien. Nunc congue pretium volutpat. Nulla pharetra, lacus nec imperdiet porttitor, urna purus tincidunt metus, vel bibendum sapien libero id sem.</p>
                </div>
            </div>
        </div>

    @endguest
@endsection
