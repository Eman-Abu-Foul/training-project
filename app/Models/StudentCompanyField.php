<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class StudentCompanyField extends Model
{
    use HasFactory , HasRoles;
    protected $table = 'students_company_field';

    public function student()
    {
        return $this->belongsTo(StudentSupervisor::class, 'student_no', 'student_no');
    }

//    public function studentOne()
//    {
//        return $this->belongsToMany(Student::class, StudentSupervisor::class, 'student_no', 'student_no');
//    }
//    public function fields()
//    {
//        return $this->belongsTo(Field::class, 'field_id', 'id');
//    }
//
//    public function companies()
//    {
//        return $this->belongsTo(Company::class, 'company_id', 'id');
//    }

    public function companyField()
    {
        return $this->belongsTo(CompanyField::class, 'company_field_id', 'id');
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id', 'id');
    }
    public function getCompanyStatusAttribute()
    {
        return $this->status_company ? 'Active' : 'Non-Active';
    }
    public function getSupervisorStatusAttribute()
    {
        return $this->status_supervisor ? 'Active' : 'Non-Active';
    }
}