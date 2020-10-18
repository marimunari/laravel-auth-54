<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;

class MyResetPasswordNotification extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->line('Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha de sua conta.')
            ->action('Redefinir Senha', url(config('app.url') . route('password.reset', $this->token, false)))
            ->line('
            Se você não solicitou uma redefinição de senha, nenhuma ação adicional será necessária.');
    }
}
