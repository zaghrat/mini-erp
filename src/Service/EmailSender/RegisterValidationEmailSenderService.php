<?php

namespace App\Service\EmailSender;

use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Address;

class RegisterValidationEmailSenderService extends EmailSenderService
{
    public function sendEmail(User $user, string $validationUrl)
    {

        $email = (new TemplatedEmail())
            ->from(new Address($this->parameterBag->get('ProGest-email'), $this->parameterBag->get('ProGest-name')))
            ->to($user->getEmail())
            ->subject($this->translator->trans('Your Account has been created', domain: 'emails'))
            ->htmlTemplate('registration/email.html.twig')
            ->context([
                'validationUrl' => $validationUrl,
            ])
        ;

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            $this->logger->error(sprintf("[Email Sending] [Reset password] -- email sending failure! (%s)", $user->getEmail()), $e->getTrace());
        }
    }
}