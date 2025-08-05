<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\Login as BaseLogin;

class CustomLogin extends BaseLogin
{
    public function mount(): void
    {
        parent::mount();

        // Auto-fill untuk development
        if (app()->isLocal()) {
            $this->form->fill([
                'email' => 'admin@example.com',
                'password' => 'password',
                'remember' => true,
            ]);
        }
    }

    public function getHeading(): string
    {
        return 'Management Pembayaran';
    }
}
