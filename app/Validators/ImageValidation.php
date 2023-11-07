<?php
namespace App\Validators;

use CodeIgniter\Validation\Rules;

class ImageValidation extends Rules
{
    public function imageRequired(string $str, string $field, array $data): bool
    {
        if ($data['mode'] !== 'cash' && empty($str)) {
            return false;
        }
        return true;
    }
}