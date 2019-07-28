<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'saudacao', 'nome', 'cpf', 'telefone', 'celular', 'email', 'nascimento', 'foto'
    ];

    public function getFotoImageAttribute($value) {
        return $this->foto == null ? asset('images/null.png') : asset($this->foto);
    }
    public function getFotoFilenameAttribute($value) {
        return substr($this->foto, 30, strlen($this->foto));
    }

    public function getDataNascimentoAttribute($value) {
        return dateFormatDatabaseScreen($value, 'screen');
    }


    public function setDataNascimentoAttribute($value) {
        $this->attributes['nascimento'] = dateFormatDatabaseScreen($value);
    }

    public function setFotoAttribute($value) {
        $filename = substr(md5(rand(100000, 999999)),0,5) .'_'. $value->getClientOriginalName();
        $filepath = 'public/uploads/'.date('Y').'/'.date('m').'/';
        if ($value->isValid()) {
            $path = $value->storeAs($filepath, $filename);
        }
        $this->attributes['foto'] = str_replace('public', 'storage', $filepath) . $filename;
    }
}
