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
        return $this->table('tbl_pegawai')->like('nip_nik', $keyword)->orLike('nama', $keyword);
    }

    public function categories($category)
    {

        return $this->table('tbl_pegawai')->where('kategori', $category);
    }
    
    public function countByAgeCategory($category, $gender, $minAge, $maxAge = null)
    {
        $this->where('jenis_kelamin', $gender)
             ->where('kategori', $category)
             ->where("TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) >= $minAge");
    
        if ($maxAge !== null) {
            $this->where("TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) <= $maxAge")
                 ->where('kategori', $category);
        }
    
        return $this->countAllResults();
    }
    

}
