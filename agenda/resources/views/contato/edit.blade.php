@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contato</div>
                <form action="{{ url('contatos/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf

                        <div class="form-group">
                            <label for="saudacao">Saudação</label>
                            <select id="saudacao" name="saudacao" class="form-control">
                                <option value="">Selecione...</option>
                                <option value="Sr."{{ old('saudacao', $data->saudacao) == 'Sr.' ? ' selected' : ''}}>Sr.</option>
                                <option value="Sra."{{ old('saudacao', $data->saudacao) == 'Sra.' ? ' selected' : ''}}>Sra.</option>
                                <option value="Srta."{{ old('saudacao', $data->saudacao) == 'Srta.' ? ' selected' : ''}}>Srta.</option>
                            </select>
                            <div class="invalid-feedback">{{ $errors->first('saudacao') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome', $data->nome) }}" id="nome" name="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" required class="form-control{{$errors->has('cpf') ? ' is-invalid':''}}" value="{{ old('cpf', $data->cpf) }}" id="cpf" name="cpf">
                            <div class="invalid-feedback">{{ $errors->first('cpf') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text"  class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ old('telefone', $data->telefone) }}" id="telefone" name="telefone">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" required class="form-control{{$errors->has('celular') ? ' is-invalid':''}}" value="{{ old('celular', $data->celular) }}" id="celular" name="celular">
                            <div class="invalid-feedback">{{ $errors->first('celular') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" required class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email', $data->email) }}" id="email" name="email" placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="nascimento">D. Nascimento</label>
                            <input type="text" class="form-control{{$errors->has('nascimento') ? ' is-invalid':''}}" id="nascimento" value="{{ old('nascimento', $data->nascimento) }}" name="nascimento" placeholder="00/00/0000">
                            <div class="invalid-feedback">{{ $errors->first('nascimento') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file{{$errors->has('foto') ? ' is-invalid':''}}" id="foto" name="foto" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('foto') }}</div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
