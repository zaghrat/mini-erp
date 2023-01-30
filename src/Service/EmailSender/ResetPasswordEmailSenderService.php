<?php

namespace App\Service\EmailSender;

use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Address;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordToken;

class ResetPasswordEmailSenderService extends EmailSenderService
{
    public function sendEmail(User $user, ResetPasswordToken $resetToken)
    {

        $email = (new TemplatedEmail())
            ->from(new Address($this->parameterBag->get('ProGest-email'), $this->parameterBag->get('ProGest-name')))
            ->to($user->getEmail())
            ->subject($this->translator->trans('Your password reset request', domain: 'emails'))
            ->htmlTemplate('reset_password/email.html.twig')
            ->context([
                'resetToken' => $resetToken,
            ])
        ;

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            $this->logger->error(sprintf("[Email Sending] [Reset password] -- email sending failure! (%s)", $user->getEmail()), $e->getTrace());
        }
    }
}