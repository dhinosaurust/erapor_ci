<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'tbl_pegawai';
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'opd', 
                                 'kategori', 
                                 'nama', 
                                 'nip_nik', 
                                 'unit_kerja', 
                                 'jabatan', 
                                 'jenis_kelamin', 
                                 'tgl_lahir', 
                                 'tk_pendidikan',
                                 'golongan',
                                 'jenisjabatan'
                                ];

    
    public function search($keyword)
    {
        // $builder = $this->table('tbl_pegawai');
        // $builder->like('nip_nik', $keyword);
        // return $builder;

        return $this->table('tbl_pegawai')->like('nip_nik', $keyword)->orLike('nama', $keyword);
    }

    public function categories($category)
    {

        return $this->table('tbl_pegawai')->where('kategori', $category);
    }
}
