<?php

namespace App\Service\EmailSender;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class EmailSenderService
{
    protected MailerInterface $mailer;
    protected LoggerInterface $logger;
    protected ParameterBagInterface $parameterBag;
    protected TranslatorInterface $translator;

    public function __construct(
        MailerInterface $mailer,
        LoggerInterface $logger,
        ParameterBagInterface $parameterBag,
        TranslatorInterface $translator
    ){
        $this->mailer = $mailer;
        $this->logger = $logger;
        $this->parameterBag = $parameterBag;
        $this->translator = $translator;
    }
}