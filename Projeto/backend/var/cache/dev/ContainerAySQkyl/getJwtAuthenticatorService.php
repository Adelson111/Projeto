<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\JwtAuthenticator' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-guard/AuthenticatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
include_once $this->targetDirs[3].'/src/Security/JwtAuthenticator.php';

return $this->privates['App\\Security\\JwtAuthenticator'] = new \App\Security\JwtAuthenticator(($this->privates['App\\Repository\\UsuarioRepository'] ?? $this->load('getUsuarioRepositoryService.php')));
