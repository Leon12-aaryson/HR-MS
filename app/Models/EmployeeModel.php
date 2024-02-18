<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'employee_table';
    protected $primaryKey       = 'employee_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        
                                'first_name',	
                                'last_name',	
                                'date_of_birth'	,
                                'gender',	
                                'contact_number',	
                                'email',
                                'password',	
                                'address',
                                'department',
                                'branch',
                                'designation',	
                                'payement_type',	
                                'contract_type',	
                                'job_type',	
                                'permission',	
                                'position',	
                                'hire_date',	
                                'termination_date',	
                                'bank_name',	
                                'account_holder_name',	
                                'bank_branch',	
                                'account_number',	
                                'bank_identifier_code',	
                                'tax_payer_id'	
                        ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
