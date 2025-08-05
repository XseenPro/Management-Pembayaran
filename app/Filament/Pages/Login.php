<?php

namespace App\Filament\Pages;

use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;

class Login extends BaseLogin
{
    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('email')
                        ->label('Email')
                        ->default('admin@example.com') // autofill di sini
                        ->required()
                        ->email(),
                    TextInput::make('password')
                        ->label('Password')
                        ->default('password123') // autofill password
                        ->password()
                        ->required(),
                ]),
        ];
    }
}
