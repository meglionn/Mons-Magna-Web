<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Specify custom table name
    protected $table = 'Users';
    
    // Custom primary key
    protected $primaryKey = 'UserID';

    // Column names matching your MySQL database
    protected $fillable = [
        'Username',
        'Password',
        'NamaLengkap',
        'Email',
        'Role',
    ];

    protected $hidden = [
        'Password',
    ];

    // Disable Laravel's default timestamps (created_at, updated_at)
    public $timestamps = false;

    // Custom timestamp column
    const CREATED_AT = 'TanggalDaftar';
    const UPDATED_AT = null;

    /**
     * Get the password for authentication
     */
    public function getAuthPassword()
    {
        return $this->Password;
    }

    /**
     * Get the column name for the "username"
     */
    public function getAuthIdentifierName()
    {
        return 'Username';
    }

    /**
     * Hash passwords automatically
     */
    protected function casts(): array
    {
        return [
            'TanggalDaftar' => 'datetime',
        ];
    }
}