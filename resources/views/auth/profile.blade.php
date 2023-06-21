@extends('layouts.app')

@section('content')

    {{--  Mensagens de erro/alerta  --}}

    <div class="container gradient-custom-2 rounded-3">
        @if (Session::has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif



            <div class="row justify-content-center rounded">
                <div class="col-lg-4 text-white">
                    <h4>Informações do Perfil</code></h5>
                        <span class="text-justify mb-3" style="padding-top:-3px;">Atualize seu nome de perfil e endereço do e-mail.
                            <br><br> Quando você alterar seu e-mail, haverá a necessidade de verificá-lo senão sua conta poderá ser bloqueada.</span>
                </div>

                <div class="col-lg-8 text-left pt-0">
                    <div class="card py-4 mb-5 mt-md-3 bg-white rounded "
                        style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

                        {!! Form::model($user, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\Auth\ProfileController@update', $user->uid],
                        ]) !!}
                        {!! Form::open() !!}

                        <div class="form-group px-4">
                            {!! Form::label('displayName', 'Nome ', ['class' => 'col-12 text-left pl-0']) !!}
                            {!! Form::text('displayName', null, ['class' => ' col-md-8 form-control']) !!}

                            {!! Form::label('email', 'E-mail ', ['class' => 'pt-3 col-12 text-left pl-0']) !!}
                            {!! Form::email('email', null, ['class' => 'col-md-8 form-control']) !!}

                        </div>

                        {{--  Botão Info Perfil  --}}

                        <div class="form-group row mb-0 mt-3 mr-4 text-center">
                            <div class="">
                                {!! Form::submit('Save', ['class' => 'btn px-5 btn-success rounded-pill button-effect']) !!}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="border-bottom border-grey"></div>

            <div class="row justify-content-center pt-5">
                <div class="col-lg-4 text-white">
                    <h4>Atualize sua Senha</code></h5>
                        <span class="text-justify" style="padding-top:-3px;">Ensure your account is using a long, random
                            password to stay secure.</span>
                </div>

                <div class="col-lg-8 text-left pt-0">
                    <div class="card py-4 mb-5 mt-md-3 bg-white rounded "
                        style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

                        <div class="form-group px-4">
                            {!! Form::label('new_password', 'Nova Senha:', ['class' => 'col-12 text-left pl-0']) !!}
                            {!! Form::password('new_password', ['class' => 'col-md-8 form-control']) !!}

                            {!! Form::label('new_confirm_password', 'Confirme sua Senha:', ['class' => 'pt-3 col-12 text-left pl-0']) !!}
                            {!! Form::password('new_confirm_password', ['class' => 'col-md-8 form-control']) !!}
                        </div>

                        <div class="form-group row mb-0 mt-3 mr-4 text-center">
                            <div class="">
                                {!! Form::submit('Save', ['class' => 'btn px-5 btn-primary rounded-pill button-effect']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

            <div class="border-bottom border-grey"></div>

            <div class="row justify-content-center pt-5">
                <div class="col-lg-4 text-white">
                    <h4>Excluir Conta</code></h5>
                        <span class="text-justify" style="padding-top:-3px;">Exclua sua conta permanentemente.</span>
                </div>

                <div class="col-lg-8 pt-0">
                    <div class="card py-4 mb-5 mt-md-3 bg-white rounded"
                        style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
                        <div class="text-left px-3">
                            Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente.
                        </div>

                        {!! Form::open([
                            'method' => 'DELETE',
                            'action' => ['App\Http\Controllers\Auth\ProfileController@destroy', $user->uid],
                        ]) !!}
                        {!! Form::open() !!}

                        <div class="form-group row mb-0 mt-3 mr-4 text-center">
                            <div class="">
                                {!! Form::submit('Delete Account', ['class' => 'btn btn-danger pl-5 rounded-pill button-effect']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
