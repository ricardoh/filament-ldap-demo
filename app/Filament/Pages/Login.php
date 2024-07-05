<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Component;
use Filament\Pages\Auth\Login as BaseLogin;

class Login extends BaseLogin
{
    /**
     * @return array<int | string, string | Form>
     */
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'mail' => $data['email'],
            'password' => $data['password'],
        ];
    }

    protected function getEmailFormComponent(): Component
    {
        return parent::getEmailFormComponent()->default('einstein@ldap.forumsys.com');
    }

    protected function getPasswordFormComponent(): Component
    {
        return parent::getPasswordFormComponent()->default('password');
    }
}
